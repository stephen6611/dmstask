<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use ConstGuards;
use ConstDefaults;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;


class PendudukController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($fieldType == 'email'){
          $request->validate([
            'login_id'=>'required|email|exists:penduduks,email',
            'password'=>'required|min:5|max:45'
          ],[
            'login_id.required'=>'Email atau Username belum terdaftar',
            'login_id.email'=>'email tidak valid',
            'login_id.exists'=>'Email belum terdaftar',
            'password.required'=>'Password harus diisi'
          ]);         
        }else{
            $request->validate([
                'login_id'=>'required|exists:penduduks,username',
                'password'=>'required|min:5|max:45'
            ],[
                'login_id.required'=>'Email atau Username belum terdaftar',
                'login_id.exists'=>'Username belum terdaftar',
                'password.required'=>'Password harus diisi'
            ]);
        }

        $creds = array(
            $fieldType=>$request->login_id,
            'password'=>$request->password
        );
        
        if( Auth::guard('penduduk')->attempt($creds) ){
            return redirect()->route('penduduk.home');
        }else{
            session()->flash('fail','Username dan password tidak sesuai');
            return redirect()->route('penduduk.login');
        }
    }

    public function logoutHandler(Request $request){
        Auth::guard('penduduk')->logout();
        session()->flash('fail','Anda telah Logout');
        return redirect()->route('penduduk.login');
    } 
    public function sendPasswordResetLink(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:penduduks,email',
        ], [
            'email.required' => 'Masukan :attribute ',
            'email.email' => 'Invalid email address',
            'email.exists' => ' :attribute belum terdaftar pada sistem'
        ]);

        //Ambil detail pendduduk
        $penduduk = Penduduk::where('email', $request->email)->first();

        // Generate token
        $token = base64_encode(Str::random(64));

        // cek jika sudah ada token reset password
        $oldToken = DB::table('password_reset_tokens')
            ->where([
                ['email', '=', $request->email],
                ['guard', '=', ConstGuards::PENDUDUK]
            ])
            ->first();
            if ($oldToken) {
                // Update token
                DB::table('password_reset_tokens')
                    ->where([
                        ['email', '=', $request->email],
                        ['guard', '=', ConstGuards::PENDUDUK]
                    ])
                    ->update([
                        'token' => $token,
                        'created_at' => Carbon::now()
                    ]);
            } else {
                DB::table('password_reset_tokens')->insert([
                    'email' => $request->email,
                    'guard' => ConstGuards::PENDUDUK,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
            }
            $actionLink = route('penduduk.reset-password', ['token' => $token, 'email' => $request->email]);
            $data = [
                'actionLink' => $actionLink,
                'penduduk' => $penduduk
            ];
            $mail_body = view('email-templates.penduduk-forgot-email-template', $data)->render();
            $mailConfig = [
                'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
                'mail_from_name' => env('EMAIL_FROM_NAME'),
                'mail_recipient_email' => $penduduk->email,
                'mail_recipient_name' => $penduduk->name,
                'mail_subject' => 'Reset password',
                'mail_body' => $mail_body,
            ];
            if (sendEmail($mailConfig)) {
                session()->flash('success', 'We have emailed your password reset link.');
                return redirect()->route('penduduk.forgot-password');
            } else {
                session()->flash('fail', 'Something went wrong!!!');
                return redirect()->route('penduduk.forgot-password');
            }
    }

    public function resetPassword(Request $request, $token = null){
        $check_token = DB::table('password_reset_tokens')
                        ->where(['token'=> $token, 'guard'=>ConstGuards::PENDUDUK    ])
                        ->first();
        if( $check_token){
            //cek token belum expired
            $diffMins = Carbon::createFromFormat('Y-m-d H:i:s', $check_token->created_at)->diffInDays
            (Carbon::now());
            if( $diffMins > ConstDefaults::tokenExpiredMinutes){
                //jika token expired
                session()->flash('fail','Token expired,minta link token reset password.');
                return redirect()->route('penduduk.forgot-password',['token'=> $token]);
            }else{
                return view('back.pages.penduduk.auth.reset-password')->with(['token'=>$token]);
            }
                
        }else{
            session()->flash('fail','Token tidak valid!, minta link token reset password');
            return redirect()->route('penduduk.forgot-password', ['token'=> $token]);
        }
    }
    public function resetPasswordHandler(Request $request){
        $request->validate([
            'new_password'=>'required|min:5|max:45|required_with:new_password_confirmation|
            same:new_password_confirmation',
            'new_password_confirmation'=>'required'
        ]);

        $token = DB::table('password_reset_tokens')
                    ->where(['token' => $request->token, 'guard' => ConstGuards::PENDUDUK])
                    ->first();

        // get detail penduduk
        $penduduk = Penduduk::where('email',$token->email)->first();

        //update password penduduk
        Penduduk::where(['email'=>$token->email])->update([
            'password'=>Hash::make($request->new_password)
        ]);

        //delete rekaman token
        DB::table('password_reset_tokens')->where([
            'email'=>$penduduk->email,
            'token'=>$penduduk->token,
            'guard'=>ConstGuards::PENDUDUK
        ])->delete();

        //send email  notofikasi ke penduduk
        $data = array(
            'penduduk'=>$penduduk,
            'new_password'=>$request->new_password
        );

        $mail_body = view('email-templates.penduduk-reset-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_recipient_email' => $penduduk->email,
            'mail_recipient_name' => $penduduk->name,
            'mail_subject' => 'Password changed',
            'mail_body' => $mail_body,
        );
        sendEmail($mailConfig);
        return redirect()->route('penduduk.login')->with('success','Selamat!, password anda berhasil diperbarui.
        gunakan password baru anda untuk login.');
    }
    public function profileView(Request $request){
        $penduduk = null;
        if( Auth::guard('penduduk')->check() ){
            $penduduk = Penduduk::findOrFail(auth()->id());
        }
        return view('back.pages.penduduk.profile', compact('penduduk'));
    }
    public function changeProfilePicture(Request $request){
        $penduduk = Penduduk::findOrFail(auth('penduduk')->id());
        $path ='/images/users/penduduks/';
        $file = $request->file('pendudukProfilePictureFile');
        $old_picture = $penduduk->getAttributes()['picture'];
        $file_path = $path.$old_picture;
        $filename = 'PENDUDUK_IMG_'.rand(2,1000).$penduduk->id.time().uniqid().'.jpg';
        
        $upload = $file->move(public_path($path),$filename);

        if( $upload ){
            if( $old_picture != null && File::exists(public_path($path.$old_picture))){
                File::delete(public_path($path.$old_picture));
            }
            $penduduk->update(['picture'=>$filename]);
            return response()->json(['status'=>1,'msg'=> 'Foto profil anda telah diperbarui']);
        }else{
            return response()->json(['status'=> 0,'msg'=> 'Kesalahan terjadi']);
        }
    }

    public function deleteProfilePicture(Request $request)
    {
        $penduduk = Penduduk::findOrFail(auth('penduduk')->id());
        $path = '/images/users/penduduks/';
        $old_picture = $penduduk->getAttributes()['picture'];
        $file_path = $path . $old_picture;

        // Check if the old profile picture exists
        if ($old_picture != null && File::exists(public_path($file_path))) {
            // Delete the old profile picture
            File::delete(public_path($file_path));

            // Update the user's profile picture field to null
            $penduduk->update(['picture' => null]);

            return redirect('/penduduk/profile')->with(['status' =>1, 'msg' => 'Foto profil anda telah dihapus']);
        } else {
            return redirect('/penduduk/profile')->with(['status' =>0, 'msg' => 'Foto profil tidak ditemukan']);
        }
    }
}
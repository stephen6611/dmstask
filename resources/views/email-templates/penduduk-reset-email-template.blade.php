<p>Dear {{$penduduk->name}}</p>
<br>
<p>
    Your password for DMS-TASK account associated with {{$penduduk->email}} was changed successfully.
    Here is your new login credentials:
    <br>
    <b>Login ID:</b>{{$penduduk->name}} or {{$penduduk->email}} This link will valid within 15 minutes
    <br>
    <b>Password:</b>{{$new_password}}
    
</p>
<br>

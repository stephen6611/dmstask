
<!DOCTYPE html>
<html class="d-flex flex-column min-vh-100">
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />


		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
			<link rel="stylesheet" href="/extra-assets/ijabo/ijabo.min.css">
			<link rel="stylesheet" href="/extra-assets/ijaboCropTool/ijaboCropTool.min.css">
		
		@livewireStyles
		@stack('stylesheets')
	</head>
	<body class="flex-grow-1">
		

		<div class="header">
				<div class="header-left col-md-12 col-sm-12">
					<div class="menu-icon fa fa-angle-left" style="margin-left: -32px;"></div>
					<nav aria-label="breadcrumb" role="navigation" class="mt-3">
						<ol class="breadcrumb">
							<li class="">
								<img class="mt-2" src="/images/users/Home Icon.svg" style="margin-right: 4px; margin-bottom: 9px;" alt=""><a href=""></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page" style="margin-top: 8px;">
								/ Inquiry Calon Debitur
							</li>
						</ol>
					</nav>
					
				</div>
			<div class="header-right">
								
			
				{{-- @livewire('penduduk-header-profile-info') --}}

				<!-- <div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="/back/vendors/images/github.svg" alt=""
					/></a>
				</div> -->
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="{{ route('penduduk.home') }}">
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="/back/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu" style="margin-left: -20px">
					
					@if ( Route::is('penduduk.*') )
						<!-- <li>
							<a href="{{ route('penduduk.home') }}" class="dropdown-toggle no-arrow">
								<span class="micon fa fa-home"></span
								><span class="mtext">Home</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li> -->
						<li style="margin-left: 15px">
							<div class="sidebar-small-cap">Main Menu</div>
						</li>
						
						<li>
							<a
								href="{{ route('penduduk.home') }}"
								
								class="dropdown-toggle no-arrow"
							>
								<span class="micon" style="margin-left: 8px">
									<img src="/images/users/icon-side.svg" alt="side">
								</span>
								<span class="mtext"
									>Inquiry Calon Debitur
								</span>
							</a>
						</li>
						<li>
							<a
								href="{{route('penduduk.dataentry')}}"
								
								class="dropdown-toggle no-arrow"
							>
								<span class="micon" style="margin-left: 8px">
									<img src="/images/users/icon-side.svg" alt="side">
								</span>
								<span class="mtext"
									>Data Entry
								</span>
							</a>
						</li>
						<li>
							<a
								href="#"
								
								class="dropdown-toggle no-arrow"
							>
								<span class="micon" style="margin-left: 8px">
									<img src="/images/users/icon-side.svg" alt="side">
								</span>
								<span class="mtext"
									>Akad
								</span>
							</a>
						</li>
						
						<li>
							<a
								href="#"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon" style="margin-left: 8px">
									<img src="/images/users/icon-side.svg" alt="side">
								</span>
								<span class="mtext"
									>Inbox Pencairan
								</span>
							</a>
						</li>
						<li>
							<a
								href="#"
								
								class="dropdown-toggle no-arrow"
							>
								<span class="micon" style="margin-left: 8px">
									<img src="/images/users/icon-side.svg" alt="side">
								</span>
								<span class="mtext"
									>Inquiry Status Aplikasi
								</span>
							</a>
						</li>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<li class="mt-8">
							<div class="dropdown-divider"></div>
						</li>
						
						<li class="text-center">
							<a href="" class="text-center">
								<small>Powered by DMS</small>
							</a>
							<h5>Digiloan System</h5>
							<p class="text-danger mb-3">Version 1.1</p>
						</li>

						

						@else
						<li>
							<a href="{{ route('penduduk.home') }}" class="dropdown-toggle no-arrow">
								<span class="micon fa fa-home"></span
								><span class="mtext">Home</span>
							</a>
						</li>
						
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Setting</div>
						</li>
						
						<li>
							<a
								href="{{ route('penduduk.profile') }}"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon fa fa-user"></span>
								<span class="mtext"
									>Profile
								</span>
							</a>
						</li>
						@endif	


						
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					
					<div >
						@yield('content')
					</div>
				</div>
				<div class="footer footer-wrap pd-20 mb-20 card-box fixed-bottom container-fluid">
				Copyright - © 2024,
					<a href="#" target=""
						>PT. Digital Mitra Sarana</a>
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script src="/extra-assets/ijabo/ijabo.min.js"></script>
		<script src="/extra-assets/ijabo/jquery.ijaboViewer.min.js"></script>
		<script src="/extra-assets/ijaboCropTool/ijaboCropTool.min.js"></script>
			<script>
				window.addEventListener('showToastr',function(event){
				toastr.remove();
				if(event.detail.type==='info'){toastr.info(event.detail.message);}
				else if(event.detail.type==='success'){toastr.success(event.detail.message);}
				else if(event.detail.type==='error'){toastr.error(event.detail.message);}
				else if(event.detail.type==='warning'){toastr.warning(event.detail.message);}
				else {return false;}
			});
			</script>
		@livewireScripts
		@stack('scripts')
	</body>
	
</html>

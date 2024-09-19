
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Asuhan Keperawatan - Rumah Sakit Umum Manokwari</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="/askepweb/html/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/askepweb/html/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="/askepweb/html/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="/askepweb/html/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/askepweb/html/css/responsive.css">

      @stack('style')
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
            <div class="loader">
               <div class="cube">
                  <div class="sides">
                     <div class="top"></div>
                     <div class="right"></div>
                     <div class="bottom"></div>
                     <div class="left"></div>
                     <div class="front"></div>
                     <div class="back"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="/">
               <img src="/askepweb/cdn/logokab.png" class="img-fluid" alt="">
               <!-- <img src="/askepweb/html/images/logo.png" class="img-fluid" alt=""> -->
               <span>Askep</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <!-- <li class="active">
                        <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="#">Dashboard 1</a></li>
                           <li><a href="dashboard1.html">Dashboard 2</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="app/#">Inbox</a></li>
                           <li><a href="app/email-compose.html">Email Compose</a></li>
                        </ul>
                     </li> -->
                     <li><a href="/dasbor" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Dasbor</span></a></li>
                     <li>
                        <a href="#manajemenUser" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="manajemenUser" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="/admin/pengguna">Data User</a></li>
                           <li><a href="/admin/pengguna/tambah-pengguna">Tambah Pengguna</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#masterData" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Master Data</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="masterData" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="/">Diagnosis</a></li>
                           <li><a href="/">Luaran</a></li>
                           <li><a href="/">Intervensi</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#entriSAK" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>ASKEP</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="entriSAK" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="/">Entri SAK</a></li>
                           <li><a href="/">Data SAK</a></li>
                        </ul>
                     </li>
                     <!-- <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                     <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Components</span></li>                    
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html">colors</a></li>
                           <li><a href="ui-typography.html">Typography</a></li>
                           <li><a href="ui-alerts.html">Alerts</a></li>
                           <li><a href="ui-badges.html">Badges</a></li>
                           <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                           <li><a href="ui-buttons.html">Buttons</a></li>
                           <li><a href="ui-cards.html">Cards</a></li>
                           <li><a href="ui-carousel.html">Carousel</a></li>
                           <li><a href="ui-embed-video.html">Video</a></li>
                           <li><a href="ui-grid.html">Grid</a></li>
                           <li><a href="ui-images.html">Images</a></li>
                           <li><a href="ui-list-group.html">list Group</a></li>
                           <li><a href="ui-media-object.html">Media</a></li>
                           <li><a href="ui-modal.html">Modal</a></li>
                           <li><a href="ui-notifications.html">Notifications</a></li>
                           <li><a href="ui-pagination.html">Pagination</a></li>
                           <li><a href="ui-popovers.html">Popovers</a></li>
                           <li><a href="ui-progressbars.html">Progressbars</a></li>
                           <li><a href="ui-tabs.html">Tabs</a></li>
                           <li><a href="ui-tooltips.html">Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html">Form Elements</a></li>
                           <li><a href="form-validation.html">Form Validation</a></li>
                           <li><a href="form-switch.html">Form Switch</a></li>
                           <li><a href="form-chechbox.html">Form Checkbox</a></li>
                           <li><a href="form-radio.html">Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html">Basic Tables</a></li>
                           <li><a href="data-table.html">Data Table</a></li>
                           <li><a href="table-editable.html">Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html">Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html">Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html">line Awesome</a></li>
                           <li><a href="icon-remixicon.html">Remixicon</a></li>
                           <li><a href="icon-unicons.html">unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html">Login</a></li>
                           <li><a href="sign-up.html">Register</a></li>
                           <li><a href="pages-recoverpw.html">Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                            
                        </ul>
                     </li> -->
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="#" class="logo">
                     <img src="/askepweb/html/images/logo.png" class="img-fluid" alt="">
                     <span>Sofbox</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">{!! ucwords($modul) !!}</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{!! ucwords($menu) !!}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{!! ucwords($submenu) !!}</li>
                     </ul>
                  </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Type here to search..." />
                           </form>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-line"></i>
                              <span class="badge badge-pill badge-primary badge-up count-mail">3</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-notification-2-line"></i>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-danger p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Order Recieved</h6>
                                             <small class="float-right font-size-12">23 hrs ago</small>
                                             <p class="mb-0">Lorem is simply</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="/askepweb/html/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40" src="/askepweb/html/images/small/jpg.svg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Updates Available</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">120 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul> -->
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="/askepweb/html/images/user/1.jpg" class="img-fluid rounded" alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Halo {!! \App\Http\Middleware\CheckAktifPengguna::GetInfoPengguna()->nama !!}</h5>
                                    <span class="text-white font-size-12">Aktif</span>
                                 </div>
                                 <!-- <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-success-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-success">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a> -->
                                 <a href="/account-setting" class="iq-sub-card iq-bg-primary-danger-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-danger">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Pengaturan Akun</h6>
                                          <p class="mb-0 font-size-12">kelola akun anda</p>
                                       </div>
                                    </div>
                                 </a>
                                 <!-- <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-secondary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a> -->
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-danger iq-sign-btn" href="/logout" role="button">Keluar<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            @if(session()->has('message'))
            <div class="alert bg-white alert-success" role="alert">
               <div class="iq-alert-icon">
                  <i class="ri-alert-line"></i>
               </div>
               <div class="iq-alert-text">{!! session()->get('message') !!}</div>
            </div>
            @endif
            
            @yield("content","no content here")
            <!-- <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                           <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-exchange-dollar-fill"></i></div>
                           <span class="float-right line-height-6">Net Worth</span>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">65</span><span>M</span></h2>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">10%</span> Increased</p>
                           </div>
                        </div>
                        <div id="chart-1"></div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                           <div class="rounded-circle iq-card-icon iq-bg-warning"><i class="ri-bar-chart-grouped-line"></i></div>
                           <span class="float-right line-height-6">Todays Gains</span>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span>$</span><span class="counter">4500</span></h2>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">20%</span> Increased</p>
                           </div>
                        </div>
                        <div id="chart-2"></div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                           <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-group-line"></i></div>
                           <span class="float-right line-height-6">Total Users</span>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">96.6</span><span>K</span></h2>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">30%</span> Increased</p>
                           </div>
                        </div>
                        <div id="chart-3"></div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body pb-0">
                           <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-shopping-cart-line"></i></div>
                           <span class="float-right line-height-6">Orders Received</span>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">15.5</span><span>K</span></h2>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-down-line text-danger mr-1"></i><span class="text-danger">10%</span> Increased</p>
                           </div>
                        </div>
                        <div id="chart-4"></div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Monthly sales trend </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <ul class="nav nav-pills">
                                 <li class="nav-item">
                                    <a href="#" class="nav-link active">Latest</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Month</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">All Time</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="d-flex justify-content-around">
                              <div class="price-week-box mr-5">
                                 <span>Current Week</span>
                                 <h2>$<span class="counter">180</span> <i class="ri-funds-line text-success font-size-18"></i></h2>
                              </div>
                              <div class="price-week-box">
                                 <span>Previous Week</span>
                                 <h2>$<span class="counter">52.55</span><i class="ri-funds-line text-danger font-size-18"></i></h2>
                              </div>
                           </div>
                        </div>
                        <div id="chart-5"></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height animation-card">
                        <div class="iq-card-body p-0">
                           <div class="an-text">
                              <span>Quarterly Target </span>
                              <h2 class="display-4 font-weight-bold">$<span>2M</span></h2>
                           </div>
                           <div class="an-img">
                              <div class="bodymovin" data-bm-path="/askepweb/html/images/small/data.json" data-bm-renderer="svg" data-bm-loop="true"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Top Grossing</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-8">
                                 <div class="media-sellers">
                                    <div class="media-sellers-img">
                                       <img src="/askepweb/html/images/page-img/01.jpg" class="mr-3 rounded" alt="">
                                    </div>
                                    <div class="media-sellers-media-info">
                                       <h5 class="mb-0"><a class="text-dark" href="#">Android Tablet</a></h5>
                                       <p class="mb-1">Android 10 supported tablet with best features.</p>
                                       <div class="sellers-dt">
                                          <span class="font-size-12">Vendor: <a href="#"> iqonicdesign</a></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <h5 class="mb-0">20,019</h5>
                                 <span>Sales</span>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <ul class="list-inline mb-0 list-star">
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                 </ul>
                                 <span>Rating</span>
                              </div>
                           </div>
                           <div class="row mt-4">
                              <div class="col-sm-8">
                                 <div class="media-sellers">
                                    <div class="media-sellers-img">
                                       <img src="/askepweb/html/images/page-img/02.jpg" class="mr-3 rounded" alt="">
                                    </div>
                                    <div class="media-sellers-media-info">
                                       <h5 class="mb-0"><a class="text-dark" href="#">Apple Watch</a></h5>
                                       <p class="mb-1">Latest model of apple watch for productivity.</p>
                                       <div class="sellers-dt">
                                          <span class="font-size-12">Vendor: <a href="#">Apple</a></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <h5 class="mb-0">56,112</h5>
                                 <span>Sales</span>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <ul class="list-inline mb-0 list-star">
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                 </ul>
                                 <span>Rating</span>
                              </div>
                           </div>
                           <div class="row mt-4">
                              <div class="col-sm-8">
                                 <div class="media-sellers">
                                    <div class="media-sellers-img">
                                       <img src="/askepweb/html/images/page-img/03.jpg" class="mr-3 rounded" alt="">
                                    </div>
                                    <div class="media-sellers-media-info">
                                       <h5 class="mb-0"><a class="text-dark" href="#">I-Phone & I-Mac</a></h5>
                                       <p class="mb-1">Best ever combo package for work and personal use.</p>
                                       <div class="sellers-dt">
                                          <span class="font-size-12">Vendor: <a href="#"> Iqonic devices</a></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <h5 class="mb-0">9,895</h5>
                                 <span>Sales</span>
                              </div>
                              <div class="col-sm-2 text-center mt-3">
                                 <ul class="list-inline mb-0 list-star">
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                    <li class="list-inline-item text-warning"><i class="ri-star-fill"></i></li>
                                 </ul>
                                 <span>Rating</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Support Tickets</h4>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton2" data-toggle="dropdown">View all</span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                          <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                          <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                          <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <div class="media-support">
                                    <div class="media-support-header mb-2">
                                       <div class="media-support-user-img mr-3">
                                          <img class="rounded-circle" src="/askepweb/html/images/user/1.jpg" alt="">
                                       </div>
                                       <div class="media-support-info mt-2">
                                          <h6 class="mb-0"><a href="#" class="">Nik Jordan</a></h6>
                                          <small>2 day ago</small>
                                       </div>
                                       <div class="mt-3">
                                          <span class="badge badge-success">Pending</span>
                                       </div>
                                    </div>
                                    <div class="media-support-body">
                                       <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                 </div>
                                 <hr class="mt-4 mb-4">
                                 <div class="media-support">
                                    <div class="media-support-header mb-2">
                                       <div class="media-support-user-img mr-3">
                                          <img class="rounded-circle" src="/askepweb/html/images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-support-info mt-2">
                                          <h6 class="mb-0"><a href="#" class="">Lily Wozniak</a></h6>
                                          <small>2 day ago</small>
                                       </div>
                                       <div class="mt-3">
                                          <span class="badge badge-warning text-white">Working</span>
                                       </div>
                                    </div>
                                    <div class="media-support-body">
                                       <p class="mb-0">It is a long established fact that a reader will be distracted by the readable layout.</p>
                                    </div>
                                 </div>
                                 <hr class="mt-4 mb-4">
                                 <div class="media-support">
                                    <div class="media-support-header mb-2">
                                       <div class="media-support-user-img mr-3">
                                          <img class="rounded-circle" src="/askepweb/html/images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-support-info mt-2">
                                          <h6 class="mb-0"><a href="#" class="">Samuel Path</a></h6>
                                          <small>2 day ago</small>
                                       </div>
                                       <div class="mt-3">
                                          <span class="badge badge-primary">Open</span>
                                       </div>
                                    </div>
                                    <div class="media-support-body">
                                       <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                 </div>
                                 <hr class="mt-4 mb-4">
                                 <div class="media-support">
                                    <div class="media-support-header mb-2">
                                       <div class="media-support-user-img mr-3">
                                          <img class="rounded-circle" src="/askepweb/html/images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-support-info mt-2">
                                          <h6 class="mb-0"><a href="#" class="">Mia Mai</a></h6>
                                          <small>2 day ago</small>
                                       </div>
                                       <div class="mt-3">
                                          <span class="badge badge-danger">Closed</span>
                                       </div>
                                    </div>
                                    <div class="media-support-body">
                                       <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Cash flow</h4>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton3" data-toggle="dropdown">
                                       <i class="ri-more-2-fill"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                          <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                          <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                          <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="bar-chart-6"></div>
                           </div>
                           <div class="iq-card">
                              <div class="iq-card-body p-0">
                                 <div class="row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                       <div class="p-4">
                                          <div class=" d-flex align-items-center">
                                             <a href="#" class="iq-icon-box rounded-circle iq-bg-primary">
                                             <i class="ri-facebook-fill"></i>
                                             </a>
                                             <h4 class="mb-0"><span class="counter">200</span>k<small class="d-block font-size-14">Posts</small></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div id="wave-chart-7"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card">
                              <div class="iq-card-body p-0">
                                 <div class="row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                       <div class="p-4">
                                          <div class=" d-flex align-items-center">
                                             <a href="#" class="iq-icon-box rounded-circle iq-bg-success">
                                             <i class="ri-twitter-fill"></i>
                                             </a>
                                             <h4 class="mb-0"><span class="counter">400</span>k<small class="d-block font-size-14">Tweets</small></h4>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div id="wave-chart-8"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Activity timeline</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                                 View All
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="iq-timeline">
                              <li>
                                 <div class="timeline-dots"></div>
                                 <h6 class="float-left mb-1">Client Login</h6>
                                 <small class="float-right mt-1">24 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-success"></div>
                                 <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                 <small class="float-right mt-1">23 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-danger"></div>
                                 <h6 class="float-left mb-1">Dev Meetup</h6>
                                 <small class="float-right mt-1">20 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi bears jelly lollipop apple</p>
                                    <div class="iq-media-group">
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/05.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/06.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/07.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/08.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/09.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="/askepweb/html/images/user/10.jpg" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-primary"></div>
                                 <h6 class="float-left mb-1">Client Call</h6>
                                 <small class="float-right mt-1">19 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-warning"></div>
                                 <h6 class="float-left mb-1">Mega event</h6>
                                 <small class="float-right mt-1">15 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <img src="/askepweb/html/images/small/img-1.jpg" class="img-fluid w-100 rounded" alt="#">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">How to setup E-store</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                 <i class="ri-settings-5-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <span class="font-size-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                           <small class="text-muted mt-3 d-inline-block w-100">Saturday, 7 December 2019</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Order Summary</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Package No.</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Delivery</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Location</th>
                                       <th scope="col">Progress</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#0879985</td>
                                       <td>26/12/2019</td>
                                       <td>30/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-success">Moving</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-success" data-percent="90"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879984</td>
                                       <td>23/12/2019</td>
                                       <td>27/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-warning text-white">Pending</div>
                                       </td>
                                       <td>Athens 2745 Greece</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-warning" data-percent="70"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879983</td>
                                       <td>18/12/2019</td>
                                       <td>21/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-danger">Canceled</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-danger" data-percent="48"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879982</td>
                                       <td>14/12/2019</td>
                                       <td>20/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-info">Working</div>
                                       </td>
                                       <td>Delhi 0014 India</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-info" data-percent="90"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879981</td>
                                       <td>10/12/2019</td>
                                       <td>18/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-success">Moving</div>
                                       </td>
                                       <td>Alabama 2741 USA</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-success" data-percent="45"></span>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="/askepweb/html/js/jquery.min.js"></script>
      <script src="/askepweb/html/js/popper.min.js"></script>
      <script src="/askepweb/html/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="/askepweb/html/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="/askepweb/html/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="/askepweb/html/js/waypoints.min.js"></script>
      <script src="/askepweb/html/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="/askepweb/html/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="/askepweb/html/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="/askepweb/html/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="/askepweb/html/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="/askepweb/html/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="/askepweb/html/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="/askepweb/html/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="/askepweb/html/js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="/askepweb/html/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="/askepweb/html/js/custom.js"></script>

      @stack('script')
   </body>
</html>

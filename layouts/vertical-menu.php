<header id="page-topbar">
   <div class="navbar-header">
      <div class="d-flex">
         <!-- LOGO -->
         <div class="navbar-brand-box">
            <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
            <img src="assets/images/logo.svg" alt="" height="22">
            </span>
            <span class="logo-lg">
            <img src="assets/images/logo-sm.png" alt="" height="44">
            </span>
            </a>
            <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="" height="44">
            </span>
            <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="44">
            </span>
            </a>
         </div>
         <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
         <i class="fa fa-fw fa-bars"></i>
         </button>
         <!-- page title-->
         <div class="head_title align-items-center">
            <div class="d-none d-sm-flex gap-2 align-items-center">
               <div class="d-none d-lg-block">
                  <h4 class="mb-sm-0 page-title font-size-18">Dashboard</h4>
               </div>
               <div>
                  <button type="button" class="btn btn-outline-primary right-bar-toggle waves-effect" data-bs-toggle="offcanvas" href="#newtaskcanvas" role="button" aria-controls="newtaskcanvas"><i class="bx bx-plus"></i> New Task</button>
               </div>
               <div>
                  <button type="button" class="btn btn-outline-primary"><i class="bx bx-plus"></i> New Project</button>
               </div>
            </div>
         </div>
         <!-- App Search-->
      </div>
      <div class="d-flex">
         <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
            <i class="bx bx-fullscreen"></i>
            </button>
            </div> -->  
         <form class="app-search d-none d-lg-block">
            <div class="position-relative">
               <input type="text" class="form-control" placeholder="<?php echo $language["Search"]; ?>">
               <span class="bx bx-search-alt"></span>
            </div>
         </form>
         <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
               <!-- <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> -->
            </button>
            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
               alt="Header Avatar">
            <div class="dropdown-menu dropdown-menu-end">
               <!-- item-->
               <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo $language["Profile"]; ?></span></a>
               <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet"><?php echo $language["My_Wallet"]; ?></span></a>
               <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings"><?php echo $language["Settings"]; ?></span></a>
               <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen"><?php echo $language["Lock_screen"]; ?></span></a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo $language["Logout"]; ?></span></a>
            </div>
         </div>
         <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-bell bx-tada"></i>
            <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
               aria-labelledby="page-header-notifications-dropdown">
               <div class="p-3">
                  <div class="row align-items-center">
                     <div class="col">
                        <h6 class="m-0" key="t-notifications"> <?php echo $language["Notifications"]; ?> </h6>
                     </div>
                     <div class="col-auto">
                        <a href="#!" class="small" key="t-view-all"> <?php echo $language["View_All"]; ?></a>
                     </div>
                  </div>
               </div>
               <div data-simplebar style="max-height: 230px;">
                  <a href="" class="text-reset notification-item">
                     <div class="media">
                        <div class="avatar-xs me-3">
                           <span class="avatar-title bg-primary rounded-circle font-size-16">
                           <i class="bx bx-cart"></i>
                           </span>
                        </div>
                        <div class="media-body">
                           <h6 class="mt-0 mb-1" key="t-your-order"><?php echo $language["Your_order_is_placed"]; ?></h6>
                           <div class="font-size-12 text-muted">
                              <p class="mb-1" key="t-grammer"><?php echo $language["languages_grammar"]; ?></p>
                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo $language["3_min_ago"]; ?></span></p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                     <div class="media">
                        <img src="assets/images/users/avatar-3.jpg"
                           class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="media-body">
                           <h6 class="mt-0 mb-1">James Lemire</h6>
                           <div class="font-size-12 text-muted">
                              <p class="mb-1" key="t-simplified"><?php echo $language["simplified_English"]; ?></p>
                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo $language["1_hours_ago"]; ?></span></p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                     <div class="media">
                        <div class="avatar-xs me-3">
                           <span class="avatar-title bg-success rounded-circle font-size-16">
                           <i class="bx bx-badge-check"></i>
                           </span>
                        </div>
                        <div class="media-body">
                           <h6 class="mt-0 mb-1" key="t-shipped"><?php echo $language["Your_item_is_shipped"]; ?></h6>
                           <div class="font-size-12 text-muted">
                              <p class="mb-1" key="t-grammer"><?php echo $language["several_grammar"]; ?></p>
                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo $language["3_min_ago"]; ?></span></p>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                     <div class="media">
                        <img src="assets/images/users/avatar-4.jpg"
                           class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="media-body">
                           <h6 class="mt-0 mb-1">Salena Layfield</h6>
                           <div class="font-size-12 text-muted">
                              <p class="mb-1" key="t-occidental"><?php echo $language["Cambridge_occidental"]; ?></p>
                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago"><?php echo $language["1_hours_ago"]; ?></span></p>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="p-2 border-top d-grid">
                  <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                  <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more"><?php echo $language["View_More"]; ?></span> 
                  </a>
               </div>
            </div>
         </div>
         <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
            <i class="bx bx-cog bx-spin"></i>
            </button>
         </div>
       
      </div>
   </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
   <div data-simplebar class="h-100">
      <!--- Sidemenu -->
      <div id="sidebar-menu">
         <!-- Left Menu Start -->
         <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>
            <li>
               <a href="dashboard.php" class="waves-effect">
               <i class="bx bx-home-circle"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li>
               <a href="tasks.html" class="waves-effect">
               <i class="bx bx-task"></i>
               <span>Tasks</span>
               </a>
            </li>
            <li>
               <a href="projects.html" class="waves-effect">
               <i class="bx bx-briefcase-alt-2"></i>
               <span>Projects</span>
               </a>
            </li>
            <li>
               <a href="invoice.html" class="waves-effect">
               <i class="bx bx-receipt"></i>
               <span>Invoice</span>
               </a>
            </li>
            <hr class="mt-2 mb-2">
            <li class="active_menu mm-active ">
               <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <!-- <i class="bx bx-store"></i> -->
                  <span key="t-ecommerce">Active Projects (5)</span>
               </a>
               <ul class="list-unstyled menu-list mb-0 active_menu">
                  <li><a href="#" ><i class="bx bxs-circle text-primary "></i>Extra Industries Sdn Bhd</a></li>
                  <li><a href="#" ><i class="bx bxs-circle text-primary"></i>Extra Industries</a></li>
                  <li><a href="#" ><i class="bx bxs-circle text-primary"></i>MData Enterprise Sdn B...</a></li>
                  <li><a href="#" ><i class="bx bxs-circle text-primary"></i>Creative Agency Sdn Bhd</a></li>
                  <li><a href="#" ><i class="bx bxs-circle text-primary"></i>Limina Open Cloud Enter...</a></li>
               </ul>
            </li>
            <li>
               <a href="settings.html" class="waves-effect">
               <i class="bx bx-cog"></i>
               <span>Settings</span>
               </a>
            </li>
            <li>
               <a href="signout.html" class="waves-effect">
               <i class="bx bx-power-off"></i>
               <span>Sign Out</span>
               </a>
            </li>
            <!-- <li>
               <a href="javascript: void(0);" class="has-arrow waves-effect">
                   <i class="bx bx-store"></i>
                   <span key="t-ecommerce">Active Projects (5)</span>
               </a>
               <ul class="sub-menu" aria-expanded="false">
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   <li><a href="#" ></a></li>
                   
               </ul>
               </li> -->
         </ul>
      </div>
      <!-- Sidebar -->
   </div>
</div>
<!-- Left Sidebar End -->
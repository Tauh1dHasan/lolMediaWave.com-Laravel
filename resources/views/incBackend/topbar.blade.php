<div class="iq-top-navbar">
   <div class="iq-navbar-custom">

      <nav class="navbar navbar-expand-lg navbar-light p-0">

         <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
               <div class="main-circle">
                  <i class="las la-bars"></i>
               </div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="/dashboard" class="header-logo">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">LoLMediaWave</span>
                  </div>
               </a>
            </div>
         </div>

         <div class="iq-search-bar ml-auto">
            
         </div>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
            <i class="las la-bars"></i>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list">
               
               <li class="line-height pt-3">

                  <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                     Account
                  </a>

                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">

                           <a href="/account-setting" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="lar la-user"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Account settings</h6>
                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                 </div>
                              </div>
                           </a>

                           <div class="d-inline-block w-100 text-center p-3">
                              <form action="/logout" method="post">
                                 @csrf
                                 <input class="bg-primary iq-sign-btn" type="submit" value="Logout">
                              </form>
                           </div>

                        </div>
                     </div>
                  </div>

               </li>

            </ul>

         </div>

      </nav>

   </div>
</div>
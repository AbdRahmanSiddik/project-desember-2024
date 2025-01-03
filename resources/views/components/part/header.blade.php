<div class="header">
  <div class="header-content">
    <nav class="navbar navbar-expand">
      <div class="collapse navbar-collapse justify-content-between">
        <div class="header-left">
          <div class="dashboard_bar">
          </div>
        </div>
        <ul class="navbar-nav header-right">
          <li class="nav-item">
            <div class="d-flex weather-detail">
              <span>@myprofile('nama_profile')</span>
              @myprofile('alamat')
            </div>
          </li>
          <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
              <i id="icon-light" class="fas fa-sun"></i>
              <i id="icon-dark" class="fas fa-moon"></i>

            </a>
          </li>
          <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
              <svg width="20" height="20" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.6001 4.3008V1.4C12.6001 0.627199 13.2273 0 14.0001 0C14.7715 0 15.4001 0.627199 15.4001 1.4V4.3008C17.4805 4.6004 19.4251 5.56639 20.9287 7.06999C22.7669 8.90819 23.8001 11.4016 23.8001 14V19.2696L24.9327 21.5348C25.4745 22.6198 25.4171 23.9078 24.7787 24.9396C24.1417 25.9714 23.0147 26.6 21.8023 26.6H15.4001C15.4001 27.3728 14.7715 28 14.0001 28C13.2273 28 12.6001 27.3728 12.6001 26.6H6.19791C4.98411 26.6 3.85714 25.9714 3.22014 24.9396C2.58174 23.9078 2.52433 22.6198 3.06753 21.5348L4.20011 19.2696V14C4.20011 11.4016 5.23194 8.90819 7.07013 7.06999C8.57513 5.56639 10.5183 4.6004 12.6001 4.3008ZM14.0001 6.99998C12.1423 6.99998 10.3629 7.73779 9.04973 9.05099C7.73653 10.3628 7.00011 12.1436 7.00011 14V19.6C7.00011 19.817 6.94833 20.0312 6.85173 20.2258C6.85173 20.2258 6.22871 21.4718 5.57072 22.7864C5.46292 23.0034 5.47412 23.2624 5.60152 23.4682C5.72892 23.674 5.95431 23.8 6.19791 23.8H21.8023C22.0445 23.8 22.2699 23.674 22.3973 23.4682C22.5247 23.2624 22.5359 23.0034 22.4281 22.7864C21.7701 21.4718 21.1471 20.2258 21.1471 20.2258C21.0505 20.0312 21.0001 19.817 21.0001 19.6V14C21.0001 12.1436 20.2623 10.3628 18.9491 9.05099C17.6359 7.73779 15.8565 6.99998 14.0001 6.99998Z"
                  fill="#3E4954" />
              </svg>
              <span class="badge light text-white bg-primary rounded-circle">12</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                <ul class="timeline">
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2">
                        <img alt="image" width="50" src="{{ asset('assets') }}/images/avatar/1.jpg">
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2 media-info">
                        KG
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Resport created successfully</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2 media-success">
                        <i class="fa fa-home"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2">
                        <img alt="image" width="50" src="{{ asset('assets') }}/images/avatar/1.jpg">
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2 media-danger">
                        KG
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Resport created successfully</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-panel">
                      <div class="media me-2 media-primary">
                        <i class="fa fa-home"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                        <small class="d-block">29 July 2024 - 02:26 PM</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <a class="all-notification" href="javascript:void(0)">See all notifications <i
                  class="ti-arrow-right"></i></a>
            </div>
          </li>
          <li class="nav-item dropdown notification_dropdown">
            <a class="nav-link bell bell-link" href="javascript:void(0)">
              <svg width="20" height="20" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M25.6666 8.16666C25.6666 5.5895 23.5771 3.5 21 3.5C17.1161 3.5 10.8838 3.5 6.99998 3.5C4.42281 3.5 2.33331 5.5895 2.33331 8.16666V23.3333C2.33331 23.8058 2.61798 24.2305 3.05315 24.4113C3.48948 24.5922 3.99115 24.4918 4.32481 24.1582C4.32481 24.1582 6.59281 21.8902 7.96714 20.517C8.40464 20.0795 8.99733 19.8333 9.61683 19.8333H21C23.5771 19.8333 25.6666 17.7438 25.6666 15.1667V8.16666ZM23.3333 8.16666C23.3333 6.87866 22.2891 5.83333 21 5.83333C17.1161 5.83333 10.8838 5.83333 6.99998 5.83333C5.71198 5.83333 4.66665 6.87866 4.66665 8.16666V20.517L6.31631 18.8673C7.19132 17.9923 8.37899 17.5 9.61683 17.5H21C22.2891 17.5 23.3333 16.4558 23.3333 15.1667V8.16666ZM8.16665 15.1667H17.5C18.144 15.1667 18.6666 14.644 18.6666 14C18.6666 13.356 18.144 12.8333 17.5 12.8333H8.16665C7.52265 12.8333 6.99998 13.356 6.99998 14C6.99998 14.644 7.52265 15.1667 8.16665 15.1667ZM8.16665 10.5H19.8333C20.4773 10.5 21 9.97733 21 9.33333C21 8.68933 20.4773 8.16666 19.8333 8.16666H8.16665C7.52265 8.16666 6.99998 8.68933 6.99998 9.33333C6.99998 9.97733 7.52265 10.5 8.16665 10.5Z"
                  fill="#3E4954" />
              </svg>
              <span class="badge light text-white bg-primary rounded-circle">5</span>
            </a>
          </li>
          <li class="nav-item dropdown header-profile">
            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
              <div class="header-info">
                <span class="text-black"><strong>{{ auth()->user()->name }}</strong></span>
                <p class="fs-12 mb-0">{{ auth()->user()->role }}</p>
              </div>
              <img src="{{ auth()->user()->foto_user && file_exists(public_path('images/user/' . auth()->user()->foto_user)) ? asset('images/user/' . auth()->user()->foto_user) : asset('images/user/default.png') }}" width="20" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="app-profile.html" class="dropdown-item ai-icon">
                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                  height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="ms-2">Profile </span>
              </a>
              <a href="email-inbox.html" class="dropdown-item ai-icon">
                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18"
                  height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span class="ms-2">Inbox </span>
              </a>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                  <button type="submit" class="dropdown-item ai-icon">
                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                      height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                  </button>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

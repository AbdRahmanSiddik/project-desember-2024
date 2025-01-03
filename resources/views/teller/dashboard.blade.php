<x-admin>
    <x-slot:title>@ucfirst(auth()->user()->role) | Dashboard : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Dashboard</h2>
    </div>
    <div class="row">
      <div class="col-xl-4 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center invoice-card">
              <div class="media-body">
                <h2 class="text-black font-w600">582</h2>
                <span>Aktivitas Tabungan</span>
              </div>
              <span class="p-3 border ms-3 rounded-circle">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M26.9165 1.41669H7.08317C5.58028 1.41669 4.13894 2.01371 3.07623 3.07642C2.01353 4.13912 1.4165 5.58046 1.4165 7.08335V17C1.4165 17.3757 1.56576 17.7361 1.83144 18.0018C2.09711 18.2674 2.45745 18.4167 2.83317 18.4167H9.9165V31.1667C9.91583 31.4376 9.99289 31.7031 10.1385 31.9316C10.2842 32.1601 10.4923 32.342 10.7382 32.4559C10.9847 32.5693 11.2585 32.6096 11.5273 32.5719C11.796 32.5343 12.0482 32.4202 12.254 32.2434L16.2915 28.7867L20.329 32.2434C20.5856 32.4628 20.9122 32.5834 21.2498 32.5834C21.5875 32.5834 21.9141 32.4628 22.1707 32.2434L26.2082 28.7867L30.2457 32.2434C30.5023 32.4628 30.8289 32.5834 31.1665 32.5834C31.3715 32.5819 31.574 32.5385 31.7615 32.4559C32.0074 32.342 32.2155 32.1601 32.3612 31.9316C32.5068 31.7031 32.5838 31.4376 32.5832 31.1667V7.08335C32.5832 5.58046 31.9862 4.13912 30.9234 3.07642C29.8607 2.01371 28.4194 1.41669 26.9165 1.41669ZM4.24984 15.5834V7.08335C4.24984 6.33191 4.54835 5.61124 5.0797 5.07988C5.61105 4.54853 6.33172 4.25002 7.08317 4.25002C7.83462 4.25002 8.55529 4.54853 9.08664 5.07988C9.61799 5.61124 9.9165 6.33191 9.9165 7.08335V15.5834H4.24984ZM29.7498 28.0925L27.129 25.84C26.8724 25.6205 26.5458 25.4999 26.2082 25.4999C25.8705 25.4999 25.5439 25.6205 25.2873 25.84L21.2498 29.2967L17.2123 25.84C16.9557 25.6205 16.6292 25.4999 16.2915 25.4999C15.9538 25.4999 15.6273 25.6205 15.3707 25.84L12.7498 28.0925V7.08335C12.7481 6.08812 12.4842 5.1109 11.9848 4.25002H26.9165C27.668 4.25002 28.3886 4.54853 28.92 5.07988C29.4513 5.61124 29.7498 6.33191 29.7498 7.08335V28.0925ZM26.9165 8.50002C26.9165 8.87574 26.7673 9.23608 26.5016 9.50175C26.2359 9.76743 25.8756 9.91669 25.4998 9.91669H16.9998C16.6241 9.91669 16.2638 9.76743 15.9981 9.50175C15.7324 9.23608 15.5832 8.87574 15.5832 8.50002C15.5832 8.1243 15.7324 7.76396 15.9981 7.49829C16.2638 7.23261 16.6241 7.08335 16.9998 7.08335H25.4998C25.8756 7.08335 26.2359 7.23261 26.5016 7.49829C26.7673 7.76396 26.9165 8.1243 26.9165 8.50002ZM26.9165 14.1667C26.9165 14.5424 26.7673 14.9027 26.5016 15.1684C26.2359 15.4341 25.8756 15.5834 25.4998 15.5834H16.9998C16.6241 15.5834 16.2638 15.4341 15.9981 15.1684C15.7324 14.9027 15.5832 14.5424 15.5832 14.1667C15.5832 13.791 15.7324 13.4306 15.9981 13.165C16.2638 12.8993 16.6241 12.75 16.9998 12.75H25.4998C25.8756 12.75 26.2359 12.8993 26.5016 13.165C26.7673 13.4306 26.9165 13.791 26.9165 14.1667ZM26.9165 19.8334C26.9165 20.2091 26.7673 20.5694 26.5016 20.8351C26.2359 21.1008 25.8756 21.25 25.4998 21.25H16.9998C16.6241 21.25 16.2638 21.1008 15.9981 20.8351C15.7324 20.5694 15.5832 20.2091 15.5832 19.8334C15.5832 19.4576 15.7324 19.0973 15.9981 18.8316C16.2638 18.5659 16.6241 18.4167 16.9998 18.4167H25.4998C25.8756 18.4167 26.2359 18.5659 26.5016 18.8316C26.7673 19.0973 26.9165 19.4576 26.9165 19.8334Z"
                    fill="#858585" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center invoice-card">
              <div class="media-body">
                <h2 class="text-black font-w600">346</h2>
                <span>Aktivitas Pinjaman</span>
              </div>
              <span class="p-3 border ms-3 rounded-circle">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M32.3668 9.72969C30.9793 6.78884 28.782 4.31932 26.0137 2.58667C22.1634 0.18354 17.6028 -0.579886 13.1815 0.442442C8.7603 1.45813 4.99628 4.14008 2.59315 7.9904C0.183379 11.8407 -0.580047 16.3947 0.44228 20.8226C1.46461 25.2438 4.14656 29.0079 7.99024 31.411C10.6987 33.1038 13.8056 34 16.9854 34H17.1912C20.3577 33.9602 23.438 33.0441 26.1067 31.3579C26.8834 30.8666 27.1091 29.8443 26.6178 29.0676C26.1266 28.2909 25.1043 28.0652 24.3276 28.5564C22.1833 29.9173 19.7005 30.6542 17.1514 30.6874C14.5358 30.7206 11.98 29.997 9.74944 28.6095C6.64927 26.6711 4.49176 23.644 3.67522 20.0857C2.85869 16.5275 3.46943 12.8631 5.40787 9.76288C9.40424 3.37001 17.8617 1.4183 24.2545 5.41467C26.4851 6.80875 28.2509 8.79366 29.3662 11.157C30.4549 13.4605 30.8797 16.0163 30.5943 18.539C30.4947 19.4484 31.1453 20.2716 32.0614 20.3712C32.9709 20.4708 33.794 19.8202 33.8936 18.9041C34.2455 15.7641 33.7144 12.5909 32.3668 9.72969Z"
                    fill="#2BC155" />
                  <path
                    d="M22.4914 11.2377L14.4846 19.2445L11.5169 16.2768C10.8663 15.6262 9.81732 15.6262 9.16669 16.2768C8.51605 16.9274 8.51605 17.9764 9.16669 18.6271L13.3095 22.7699C13.6348 23.0952 14.0597 23.2545 14.4846 23.2545C14.9095 23.2545 15.3345 23.0952 15.6598 22.7699L24.8351 13.588C25.4857 12.9373 25.4857 11.8883 24.8351 11.2377C24.1844 10.5937 23.1354 10.5937 22.4914 11.2377Z"
                    fill="#2BC155" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center invoice-card">
              <div class="media-body">
                <h2 class="text-black font-w600">582</h2>
                <span>Aktivitas Penggadaian</span>
              </div>
              <span class="p-3 border ms-3 rounded-circle">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M26.9165 1.41669H7.08317C5.58028 1.41669 4.13894 2.01371 3.07623 3.07642C2.01353 4.13912 1.4165 5.58046 1.4165 7.08335V17C1.4165 17.3757 1.56576 17.7361 1.83144 18.0018C2.09711 18.2674 2.45745 18.4167 2.83317 18.4167H9.9165V31.1667C9.91583 31.4376 9.99289 31.7031 10.1385 31.9316C10.2842 32.1601 10.4923 32.342 10.7382 32.4559C10.9847 32.5693 11.2585 32.6096 11.5273 32.5719C11.796 32.5343 12.0482 32.4202 12.254 32.2434L16.2915 28.7867L20.329 32.2434C20.5856 32.4628 20.9122 32.5834 21.2498 32.5834C21.5875 32.5834 21.9141 32.4628 22.1707 32.2434L26.2082 28.7867L30.2457 32.2434C30.5023 32.4628 30.8289 32.5834 31.1665 32.5834C31.3715 32.5819 31.574 32.5385 31.7615 32.4559C32.0074 32.342 32.2155 32.1601 32.3612 31.9316C32.5068 31.7031 32.5838 31.4376 32.5832 31.1667V7.08335C32.5832 5.58046 31.9862 4.13912 30.9234 3.07642C29.8607 2.01371 28.4194 1.41669 26.9165 1.41669ZM4.24984 15.5834V7.08335C4.24984 6.33191 4.54835 5.61124 5.0797 5.07988C5.61105 4.54853 6.33172 4.25002 7.08317 4.25002C7.83462 4.25002 8.55529 4.54853 9.08664 5.07988C9.61799 5.61124 9.9165 6.33191 9.9165 7.08335V15.5834H4.24984ZM29.7498 28.0925L27.129 25.84C26.8724 25.6205 26.5458 25.4999 26.2082 25.4999C25.8705 25.4999 25.5439 25.6205 25.2873 25.84L21.2498 29.2967L17.2123 25.84C16.9557 25.6205 16.6292 25.4999 16.2915 25.4999C15.9538 25.4999 15.6273 25.6205 15.3707 25.84L12.7498 28.0925V7.08335C12.7481 6.08812 12.4842 5.1109 11.9848 4.25002H26.9165C27.668 4.25002 28.3886 4.54853 28.92 5.07988C29.4513 5.61124 29.7498 6.33191 29.7498 7.08335V28.0925ZM26.9165 8.50002C26.9165 8.87574 26.7673 9.23608 26.5016 9.50175C26.2359 9.76743 25.8756 9.91669 25.4998 9.91669H16.9998C16.6241 9.91669 16.2638 9.76743 15.9981 9.50175C15.7324 9.23608 15.5832 8.87574 15.5832 8.50002C15.5832 8.1243 15.7324 7.76396 15.9981 7.49829C16.2638 7.23261 16.6241 7.08335 16.9998 7.08335H25.4998C25.8756 7.08335 26.2359 7.23261 26.5016 7.49829C26.7673 7.76396 26.9165 8.1243 26.9165 8.50002ZM26.9165 14.1667C26.9165 14.5424 26.7673 14.9027 26.5016 15.1684C26.2359 15.4341 25.8756 15.5834 25.4998 15.5834H16.9998C16.6241 15.5834 16.2638 15.4341 15.9981 15.1684C15.7324 14.9027 15.5832 14.5424 15.5832 14.1667C15.5832 13.791 15.7324 13.4306 15.9981 13.165C16.2638 12.8993 16.6241 12.75 16.9998 12.75H25.4998C25.8756 12.75 26.2359 12.8993 26.5016 13.165C26.7673 13.4306 26.9165 13.791 26.9165 14.1667ZM26.9165 19.8334C26.9165 20.2091 26.7673 20.5694 26.5016 20.8351C26.2359 21.1008 25.8756 21.25 25.4998 21.25H16.9998C16.6241 21.25 16.2638 21.1008 15.9981 20.8351C15.7324 20.5694 15.5832 20.2091 15.5832 19.8334C15.5832 19.4576 15.7324 19.0973 15.9981 18.8316C16.2638 18.5659 16.6241 18.4167 16.9998 18.4167H25.4998C25.8756 18.4167 26.2359 18.5659 26.5016 18.8316C26.7673 19.0973 26.9165 19.4576 26.9165 19.8334Z"
                    fill="#858585" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="d-sm-flex  d-block align-items-center mb-4">
          <div class="me-auto">
            <h4 class="fs-20 text-black">Histori Aktivitas</h4>
            <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
          </div>
          <div class="dropdown custom-dropdown mb-0 mt-3 mt-sm-0">
            <div class="btn btn-primary btn-rounded" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="las la-calendar-alt scale5 me-3"></i>
              Filter Date
              <i class="fa fa-caret-down  ms-3" aria-hidden="true"></i>
            </div>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="javascript:void(0);">Details</a>
              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="table-responsive table-hover fs-14">
          <table class="table display mb-4 dataTablesCard " id="example5">
            <thead>
              <tr>
                <th>
                  <div class="checkbox me-0 d-inline-block align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="checkAll" required="">
                      <label class="form-check-label" for="checkAll"></label>
                    </div>
                  </div>
                </th>
                <th>Rekening</th>
                <th>Tanggal</th>
                <th>Anggota</th>
                <th>Email</th>
                <th>Aktivitas</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="checkbox me-0 align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                      <label class="form-check-label" for="customCheckBox2"></label>
                    </div>
                  </div>
                </td>
                <td><span class="text-black font-w500">#123412451</span></td>
                <td><span class="text-black text-nowrap">#June 1, 2024, 08:22 AM</span></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('') }}assets/images/avatar/25.png" alt="" class="rounded-circle me-3" width="50">
                    <div>
                      <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
                    </div>
                  </div>
                </td>
                <td><span class="text-black">xyzstore@mail.com</span></td>
                <td><span class="text-black">Tabungan </span></td>
                <td><a href="javascript:void(0)" class="badge badge-sm badge-success light ">Completed</a></td>
                <td>
                  <div class="dropdown mb-auto">
                    <div class="btn-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z"
                          fill="black"></path>
                        <path
                          d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z"
                          fill="black"></path>
                        <path
                          d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z"
                          fill="black"></path>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                      <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox me-0 align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                      <label class="form-check-label" for="customCheckBox3"></label>
                    </div>
                  </div>
                </td>
                <td><span class="text-black font-w500">#123412451</span></td>
                <td><span class="text-black text-nowrap">#June 1, 2024, 08:22 AM</span></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('') }}assets/images/avatar/19.png" alt="" class="rounded-circle me-3" width="50">
                    <div>
                      <h6 class="fs-16 font-w600 mb-0 text-nowrap"><a href="javascript:void(0)"
                          class="text-black">David Oconner</a></h6>
                    </div>
                  </div>
                </td>
                <td><span class="text-black">davidocon@mail.com</span></td>
                <td><span class="text-black">Pinjaman </span></td>
                <td><a href="javascript:void(0)" class="badge badge-warning badge-sm light">Pending</a></td>
                <td>
                  <div class="dropdown mb-auto">
                    <div class="btn-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z"
                          fill="black"></path>
                        <path
                          d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z"
                          fill="black"></path>
                        <path
                          d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z"
                          fill="black"></path>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                      <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox me-0 align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                      <label class="form-check-label" for="customCheckBox4"></label>
                    </div>
                  </div>
                </td>
                <td><span class="text-black font-w500">#123412451</span></td>
                <td><span class="text-black text-nowrap">#June 1, 2024, 08:22 AM</span></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('') }}assets/images/avatar/20.png" alt="" class="rounded-circle me-3" width="50">
                    <div>
                      <h6 class="fs-16 font-w600 mb-0 text-nowrap"><a href="javascript:void(0)"
                          class="text-black">Julia Esteh</a></h6>
                    </div>
                  </div>
                </td>
                <td><span class="text-black">juliaesteh@mail.com</span></td>
                <td><span class="text-black">Penggadaian </span></td>
                <td><a href="javascript:void(0)" class="badge badge-danger badge-sm light">Canceled</a></td>
                <td>
                  <div class="dropdown mb-auto">
                    <div class="btn-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z"
                          fill="black"></path>
                        <path
                          d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z"
                          fill="black"></path>
                        <path
                          d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z"
                          fill="black"></path>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                      <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox me-0 align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
                      <label class="form-check-label" for="customCheckBox5"></label>
                    </div>
                  </div>
                </td>
                <td><span class="text-black font-w500">#123412451</span></td>
                <td><span class="text-black text-nowrap">#June 1, 2024, 08:22 AM</span></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('') }}assets/images/avatar/26.png" alt="" class="rounded-circle me-3" width="50">
                    <div>
                      <h6 class="fs-16 font-w600 mb-0 text-nowrap"><a href="javascript:void(0)"
                          class="text-black">Power Supp Store</a></h6>
                    </div>
                  </div>
                </td>
                <td><span class="text-black">xyzstore@mail.com</span></td>
                <td><span class="text-black">Tabungan </span></td>
                <td><a href="javascript:void(0)" class="badge badge-success badge-sm light">Completed</a></td>
                <td>
                  <div class="dropdown mb-auto">
                    <div class="btn-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z"
                          fill="black"></path>
                        <path
                          d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z"
                          fill="black"></path>
                        <path
                          d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z"
                          fill="black"></path>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                      <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox me-0 align-self-center">
                    <div class="form-check custom-checkbox ">
                      <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                      <label class="form-check-label" for="customCheckBox6"></label>
                    </div>
                  </div>
                </td>
                <td><span class="text-black font-w500">#123412451</span></td>
                <td><span class="text-black text-nowrap">#June 1, 2024, 08:22 AM</span></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('') }}assets/images/avatar/21.png" alt="" class="rounded-circle me-3" width="50">
                    <div>
                      <h6 class="fs-16 font-w600 mb-0 text-nowrap"><a href="javascript:void(0)"
                          class="text-black">James Known</a></h6>
                    </div>
                  </div>
                </td>
                <td><span class="text-black">davidocon@mail.com</span></td>
                <td><span class="text-black">Pinjaman</span></td>
                <td><a href="javascript:void(0)" class="badge badge-warning badge-sm light">Pending</a></td>
                <td>
                  <div class="dropdown mb-auto">
                    <div class="btn-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10 11.9999C10 13.1045 10.8954 13.9999 12 13.9999C13.1046 13.9999 14 13.1045 14 11.9999C14 10.8954 13.1046 9.99994 12 9.99994C10.8954 9.99994 10 10.8954 10 11.9999Z"
                          fill="black"></path>
                        <path
                          d="M10 4.00006C10 5.10463 10.8954 6.00006 12 6.00006C13.1046 6.00006 14 5.10463 14 4.00006C14 2.89549 13.1046 2.00006 12 2.00006C10.8954 2.00006 10 2.89549 10 4.00006Z"
                          fill="black"></path>
                        <path
                          d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20Z"
                          fill="black"></path>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                      <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-admin>

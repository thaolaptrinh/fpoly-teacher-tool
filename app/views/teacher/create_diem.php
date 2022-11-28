<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mw-900px">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Bảng điểm</h2>
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <span class="svg-icon svg-icon-1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
              <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
            </svg>
          </span>
        </div>
      </div>
      <div class="modal-body py-lg-10 px-lg-10">
        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper" data-kt-stepper="true">
          <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
            <div class="stepper-nav ps-lg-10">
              <div class="stepper-item current" data-kt-stepper-element="nav">
                <div class="stepper-wrapper">
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">1</span>
                  </div>
                  <div class="stepper-label">
                    <h3 class="stepper-title">Học kỳ</h3>
                    <div class="stepper-desc">Học kỳ </div>
                  </div>
                </div>
                <div class="stepper-line h-40px"></div>
              </div>
              <div class="stepper-item" data-kt-stepper-element="nav">
                <div class="stepper-wrapper">
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">2</span>
                  </div>

                  <div class="stepper-label">
                    <h3 class="stepper-title">Khóa</h3>
                    <div class="stepper-desc">Khóa học của trường</div>
                  </div>
                </div>
                <div class="stepper-line h-40px"></div>
              </div>
              <div class="stepper-item" data-kt-stepper-element="nav">
                <div class="stepper-wrapper">
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">3</span>
                  </div>
                  <div class="stepper-label">
                    <h3 class="stepper-title">Lớp học</h3>
                    <div class="stepper-desc">Loại lớp</div>
                  </div>
                </div>
                <div class="stepper-line h-40px"></div>
              </div>
              <div class="stepper-item" data-kt-stepper-element="nav">
                <div class="stepper-wrapper">
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">4</span>
                  </div>

                  <div class="stepper-label">
                    <h3 class="stepper-title">Môn học</h3>
                    <div class="stepper-desc">Môn học</div>
                  </div>
                </div>
                <div class="stepper-line h-40px"></div>
              </div>
              <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                <div class="stepper-wrapper">
                  <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">5</span>
                  </div>
                  <div class="stepper-label">
                    <h3 class="stepper-title">Import</h3>
                    <div class="stepper-desc">Danh sách sinh viên</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex-row-fluid py-lg-5 px-lg-15">
            <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_modal_create_app_form">
              <div class="current" data-kt-stepper-element="content">
                <div class="w-100">
                  <div class="fv-row">
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                      <span class="required">Danh sách</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Lựa chọn học kỳ"></i>
                    </label>
                    <div class="fv-row fv-plugins-icon-container scroll-y h-300px">
                      <?php
                      if (!empty($this->model_home->data['hoc_ky']) && isset($this->model_home->data['hoc_ky'])) {
                        $hoc_ky = $this->model_home->data['hoc_ky'];
                        foreach ($hoc_ky as $value) { ?>
                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <span class="d-flex align-items-center me-2">
                              <span class="symbol symbol-50px me-6">
                                <span class="symbol-label bg-light-primary">
                                  <span class="svg-icon svg-icon-1 svg-icon-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
                                      <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
                                    </svg>
                                  </span>
                                </span>
                              </span>
                              <span class="d-flex flex-column">
                                <span class="fw-bold fs-6">Quick Online Courses</span>
                                <!-- <span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span> -->
                              </span>
                            </span>
                            <span class="form-check form-check-custom form-check-solid">
                              <input class="form-check-input" type="radio" name="category" value="1">
                            </span>
                          </label>
                      <?php }
                      } ?>


                    </div>
                  </div>
                </div>
              </div>
              <div data-kt-stepper-element="content">
                <div class="w-100">
                  <!--begin::Input group-->
                  <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                      <span class="required">Select Framework</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify your apps framework" data-bs-original-title="Specify your apps framework" data-kt-initialized="1"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer mb-5">
                      <!--begin:Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin:Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-warning">
                            <i class="fab fa-html5 text-warning fs-2x"></i>
                          </span>
                        </span>
                        <!--end:Icon-->
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">HTML5</span>
                          <span class="fs-7 text-muted">Base Web Projec</span>
                        </span>
                        <!--end:Info-->
                      </span>
                      <!--end:Label-->
                      <!--begin:Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" checked="checked" name="framework" value="1">
                      </span>
                      <!--end:Input-->
                    </label>
                    <!--end::Option-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer mb-5">
                      <!--begin:Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin:Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-success">
                            <i class="fab fa-react text-success fs-2x"></i>
                          </span>
                        </span>
                        <!--end:Icon-->
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">ReactJS</span>
                          <span class="fs-7 text-muted">Robust and flexible app framework</span>
                        </span>
                        <!--end:Info-->
                      </span>
                      <!--end:Label-->
                      <!--begin:Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="framework" value="2">
                      </span>
                      <!--end:Input-->
                    </label>
                    <!--end::Option-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer mb-5">
                      <!--begin:Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin:Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-danger">
                            <i class="fab fa-angular text-danger fs-2x"></i>
                          </span>
                        </span>
                        <!--end:Icon-->
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">Angular</span>
                          <span class="fs-7 text-muted">Powerful data mangement</span>
                        </span>
                        <!--end:Info-->
                      </span>
                      <!--end:Label-->
                      <!--begin:Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="framework" value="3">
                      </span>
                      <!--end:Input-->
                    </label>
                    <!--end::Option-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer">
                      <!--begin:Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin:Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-primary">
                            <i class="fab fa-vuejs text-primary fs-2x"></i>
                          </span>
                        </span>
                        <!--end:Icon-->
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">Vue</span>
                          <span class="fs-7 text-muted">Lightweight and responsive framework</span>
                        </span>
                        <!--end:Info-->
                      </span>
                      <!--end:Label-->
                      <!--begin:Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="framework" value="4">
                      </span>
                      <!--end:Input-->
                    </label>
                    <!--end::Option-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <!--end::Input group-->
                </div>
              </div>
              <!--end::Step 2-->
              <!--begin::Step 3-->
              <div data-kt-stepper-element="content">
                <div class="w-100">
                  <!--begin::Input group-->
                  <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fs-5 fw-semibold mb-2">Database Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db">
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>

                  <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                      <span class="required">Select Database Engine</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Select your app database engine" data-bs-original-title="Select your app database engine" data-kt-initialized="1"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer mb-5">
                      <!--begin::Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin::Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-success">
                            <i class="fas fa-database text-success fs-2x"></i>
                          </span>
                        </span>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">MySQL</span>
                          <span class="fs-7 text-muted">Basic MySQL database</span>
                        </span>
                        <!--end::Info-->
                      </span>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1">
                      </span>
                      <!--end::Input-->
                    </label>
                    <!--end::Option-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer mb-5">
                      <!--begin::Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin::Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-danger">
                            <i class="fab fa-google text-danger fs-2x"></i>
                          </span>
                        </span>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">Firebase</span>
                          <span class="fs-7 text-muted">Google based app data management</span>
                        </span>
                        <!--end::Info-->
                      </span>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="dbengine" value="2">
                      </span>
                      <!--end::Input-->
                    </label>
                    <!--end::Option-->
                    <!--begin:Option-->
                    <label class="d-flex flex-stack cursor-pointer">
                      <!--begin::Label-->
                      <span class="d-flex align-items-center me-2">
                        <!--begin::Icon-->
                        <span class="symbol symbol-50px me-6">
                          <span class="symbol-label bg-light-warning">
                            <i class="fab fa-amazon text-warning fs-2x"></i>
                          </span>
                        </span>
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <span class="d-flex flex-column">
                          <span class="fw-bold fs-6">DynamoDB</span>
                          <span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
                        </span>
                        <!--end::Info-->
                      </span>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <span class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="radio" name="dbengine" value="3">
                      </span>
                      <!--end::Input-->
                    </label>
                    <!--end::Option-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <!--end::Input group-->
                </div>
              </div>
              <!--end::Step 3-->
              <!--begin::Step 4-->
              <div data-kt-stepper-element="content">
                <div class="w-100">
                  <!--begin::Input group-->
                  <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                      <span class="required">Name On Card</span>
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name" data-kt-initialized="1"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative">
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
                      <!--end::Input-->
                      <!--begin::Card logos-->
                      <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                        <img src="/keen/demo9/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
                        <img src="/keen/demo9/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
                        <img src="/keen/demo9/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
                      </div>
                      <!--end::Card logos-->
                    </div>
                    <!--end::Input wrapper-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row mb-10">
                    <!--begin::Col-->
                    <div class="col-md-8 fv-row">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                      <!--end::Label-->
                      <!--begin::Row-->
                      <div class="row fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                        <div class="col-6">
                          <select name="card_expiry_month" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Month" data-select2-id="select2-data-22-isjs" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                            <option data-select2-id="select2-data-24-innk"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-41al" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_month-95-container" aria-controls="select2-card_expiry_month-95-container"><span class="select2-selection__rendered" id="select2-card_expiry_month-95-container" role="textbox" aria-readonly="true" title="Month"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                          <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                          <select name="card_expiry_year" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Year" data-select2-id="select2-data-25-6e8x" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                            <option data-select2-id="select2-data-27-dijm"></option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                          </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-mn3b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_year-e2-container" aria-controls="select2-card_expiry_year-e2-container"><span class="select2-selection__rendered" id="select2-card_expiry_year-e2-container" role="textbox" aria-readonly="true" title="Year"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                          <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">CVV</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Enter a card CVV code" data-bs-original-title="Enter a card CVV code" data-kt-initialized="1"></i>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input wrapper-->
                      <div class="position-relative">
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                        <!--end::Input-->
                        <!--begin::CVV icon-->
                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                          <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                          <span class="svg-icon svg-icon-2hx">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M22 7H2V11H22V7Z" fill="currentColor"></path>
                              <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"></path>
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::CVV icon-->
                      </div>
                      <!--end::Input wrapper-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5">
                      <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                      <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" checked="checked">
                      <span class="form-check-label fw-semibold text-muted">Save Card</span>
                    </label>
                    <!--end::Switch-->
                  </div>
                  <!--end::Input group-->
                </div>
              </div>
              <!--end::Step 4-->
              <!--begin::Step 5-->
              <div data-kt-stepper-element="content">
                <div class="w-100 text-center">
                  <!--begin::Heading-->
                  <h1 class="fw-bold text-dark mb-3">Release!</h1>
                  <!--end::Heading-->
                  <!--begin::Description-->
                  <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
                  <!--end::Description-->
                  <!--begin::Illustration-->
                  <div class="text-center px-4 py-15">
                    <img src="/keen/demo9/assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px">
                  </div>
                  <!--end::Illustration-->
                </div>
              </div>
              <!--end::Step 5-->
              <!--begin::Actions-->
              <div class="d-flex flex-stack pt-10">
                <!--begin::Wrapper-->
                <div class="me-2">
                  <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                    <span class="svg-icon svg-icon-3 me-1">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
                      </svg>
                    </span>
                    Back
                  </button>
                </div>
                <div>
                  <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                    <span class="indicator-label">Submit
                      <span class="svg-icon svg-icon-3 ms-2 me-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                          <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                        </svg>
                      </span>
                    </span>
                    <span class="indicator-progress">Please wait...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
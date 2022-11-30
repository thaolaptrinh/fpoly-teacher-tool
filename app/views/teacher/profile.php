<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app"><button id="kt_user_profile_aside_close" class="kt-app__aside-close"><i class="la la-close"></i></button>
  <div id="kt_user_profile_aside" class="kt-grid__item kt-app__toggle kt-app__aside" style="opacity: 1;">
    <div class="kt-portlet ">
      <div class="kt-portlet__head  kt-portlet__head--noborder">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title"></h3>
        </div>
      </div>
      <div class="kt-portlet__body kt-portlet__body--fit-y">
        <div class="kt-widget kt-widget--user-profile-1">
          <div class="kt-widget__head">

            <div class="kt-widget__content">
              <div class="kt-widget__section"><a href="#" class="kt-widget__username">
                  <?= $this->model_home->getInfoTeacher('name') ?>
                  <i class="flaticon2-correct kt-font-success">
                  </i></a> <span class="kt-widget__subtitle">
                  Giáo viên
                </span></div>
            </div>
          </div>
          <div class="kt-widget__body">
            <div class="kt-widget__content">
              <div class="kt-widget__info"><span class="kt-widget__label">Email:

                </span> <a href="#" class="kt-widget__data"><?= $this->model_home->getInfoTeacher('email') ?></a></div>
            </div>
            <div class="kt-widget__items"><a href="#" class="kt-widget__item kt-widget__item--active">
                <span class="kt-widget__section"><span class="kt-widget__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                      </g>
                    </svg></span> <span class="kt-widget__desc">
                    Hồ sơ cá nhân
                  </span></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row">
      <div class="col-xl-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">Thông tin cá nhân</h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">
              <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                  <div class="row"><label class="col-xl-3"></label>
                  </div>
                  <div class="form-group row"><label class="col-xl-3 col-lg-3 col-form-label">Họ và tên</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" value="<?= $this->model_home->getInfoTeacher('name') ?>" readonly="readonly" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row"><label class="col-xl-3 col-lg-3 col-form-label">Cơ sở giảng dạy</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" value="<?= $this->model_home->getInfoTeacher('ten_coso') ?>" readonly="readonly" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">Đổi mật khẩu</h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right" id="auth-changepass">
            <div class="kt-portlet__body">
              <div class="kt-section kt-section--first">
                <div class="kt-section__body">
                  <div class="row"><label class="col-xl-3"></label>
                  </div>
                  <div class="form-group row"><label class="col-xl-3 col-lg-3 col-form-label">Mật khẩu cũ</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="password" class="form-control" id="old-password" name="old-password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Mật khẩu mới</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="password" id="new-password" name="new-password" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Nhập lại mật khẩu mới</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="password" id="again-newpassword" name="again-newpassword" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                    <div class="col-lg-9 col-xl-6">
                      <button type="submit" id="change-password" class="btn btn-primary">Cập nhật</button>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
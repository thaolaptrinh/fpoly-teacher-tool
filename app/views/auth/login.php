<div class="d-flex flex-center flex-column flex-lg-row-fluid">
  <div class="w-lg-500px p-10">
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" id="kt_sign_in_form" data-kt-redirect-url="<?= BASE_URL('dashboard') ?>" action="#">
      <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Đăng nhập</h1>
      </div>
      <div class="row g-3 mb-9">
        <div class="col-md-6">
          <a href="javascript:void(0)" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="<?= BASE_URL('assets/media/svg/google-icon.svg') ?>" class=" h-15px me-3">Sign in with Google</a>
        </div>
        <div class="col-md-6">
          <a href="javascript:void(0)" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="<?= BASE_URL('assets/media/svg/facebook-icon.svg') ?>" class=" h-20px me-3">Sign in with Facebook</a>
        </div>
      </div>
      <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7">hoặc tài khoản</span>
      </div>
      <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent">
      </div>
      <div class="fv-row mb-3 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
        <input type="password" placeholder="Mật khẩu" name="password" autocomplete="off" class="form-control bg-transparent">
      </div>
      <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>
        <a href="<?= BASE_URL('auth/reset-password') ?>" class="link-primary">Quên mật khẩu ?</a>
      </div>
      <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
          <span class="indicator-label">Đăng nhập</span>
          <span class="indicator-progress">Đang kiểm tra...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
      </div>

      <div class="text-gray-500 text-center fw-semibold fs-6">Bạn chưa có tài khoản?
        <a href="<?= BASE_URL('auth/register') ?>" class="link-primary">Đăng ký</a>
      </div>

    </form>

  </div>

</div>
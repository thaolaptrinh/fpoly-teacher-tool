<div class="d-flex flex-center flex-column flex-lg-row-fluid">
  <div class="w-lg-500px p-10">
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="<?= BASE_URL('auth/login') ?>" action="#">
      <div class="text-center mb-10">
        <h1 class="text-dark fw-bolder mb-3">Quên mật khẩu ?</h1>
        <div class="text-gray-500 fw-semibold fs-6">Nhập email để đặt lại mật khẩu.</div>
      </div>
      <div class="fv-row mb-8 fv-plugins-icon-container">
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent">
        <div class="fv-plugins-message-container invalid-feedback"></div>
      </div>
      <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
          <span class="indicator-label">Submit</span>
          <span class="indicator-progress">Đang kiểm tra...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <a href="<?= BASE_URL('auth/login') ?>" class="btn btn-light">Cancel</a>
      </div>
    </form>
  </div>
</div>
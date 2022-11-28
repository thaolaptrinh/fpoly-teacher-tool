<div class="d-flex flex-center flex-column flex-lg-row-fluid">
  <div class="w-lg-500px p-10">
    <form class="form w-100" id="kt_sign_up_form" data-kt-redirect-url="<?= BASE_URL('auth/login') ?>" action="#">
      <div class="text-center mb-11">
        <h1 class="text-dark fw-bolder mb-3">Đăng ký </h1>
      </div>

      <div class="fv-row mb-8">
        <select name="coso" class=" form-control bg-transparent">
          <option value="">Lựa chọn cơ sở</option>
          <?php

          if (isset($this->data['coso']) && !empty($this->data['coso'])) {
            $list = $this->data['coso'];
            foreach ($list as $item) { ?>
              <option value="<?= $item['id_coso'] ?>"><?= $item['ten_coso'] ?></option>
          <?php }
          } ?>

        </select>
      </div>
      <div class="fv-row mb-8">
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
      </div>
      <div class="fv-row mb-8" data-kt-password-meter="true">
        <div class="mb-1">
          <div class="position-relative mb-3">
            <input class="form-control bg-transparent" type="password" placeholder="Mật khẩu" name="password" autocomplete="off" />
            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
              <i class="bi bi-eye-slash fs-2"></i>
              <i class="bi bi-eye fs-2 d-none"></i>
            </span>
          </div>
          <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
          </div>
        </div>
        <div class="text-muted">Sử dụng 8 ký tự trở lên bao gồm các chữ cái, số và ký tự đặc biệt.</div>
      </div>
      <div class="fv-row mb-8">
        <input placeholder="Nhập lại mật khẩu" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
      </div>

      <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
          <span class="indicator-label">Đăng ký </span>
          <span class="indicator-progress">Đang kiểm tra...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
      </div>
      <div class="text-gray-500 text-center fw-semibold fs-6">Bạn đã có tài khoản?
        <a href="<?= BASE_URL('auth/login') ?>" class="link-primary fw-semibold">Đăng nhập</a>
      </div>
    </form>
  </div>
</div>
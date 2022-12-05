<?php
global $site_logo;
global $site_phone;
global $site_email;
?>

<div id="kt_footer" class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
  <div class="kt-container  kt-container--fluid ">
    <div class="footer-filter-by-campus row">
      <div class="column poly-logo"><img id="poly-logo" src="<?= $site_logo ?>" alt="" width="250">
      </div>
      <div class="column campus-contact-information">
        <h3 class="contact-title">Thông tin liên hệ</h3>
        <div class="campus-contact-content">
          <i class="fas fa-phone-alt"></i>
          <span>
            Số điện thoại liên hệ:
            <a class="kt-link title"><?= $site_phone ?></a>
          </span>
          <span class="break-line">
            <i class="fas fa-envelope"> </i>
            <span>Địa chỉ email:
              <a class="kt-link title"><?= $site_email ?></a>
            </span>

          </span>
        </div>
        Ý kiến đóng góp chung gửi về <?= $site_email ?> bằng email @fpt.edu.vn
      </div>
    </div>
    <div class="footer-filter-by-campus-mobile">
      <div class="brand-logo"><img id="poly-logo" src="<?= $site_logo ?>" alt="" width="250"></div>
      <div class="campus-contact-content">
        <i class="fas fa-phone-alt"></i>
        <span>
          Số điện thoại liên hệ:
          <a class="kt-link title"><?= $site_phone ?></a>
        </span>
        <span class="break-line">
          <i class="fas fa-envelope"> </i>
          <span>Địa chỉ email:
            <a class="kt-link title"><?= $site_email ?></a>
          </span>

        </span>
      </div>
      Ý kiến đóng góp chung gửi về <?= $site_email ?> bằng email @fpt.edu.vn
    </div>
  </div>
</div>
</div>
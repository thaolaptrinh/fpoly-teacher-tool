<?php
if (isset($_SESSION['user_data'])) {
  extract($_SESSION['user_data']);

  if (isset($givenName)) {
    $n = explode(' ', $givenName);
    $name = end($n);
  }
}

?>
<div id="kt_header" class="kt-header kt-grid__item kt-header--fixed">
  <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper"></div>



  <div class="kt-header__topbar">
    <a href="<?= BASE_URL('change/color') ?>" class="kt-header__topbar-item kt-header__topbar-item--langs" title="Đổi màu">
      <div class="kt-header__topbar-wrapper">
        <span class="kt-header__topbar-icon">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24" />
              <path d="M12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 Z M12,5.99999664 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18.0000034 L12,5.99999664 Z" fill="#000000" fill-rule="nonzero" />
            </g>
          </svg>
        </span>
      </div>
    </a>

    <div class="kt-header__topbar-item kt-header__topbar-item--user">
      <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
          <span class="kt-header__topbar-welcome kt-hidden-mobile">Xin chào,</span>
          <span class="kt-header__topbar-username kt-hidden-mobile">
            <?= isset($name) ?  $name : false ?>
          </span>
        </div>
      </div>
      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="
                        background-image: url('<?= BASE_URL('assets/theme/media/bg-1.jpg') ?>');
                      ">
          <div class="kt-user-card__avatar"></div>
          <div class="kt-user-card__name">
            <?= isset($givenName) ?  $givenName : false ?>

          </div>
        </div>

        <div class="kt-notification">
          <a href="<?= BASE_URL('profile') ?>" class="kt-notification__item">
            <div class="kt-notification__item-icon">
              <i class="flaticon2-calendar-3 kt-font-success"></i>
            </div>
            <div class="kt-notification__item-details">
              <div class="kt-notification__item-title kt-font-bold">
                Hồ sơ cá nhân
              </div>
              <div class="kt-notification__item-time">
                Thông tin cá nhân
              </div>
            </div>
          </a>
          <div class="kt-notification__custom kt-space-between">
            <a href="<?= BASE_URL('logout') ?>" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
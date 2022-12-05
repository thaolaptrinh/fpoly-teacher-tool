<?php
global $site_logo;

?>

<div id="kt_header_mobile" class="kt-header-mobile kt-header-mobile--fixed">
  <div class="kt-header-mobile__logo">
    <a href="#">
      <img alt="Logo" src="<?= $site_logo ?>" width="135" />
    </a>
  </div>
  <div class="kt-header-mobile__toolbar">
    <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler">
      <span></span>
    </button>
    <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler">
      <i class="flaticon-more"></i>
    </button>
  </div>
</div>
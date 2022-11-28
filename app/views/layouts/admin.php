<?php require_once 'app/views/include/head.php'; ?>
<div class="app">
  <?php require_once 'app/views/include/teacher/header_mobile.php'; ?>

  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
      <?php require_once 'app/views/include/admin/sidebar.php'; ?>

      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

        <?php require_once 'app/views/include/teacher/header.php'; ?>

        <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
          <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-container kt-container--fluid">
              <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"><?= $this->data['page_title'] ?></h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                  <a href="<?= BASE_URL('') ?>" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>

                  <?php
                  if (isset($this->data['parent'])) { ?>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="javascript:void(0)" class="kt-subheader__breadcrumbs-link"><?= $this->data['parent'] ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
            <?php $this->render($content); ?>
          </div>
        </div>

        <?php require_once 'app/views/include/teacher/footer.php'; ?>

      </div>
    </div>
  </div>
</div>
<?php require_once 'app/views/include/teacher/widget.php'; ?>
<?php require_once 'app/views/include/end.php'; ?>
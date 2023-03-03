<!DOCTYPE html>

<html lang="en">

<head>
  <title>Website đang được bảo trì</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <link href="<?= BASE_URL('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= BASE_URL('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-theme-mode");
      } else {
        if (localStorage.getItem("data-theme") !== null) {
          themeMode = localStorage.getItem("data-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }
      document.documentElement.setAttribute("data-theme", themeMode);
    }
  </script>

  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <style>
      body {
        background-image: url('<?= BASE_URL('assets/media/auth/bg14.jpg') ?>');
      }

      [data-theme="dark"] body {
        background-image: url('<?= BASE_URL('assets/media/auth/bg14-dark.jpg') ?>');

      }
    </style>

    <div class="d-flex flex-column flex-center flex-column-fluid">
      <div class="d-flex flex-column flex-center text-center p-10">
        <div class="card card-flush w-lg-650px py-5">
          <div class="card-body py-15 py-lg-20">
            <h1 class="fw-bolder text-gray-900 mb-5">Tài khoản của bạn đã vô hiệu hóa</h1>

            <div class="fw-semibold fs-6 text-gray-500 mb-8">Để biết thêm chi tiết
              <br>vui lòng
            </div>

            <div class="mb-11">
              <a href="https://www.facebook.com/thaotoiday" target="_blank" class="btn btn-sm btn-primary">Liện hệ Admin</a>
            </div>
            <div class="mb-0">
              <img src="<?= BASE_URL('assets/media/auth/account-deactivated.png') ?>" class="mw-100 mh-300px theme-light-show" alt="">
              <img src="<?= BASE_URL('assets/media/auth/account-deactivated-dark.png') ?>" class="mw-100 mh-300px theme-dark-show" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= BASE_URL('assets/plugins/global/plugins.bundle.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/scripts.bundle.js') ?>"></script>
</body>

</html>
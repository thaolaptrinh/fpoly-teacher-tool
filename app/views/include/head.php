<?php
global $site_keywords;
global $site_description;
global $site_description;
global $site_url;
global $site_favicon;
global $site_name;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <base id="base_url" href="<?= $site_url ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL('assets/media/logos/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL('assets/media/logos/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL('assets/media/logos/favicon-16x16.png') ?>">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title><?= $page_title  . ' | ' . $site_name ?> </title>
  <meta name="keywords" content="<?= $site_keywords ?>">
  <meta name="description" content="<?= $site_description ?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <link href="<?= BASE_URL('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= BASE_URL('assets/plugins/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= BASE_URL('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= BASE_URL('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />



</head>

<body id="kt_body" data-kt-app-header-stacked="true" class="<?= $page_target == 'auth' ? 'app-blank' : 'app-default' ?> ">
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
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
          "dark" :
          "light";
      }
      document.documentElement.setAttribute("data-theme", themeMode);
    }
  </script>
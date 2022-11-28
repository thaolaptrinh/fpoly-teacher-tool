<script src="<?= BASE_URL('assets/plugins/global/plugins.bundle.js') ?>"></script>
<script src="<?= BASE_URL('assets/js/scripts.bundle.js') ?>"></script>



<script src="<?= BASE_URL('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') ?>"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?= BASE_URL('assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>

<script src="<?= BASE_URL('assets/js/widgets.bundle.js') ?>"></script>



<script>
  let base_url = $("#base_url").attr("href");
</script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php

if ($target == 'teacher') { ?>
  <script src="<?= BASE_URL('assets/js/custom/utilities/modals/create-app.js') ?>"></script>
<?php } ?>
<?php
if ($target == 'auth/login') { ?>
  <script src="<?= BASE_URL('assets/js/auth/login.js') ?>"></script>
<?php } elseif ($target == 'auth/register') { ?>
  <script src="<?= BASE_URL('assets/js/auth/register.js') ?>"></script>
<?php } elseif ($target == 'extensions/links') { ?>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/links/table.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/links/add.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/links/update.js') ?>"></script>
<?php } elseif ($target == 'extensions/thanh-ngu') { ?>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/thanhngu/table.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/thanhngu/add.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/extensions/thanhngu/update.js') ?>"></script>
<?php } elseif ($target == 'danhmuc') { ?>
  <script src="<?= BASE_URL('assets/js/custom/app/danhmuc/table.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/danhmuc/add.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/danhmuc/update.js') ?>"></script>
<?php } elseif ($target == 'bangdiem') { ?>
  <script src="<?= BASE_URL('assets/js/custom/app/bangdiem/table.js') ?>"></script>
  <script src="<?= BASE_URL('assets/js/custom/app/bangdiem/update.js') ?>"></script>
<?php } ?>
</body>

</html>
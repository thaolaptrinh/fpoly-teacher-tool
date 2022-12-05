<?php
$data = $this->model_home->data;
?>
<div class="row">
  <div class="col-md-12 col-lg-6">
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Trạng thái website</h4>
        <p class="card-text">
          <b><?= $data['site_status'] == 2 ? 'Hoạt động' : 'Ngừng hoạt động' ?></b>
        </p>

      </div>
    </div>
  </div>

  <div class="col-md-12 col-lg-6">
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Số lượng giáo viên</h4>
        <p class="card-text">
          <b>Tổng: <?= $data['teacher']['total'] ?></b>
          <b>Hôm nay: <?= $data['teacher']['now'] ?></b>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-body py-4">
    <form method="get" action="">
      <div class="row mb-10">
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">
            Lựa chọn trạng thái để hiện thị chi tiết lịch học
          </label>
          <div class="row fv-row">
            <select name="status" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Trạng thái">
              <option></option>
              <option value="1" <?= (isset($_GET['status'])  && $_GET['status'] == 1) || !isset($_GET['status']) ? 'selected="selected"' : false  ?>>Lịch đang dạy</option>
              <option value="0" <?= isset($_GET['status']) && $_GET['status'] == 0 ? 'selected="selected"' : false  ?>>Lịch đã dạy</option>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">Lựa chọn môn học để hiện thị chi tiết lịch học</label>
          <div class="row fv-row">
            <select name="day" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Thời gian">
              <option></option>
              <option value="7" <?= (isset($_GET['day'])  && $_GET['day'] == 7) || !isset($_GET['day']) ? 'selected="selected"' : false  ?>>7</option>
              <option value="9" <?= isset($_GET['day']) && $_GET['day'] == 9 ? 'selected="selected"' : false  ?>>9</option>
            </select>
          </div>
        </div>
      </div>

    </form>

  </div>


</div>

<br>


<div class="card card-flush">
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <div class="card-title">
      <div class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
          </svg>
        </span>
        <input type="text" data-kt-list-diem-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm nhanh" />
      </div>
    </div>
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

      <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" class="btn btn-primary">Thêm mới</a>
    </div>
  </div>
  <div class="card-body pt-0">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_list_diem_table">
      <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
          <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_list_diem_table .form-check-input" value="1" />
            </div>
          </th>
          <th class="min-w-10px">STT</th>
          <th class="text-end min-w-50px">Học kỳ</th>
          <th class="text-end min-w-100px">Tên lớp</th>
          <th class="text-end min-w-70px">Mã môn</th>
          <th class="text-end min-w-70px">Xem</th>
          <th class="text-end min-w-70px">Ngày học</th>
          <th class="text-end min-w-70px">Ca học</th>
          <th class="text-end min-w-70px">Phòng</th>
          <th class="text-end min-w-70px">Sinh viên</th>
          <th class="text-end min-w-70px">Ngày bắt đầu</th>
          <th class="text-end min-w-70px">Ngày kết thúc</th>
          <th class="text-end min-w-70px">Ghi chú</th>
          <th class="text-end min-w-70px">Actions</th>
        </tr>
      </thead>


      <style>
        [contenteditable]:focus {
          border: none;
          outline: none;
          background: var(--kt-primary-light);
          caret-color: var(--kt-primary);
        }
      </style>
      <tbody class="fw-semibold text-gray-600">

        <?php

        if (!empty($this->model_home->data['lich_day'])) {
          $lich_day = $this->model_home->data['lich_day'];
          $i = 0;
          foreach ($lich_day as $row) {
            extract($row); ?>
            <tr>
              <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="<?= $id ?>" />
                </div>
              </td>
              <td><?= ++$i ?></td>
              <td class="text-end pe-0" contenteditable><?= $ten_hocky ?></td>
              <td class="text-end pe-0" contenteditable><?= $ten_lop ?></td>
              <td class="text-end pe-0" contenteditable><?= $ma_mon ?></td>
              <td class="text-end pe-0">
                <a href="<?= BASE_URL('bang-diem?lop=' . $ten_lop . '&mon=' . $ma_mon) ?>" target="_blank">Bảng điểm</a>
              </td>
              <td class="text-end pe-0" contenteditable><?= $ngay_hoc ?></td>
              <td class="text-end pe-0" contenteditable><?= $ca_hoc ?></td>
              <td class="text-end pe-0" contenteditable><?= $phong_hoc ?></td>
              <td class="text-end pe-0" contenteditable><?= $so_sv ?></td>
              <td class="text-end pe-0" contenteditable><?= $ngay_bat_dau ?></td>
              <td class="text-end pe-0" contenteditable><?= $ngay_ket_thuc ?></td>
              <td class="text-end pe-0" contenteditable><?= $ghi_chu ?></td>

              <td class="text-end">
                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                  <span class="svg-icon svg-icon-5 m-0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                    </svg>
                  </span>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                  <div class="menu-item px-3">
                    <a href="" class="menu-link px-3">Edit</a>
                  </div>
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-list-diem-filter="delete_row">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</div>
<div class="card">
  <div class="card-body py-4">
    <form method="get" action="">
      <div class="row mb-10">
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">Lựa chọn lớp học để hiện thị chi tiết lịch học</label>
          <div class="row fv-row">
            <select name="lop" id="lop" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Lớp học">
              <option></option>
              <?php
              if (isset($this->model_home->data['lop_hoc']) && !empty($this->model_home->data['lop_hoc'])) {
                $lop_hoc = $this->model_home->data['lop_hoc'];
                foreach ($lop_hoc as $row) { ?>
                  <option value="<?= $row['ten_lop'] ?>" <?= (isset($_GET['lop'])  && $_GET['lop'] == $row['ten_lop'])  ? 'selected="selected"' : false  ?>><?= $row['ten_lop'] ?></option>
                <?php }
              } else { ?>
                <option value="">Không có dữ liệu</option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">Lựa chọn môn học để hiện thị chi tiết lịch học</label>
          <div class="row fv-row">
            <select name="mon" id="mon" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Môn học">
              <option></option>
              <?php
              if (isset($this->model_home->data['mon_hoc']) && !empty($this->model_home->data['mon_hoc'])) {
                $mon_hoc = $this->model_home->data['mon_hoc'];
                foreach ($mon_hoc as $row) { ?>
                  <option value="<?= $row['ma_mon'] ?>" <?= (isset($_GET['mon'])  && $_GET['mon'] == $row['ma_mon'])  ? 'selected="selected"' : false  ?>><?= $row['ma_mon'] ?></option>
                <?php }
              } else { ?>
                <option value="">Không có dữ liệu</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>

    </form>

  </div>


</div>

<br>
<div class="card">
  <div class="card-header border-0 pt-6">
    <div class="card-title">
      <div class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-6">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
          </svg>
        </span>
        <input type="text" data-kt-link-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm nhanh" />
      </div>
    </div>
    <div class="card-toolbar">
      <div class="d-flex justify-content-end" data-kt-link-table-toolbar="base">

        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
          <div class="px-7 py-5" data-kt-link-table-filter="form">
            <div class="d-flex justify-content-end">
              <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-link-table-filter="reset">Reset</button>
              <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-link-table-filter="filter">Apply</button>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_link">
          <span class="svg-icon svg-icon-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
              <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
            </svg>
          </span>
          Thêm bảng điểm
        </button>
      </div>

      <div class="d-flex justify-content-end align-items-center d-none" data-kt-link-table-toolbar="selected">
        <div class="fw-bold me-5">
          <span class="me-2" data-kt-link-table-select="selected_count"></span>Selected
        </div>
        <button type="button" class="btn btn-danger" data-kt-link-table-select="delete_selected">Delete Selected</button>
      </div>

      <div class="modal fade" id="kt_modal_update_link" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
          <div class="modal-content">
            <div class="modal-header" id="kt_modal_update_link_header">
              <h2 class="fw-bold">Thêm bảng điểm mới</h2>
              <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-links-modal-action="close">
                <span class="svg-icon svg-icon-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
              <form id="kt_modal_update_link_form" class="form" action="#">
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_link_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_link_header" data-kt-scroll-wrappers="#kt_modal_update_link_scroll" data-kt-scroll-offset="300px">
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">Tên hiển thị</label>
                    <input type="text" name="link_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="AP" value="AP">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">URL</label>
                    <input type="link" name="link_url" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="https://ap.poly.edu.vn/" value="https://ap.poly.edu.vn/">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">Mô tả</label>
                    <textarea name="link_mota" class="form-control form-control-solid mb-3 mb-lg-0">Ap trường</textarea>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                </div>

                <div class="text-center pt-15">
                  <button type="reset" class="btn btn-light me-3" data-kt-links-modal-action="cancel">Hủy</button>
                  <button type="submit" class="btn btn-primary" data-kt-links-modal-action="submit">
                    <span class="indicator-label">Thêm</span>
                    <span class="indicator-progress">Đang xử lý...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="kt_modal_add_link" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
          <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_link_header">
              <h2 class="fw-bold">Thêm mới liên kết</h2>
              <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-links-modal-action="close">
                <span class="svg-icon svg-icon-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
              <form id="kt_modal_add_link_form" class="form" action="#">
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_link_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_link_header" data-kt-scroll-wrappers="#kt_modal_add_link_scroll" data-kt-scroll-offset="300px">
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">Tên hiển thị</label>
                    <input type="text" name="link_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="AP" value="AP">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">URL</label>
                    <input type="link" name="link_url" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="https://ap.poly.edu.vn/" value="https://ap.poly.edu.vn/">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                  <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="required fw-semibold fs-6 mb-2">Mô tả</label>
                    <textarea name="link_mota" class="form-control form-control-solid mb-3 mb-lg-0">Ap trường</textarea>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                  </div>
                </div>

                <div class="text-center pt-15">
                  <button type="reset" class="btn btn-light me-3" data-kt-links-modal-action="cancel">Hủy</button>
                  <button type="submit" class="btn btn-primary" data-kt-links-modal-action="submit">
                    <span class="indicator-label">Thêm</span>
                    <span class="indicator-progress">Đang xử lý...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body py-4">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_links">
      <thead>
        <?php if (!empty($this->model_home->data['diem_cua_mon'])) {
          $mon_hoc = $this->model_home->data['diem_cua_mon'];
        ?>
          <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
              <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_links .form-check-input" value="1" />
              </div>
            </th>

            <th class="w-50px">STT</th>
            <th class="min-w-125px">MSSV</th>
            <th class="min-w-125px">Họ và tên</th>
            <?php
            if (!empty($mon_hoc['diem'])) {
              $diem1 = $mon_hoc['diem'];
              $array_diem1 = explode(',', $diem1);
              foreach ($array_diem1 as $key) {
                echo  '<th class="min-w-125px">' . $key . '</th>';
              }
            } ?>
            <th class="min-w-125px">Nhận xét</th>
            <th class="text-end min-w-100px">Phân loại</th>

          <?php  } ?>
          </tr>
      </thead>
      <tbody class="text-gray-600 fw-semibold">

        <?php
        if (isset($this->model_home->data['bang_diem'])) {
          $data = $this->model_home->data['bang_diem'];
          $index = 1;
          foreach ($data as $item) {
            extract($item) ?>

            <tr>
              <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="<?= $index ?>">
                </div>
              </td>
              <td> <?= $index ?> </td>
              <td> <?= $mssv ?> </td>
              <td> <?= $ho_ten ?> </td>
              <?php
              if (!empty($array_diem)) {
                $diem = json_decode($array_diem, true);
                foreach ($diem as $key => $value) {
                  echo  '<td contenteditable class="diem" >' . $value . '</td>';
                }
              }
              ?>
              <td contenteditable> <?= $nhan_xet ?> </td>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" style=" width: 1.4em; height: 1.4em;" <?= $phan_loai == 'gioi' ? 'checked' : false; ?> data-id1="<?= $id ?>" name="phan_loai_<?= $id ?>" value="gioi">
                  <label class="form-check-label" for="gioi" id="gioi">Giỏi</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" style=" width: 1.4em;height: 1.4em;" <?= $phan_loai == 'yeu' ? 'checked' : false;  ?> data-id1="<?= $id ?>" name="phan_loai_<?= $id ?>" value="yeu">
                  <label class="form-check-label" for="yeu" id="yeu">Yếu</label>
                </div>

              </td>

            </tr>

        <?php $index++;
          }
        } ?>

      </tbody>
    </table>
  </div>
</div>
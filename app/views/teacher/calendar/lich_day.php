<div class="kt-portlet">
  <div class="kt-portlet__body">
    <form method="get" action="">
      <div class="form-group">
        <label for="day">Chọn trạng thái</label>
        <select name="status" id="status" onchange="this.form.submit();" class="form-control">
          <option value="1" <?= (isset($_GET['status'])  && $_GET['status'] == 1) || !isset($_GET['status']) ? 'selected="selected"' : false  ?>>Lịch đang dạy</option>
          <option value="0" <?= isset($_GET['status']) && $_GET['status'] == 0 ? 'selected="selected"' : false  ?>>Lịch đã dạy</option>
        </select> <span class="form-text text-muted">Lựa chọn trạng thái để hiện thị chi tiết lịch học</span>
      </div>
      <div class="form-group">
        <label for="day">Thời gian</label>
        <select name="day" id="day" onchange="this.form.submit();" class="form-control">
          <option value="7" <?= (isset($_GET['day'])  && $_GET['day'] == 7) || !isset($_GET['day']) ? 'selected="selected"' : false  ?>>7</option>
          <option value="9" <?= isset($_GET['day']) && $_GET['day'] == 9 ? 'selected="selected"' : false  ?>>9</option>
        </select> <span class="form-text text-muted">Lựa chọn thời gian để hiện thị chi tiết lịch học</span>
      </div>
    </form>
  </div>
</div>
<div class="kt-portlet">
  <div class="kt-portlet__head kt-portlet__head--lg">
    <div class="kt-portlet__head-label"><span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon-event-calendar-symbol"></i></span>
      <h3 class="kt-portlet__head-title">
        <?= $this->data['page_title'] ?>
      </h3>
    </div>
  </div>
  <div class="table-responsive">
    <div class="kt-portlet__body">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
          <div class="col-sm-6 text-left"></div>
          <div class="col-sm-6 text-right">
            <div class="dt-buttons btn-group"> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Print</span></button> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>PDF</span></button> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1158px;">
              <thead>
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-label="STT: activate to sort column ascending">STT</th>
                  <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 44.25px;" aria-label="Ngày: activate to sort column ascending">Học kỳ</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 57.25px;" aria-label="Tên lớp: activate to sort column ascending">Tên lớp</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46.25px;" aria-label="Mã môn: activate to sort column ascending">Mã môn</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-label="Xem: activate to sort column ascending">Xem</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-label=" Ngày: activate to sort column ascending">Ngày</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-label="Ca học: activate to sort column ascending">Ca học</th>
                  <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;;" aria-label="Phòng: activate to sort column ascending" aria-sort="descending">Phòng</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width:46.25px;" aria-label="Số sinh viên: activate to sort column ascending">Số sinh viên</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 52.25px;" aria-label="Ghi chú: activate to sort column ascending">Ghi chú</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 74.25px;" aria-label="Bắt đầu: activate to sort column ascending">Bắt đầu</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 74.25px;" aria-label="Kết thúc: activate to sort column ascending">Kết thúc</th>
                </tr>
              </thead>
              <tbody>

                <?php


                if (!empty($this->model_home->data['lich_day'])) {
                  $lichday = $this->model_home->data['lich_day'];

                  foreach ($lichday as $row) { ?>

                    <tr>
                      <td tabindex="0"><?= $row['id'] ?></td>
                      <td class="text-capitalize"><?= $row['ten_hocky'] ?></td>
                      <td><?= $row['ten_lop'] ?></td>
                      <td><?= $row['ma_mon'] ?></td>
                      <td></td>
                      <td><?= $row['ngay_hoc'] ?></td>
                      <td><?= $row['ca_hoc'] ?></td>
                      <td><?= $row['phong_hoc'] ?></td>
                      <td><?= $row['so_sv'] ?></td>
                      <td><?= $row['ghi_chu'] ?></td>
                      <td><?= $row['ngay_bat_dau'] ?></td>
                      <td><?= $row['ngay_ket_thuc'] ?></td>
                    </tr>
                  <?php }
                } else { ?>

                  <tr>
                    <td colspan="12" class="text-center">Không có dữ liệu</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Đang xem 1 đến 3 trong tổng số 3 mục</div>
          </div>
          <div class="col-sm-12 col-md-7 dataTables_pager">
            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Xem <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> mục</label></div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Trước</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Tiếp</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade" style="display: none;">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title">Nội dung</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"></button>
      </div>
      <div class="modal-body ">
        <p class="schedule-body"></p>
      </div>
      <div class="modal-footer"><button type="button" data-dismiss="modal" class="btn btn-secondary">Đóng</button></div>
    </div>
  </div>
</div>
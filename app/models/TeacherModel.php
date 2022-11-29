<?php

class TeacherModel extends Model
{
    public $data = array();
    public $data_public = array();



    public function __construct()
    {
        # code...
        $this->data = [
            'hoc_ky' => $this->get_list("SELECT * FROM  `hoc_ky` WHERE id_teacher  = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY thu_tu"),
            'khoa' => $this->get_list("SELECT * FROM `khoa` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY thu_tu"),
            'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'ORDER BY id_mon DESC"),
            'loai_lop' => $this->get_list("SELECT * FROM `loai_lop` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'ORDER BY id_loai DESC"),
            'lien_ket' => $this->get_list("SELECT * FROM `lien_ket` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'ORDER BY id_lienket DESC"),


        ];
    }


    public function index()
    {
        # code...

        $this->data = [
            'lich_day' => $this->get_list("SELECT lich_day.*, loai_lop.ten_lop, mon_hoc.ten_mon, mon_hoc.ma_mon FROM `lich_day`
            INNER JOIN loai_lop ON lich_day.id_lop = loai_lop.id_loai
            INNER JOIN mon_hoc ON lich_day.id_mon = mon_hoc.id_mon
            WHERE lich_day.id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY lich_day.id DESC"),

            'loai_lop' => $this->get_list("SELECT * FROM `loai_lop`

            WHERE loai_lop.id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY loai_lop.id_loai DESC"),


        ];
    }

    public function bang_diem()
    {
        # code...
        $this->data = [
            'lop_hoc' => $this->get_list("SELECT * FROM `loai_lop` ORDER BY id_loai DESC"),
            'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` ORDER BY id_mon DESC"),

        ];

        // $response = '
        //       <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1158px;">
        //       <thead>';

        // if (!empty($this->model_home->data['diem_cua_mon'])) {
        //     $mon_hoc = $this->model_home->data['diem_cua_mon'];

        //     $response .= '
        //           <tr role="row">
        //             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-label="STT: activate to sort column ascending">STT</th>
        //             <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 44.25px;" aria-label="MSSV: activate to sort column ascending">MSSV</th>
        //             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 57.25px;" aria-label="Họ tên: activate to sort column ascending">Họ tên</th>
        //           ';

        //     if (!empty($mon_hoc['diem'])) {
        //         $diem1 = $mon_hoc['diem'];
        //         $array_diem1 = explode(',', $diem1);
        //         foreach ($array_diem1 as $key) {
        //             $response .=   '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46.25px;" aria-label="' . $key . ': activate to sort column ascending">' . $key . '</th>';
        //         }
        //     }
        // }
        // $response .= '
        //           </tr>
        //       </thead>
        //       <tbody>';

        // if (!empty($this->model_home->data['bang_diem'])) {
        //     $bang_diem = $this->model_home->data['bang_diem'];
        //     $i = 0;
        //     foreach ($bang_diem as $row) {
        //         $response .= ' 
        //             <tr>
        //               <td tabindex="0">' . ++$i . '</td>
        //               <td class="text-capitalize">' . $row['mssv'] . '</td>
        //               <td>' . $row['ho_ten'] . '</td> ';

        //         if (!empty($row['array_diem'])) {
        //             $diem = json_decode($row['array_diem'], true);
        //             foreach ($diem as $key => $value) {
        //                 $response .=   '<td contenteditable>' . $value . '</td>';
        //             }
        //             $response .= ' </tr>';
        //         }
        //     }
        // } else {
        //     $response .= '
        //           <tr>
        //             <td colspan="12" class="text-center">Không có dữ liệu</td>
        //           </tr>';
        // }

        // $response .= '
        //       </tbody>
        //     </table>
        // ';




        if (isset($_GET['lop']) && !empty($_GET['lop'])) {

            $this->data = [
                'lop_hoc' => $this->get_list("SELECT * FROM `loai_lop` ORDER BY id_loai DESC"),
                'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` ORDER BY id_mon DESC"),
                'bang_diem' => $this->get_list("SELECT diem_sv.* ,
                `mon_hoc`.ma_mon,  `loai_lop`.ten_lop 
                FROM diem_sv 
                INNER JOIN `mon_hoc` on mon_hoc.id_mon   = diem_sv.id_mon 
                INNER JOIN `loai_lop` on loai_lop.id_loai  = diem_sv.id_lop
                INNER JOIN `khoa` on khoa.id_khoa  = loai_lop.id_khoa
                WHERE loai_lop.ten_lop like '%" . $_GET['lop'] . "%' ORDER BY diem_sv.id_mon DESC
                ")
            ];
            if (isset($_GET['mon']) && !empty($_GET['mon'])) {
                $this->data = [
                    'lop_hoc' => $this->get_list("SELECT * FROM `loai_lop` ORDER BY id_loai DESC"),
                    'diem_cua_mon' => $this->get_row("SELECT * FROM `mon_hoc`  WHERE mon_hoc.ma_mon = '" . $_GET['mon'] . "' ORDER BY id_mon DESC"),
                    'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` ORDER BY id_mon DESC"),
                    'bang_diem' => $this->get_list("SELECT diem_sv.* ,
                    `mon_hoc`.ma_mon,  `loai_lop`.ten_lop
                    FROM diem_sv 
                    INNER JOIN `mon_hoc` on mon_hoc.id_mon   = diem_sv.id_mon 
                    INNER JOIN `loai_lop` on loai_lop.id_loai  = diem_sv.id_lop
                    INNER JOIN `khoa` on khoa.id_khoa  = loai_lop.id_khoa
                    WHERE mon_hoc.ma_mon LIKE '%" . $_GET['mon'] . "%' ORDER BY diem_sv.id_mon DESC
                    ")
                ];
            } else {
                $this->data = [
                    'lop_hoc' => $this->get_list("SELECT * FROM `loai_lop` ORDER BY id_loai DESC"),
                    'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` ORDER BY id_mon DESC"),

                ];
            }
        }


        // edit dữ liệu điểm





        if (isset($_POST['id'])) {
            $id_diem = $_POST['id'];
            $text = $_POST['text'];
            $column_name = $_POST['column_name'];
            $is_update =  $this->update_value('diem_sv', [$column_name => $text], "id = $id_diem");
            // $is_remove =  $this->remove('diem_sv', "id = $id_diem");
            if ($is_update) {
                $response['status'] = true;
                die(json_encode($response));
            }
        }
    }

    public function tao_bang_diem()
    {
        # code...
        $this->data = [
            'hoc_ky' => $this->get_list("SELECT * FROM `hoc_ky` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY id_hocky DESC"),
            'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'ORDER BY id_mon DESC"),
            'loai_lop' => $this->get_list("SELECT * FROM `loai_lop` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'ORDER BY id_loai DESC"),
            'khoa' => $this->get_list("SELECT * FROM `khoa` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY id_khoa DESC"),

        ];



        if (isset($_POST["import"])) {
            $hoc_ky = $_POST['hoc_ky'];
            $khoa = $_POST['khoa'];
            $mon_hoc = $_POST['mon_hoc'];
            $loai_lop = $_POST['loai_lop'];

            $id_teacher = $this->getInfoTeacher('id_teacher');

            $fileName = $_FILES["file_import"]["name"];
            $fileExtension = explode('.', $fileName);
            $fileExtension = strtolower(end($fileExtension));
            $newFileName = date("Y.m.d")  . date("h.i.sa") . "." . $fileExtension;
            $pathFile = "uploads/" . $newFileName;
            $upload =  move_uploaded_file($_FILES['file_import']['tmp_name'], $pathFile);


            $ds_monhoc = $this->get_row("SELECT * FROM `mon_hoc`");

            $array_diem = explode(',', $ds_monhoc['diem']);

            foreach ($array_diem as  $value) {
                $format_array_diem[$value] = null;
            }

            // if (!empty($upload)) {
            //     $objReader = PHPExcel_IOFactory::createReaderForFile($pathFile);
            //     $objExcel = $objReader->load($pathFile);
            //     $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);
            //     print_r($sheetData);
            // }

            if (!empty($upload)) {

                $objFile = PHPExcel_IOFactory::identify($pathFile);
                $objData = PHPExcel_IOFactory::createReader($objFile);

                $objPHPExcel = $objData->load($pathFile);

                $sheet = $objPHPExcel->setActiveSheetIndex(0);

                $TotalRow = $sheet->getHighestRow();
                $LastColumn = $sheet->getHighestColumn();
                $TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

                $data_import = [];

                for ($i = 2; $i <= $TotalRow; $i++) {
                    for ($j = 0; $j < $TotalCol; $j++) {
                        $data_import[$i - 2][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();
                    }
                }
                unlink($pathFile);

                foreach ($data_import as $row) {
                    $data_insert = [
                        'mssv' => $row[1],
                        'ho_ten' => $row['2'],
                        'email' => $row['3'],
                        'sdt' => $row['4'],
                        'thongtin_sv' => json_encode($row),
                        'id_mon' => $mon_hoc,
                        'id_lop' => $loai_lop,
                        'array_diem' => json_encode($format_array_diem),
                        'id_teacher' => $id_teacher
                    ];
                    $this->insert("diem_sv", $data_insert);
                }
            }
        }
    }

    public function fetch_data()
    {


        # code...
        $this->data = [
            'thanh_ngu' => $this->get_list("SELECT * FROM `thanh_ngu` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
            'links' => $this->get_list("SELECT * FROM `lien_ket` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
            'khoa' => $this->get_list("SELECT * FROM `khoa` 
            WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY thu_tu"),

            'loai_lop' => $this->get_list("SELECT * FROM `loai_lop` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
            'hoc_ky' => $this->get_list("SELECT * FROM `hoc_ky` WHERE 
            id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'  ORDER BY thu_tu"),
            'mon_hoc' => $this->get_list("SELECT * FROM `mon_hoc` WHERE 
             id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
            'loai_diem' => $this->get_list("SELECT * FROM `loai_diem` WHERE 
              id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'")

        ];

        // loại lớp
        $loai_lop = $this->data['loai_lop'];

        $response['loai_lop'] = '';
        $response['loai_lop'] .= '
            <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1156px;">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 66.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107.25px;" aria-label="Mã lớp: activate to sort column ascending">Mã lớp</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 141.25px;" aria-label="Mô tả: activate to sort column ascending">Mô tả</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Quản lý: activate to sort column ascending">Quản lý</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($loai_lop as $item) {
            $response['loai_lop'] .= '
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">' . $item['id_loai'] . '</td>
                    <td>' . $item['ten_lop'] . '</td>
                    <td>' . $item['mo_ta'] . '</td>
                    <td>
                    <button class="btn btn-primary m-1" onclick="getDetails_lop(' . $item['id_loai'] . ')">Update</button>
                    <a href="#deleteModal" data-toggle="modal" class="btn btn-danger m-1" >Delete</a>
                    </td> 
                    </tr>
                ';
        }

        $response['loai_lop'] .= '</tbody>
          </table>';

        // thành ngữ
        $thanh_ngu = $this->data['thanh_ngu'];

        $response['thanh_ngu'] = '';
        $response['thanh_ngu'] .= '
        <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1156px;">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 66.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107.25px;" aria-label="Nội dung: activate to sort column ascending">Nội dung</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Quản lý: activate to sort column ascending">Quản lý</th>
          </tr>
        </thead>
        <tbody>
        ';

        $index_thanhngu = 0;
        foreach ($thanh_ngu as $item) {
            $index_thanhngu++;
            $response['thanh_ngu'] .=
                '
        <tr role="row" class="odd">
        <td tabindex="0" class="sorting_1">' . $index_thanhngu . '</td>
        <td >' . $item['noi_dung'] . '</td>
        <td>
        <button class="btn btn-primary m-1" onclick="getDetails(' . $item['id'] . ')">Update</button>
        <button class="btn btn-danger m-1" onclick="delete_tn(' . $item['id'] . ')">Delete</button>
        </td>
      </tr>

           ';
        }
        $response['thanh_ngu'] .= '</tbody>
        </table>';




        // liên kết
        $links = $this->data['links'];

        $response['links'] = '
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_links">
        <thead>
          <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
              <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_links .form-check-input" value="1" />
              </div>
            </th>
            <th class="w-30px">STT</th>
            <th class="min-w-125px">Tên liên kết</th>
            <th class="min-w-125px">URL</th>
            <th class="min-w-125px">Mô tả</th>
            <th class="text-end min-w-100px">Actions</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
        ';

        $index_link = 1;
        foreach ($links as $item) {
            extract($item);
            $response['links'] .=
                '
                <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="<?= $id_lienket ?>">
                  </div>
                </td>
                <td>' . $index_link . '</td>
                <td> ' . $ten . '</td>
                <td> ' . $url . ' </td>
                <td>' . $mo_ta . ' </td>
                <td class="text-end">
                  <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                    <span class="svg-icon svg-icon-5 m-0">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                      </svg>
                    </span>
                  </a>
                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                    <div class="menu-item px-3">
                      <a href="javascript:void(0)" class="menu-link px-3">Edit</a>
                    </div>
                    <div class="menu-item px-3">
                      <a href="javascript:void(0)" class="menu-link px-3" data-kt-links-table-filter="delete_row">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            ';
        }
        $response['links'] .= '</tbody>
        </table>';
        $index_link++;



        // khóa học
        $khoa = $this->data['khoa'];

        $response['khoa'] = '
        <table class="table table-bordered table-content dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1159px;">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
                  <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 44.25px;" aria-label="Tên khóa: activate to sort column ascending">Tên khóa</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 54.25px;" aria-label="Quản lý: activate to sort column ascending">Quản lý</th>
                </tr>
              </thead>
         <tbody>
        ';

        foreach ($khoa as $item) {
            $response['khoa'] .=
                '
                <tr class="odd">
                <td tabindex="0" class="sorting_1">' . $item['thu_tu'] . '</td>
                <td>' . $item['ten_khoa'] . '</td>
                <td>
                <button class="btn btn-primary m-1" onclick="getDetails_khoa(' . $item['id_khoa'] . ')">Update</button>
                <button class="btn btn-danger m-1" onclick="delete_khoa(' . $item['id_khoa'] . ')">Delete</button>
                </td>
              </tr>

           ';
        }
        $response['khoa'] .= '</tbody>
        </table>';






        // học kỳ
        $hoc_ky = $this->data['hoc_ky'];

        $response['hoc_ky'] = '
        <table class="table table-bordered table-content dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1159px;">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 25.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
            <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 44.25px;" aria-label="Tên học kỳ: activate to sort column ascending">Tên học kỳ</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 54.25px;" aria-label="Quản lý: activate to sort column ascending">Quản lý</th>

          </tr>
        </thead>
        <tbody>';

        foreach ($hoc_ky as $item) {
            $response['hoc_ky'] .=
                '
            <tr class="odd">
            <td tabindex="0" class="sorting_1">' . $item['thu_tu'] . '</td>
            <td class="text-capitalize">' . $item['ten_hocky'] . '</td>
            <td>
            <button class="btn btn-primary m-1" onclick="getDetails_hocky(' . $item['id_hocky'] . ')">Update</button>
            <button class="btn btn-danger m-1" onclick="delete_hocky(' . $item['id_hocky'] . ')">Delete</button>
            </td>
          </tr>

       ';
        }
        $response['hoc_ky'] .= '</tbody>
    </table>';




        // môn học

        $mon_hoc = $this->data['mon_hoc'];

        $response['mon_hoc'] = '
    <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1156px;">
    <thead>
      <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 66.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107.25px;" aria-label="Mã môn: activate to sort column ascending">Mã môn</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 141.25px;" aria-label="Tên môn: activate to sort column ascending">Tên môn</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 164.25px;" aria-label="Loại điểm xét: activate to sort column ascending">Loại điểm xét</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 165.25px;" aria-label="Điểm: activate to sort column ascending">Điểm</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Ghi chú: activate to sort column ascending">Ghi chú</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Action: activate to sort column ascending">Action</th>
      </tr>
    </thead>
    <tbody>
    ';

        foreach ($mon_hoc as $item) {
            $response['mon_hoc'] .=
                '
        <tr class="odd">
        <td tabindex="0" class="sorting_1">' . $item['id_mon'] . '</td>
        <td class="text-capitalize">' . $item['ma_mon'] . '</td>
        <td >' . $item['ten_mon'] . '</td>
        <td >' . $item['loai_diem_xet'] . '</td>
        <td >' . $item['diem'] . '</td>
        <td >' . $item['ghi_chu'] . '</td>
        <td>
        <button class="btn btn-primary m-1" onclick="getDetails_monhoc(' . $item['id_mon'] . ')">Update</button>
        <button class="btn btn-danger m-1" onclick="delete_monhoc(' . $item['id_mon'] . ')">Delete</button>
        </td>
      </tr>

   ';
        }
        $response['mon_hoc'] .= '</tbody>
</table>';




        // loại điểm

        $loai_diem = $this->data['loai_diem'];

        $response['loai_diem'] = '
        <table class="table table-bordered table-content dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1156px;">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 66.25px;" aria-sort="ascending" aria-label="STT: activate to sort column descending">STT</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107.25px;" aria-label="Tên điểm: activate to sort column ascending">Tên điểm</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 104.25px;" aria-label="Quản lý: activate to sort column ascending">Quản lý</th>
          </tr>
        </thead>
        <tbody>
         
        ';

        $index_diem = 0;

        foreach ($loai_diem as $item) {
            $response['loai_diem'] .=
                '
        <tr class="odd">
        <td tabindex="0" class="sorting_1">' . ++$index_diem . '</td>
        <td class="text-capitalize">' . $item['ten_diem'] . '</td>
        <td>
        <button class="btn btn-primary m-1" onclick="getDetails_diem(' . $item['id'] . ')">Update</button>
        <button class="btn btn-danger m-1" onclick="delete_diem(' . $item['id'] . ')">Delete</button>
        </td>
      </tr>

   ';
        }
        $response['loai_diem'] .= '</tbody>
</table>';


        die(json_encode($response));
    }



    public function profile()
    {
        # code...


        if (isset($_POST['old-password'])) {


            $data = [
                'old-pass' => check_string($_POST['old-password']),
                'new-pass' => check_string($_POST['new-password']),
                'again-newpass' => check_string($_POST['again-newpassword']),
            ];


            $result = array_filter($data, 'myFilter');

            if (!$result) {

                if (count_string($data['new-pass']) < 8) {

                    $response['status'] = false;
                    $response['title'] = 'Đổi mật khẩu thất bại';
                    $response['message'] = 'Mật khẩu mới phải từ 8 ký tự trở lên';
                    die(json_encode($response));
                } elseif ($data['new-pass'] !=  $data['again-newpass']) {
                    $response['status'] = false;
                    $response['title'] = 'Đổi mật khẩu thất bại';
                    $response['message'] = 'Mật khẩu mới không khớp';
                    die(json_encode($response));
                } elseif (typepass($data['new-pass']) == $this->getInfoTeacher('password')) {
                    $response['status'] = false;
                    $response['title'] = 'Đổi mật khẩu thất bại';
                    $response['message'] = 'Mật khẩu mới không được trùng với mật khẩu cũ';
                    die(json_encode($response));
                } elseif (typepass($data['old-pass']) != $this->getInfoTeacher('password')) {
                    $response['status'] = false;
                    $response['title'] = 'Đổi mật khẩu thất bại';
                    $response['message'] = 'Mật khẩu cũ không khớp';
                    die(json_encode($response));
                } else {

                    $data_update = [
                        'password' => typepass($data['new-pass'])
                    ];

                    $is_change = $this->update_value('teachers', $data_update, "email = '" . $this->getInfoTeacher('email') . "'");

                    if ($is_change) {

                        $response['status'] = true;
                        $response['title'] = 'Đổi mật khẩu thành công';
                        $response['message'] = 'Bạn đã đổi mật khẩu thành công';
                        die(json_encode($response));
                    } else {
                        $response['status'] = false;
                        $response['title'] = 'Đổi mật khẩu thất bại';
                        $response['message'] = 'Đã xảy ra lỗi';
                        die(json_encode($response));
                    }
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Đổi mật khẩu thất bại';
                $response['message'] = 'Vui lòng điền đầy đủ thông tin';
                die(json_encode($response));
            }
        }
    }



    public function thanh_ngu()
    {
        # code...
        $this->data = [
            'thanh_ngu' => $this->get_list("SELECT * FROM `thanh_ngu` 
            WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "' ORDER BY id DESC"),
        ];



        if (isset($_POST['is_detail'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `thanh_ngu` WHERE id = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];
            $noidung = $_POST['tn_noidung_update'];
            $status = $_POST['tn_status_update'];

            if (!empty($noidung)) {

                $result = $this->update_value('thanh_ngu', ['noi_dung' => $noidung, 'status' => $status], "id = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công!';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Cập nhật thất bại!';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Vui lòng không để trống dữ liệu!';
                die(json_encode($response));
            }
        }



        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('thanh_ngu', "id = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['title'] = 'Xóa thành công thành công';
                $response['message'] = 'Bạn đã xóa thành công dữ liệu';
                die(json_encode($response));
            }
        }


        if (isset($_POST['is_add'])) {

            $data_insert = [
                'noi_dung' => check_string($_POST['tn_noidung']),
                'status' => check_string($_POST['tn_status']),
                'id_teacher' => $this->getInfoTeacher('id_teacher'),
            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('thanh_ngu', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['message'] = 'Bạn đã thêm mới thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Đã có lỗi xảy ra';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Đã có lỗi xảy ra';
                die(json_encode($response));
            }
        }
    }

    public function links()
    {
        # code...


        $this->data = [
            'lien_ket' => $this->get_list("SELECT * FROM `lien_ket` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
        ];

        if (isset($_POST['is_detail'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `lien_ket` WHERE id_lienket = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['is_updatelink'])) {
            $id = $_POST['id'];
            $data_post = [
                'ten' => check_string($_POST['link_name_update']),
                'url' => check_string($_POST['link_url_update']),
                'mo_ta' => check_string($_POST['link_mota_update']),
            ];

            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('lien_ket', $data_post, "id_lienket = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công!';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Cập nhật thất bại!';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Vui lòng không để trống dữ liệu';
                die(json_encode($response));
            }
        }




        if (isset($_POST['is_removelink'])) {

            $id = $_POST['id'];
            $result =  $this->remove('lien_ket', "id_lienket = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['message'] = 'Xóa dữ liệu thành công!';
                die(json_encode($response));
            } else {
                $response['status'] = true;
                $response['message'] = 'Xóa dữ liệu không thành công!';
                die(json_encode($response));
            }
        }


        if (isset($_POST['is_addlink'])) {

            $data_insert = [
                'ten' => check_string($_POST['link_name']),
                'url' => check_string($_POST['link_url']),
                'mo_ta' => check_string($_POST['link_mota']),
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('lien_ket', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['message'] = 'Thêm mới thành công!';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Đã có lỗi xảy ra!';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Đã có lỗi xảy ra!';
                die(json_encode($response));
            }
        }
    }

    public function khoa_hoc()
    {
        # code...



        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `khoa` WHERE id_khoa = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['action_update'])) {


            $id = $_POST['id'];
            $data_post = [
                'ten_khoa' => check_string($_POST['name']),
                'thu_tu' => ($_POST['thu_tu']),
            ];


            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('khoa', $data_post, "id_khoa = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['title'] = 'Cập nhật công thành công';
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Đã có lỗi xảy ra';
                    $response['message'] = 'Cập nhật thất bại';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Đã có lỗi xảy ra';
                $response['message'] = 'Vui lòng không để trống dữ liệu';
                die(json_encode($response));
            }
        }



        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('khoa', "id_khoa = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['title'] = 'Xóa thành công thành công';
                $response['message'] = 'Bạn đã xóa thành công dữ liệu';
                die(json_encode($response));
            }
        }

        if (isset($_POST['insert_data'])) {

            $data_insert = [
                'ten_khoa' => check_string($_POST['name']),
                'thu_tu' => $_POST['thu_tu'],
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];


            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('khoa', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['title'] = 'Thêm thành công';
                    $response['message'] = 'Bạn đã thêm mới thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Thêm mới thất bại';
                    $response['message'] = 'Đã có lỗi xảy ra';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Thêm mới thất bại';
                $response['message'] = 'Đã có lỗi xảy ra';
                die(json_encode($response));
            }
        }
    }

    // học kỳ
    public function hoc_ky()
    {
        # code...


        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `hoc_ky` WHERE id_hocky = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['action_update'])) {
            $id = $_POST['id'];
            $data_post = [
                'ten_hocky' => check_string($_POST['name']),
                'thu_tu' => ($_POST['thu_tu']),
            ];

            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('hoc_ky', $data_post, "id_hocky = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['title'] = 'Cập nhật công thành công';
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Đã có lỗi xảy ra';
                    $response['message'] = 'Cập nhật thất bại';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Đã có lỗi xảy ra';
                $response['message'] = 'Vui lòng không để trống dữ liệu';
                die(json_encode($response));
            }
        }




        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('hoc_ky', "id_hocky = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['title'] = 'Xóa thành công thành công';
                $response['message'] = 'Bạn đã xóa thành công dữ liệu';
                die(json_encode($response));
            }
        }


        if (isset($_POST['insert_data'])) {

            $data_insert = [
                'ten_hocky' => check_string($_POST['name']),
                'thu_tu' => $_POST['thu_tu'],
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('hoc_ky', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['title'] = 'Thêm thành công';
                    $response['message'] = 'Bạn đã thêm mới thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Thêm mới thất bại';
                    $response['message'] = 'Đã có lỗi xảy ra';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Thêm mới thất bại';
                $response['message'] = 'Đã có lỗi xảy ra';
                die(json_encode($response));
            }
        }
    }
    // loại lớp

    public function loai_lop()
    {
        # code...
        $this->data = [
            'loai_lop' => $this->get_list("SELECT * FROM `loai_lop`"),
            'khoa' => $this->get_list("SELECT * FROM `khoa`"),
        ];


        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `loai_lop` WHERE id_loai = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['action_update'])) {
            $id = $_POST['id'];
            $data_post = [
                'ten_lop' => check_string($_POST['name']),
                'mo_ta' => check_string($_POST['mo_ta']),
                'id_khoa' => ($_POST['khoa']),
            ];

            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('loai_lop', $data_post, "id_loai = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['title'] = 'Cập nhật công thành công';
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Đã có lỗi xảy ra';
                    $response['message'] = 'Cập nhật thất bại';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Đã có lỗi xảy ra';
                $response['message'] = 'Vui lòng không để trống dữ liệu';
                die(json_encode($response));
            }
        }




        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('loai_lop', "id_loai = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['title'] = 'Xóa thành công thành công';
                $response['message'] = 'Bạn đã xóa thành công dữ liệu';
                die(json_encode($response));
            }
        }


        if (isset($_POST['insert_data'])) {

            $data_insert = [
                'ten_lop' => check_string($_POST['name']),
                'mo_ta' => check_string($_POST['mo_ta']),
                'id_khoa' => $_POST['khoa'],
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('loai_lop', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['title'] = 'Thêm thành công';
                    $response['message'] = 'Bạn đã thêm mới thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Thêm mới thất bại';
                    $response['message'] = 'Đã có lỗi xảy ra';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Thêm mới thất bại';
                $response['message'] = 'Đã có lỗi xảy ra';
                die(json_encode($response));
            }
        }
    }

    // môn học

    public function mon_hoc()
    {
        # code...

        $this->data = [
            'loai_diem' => $this->get_list("SELECT * FROM `loai_diem` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
        ];



        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];

            $response['data'] = $this->get_row("SELECT * FROM `mon_hoc` WHERE id_mon = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['action_update'])) {
            $id = $_POST['id'];
            $data_post = [
                'diem' => check_string($_POST['diem']),
                'ma_mon' => check_string($_POST['ma_mon']),
                'ten_mon' => check_string($_POST['ten_mon']),
                'loai_diem_xet' => check_string($_POST['loai_diem_xet']),
                'ghi_chu' => check_string($_POST['ghi_chu']),

            ];

            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('mon_hoc', $data_post, "id_mon = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['title'] = 'Cập nhật công thành công';
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Đã có lỗi xảy ra';
                    $response['message'] = 'Cập nhật thất bại';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Đã có lỗi xảy ra';
                $response['message'] = 'Vui lòng không để trống dữ liệu';
                die(json_encode($response));
            }
        }




        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('mon_hoc', "id_mon = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['title'] = 'Xóa thành công thành công';
                $response['message'] = 'Bạn đã xóa thành công dữ liệu';
                die(json_encode($response));
            }
        }




        if (isset($_POST['insert_data'])) {

            $data_insert = [
                'ten_mon' => check_string($_POST['ten_mon']),
                'ma_mon' => check_string($_POST['ma_mon']),
                'loai_diem_xet' => check_string($_POST['loai_diem_xet']),
                'ghi_chu' => check_string($_POST['ghi_chu']),
                'diem' => $_POST['diem'],
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('mon_hoc', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['title'] = 'Thêm thành công';
                    $response['message'] = 'Bạn đã thêm mới thành công';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['title'] = 'Thêm mới thất bại';
                    $response['message'] = 'Đã có lỗi xảy ra';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['title'] = 'Thêm mới thất bại';
                $response['message'] = 'Đã có lỗi xảy ra';
                die(json_encode($response));
            }
        }
    }


    // loại điểm
    public function loai_diem()
    {
        # code...

        $this->data = [
            'loai_diem' => $this->get_list("SELECT * FROM `loai_diem` WHERE id_teacher = '" . $this->getInfoTeacher('id_teacher') . "'"),
        ];


        if (isset($_POST['is_detail'])) {
            $id = $_POST['id'];
            $response['data'] = $this->get_row("SELECT * FROM `loai_diem`
             WHERE id = '$id'");
            die(json_encode($response));
        }

        if (isset($_POST['is_update'])) {
            $id = $_POST['id'];
            $data_post = [
                'ten_diem' => check_string($_POST['link_ten_diem_update']),
            ];

            $result = array_filter($data_post, 'myFilter');


            if (!($result)) {

                $result = $this->update_value('loai_diem', $data_post, "id = '$id'");

                if ($result) {
                    $response['status'] = true;
                    $response['message'] = 'Bạn đã cập nhật dữ liệu thành công!';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Cập nhật thất bại!';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Vui lòng không để trống dữ liệu!';
                die(json_encode($response));
            }
        }




        if (isset($_POST['is_delete'])) {
            $id = $_POST['id'];
            $result =  $this->remove('loai_diem', "id = '$id'");
            if ($result) {
                $response['status'] = true;
                $response['message'] = 'Bạn đã xóa thành công dữ liệu!';
                die(json_encode($response));
            }
        }


        if (isset($_POST['is_add'])) {

            $data_insert = [
                'ten_diem' => check_string($_POST['loaidiem_ten']),
                'id_teacher' => $this->getInfoTeacher('id_teacher'),

            ];

            $result = array_filter($data_insert, 'myFilter');

            if (!$result) {

                $is_insert  = $this->insert('loai_diem', $data_insert);

                if ($is_insert) {
                    $response['status'] = true;
                    $response['message'] = 'Bạn đã thêm mới thành công!';
                    die(json_encode($response));
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Đã có lỗi xảy ra!';
                    die(json_encode($response));
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Không để trống dữ liệu!';
                die(json_encode($response));
            }
        }
    }

    // lịch dạy


    public function lich_day()
    {
        # code...

        $this->data = [
            'lich_day' => $this->get_list("SELECT lich_day.* ,`hoc_ky`.ten_hocky, `mon_hoc`.ma_mon, `mon_hoc`.ten_mon,  `loai_lop`.ten_lop 
            FROM lich_day 
            INNER JOIN `hoc_ky` on hoc_ky.id_hocky  = lich_day.id_hocky
            INNER JOIN `mon_hoc` on mon_hoc.id_mon   = lich_day.id_mon 
            INNER JOIN `loai_lop` on loai_lop.id_loai  = lich_day.id_lop
             ORDER BY lich_day.id DESC")
        ];


        if (isset($_GET['status'])) {


            if (($_GET['status']) == 1) {
                $this->data = [
                    'lich_day' => $this->get_list("SELECT lich_day.* ,`hoc_ky`.ten_hocky, `mon_hoc`.ma_mon, `mon_hoc`.ten_mon,  `loai_lop`.ten_lop FROM lich_day 
                INNER JOIN `hoc_ky` on hoc_ky.id_hocky  = lich_day.id_hocky
                INNER JOIN `mon_hoc` on mon_hoc.id_mon   = lich_day.id_mon 
                INNER JOIN `loai_lop` on loai_lop.id_loai  = lich_day.id_lop
                WHERE status = 2
                 ORDER BY lich_day.id DESC")
                ];
            } elseif (($_GET['status']) == 0) {
                $this->data = [
                    'lich_day' => $this->get_list("SELECT lich_day.* ,`hoc_ky`.ten_hocky, `mon_hoc`.ma_mon, `mon_hoc`.ten_mon,  `loai_lop`.ten_lop FROM lich_day 
                INNER JOIN `hoc_ky` on hoc_ky.id_hocky  = lich_day.id_hocky
                INNER JOIN `mon_hoc` on mon_hoc.id_mon   = lich_day.id_mon 
                INNER JOIN `loai_lop` on loai_lop.id_loai  = lich_day.id_lop
                WHERE status = 1
                 ORDER BY lich_day.id DESC")
                ];
            }
        }
    }

    public function lich_thi()
    {
        # code...
    }
}

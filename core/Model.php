<?php
class Model extends Database
{

    public $response;

    public function get_item($query)
    {
        # code...
        $this->response['data'] = $this->get_row($query);
        die(json_encode($this->response));
    }


    public function add_item($table, $data_insert)
    {
        # code...

        $result = array_filter($data_insert, 'myFilter');

        if (!$result) {

            $is_insert  = $this->insert($table, $data_insert);

            if ($is_insert) {
                $this->response['status'] = true;
                $this->response['message'] = 'Thêm dữ liệu thành công!';
            } else {
                $this->response['status'] = false;
                $this->response['message'] = 'Thêm dữ liệu thất bại!';
            }
        } else {
            $this->response['status'] = false;
            $this->response['message'] = 'Không để trống dữ liệu!';
        }

        die(json_encode($this->response));
    }


    public function delete_item($table, $where)
    {
        # code...

        $result =  $this->remove($table, $where);
        if ($result) {
            $this->response['status'] = true;
            $this->response['message'] = 'Xóa dữ liệu thành công!';
        } else {
            $this->response['status'] = false;
            $this->response['message'] = 'Xóa dữ liệu thất bại!';
        }

        die(json_encode($this->response));
    }

    public function update_item($table, $data_post, $where)
    {
        # code...
        $result = array_filter($data_post, 'myFilter');
        if (!($result)) {

            $result = $this->update_value($table, $data_post, $where);

            if ($result) {
                $this->response['status'] = true;
                $this->response['message'] = 'Cập nhật dữ liệu thành công!';
            } else {
                $this->response['status'] = false;
                $this->response['message'] = 'Cập nhật dữ liệu thất bại!';
            }
        } else {
            $this->response['status'] = false;
            $this->response['message'] = 'Không để trống dữ liệu!';
        }

        die(json_encode($this->response));
    }
}

<?php
class BaseModel
{
    var $table = "";
    var $table_Loai_sp = "loai_san_pham";
    // auto connect database
    function __construct()
    {
        $this->conn = new PDO("mysql:root=127.0.0.1;dbname=du_an_mau;charset=utf8", "root", "");
    }
    // function insert data to table
    static function Insert_Data($form_data, $db_data, $header)
    {
        $model = new static();
        $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        if ($model->table == 'user') {
            $msg = "Sign_in Successfully, take 1 min to active!";
        } else {
            $msg = "Insert Successfully!";
        }
        header("location:$header?msg='$msg'");
    }
    // function get data from table
    static function Get_Data()
    {
        $model = new static;
        $sql = "SELECT * FROM " . $model->table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function Get_Loai_sp()
    {
        $model = new static;
        $sql = "SELECT * FROM " . $model->table_Loai_sp;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function get data with condition
    static function Get_One_Condition($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $id $operator '$rule'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //function update data
    static function Update_Data($re_values, $id, $rule, $header)
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE $id = $rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $msg = "Update Successfully!";
        header("Location: $header?msg=$msg");
    }
    // function update lượt xem
    static function Update_luot_xem($re_values, $id, $rule)
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE $id = $rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
    // function load 10 sp nổi bật
    static function top_products()
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table ORDER BY so_luot_xem DESC LIMIT 10";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function get user
    static function get_user($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT * FROM user WHERE $id $operator '$rule'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function combie comment and user
    static function get_user_comment()
    {
        $model = new static;
        $sql = "SELECT binh_luan.*,user.user_name,user.image FROM binh_luan JOIN user on binh_luan.user_id = user.user_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function count comment
    static function count_comment($rule)
    {
        $model = new static;
        $sql = "SELECT COUNT(ma_san_pham) as tong_bl   FROM binh_luan GROUP BY ma_san_pham HAVING ma_san_pham=$rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function get ct comments
    static function ct_comments($rule)
    {
        $model = new static;
        $sql = "SELECT binh_luan.ma_san_pham,binh_luan.ma_binh_luan,binh_luan.noi_dung_bl,user.user_name,binh_luan.thoi_gian_bl FROM binh_luan JOIN user ON binh_luan.user_id = user.user_id WHERE binh_luan.ma_san_pham=$rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function group comments
    static function group_comments()
    {
        $model = new static;
        $sql = "SELECT san_pham.ma_san_pham,san_pham.ten_sp, MAX(binh_luan.thoi_gian_bl) AS moi_nhat, MIN(binh_luan.thoi_gian_bl) AS cu_nhat, COUNT(binh_luan.ma_san_pham) as tong FROM binh_luan JOIN san_pham ON binh_luan.ma_san_pham = san_pham.ma_san_pham GROUP BY binh_luan.ma_san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // function delete
    static function Delete($data_delete, $id, $header)
    {
        if (count($data_delete) == 1) {
            $model = new static;
            $sql = "DELETE FROM $model->table WHERE $id='$data_delete[0]'";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
        } else {
            $model = new static;
            foreach ($data_delete as $id_value) {
                $sql = "DELETE FROM $model->table WHERE $id='$id_value'";
                $stmt = $model->conn->prepare($sql);
                $stmt->execute();
            }
        }
        $msg = "Deleted Successfully!";
        header("Location: $header&?msg=$msg");
    }
}

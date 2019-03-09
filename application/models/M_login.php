<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($data) {
        // $this->db->select('b.user_status, b.position_id, b.user_group_id, b.user_id, b.user_username, a.user_profile_fullname , b.user_level');
        // $this->db->from('user_profile a');
        // $this->db->join('user b', 'a.user_id =b.user_id');

        // $this->db->where('b.user_username', $data['user_username']);
        // $this->db->where('b.user_password', $data['user_password']);
        $username = $data[ "user_username" ];
        $pass = $data[ "user_password" ];
        $sql ="
            SELECT a.user_profile_fullname, b.user_status , b.user_level , b.user_id, b.user_username
            from user_profile a
            LEFT JOIN user b on b.user_id = a.user_id
            WHERE b.user_username = '$username'
            and b.user_password = '$pass'
        ";

        $result = $this->db->query($sql)->result();

        return $result;
        // echo var_dump($result);
    }
    public function getPositionAndGroup($user_id){
        $sql = '
        SELECT a.position_name , b.user_group_name 
        from user c
        left JOIN position a
        on c.position_id  = a.position_id
        left JOIN user_group b
        on c.user_group_id   = b.user_group_id 
        where c.user_id  = "'.$user_id.'"
        ';
        return $this->db->query($sql)->row();
    }

    function __destruct() {
        $this->db->close();
    }

    // API
    public function loginAPI($data) {
        $username = $data[ "user_username" ];
        $pass = $data[ "user_password" ];
        $sql ="
            SELECT a.*, b.user_status , b.user_level , b.user_id, b.user_username
            from user_profile a
            LEFT JOIN user b on b.user_id = a.user_id
            WHERE b.user_username = '$username'
            and b.user_password = '$pass'
        ";

        $result = $this->db->query($sql)->result();

        return $result;
    }
}


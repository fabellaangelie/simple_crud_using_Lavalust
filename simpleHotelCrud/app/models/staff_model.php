<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class staff_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();

    }
    public function add($f_name, $l_name, $birthday, $email, $phone_num, $job)
    {
        $data = array(
            'f_name' => $f_name,
            'l_name' => $l_name,
            'birthday' => $birthday,
            'email' => $email,
            'phone_num' => $phone_num,
            'job' => $job,
        );
        return $this->db->table('staff_info')
            ->insert($data);
    }
    public function read()
    {
        return $this->db->table('staff_info')->get_all();
    }
    public function delete($id)
    {
        $result = $this->db->table('staff_info')->where(array('id' => $id))->delete();
        if ($result)
            return true;
    }
    public function edit($id, $f_name, $l_name, $birthday, $email, $phone_num, $job)
    {
        $data = array(
            'f_name' => $f_name,
            'l_name' => $l_name,
            'birthday' => $birthday,
            'email' => $email,
            'phone_num' => $phone_num,
            'job' => $job,
        );
        $result = $this->db->table('staff_info')->where('id', $id)->update($data);
        if ($result)
            return true;
    }
    public function staff_data($id){
        return $this->db->table('staff_info')->where(array('id' => $id))->get();
    }

    
}

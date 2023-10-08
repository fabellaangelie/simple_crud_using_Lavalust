<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class staff_controller extends Controller
{
    public function display()
    {
        $this->call->view('/home');
    }
    public function __construct()
    {
        parent::__construct();
        $this->call->model('staff_model');
    }
    public function add()
    {
        $f_name = $this->io->post('f_name');
        $l_name = $this->io->post('l_name');
        $birthday = $this->io->post('birthday');
        $email = $this->io->post('email');
        $phone_num = $this->io->post('phone_num');
        $job = $this->io->post('job');
        $this->staff_model->add($f_name, $l_name, $birthday, $email, $phone_num, $job);
        $this->call->view('/home');
        redirect('/staff_table');
    }
    public function read(){
        $data = $this->staff_model->read();
        $this->call->view('/staff_table', $data);
    }
    public function delete($id){
        if($this->staff_model->delete($id))
        redirect('/staff_table');
    }
    public function edit($id){
        $data = $this->staff_model->staff_data($id);
        $this->call->view('/edit_info', $data);
    }
    public function update(){
        $id = $this->io->post('id');
        $f_name = $this->io->post('f_name');
        $l_name = $this->io->post('l_name');
        $birthday = $this->io->post('birthday');
        $email = $this->io->post('email');
        $phone_num = $this->io->post('phone_num');
        $job = $this->io->post('job');
        $this->staff_model->edit($id, $f_name, $l_name, $birthday, $email, $phone_num, $job);
        redirect('/staff_table');
    }
    
    
}

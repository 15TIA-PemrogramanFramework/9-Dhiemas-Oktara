<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }
        $this->load->model('Admin_model'); 


         

    }
    function index()
    {
        $data['admin']=$this->Admin_model->ambil_data();
        $this->load->view('admin',$data);
    }

    function tambah()
    {

        $data=array(
            'nama'=>set_value('nama'),
            'username'=>set_value('username'),
            'password'=>set_value('password'),
            'pangkat'=>set_value('pangkat'),
            'alamat'=>set_value('alamat'),
            'no_hp'=>set_value('no_hp'),
            'id'=>set_value('id'),
            'button'=>'Edit',
            'action'=>site_url("admin/tambah_aksi"),
            );

     $this->load->view('admin/tambah_admin',$data);
    }

    function tambah_aksi()
    {
          $data=array(
        'nama'=>$this->input->post('nama'),
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'pangkat'=>$this->input->post('pangkat'),
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        );
        
        $this->Admin_model->tambah_data($data);
        redirect(site_url('admin'));

    }

    function delete($id)
    {
        
        $this->Admin_model->hapus_data($id);
        redirect(site_url('admin'));

    }

    function edit($id)
    {
            $adm=$this->Admin_model->ambil_data_id($id);
            $data=array(
            'nama'=>set_value('nama',$adm->nama),
            'username'=>set_value('username',$adm->username),
            'password'=>set_value('password',$adm->password),
            'pangkat'=>set_value('pangkat',$adm->pangkat),
            'alamat'=>set_value('alamat',$adm->alamat),
            'no_hp'=>set_value('no_hp',$adm->no_hp),
            'id'=>set_value('id',$adm->id),
            'button'=>'Edit',
            'action'=>site_url("admin/edit_aksi"),
            );

        $this->load->view('admin/admin_form',$data);

    }

    function edit_aksi()
    {
        $data=array(
        'nama'=>$this->input->post('nama'),
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'pangkat'=>$this->input->post('pangkat'),
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        
        );
        $id=$this->input->post('id');
        $this->Admin_model->edit_data($id,$data);
        redirect(site_url('admin'));
    }


}

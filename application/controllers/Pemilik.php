<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }
        $this->load->model('Pemilik_Model'); 

    }
    function index()
    {
         $data['Pemilik']=$this->Pemilik_Model ->ambil_data();
        $this->load->view('Pemilik/daftar_Pemilik',$data);
    }

function tambah()
    {
        $data=array(
            'nama_pemilik'=>set_value('nama_pemilik'),
            'jenis_kelamin'=>set_value('jenis_kelamin'),
            'alamat'=>set_value('alamat'),
            'no_hp'=>set_value('no_hp'),
            'id_pemilik'=>set_value('id_pemilik'),
            'button'=>'Edit',
            'action'=>site_url("Pemilik/tambah_aksi"),
            );

     $this->load->view('Pemilik/form_Pemilik',$data);
    }

    function tambah_aksi()
    {
          $data=array(
        'nama_Pemilik'=>$this->input->post('nama_Pemilik'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        );
        
        $this->Pemilik_Model->tambah_data($data);
        redirect(site_url('Pemilik'));

    }


    function delete($id)
    {
        
        $this->Pemilik_Model->hapus_data($id);
        redirect(site_url('Pemilik'));

    }


    function edit($id)
    {
            $adm=$this->Pemilik_Model->ambil_data_id($id);
            $data=array(
            'nama_pemilik'=>set_value('nama_penemu',$adm->nama_pemilik),
            'jenis_kelamin'=>set_value('jenis_kelamin',$adm->jenis_kelamin),
            'alamat'=>set_value('alamat',$adm->alamat),
            'no_hp'=>set_value('no_hp',$adm->no_hp),
            'id_pemilik'=>set_value('id_penemu',$adm->id_pemilik),
            'button'=>'Edit',
            'action'=>site_url("pemilik/edit_aksi"),
            );

        $this->load->view('pemilik/form_pemilik',$data);

    }

    function edit_aksi()
    {
        $data=array(
        'nama_pemilik'=>$this->input->post('nama_pemilik'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
        
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        
        );
        $id_pemilik=$this->input->post('id_pemilik');
        $this->Pemilik_Model->edit_data($id_pemilik,$data);
        redirect(site_url('pemilik'));
    }


}

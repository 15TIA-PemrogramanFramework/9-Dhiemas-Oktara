<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penemu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }
        $this->load->model('Penemu_Model'); 

    }
    function index()
    {
         $data['penemu']=$this->Penemu_Model ->ambil_data();
        $this->load->view('penemu/daftar_penemu',$data);
    }

function tambah()
    {
        $data=array(
            'nama_penemu'=>set_value('nama_penemu'),
            'jenis_kelamin'=>set_value('jenis_kelamin'),
            'alamat'=>set_value('alamat'),
            'no_hp'=>set_value('no_hp'),
            'id_penemu'=>set_value('id_penemu'),
            'button'=>'Edit',
            'action'=>site_url("penemu/tambah_aksi"),
            );

     $this->load->view('penemu/form_penemu',$data);
    }



    function tambah_barang()
    {
        $data=array(
            'nama_barang'=>set_value('nama_barang'),
            'jenis_barang'=>set_value('jenis_barang'),
            'ukuran_barang'=>set_value('ukuran_barang'),
            'id_barang'=>set_value('id_barang'),
            'button'=>'Edit',
            'action'=>site_url("penemu/tambah_barang_aksi"),
            );

     $this->load->view('penemu/form_barang',$data);
    }


    function tambah_aksi()
    {
          $data=array(
        'nama_penemu'=>$this->input->post('nama_penemu'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        );
        
        $this->Penemu_Model->tambah_data($data);
        redirect(site_url('penemu'));

    }

    function tambah_barang_aksi()
    {
          $data=array(

        'nama_barang'=>$this->input->post('nama_barang'),
        'jenis_barang'=>$this->input->post('jenis_barang'),
        'ukuran_barang'=>$this->input->post('ukuran_barang'),
        );
        
        $this->Penemu_Model->tambah_data($data);
        redirect(site_url('barang'));

    }


    function delete($id)
    {
        
        $this->Penemu_Model->hapus_data($id);
        redirect(site_url('penemu'));

    }



    function edit($id)
    {
            $adm=$this->Penemu_Model->ambil_data_id($id);
            $data=array(
            'nama_penemu'=>set_value('nama_penemu',$adm->nama_penemu),
            'jenis_kelamin'=>set_value('jenis_kelamin',$adm->jenis_kelamin),
            'alamat'=>set_value('alamat',$adm->alamat),
            'no_hp'=>set_value('no_hp',$adm->no_hp),
            'id_penemu'=>set_value('id_penemu',$adm->id_penemu),
            'button'=>'Edit',
            'action'=>site_url("penemu/edit_aksi"),
            );

        $this->load->view('penemu/form_penemu',$data);

    }

    function edit_aksi()
    {
        $data=array(
        'nama_penemu'=>$this->input->post('nama_penemu'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
        
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        
        );
        $id_penemu=$this->input->post('id_penemu');
        $this->Penemu_Model->edit_data($id_penemu,$data);
        redirect(site_url('penemu'));
    }


}

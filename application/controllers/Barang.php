<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }
        $this->load->model('Barang_Model'); 

    }
    function index()
    {
         $data['barang']=$this->Barang_Model ->ambil_data();
        $this->load->view('barang/daftar_barang',$data);
    }

function tambah()
    {
        $data=array(
            'nama_barang'=>set_value('nama_barang'),
            'jenis_barang'=>set_value('jenis_barang'),
            'ukuran_barang'=>set_value('ukuran_barang'),
            'id_barang'=>set_value('id_barang'),
            'button'=>'Edit',
            'action'=>site_url("barang/tambah_aksi"),
            );

     $this->load->view('barang/form_barang',$data);
    }



    function tambah_aksi()
    {
          $data=array(
        'nama_barang'=>$this->input->post('nama_barang'),
        'jenis_barang'=>$this->input->post('jenis_barang'),
        'ukuran_barang'=>$this->input->post('ukuran_barang'),
        );
        
        $this->Barang_Model->tambah_data($data);
        redirect(site_url('barang'));

    }


    function delete($id)
    {
        
        $this->barang_Model->hapus_data($id);
        redirect(site_url('barang'));

    }


}

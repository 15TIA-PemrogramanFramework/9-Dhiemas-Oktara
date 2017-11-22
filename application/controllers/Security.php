<?php 
	
class Security extends CI_Controller 
{


	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		$this->load->model('Security_model'); 


         

	}
	function index()
	{
		$data['handphone']=$this->Security_model->ambil_data();
		$this->load->view('Security/admin_list',$data);
	}

	function tambah()
	{

		$data=array(
			'merk_hp'=>set_value('merk_hp'),
			'jenis_hp'=>set_value('jenis_hp'),
			'tgl_produksi'=>set_value('tgl_produksi'),
			'os'=>set_value('os'),
			'jumlah_stock'=>set_value('jumlah_stock'),
			'harga'=>set_value('harga'),
			'id'=>set_value('id'),
			'button'=>'Tambah',
			'action'=>site_url("handphone/tambah_aksi"),
			);

	 $this->load->view('Handphone/handphone_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
		'merk_hp'=>$this->input->post('merk_hp'),
		'jenis_hp'=>$this->input->post('jenis_hp'),
		'tgl_produksi'=>$this->input->post('tgl_produksi'),
		'os'=>$this->input->post('os'),
		'jumlah_stock'=>$this->input->post('jumlah_stock'),
		'harga'=>$this->input->post('harga'),
		);

		$this->Handphone_model->tambah_data($data);
		redirect(site_url('handphone'));

	}

	function delete($id)
	{
		
		$this->Handphone_model->hapus_data($id);
		redirect(site_url('handphone'));

	}

	function edit($id)
	{
			$hp=$this->Handphone_model->ambil_data_id($id);
			$data=array(
			'merk_hp'=>set_value('merk_hp',$hp->merk_hp),
			'jenis_hp'=>set_value('jenis_hp',$hp->jenis_hp),
			'tgl_produksi'=>set_value('tgl_produksi',$hp->tgl_produksi),
			'os'=>set_value('os',$hp->os),
			'jumlah_stock'=>set_value('jumlah_stock',$hp->jumlah_stock),
			'harga'=>set_value('harga',$hp->harga),
			'id'=>set_value('id',$hp->id),
			'button'=>'Edit',
			'action'=>site_url("handphone/edit_aksi"),
			);

		$this->load->view('handphone/handphone_form',$data);

	}

	function edit_aksi()
	{
		$data=array(
		'merk_hp'=>$this->input->post('merk_hp'),
		'jenis_hp'=>$this->input->post('jenis_hp'),
		'tgl_produksi'=>$this->input->post('tgl_produksi'),
		'os'=>$this->input->post('os'),
		'jumlah_stock'=>$this->input->post('jumlah_stock'),
		'harga'=>$this->input->post('harga'),
		);
		$id=$this->input->post('id');
		$this->Handphone_model->edit_data($id,$data);
		redirect(site_url('Handphone'));
	}

}
 ?>



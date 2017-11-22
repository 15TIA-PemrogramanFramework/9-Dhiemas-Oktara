<?php 
/**
* 
*/
class Pengambilan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengambilan_Model');
		$this->load->model('Admin_Model');
		$this->load->model('Pemilik_Model');
		$this->load->model('Barang_Model');
		//if($this->session->userdata('logged_in'))
		//{
		//}
		//else
		//{
		//	redirect('login', 'refresh');
		//}	
	}
	
	function index()
	{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['Pengambilan'] = $this->Pengambilan_Model->ambil_data();
			$this->load->view('Pengambilan',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_Pengambilan()
	{
		$data = array(
			'id_ambil' => set_value('id_ambil'),
			'tanggal_ambil' => set_value('tanggal_ambil'),
			'admin' => $this->Admin_Model->ambil_data(),
			'pemilik' => $this->Pemilik_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'button' => 'Tambah',
			'action' => site_url('Pengambilan/tambah_Pengambilan_aksi')
			);
		$this->load->view('Pengambilan/form_Pengambilan', $data);
	}

	function tambah_Pengambilan_aksi()
	{
		$data = array(
			'tanggal_ambil' => $this->input->post('tanggal_ambil'),
			'id' => $this->input->post('id'),
			'id_pemilik' => $this->input->post('id_pemilik'),
			'id_barang' => $this->input->post('id_barang'),
			'id_ambil' => $this->input->post('id_ambil'),
			);
		$this->Pengambilan_Model->tambah_data($data);
		redirect(site_url('Pengambilan'));
	}

	function delete($id)
	{
		$this->Pengambilan_Model->hapus_data($id);
		redirect(site_url('Pengambilan'));
	}

	function edit($id)
	{
		$data = array(
			'tanggal_temu' => set_value('tanggal_ambil',$Pengambilan->tanggal_temu),
			'admin' => $this->Admin_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'penemu' => $this->Pengambilan_Model->ambil_data(),
			'id_temu' => set_value('id_temu',$Pengambilan->id_temu),
			'button' => 'Edit',
			'action' => site_url('Pengambilan/edit_aksi')
			);
		$this->load->view('Pengambilan/Pengambilan_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'tanggal_temu' => $this->input->post('tanggal_temu'),
			'id' => $this->input->post('id'),
			'id_penemu' => $this->input->post('id_penemu'),
			'id_barang' => $this->input->post('id_barang'),
			);
		$id_temu = $this->input->post('id_temu');
		$this->Pengambilan_Model->edit_data($id_temu,$data);
		redirect(site_url('Pengambilan'));
	}

}
?>
<?php 
/**
* 
*/
class Penemuan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Penemuan_Model');
		$this->load->model('Admin_Model');
		$this->load->model('Penemu_Model');
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
			$data['penemuan'] = $this->Penemuan_Model->ambil_data();
			$this->load->view('penemuan',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_Penemuan()
	{
		$data = array(
			'id_temu' => set_value('id_temu'),
			'tanggal_temu' => set_value('tanggal_temu'),
			'admin' => $this->Admin_Model->ambil_data(),
			'penemu' => $this->Penemu_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'button' => 'Tambah',
			'action' => site_url('penemuan/tambah_Penemuan_aksi')
			);
		$this->load->view('penemuan/form_penemuan', $data);
	}

	function tambah_Penemuan_aksi()
	{
		$data = array(
			'tanggal_temu' => $this->input->post('tanggal_temu'),
			'id' => $this->input->post('id'),
			'id_penemu' => $this->input->post('id_penemu'),
			'id_barang' => $this->input->post('id_barang'),
			'id_temu' => $this->input->post('id_temu'),
			);
		$this->Penemuan_Model->tambah_data($data);
		redirect(site_url('Penemuan'));
	}

	function delete($id)
	{
		$this->Penemuan_Model->hapus_data($id);
		redirect(site_url('penemuan'));
	}

	function edit($id)
	{
		$data = array(
			'tanggal_temu' => set_value('tanggal_temu',$penemuan->tanggal_temu),
			'admin' => $this->Admin_Model->ambil_data(),
			'barang' => $this->Barang_Model->ambil_data(),
			'penemu' => $this->Penemuan_Model->ambil_data(),
			'id_temu' => set_value('id_temu',$penemuan->id_temu),
			'button' => 'Edit',
			'action' => site_url('penemuan/edit_aksi')
			);
		$this->load->view('penemuan/Penemuan_form', $data);
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
		$this->Penemuan_Model->edit_data($id_temu,$data);
		redirect(site_url('penemuan'));
	}

}
?>
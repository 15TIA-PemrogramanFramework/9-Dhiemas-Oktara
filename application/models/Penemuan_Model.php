<?php
/**
 * 
 */
 class Penemuan_model	 extends CI_Model
 {
 	public $nama_table = 'penemuan';
	public $id = 'id_temu';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('pn.id_temu, pn.tanggal_temu, p.nama_penemu, a.nama, b.nama_barang');
 		$this->db->from('penemuan pn');
 		$this->db->join('penemu p', 'p.id_penemu = pn.id_penemu');
 		$this->db->join('admin a', 'a.id = pn.id');
 		$this->db->join('barang b', 'b.id_barang = pn.id_barang');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($id_temu,$data)
 	{
 		$this->db->where($this->id, $id_temu);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>
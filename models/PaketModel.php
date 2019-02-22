<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PaketModel extends CI_Model {
	
	public function view(){
		return $this->db->get('paket')->result();
	}
	
	
	public function view_by($id){
		$this->db->where('id', $id);
		return $this->db->get('paket')->row();
	}
	
	
	public function validation($mode){
		$this->load->library('form_validation'); 
		if($mode == "save")
			$this->form_validation->set_rules('input_id', 'ID', 'required|numeric|max_length[10]');
			$this->form_validation->set_rules('input_sasaran', 'Sasaran', 'required|max_length[30]');
			$this->form_validation->set_rules('input_penerima', 'Penerima', 'required|max_length[30]');
			$this->form_validation->set_rules('input_isipaket', 'IsiPaket', 'required');
			$this->form_validation->set_rules('input_tanggalambil', 'TanggalAmbil', 'required');
			
		if($this->form_validation->run()) 
			return TRUE; 
		else 
			return FALSE; 
	}
	

	public function save(){
		$data = array(
			"id" => $this->input->post('input_id'),
			"tanggal_datang" => $this->input->post('input_tanggaldatang'),
			"sasaran" => $this->input->post('input_sasaran'),
			"penerima" => $this->input->post('input_penerima'),
			"isi_paket" => $this->input->post('input_isipaket'),
			"tanggal_ambil" => $this->input->post('input_tanggalambil')
		);
		
		$this->db->insert('paket', $data); 
	}
	
	
	public function edit($id){
		$data = array(
			"tanggal_datang" => $this->input->post('input_tanggaldatang'),
			"sasaran" => $this->input->post('input_sasaran'),
			"penerima" => $this->input->post('input_penerima'),
			"isi_paket" => $this->input->post('input_isipaket'),
			"tanggal_ambil" => $this->input->post('input_tanggalambil')
		);
		
		$this->db->where('id', $id);
		$this->db->update('paket', $data); 
	}
	
	
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('paket'); 
	}
}
?>
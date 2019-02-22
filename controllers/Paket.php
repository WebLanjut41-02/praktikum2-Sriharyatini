<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('PaketModel'); 
	}
	
	public function index(){
		$data['paket'] = $this->PaketModel->view();
		$this->load->view('prak/form', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->PaketModel->validation("save")){ 
				$this->PaketModel->save();
				redirect('paket');
			}
		}
		
		$this->load->view('prak/form_tambah');
	}
	
	public function ubah($id){
		if($this->input->post('submit')){ 
			if($this->PaketModel->validation("update")){ 
				$this->PaketModel->edit($id);
				redirect('paket');
			}
		}
		
		$data['paket'] = $this->PaketModel->view_by($id);
		$this->load->view('prak/form_ubah', $data);
	}
	
	public function hapus($id){
		$this->PaketModel->delete($id);
		redirect('paket');
	}
}

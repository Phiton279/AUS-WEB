<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		//load model -> model_products
		$this->load->model('model_lomba');
	}
	
	public function index()
	{
		$data['products'] = $this->model_lomba->all();
		$this->load->view('backend/view_all_products', $data);
	}
	
	public function create(){
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('name', 'Item Name', 'required');
		$this->form_validation->set_rules('description', 'Item Description', 'required');
		$this->form_validation->set_rules('universitas', 'Item University', 'required');
		$this->form_validation->set_rules('type', 'Item Type', 'required');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_product');
		} else {
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '300'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload -> kembali ke form tambah
				$this->load->view('backend/form_tambah_product');
			} else {
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$gambar = $this->upload->data();
				$data_product =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'universitas'	=> set_value('universitas'),
					'type'			=> set_value('type'),
					'image'			=> $gambar['file_name']
				);
				$this->model_lomba->create($data_product);
				redirect('admin/products');
			}
			
		}
	}
	
	public function update($id){
		$this->form_validation->set_rules('name', 'Item Name', 'required');
		$this->form_validation->set_rules('description', 'Item Description', 'required');
		$this->form_validation->set_rules('universitas', 'Item University', 'required');
		$this->form_validation->set_rules('type', 'Item Type', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_lomba->find($id);
			$this->load->view('backend/form_edit_product', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				//form submit dengan gambar diisi
				//load uploading file library
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['product'] = $this->model_lomba->find($id);
					$this->load->view('backend/form_edit_product', $data);
				} else {
					$gambar = $this->upload->data();
					$data_product =	array(
						'name'			=> set_value('name'),
						'description'	=> set_value('description'),
						'universitas'	=> set_value('universitas'),
						'type'			=> set_value('type'),
						'image'			=> $gambar['file_name']
					);
					$this->model_lomba->update($id, $data_product);
					redirect('admin/products');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$data_product =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'universitas'	=> set_value('universitas'),
					'type'			=> set_value('type')
				);
				$this->model_lomba->update($id, $data_product);
				redirect('admin/products');
			}
		}
	}
	
	public function delete($id){
		$this->model_lomba->delete($id);
		redirect('admin/products');
	}
}
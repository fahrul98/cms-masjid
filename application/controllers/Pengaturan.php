<?php

class Pengaturan extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		}else{
			redirect(base_url(''));
		}
    $this->load->model('mprofiladmin');
    $this->load->model('mpengaturan');
  }
  
  public function index(){
    $data['padmin']=$this->mprofiladmin->tampilpadmin()->row();
		$data['pgt']=$this->mpengaturan->tampilpengaturan()->row();
    $data['error']=$this->session->userdata('err')?$this->session->userdata('err'):'';
    $data['page'] = "Pengaturan";

		$this->load->view('core/core',$data);
		$this->load->view('vpengaturan',$data);
    $this->load->view('core/footer',$data);

    //bersih session
		$this->session->set_userdata('err',null);
		$this->session->set_userdata('input',null);
  }

  public function dbubahp(){
    $this->form_validation->set_rules('dsid2','Desain','required|min_length[1]|max_length[2]',
			array(
				'required' => '%s harus diisi',
        'min_length' => '%s error',
				'max_length' => '%s error'
			)
		);
    $this->form_validation->set_rules('cmfoot1','Footer 1','max_length[255]',
			array(
				'max_length' => '%s harus <=100 karakter'
			)
		);
    $this->form_validation->set_rules('cmfoot2','Footer 2','max_length[255]',
			array(
				'max_length' => '%s harus <=100 karakter'
			)
		);
    $this->form_validation->set_rules('dsid1','Desain','required|min_length[1]|max_length[2]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s error',
				'max_length' => '%s error'
			)
		);

    $data['dsid2']=$this->input->post('dsid2');
    $data['cmfoot1']=$this->input->post('cmfoot1');
    $data['cmfoot2']=$this->input->post('cmfoot2');
    $data['dsid1']=$this->input->post('dsid1');

    if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			redirect('pengaturan');
		}

    $this->session->set_userdata('err','Berhasil diubah');
    $this->mpengaturan->ubahpengaturan($data);
    redirect(base_url('pengaturan'));
    unset($data);
  }
}
 ?>

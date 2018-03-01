<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:

	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('mprofiladmin');
	}

	public function index(){
    $data['page'] = "Login";
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		// if(false){
				 redirect(base_url('admin'));
		}else{
			// $this->load->view('v_login');
			//$this->load->view('core/core',$data);
			//$this->load->view('vlogin', $data);
			$this->load->view('core/core',$data);
			$this->load->view('vlogin');
			// $this->load->view('core/footer',$data);
		}
	}

	public function dblogin(){
		$data['username'] = $this->input->post('username');
		$data['userpass'] = $this->input->post('userpass');

		$q = $this->mprofiladmin->adminlogin($data)->row();
		if (count($q)>0) {
			$arrsess = array('username' => $q->username,
				'userpass' => $data['userpass'],
				'userfullname' => $q->userfullname
			);

			$this->session->set_userdata($arrsess);
			redirect(base_url('admin'));
		}else{
			$msg = array('Username / Password salah',
				'Coba lagi!',
				'Astaghfirullah..'
			);
			$this->session->set_flashdata('msg',$msg[rand(0,2)]);
			redirect(base_url('login'));
		}
	}

	public function forget(){
		$data['page'] = "Forget Password";
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
			redirect(base_url('admin'));
		}else{
			$this->load->view('core/core',$data);
			$this->load->view('vlogin');
		}
	}

	public function dbsendemail(){
		$data['email'] = $this->input->post('email');
        $clean= $this->security->xss_clean($data['email']);
        $userInfo = $this->mprofiladmin->getUserInfoByEmail($clean);
        if(!$userInfo){
        	//echo "error";
        	redirect(base_url('login/forget/'));
        }

        $token = $this->mprofiladmin->insertToken($userInfo->userid);
        $url = base_url().'login/reset_password/'.$token;
        $link = '<a href="' . $url . '">' . $url . '</a>';

        $message = '';
        $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui password anda.</strong><br>';
        $message .= '<strong>Silakan klik link ini:</strong> ' . $link;
        echo $message;

//error kirim email
		// $config = array(
  //       'protocol' => 'smtp',
  //       'smtp_host' => 'ssl://smtp.gmail.com',
  //       'smtp_port' =>  465,
  //       'smtp_user' => '2luck4nut@gmail.com',
  //       'smtp_pass' => 'nutcracker',
  //       // 'smtp_crypto' => 'tls',
  //       'smtp_timeout' => '30',
  //       'mailtype'  => 'html',
  //       'charset'   => 'utf-8',
  //       'newline'	=>	"\r\n"
  //   	);
		// $this->load->library('email', $config);
		// $this->email->to($clean);
		// $this->email->from('2luck4nut@gmail.com','luck nut');
		// $this->email->subject('link ubah password (HTML)');
		// $this->email->message($message);
		// $result=$this->email->send();
		// var_dump($result);

		// $data['page'] = "Email Terkirim";
		// $this->load->view('core/core',$data);
		// $this->load->view('vlogin');
	}

	public function reset_password(){
		$token = $this->uri->segment(3);
    	$cleanToken = $this->security->xss_clean($token);
        $data['user'] = $this->mprofiladmin->isTokenValid($cleanToken);

		if(!$data['user']){
			//echo $cleanToken." ok";
		 	redirect(base_url('login'));
		}

		$data['page'] = "Change Password";
		$this->load->view('core/core',$data);
		$this->load->view('vlogin');
	}

	public function dbchangepass(){
		$data['userpass'] = $this->input->post('newpass');
		$data['userid'] = $this->input->post('userid');
		$q= $this->mprofiladmin->updatePassword($data);
		if ($q) {
			redirect(base_url('login'));
		}
	}
}

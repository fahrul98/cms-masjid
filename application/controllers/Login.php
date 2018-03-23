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
    $cookie = get_cookie('remember');
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
		// if(false){
				 redirect(base_url('admin'));
		}else if($cookie != ''){
			$q = $this->mprofiladmin->getByCookie($cookie)->row();
            if ($q) {
                $arrsess = array('username' => $q->username,
				'userpass' => $q->userpass,
				'userfullname' => $q->userfullname
				);
				$this->session->set_userdata($arrsess);
				var_dump($arrsess);
            	redirect(base_url('admin'));
            } else {
            	$this->load->view('core/core',$data);
				$this->load->view('vlogin');
            }
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
		$data['remember'] = $this->input->post('remember');

		$q = $this->mprofiladmin->adminlogin($data)->row();
		if (count($q)>0) {
			$arrsess = array('username' => $q->username,
				'userpass' => $data['userpass'],
				'userfullname' => $q->userfullname
			);
			$this->session->set_userdata($arrsess);

			if ($data['remember']) {
                $key = substr(sha1(rand()), 0, 30);
                set_cookie('remember', $key, 60*60*7); // set expired 1 minggu kedepan

                $this->mprofiladmin->updateCookie($key);
            }

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

	public function forget($message=null){
		$data['page'] = "Forget Password";
		$data['alert']= $message;
		if ($this->session->userdata('username') and $this->session->userdata('userpass')){
			redirect(base_url('admin'));
		}else{
			$this->load->view('core/core',$data);
			$this->load->view('vlogin');
		}
	}

	public function dbtoken(){
		$data['email'] = $this->input->post('email');
        $clean= $this->security->xss_clean($data['email']);
        $userInfo = $this->mprofiladmin->getUserInfoByEmail($clean);

        $this->load->helper('cookie');
		$data['cookie']=get_cookie('email');
		$data['expire']=60*60*24;

        if(!$userInfo){
        	$message="Email Tidak ditemukan!";
        	$this->forget($message);
        }else if ($data['cookie'] != $clean) {
			$this->input->set_cookie('email', $clean, $data['expire']);

	      	$token = $this->mprofiladmin->insertToken($userInfo->userid);
	        $url = base_url().'login/reset_password/'.$token;
	        $link = '<a href="' . $url . '">' . $url . '</a>';


	        $message = '';
	        $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui password anda.</strong><br>';
	        $message .= '<strong>Silakan klik link ini:</strong> ' . $link;


	        $this->send_email2($message, $clean);

			$data['page'] = "Email Terkirim";
			$this->load->view('core/core',$data);
			$this->load->view('vlogin');

	  	}else{
	  		$message="Email sudah terkirim, silahkan cek inbox anda!";
	  		$this->forget($message);
	  	}

	}

	public function send_email($message, $email){
		$config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.smtp2go.com',
        'smtp_port' =>  2525,
        'smtp_user' => 'fahrul.gh@gmail.com',
        'smtp_pass' => 'qlSyNllvbmT6',
        // 'smtp_crypto' => 'tls',
        // "verify_peer"=>false,
        // "verify_peer_name"=>false,
        'smtp_timeout' => '30',
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'newline'	=>	"\r\n"
    	);
		$this->load->library('email', $config);
		$this->email->to($email);
		$this->email->from('fahrul.gh@gmail.com','fahrul gh');
		$this->email->subject('link ubah password (HTML)');
		$this->email->message($message);
		$result=$this->email->send();
		//var_dump($this->email);
	}

	public function send_email2($pesan, $email){
		$url = 'https://api.elasticemail.com/v2/email/send';
		try{
		        $post = array('from' => 'cms@masjd.com',
				'fromName' => 'CMS Masjid',
				'apikey' => '756233e6-5065-40aa-bd1d-051b4a658f81',
				'subject' => 'Forget Password huh?',
				'to' => $email,
				'bodyHtml' => $pesan,
				'isTransactional' => true);

				$ch = curl_init();
				curl_setopt_array($ch, array(
		            CURLOPT_URL => $url,
					CURLOPT_POST => true,
					CURLOPT_POSTFIELDS => $post,
		            CURLOPT_RETURNTRANSFER => true,
		            CURLOPT_HEADER => false,
					CURLOPT_SSL_VERIFYPEER => false
		        ));

		        $result=curl_exec ($ch);
		        curl_close ($ch);
		        //echo $result;
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}
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

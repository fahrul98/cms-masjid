<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:
	 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function index(){
    $data['page'] = "Beranda";

		$this->load->view('core/core',$data);
		$this->load->view('vadmin');
	}
}

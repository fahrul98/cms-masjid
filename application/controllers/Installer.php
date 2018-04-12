<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Installer extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//pendefinisian folder
		if (!defined('APP')){
		// define('APP', '\application');
			define('APP', '/application');
		}
		if (!defined('CONF')) {
		// define('CONF', '\config');
			define('CONF', '/config');
		}
		// if (file_exists(FCPATH.APP.CONF.'/cms_settings.php')) {
		if (file_exists(FCPATH.APP.CONF.'\cms_settings.php')) {
			// redirect('login');
		}
	}

	public function index(){
		$data['page']='Instalasi';

		$this->load->view('core/core',$data);
		$this->load->view('install/i_database');
		// $this->load->view('core/footer',$data);
	}

	public function dbGenerator(){
		$data['host']=$this->input->post('host');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['dbname']=$this->input->post('dbname');
		$this->stgGenerator($data);
		redirect(base_url('installer/dbimporter'));
		unset($data);
	}

	public function stgGenerator($data){
		// $filename = FCPATH.APP.CONF."\cms_settings.php";
		$filename = FCPATH.APP.CONF."/cms_settings.php";
		$ourFileName =$filename;
		$ourFileHandle = fopen($ourFileName, 'w');
		$written = "
		    <?php
		    \$host='".$data['host']."';
		    \$username='".$data['username']."';
		    \$password='".$data['password']."';
		    \$dbname='".$data['dbname']."';
		    ?>
		";
		fwrite($ourFileHandle,$written);
		fclose($ourFileHandle);
		unset($ourFileHandle,$written,$data);
	}

	public function dbImporter(){
		ini_set('max_execution_time', 300);
		$templine = '';
		// Read in entire file
		// $lines = file(FCPATH.APP.'\cmsmasjid.sql');
		$lines = file(FCPATH.APP.'/cmsmasjid.sql');
		foreach ($lines as $line){
			// Skip it if it's a comment
			if (substr($line, 0, 2) == '--' || $line == '')continue;
			// Add this line to the current templine we are creating
			$templine .= $line;
			// If it has a semicolon at the end, it's the end of the query so can process this templine
			if (substr(trim($line), -1, 1) == ';'){
			// Perform the query
			$this->db->query($templine);
			// Reset temp variable to empty
			$templine = '';
			}
		}

		$data['page']='Isi profil masjid';
		$this->load->view('core/core',$data);
		$this->load->view('install/i_profilm');
		//redirect(base_url('admin'));
	}

	public function profilm(){
		$this->load->model('mprofilm');
				$this->form_validation->set_rules('pnama','Nama Masjid','required|min_length[5]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('pdeskripsi','Deskripsi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);
		$this->form_validation->set_rules('psejarah','Deskripsi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);
		$this->form_validation->set_rules('pvisimisi','Visi Misi','required|min_length[5]|max_length[5000]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=5 karakter',
				'max_length' => '%s harus <=5000 karakter'
			)
		);
		$data['pnama'] = $this->input->post('pnama');
		$data['pdeskripsi'] = $this->input->post('pdeskripsi');
		$data['psejarah'] = $this->input->post('psejarah');
		$data['pvisimisi'] = $this->input->post('pvisimisi');

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			$data['page']='Isi profil masjid';
			$this->load->view('core/core',$data);
			$this->load->view('install/i_profilm');
		}else{
			$this->mprofilm->insertprofilm($data);
			$data['page']='Isi profil admin';
			$this->load->view('core/core',$data);
			$this->load->view('install/i_profiladmin');
			$this->session->set_userdata('err','Berhasil diubah');
		}
		
	}

	public function profiladmin(){
		$this->load->model('mprofiladmin');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[12]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=12 karakter'
			)
		);
		$this->form_validation->set_rules('userpass','Password','required|min_length[8]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
			)
		);
		$this->form_validation->set_rules('userfullname','Nama lengkap','required|min_length[8]|max_length[50]',
			array(
				'required' => '%s harus diisi',
				'min_length' => '%s harus >=8 karakter',
				'max_length' => '%s harus <=50 karakter'
			)
		);
		$this->form_validation->set_rules('useremail','Email','required|valid_email',
			array(
				'required' => '%s harus diisi',
				'valid_email' => '%s tidak valid'
			)
		);
		$this->form_validation->set_rules('useralamat','Alamat','max_length[255]',
			array(
				'max_length' => '%s harus <=255 karakter'
			)
		);
		$this->form_validation->set_rules('usertelp','telepon','max_length[20]',
			array(
				'max_length' => '%s harus <=20 karakter'
			)
		);

		$data['username'] = $this->input->post('username');
		$data['userpass'] = $this->input->post('userpass');
		$data['userfullname'] = $this->input->post('userfullname');
		$data['useremail'] = $this->input->post('useremail');
		$data['useralamat'] = $this->input->post('useralamat');
		$data['usertelp'] = $this->input->post('usertelp');
		$data['displayname'] = $data['username'];

		if (!$this->form_validation->run()) {
			$this->session->set_userdata('err',validation_errors());
			$this->session->set_userdata('input',$data);
			$data['page']='Isi profil admin';
			$this->load->view('core/core',$data);
			$this->load->view('install/i_profiladmin');
		}else{

			$this->session->set_userdata('err','Berhasil diubah');
		}

		$this->mprofiladmin->insertadmin($data);
		redirect(base_url('login'));
		// unset($data);
	}

}

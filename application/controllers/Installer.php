<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Installer extends CI_Controller {

	public function index(){

	}

	public function dbGenerator(){
		$data['host']=$this->input->post('host');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['dbaname']=$this->input->post('dbname');
		$this->stgGenerator($data);
		redirect(base_url('installer/dbimporter'));
		unset($data);
	}

	public function stgGenerator($data){
		$filename = FCPATH.APP.CONF."\cms_settings.php";
		$ourFileName =$filename;
		$ourFileHandle = fopen($ourFileName, 'w');
		$written = "
		    <?php
		    \$host='".$data['host']."';
		    \$username='".$data['username']."';
		    \$password='".$data['password']."';
		    \$dbname='".$data['dbaname']."';
		    ?>
		";
		fwrite($ourFileHandle,$written);
		fclose($ourFileHandle);
		unset($data);
	}

	public function dbImporter(){
		$templine = '';
		// Read in entire file
		$lines = file(FCPATH.APP.'\cmsmasjid.sql'); 
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
		redirect(base_url());
	}	
}
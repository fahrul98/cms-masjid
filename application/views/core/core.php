<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*

file core untuk load head html dan navbar. jadi di controller tinggal load file ini.
lihat contoh : di controller admin aku gawe
  $this->load->view('core/core',$data);
ok?

*/

  //resend $page
  $data['page'] = $page;
  //include_once('head-html.php');
  $this->load->view('core/head-html',$data);
?>


<!-- navbar -->
<?php
  //include_once('navbar.php');

  // if($this->session->userdata('username')&&$this->session->userdata('password')){


  $this->load->view('core/navbar',$data);

  if($this->session->userdata('username') and $this->session->userdata('userpass') && !isset($mode)){
?>
<div class="container" style="margin-right:0px; margin-left:0px; width:100%; padding-left: 0px; padding-right: 0px">
<?php
  }
?>
<!-- isi -->

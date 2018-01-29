<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*

file core untuk load head html dan navbar. jadi di controller tinggal load file ini.
lihat contoh : di controller admin aku gawe
  $this->load->view('core/core',$data);
ok?

*/
  $data['page'] = $page;
  //include_once('head-html.php');
  $this->load->view('core/head-html',$data);
?>


<!-- navbar -->
<?php
  //include_once('navbar.php');

  // if($this->session->userdata('username')&&$this->session->userdata('password')){

  // cek jika ada login maka muncul navbar, smentara bypass dulu

  if(true){
    $this->load->view('core/navbar',$data);
  }
?>
<!-- isi -->
<div class="container">

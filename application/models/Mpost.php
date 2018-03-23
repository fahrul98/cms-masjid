<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpost extends CI_Model {
/*
isi :
1. Post. operasi CRUD
vars:
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid
input->proses->hapus dari memori
unset(variabel) => hapus variabel dari memori
*/
	public function __construct(){
		parent::__construct();
	//load model
	}
	public function tampilpost($data = null){
		// jika null maka fullselect, else ambil idpost
		//if ini gk guna kan?
		// if (isset($data['mode'])&&$data['mode']=='pengunjung') {
		// 	$q = $this->db->query("select * from cmpost where psjudul=1 order by psid desc");
		// }else
		if(isset($data['slug'])){
			$q = $this->db->query("select * FROM cmpost cmp left join cmtag ct on cmp.tagid=ct.tagid where psjudul=?",array(urldecode($data['slug'])));
		}else{
			// echo "<script>alert(1);</script>";
			// $q = $this->db->query("SELECT * FROM cmpost cmp left join cmtag ct on cmp.tagid=ct.tagid order by postid desc");
			$q = $this->db->query("SELECT * FROM cmpost order by psbuat desc");
			// $q = $this->db->query("SELECT * FROM cmpost where pspublic=1");
		}
		return $q;
		$q=null;
		unset($data);
	}
	public function tampiltag($data =null){
		if(isset($data['tagid'])){
			$q = $this->db->query("select * from cmtag where tagid=?",array($data['tagid']));
		}else{
			$q = $this->db->query("select * from cmtag where tagid>2");
		}
		return $q;
		$q=null;
		unset($data);
	}
	function get_search() {
	  $match = $this->input->post('search');
	  $this->db->like('psjudul',$match);
	  $this->db->or_like('pstext',$match);
		$this->db->join('cmtag ct', 'cmp.tagid=ct.tagid','left');
	   $query = $this->db->get('cmpost cmp');
	  return $query->result();
	}
	public function tampilpaging($jumlah, $batas,$st=null){
		// $q = $this->db->get('cmpost',$jumlah,$batas)->result();
		if (!isset($batas)) {
			$batas=0;
		}
		//jika st di set maka hanya menampilkan post public saja
		$qa = $st!=null?" where cmp.pspublic=1 ":"";
		$qr = "SELECT * FROM cmpost cmp left join cmtag ct on cmp.tagid=ct.tagid ".$qa." order by psbuat desc limit $batas,$jumlah";
		$q = $this->db->query($qr);
		return $q;
	}
	public function jumlah_data(){
		$p = $this->db->query("select * from cmpost");
		$q = $p->num_rows();
		return $q;
		$q=null;
	}
	public function buatpost($data){
		$q = $this->db->query("insert into cmpost (psjudul,psustadz,pstext,tagid,psbuat) values (?,?,?,?,now())",
		array($data['psjudul'],
			$data['psustadz'],
			$data['pstext'],
			$data['tagid']
		));
		unset($data);
	}
	public function tambahtag($data){
		$q = $this->db->query("insert into cmtag (tag) values (?)",
		array($data['tag']
		));
		unset($data);
	}
	public function ubahpost($data){
		if (isset($data['mode'])) {
			$q = $this->db->query("update cmpost set tagid=1 where tagid=?",array($data['tagid']));
		}else{
			$q = $this->db->query("update cmpost set psjudul=?,psustadz=?,pstext=?,pspublic=?,tagid=? where postid=?",
			array($data['psjudul'],
				$data['psustadz'],
				$data['pstext'],
				$data['pspublic'],
				$data['tagid'],
				$data['postid']
			));
		}
		unset($data);
	}
	public function hapuspost($data){
		$q = $this->db->query("delete from cmpost where postid=?",array($data['postid']));
		unset($data,$q);
	}
	public function hapustag($data){
		if (!$data['tagid']<2) {
			$q = $this->db->query("delete from cmtag where tagid=?",array($data['tagid']));
		}
		unset($data,$q);
	}
	public function publishpost($postid,$data = null) {
		$q = $this->db->query("update cmpost set pspublic=1 where postid=?",array($postid));
		unset($data,$q);
	}

	public function update_counter($postid) {
		$date = date('Y-m-d H:i:s');
		$q = $this->db->query("update cmpost set vcount=vcount+1 where postid=?",array($postid));
		$r = $this->db->query("insert into cmlogs (tipe_log, time, other_id) values (?,?,?)",array('cmpost',$date,$postid));
		unset($q);
	}
	
	public function total(){
		$data = $this->db->query("select sum(vcount) as totalp, max(vcount) as maxp from cmpost");
		return $data;
		unset($data);
	}
	public function ppost(){
		$data= $this->db->query("SELECT psjudul, vcount FROM cmpost order by vcount desc limit 5");
		return $data;
		unset($data);
	}
	public function ptag(){
		$data= $this->db->query("SELECT t.tag, SUM(p.vcount) as views FROM cmpost as p, cmtag as t WHERE t.tagid=p.tagid GROUP by t.tagid limit 5");
		return $data;
		unset($data);
	}
	public function viewsPerDate($time){
		if ($time=='day') {
			$data= $this->db->query("SELECT COUNT(*) views, DATE(time) Date FROM `cmlogs` WHERE tipe_log='cmpost' GROUP BY Date ORDER BY DATE DESC LIMIT 7");
		}else if ($time=='month') {
			$data= $this->db->query("SELECT COUNT(*) views, MONTH(time) Date FROM `cmlogs` WHERE tipe_log='cmpost' GROUP BY Date ORDER BY DATE ASC LIMIT 12");
		}else{
			$data= $this->db->query("SELECT COUNT(*) views, YEAR(time) Date FROM `cmlogs` WHERE tipe_log='cmpost' GROUP BY Date ORDER BY DATE ASC");
		}

		return $data;
		unset($data);
	}

	public function statistik(){
		$q = $this->db->query("select sum(vcount) as totalp,max(vcount) as maxp from cmpost");
		return $q;
		unset($data,$q);
	}
}

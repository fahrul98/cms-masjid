<?php
 ?>
 // <style media="screen">
 .container .icon:hover {
   color: #<?php echo $d['hover']; ?>;
   /*font-size: 35pt;*/
 }

/*CARD CSS*/
.container2 {
  padding:10px;
  padding-left: 10px;
  padding-right: 10px;
  text-align: center;
}
.card {
/* Add shadows to create the "card" effect */
  /*position: relative;*/
  display: flex;
  flex-direction: column;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
  /*width: 250px;*/
  /*margin:15px;*/
  margin-bottom:30px;
  /*padding:30px;*/
  padding-top:0px;
  padding-left:0px;
  padding-bottom:0px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

.img {
  border-radius: 5px 5px 0 0;
  /*width:250px;
  height:250px;*/
  width:100%;
  height:100%;
}
.imgpost {
  position: absolute;
  clip: rect(0px,400px,10px,0px);
}
/*END CARD CSS*/

/*Background-image*/
.backgroundpict {
  background-color: #<?php echo $d['secondary']; ?>;
  background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
  background-attachment: fixed;
  width: 100%;
  height: relative;
}

.backgroundpictop {
  background-color: #<?php echo $d['secondary']; ?>;
  background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
  background-attachment: fixed;
  width: 100%;
  height: 676px;
}

/*

Footer

*/
.pputih {
  color: #<?php echo $d['textcol']; ?>;
  font-size: 17px;
  font-family: Arial;
}

body .last-div {
  background-color:#<?php echo $d['nav'];?>;
}

.inner-footer .widgetheading {
  color: #<?php echo $d['textcol']; ?>;
}

.inner-footer .row a {
  color: #<?php echo $d['textcol']; ?>;
}

.inner-footer .row p {
  color: #<?php echo $d['textcol']; ?>;
}

.container ul.social-network li {
  display:inline;
  margin: 0 15px;
  color: #<?php echo $d['licol']; ?>;
}

.container ul.social-network li a {
  color: #<?php echo $d['licol']; ?>;
}

.container ul.social-network li a:hover {
  color: #<?php echo $d['hover']; ?>;
}

a.scrollup:hover {
  background-color: #<?php echo $d['hover']; ?>;
}

div .transbox {
  /*height:300px;
  width:350px;*/
  padding:15px;
  background-color: #<?php echo $d['hover']; ?>;
  /*opacity: 0.6;*/
  background: rgba(0,0,0,0.2);
}

.clearspc {
  padding:0px;
  margin:0px;
}

/*

netizen

*/
body .navbar{
  background-color:#<?php echo $d['nav'];?>;
}

.navbar .size {
  /*font-size: 24px;*/
  font-size: 20px;
}

@media screen and (min-width: 320px) {
  .navbar .size {
    /*font-size: 24px;*/
    font-size: 24px;
  }
  /*body .section {
    height:1200px;
    padding-top:60px;
    padding-bottom:60px;
  }*/
}

.part {
  background-color: #dfdfdf;
}

body .section {
  padding-top:60px;
  padding-bottom:60px;
}

.navbar .navbar-collapse a:hover{
  background-color: #<?php echo $d['hover']; ?>;
}

.navbar .navbar-collapse .active a{
  background-color: #<?php echo $d['hover']; ?>;
}

.nav-tabs > li > a:hover {
	background-color: #<?php echo $d['hover']; ?>;
}

.nav-tabs > li.active > a {
	color: #fff;
  cursor: default;
  background-color:#<?php echo $d['hover']; ?>;
  border: 0;
  border-bottom-color: transparent;

}
.nav-tabs > li.active > a:hover {
	color: #fff;
	border: 0;
	background-color: #<?php echo $d['hover']; ?>;
	cursor: pointer;
}

.container .center{
  color: #<?php echo $d['textisi']; ?>;
  text-align: center;
  margin-top: 0px;
}

#navquick{
  width: 10px;
}

.container .text-center h2{
  color: #<?php echo $d['textcol']; ?>;
}

.container .text-center p{
  color: #<?php echo $d['textcol']; ?>;
}

.container .row .text-center{
  color: #<?php echo $d['textcol']; ?>;
}

.container .icon {
  color: #<?php echo $d['icon']; ?>;
}

.container .nav a {
  color: #<?php echo $d['tab']; ?>;
  background-color: #<?php echo $d['nav']; ?>
}

.container .nav a:hover {
  color: #<?php echo $d['tab']; ?>;
  background-color: #<?php echo $d['hover']; ?>
}

.container .active a {
  color: #<?php echo $d['tab']; ?>;
  background-color: #<?php echo $d['tabact']; ?>
}

.container .active a:hover {
  color: #<?php echo $d['tab']; ?>;
  background-color: #<?php echo $d['hover']; ?>
}

.container hr{
  background-color: #<?php echo $d['icon'];?>;
  height: 2px; border: 0;
  margin-top: 20px;
  margin-bottom: 55px;
}

hr{
  background-color: #<?php echo $d['icon'];?>;
  <!-- height: 3px; border: 0; -->
}

/*

Admin

*/
#wrapper .navbar{
  background-color:#<?php echo $d['nav']; ?>;
}

#wrapper .sidebar{
  background-color:#<?php echo $d['nav'] ;?>;
  color: #<?php echo $d['textcol'] ?>;
}

#wrapper a {
  color: #<?php echo $d['textcol']; ?>;
}
#wrapper #main-content a {
  color: #<?php echo $d['linkcol']; ?>;
}

#wrapper .dropdown-menu a {
  color: #<?php echo $d['linkcol']; ?>;
}

.lnr {
  color:#<?php echo $d['lnr']; ?>;
}

#wrapper .border {
  border-color:#<?php echo $d['border'] ;?>;
}

#wrapper .sidebar-nav a:hover {
  background-color: #<?php echo $d['hover']; ?>; ;
}
#wrapper .sidebar .active a {
  background-color: #<?php echo $d['hover']; ?>; ;
}

body h1,h2,h3,h4,h5,h6 {
  color:black;
}

/*keuangan*/
<?php
/*// </style>*/
 ?>

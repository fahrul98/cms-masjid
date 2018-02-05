<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*

  footer.php untuk footer
  di load terakhir, tampil di client bagian paling bawah.

*/
 ?>
</div>
<!-- END CONTAINER -->
</div>
<!-- END WRAPPER -->
<!-- CREDIT -->
<?php
  //jika $mode di controller ada dan halaman bukan hal.instalasi , maka muncul navbar utk pengunjung
  if ($page!='Instalasi'&&isset($mode)) {
?>
<!-- FOOTER -->
<div id="wrapper">
  <!-- <footer> -->
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="<?php echo base_url('');?>"><h1><span><?php echo $cmprofil->pnama;?></span></h1></a>
            <p>Sesungguhnya perjalanan terberat bukanlah perjalanan mendaki puncak gunung tertinggi, perjalanan terberat merupakan perjalanan ke masjid
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Latest Posts</h3>
              <div class="col-md l-posts">
                <ul>
                  <?php
                  $n = 1;
                  // <td><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></td>
                    foreach ($cmpost as $v) {
                     echo "<li><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></li>";
                 
                    $n++;
                  }?>
                </ul>
              </div>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Hubungi Kami</h3>
            <a href="#"><p><i class="fa fa-envelope"></i> masjidtaqwa@gmail.com</p></a>
            <p><i class="fa fa-phone"></i>  +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> Masjid taqwa  |  PO Box 23456 
              Tulusrejo Lowokwaru, Malang <br>
              Kedawung 8011 INDONESIA</p>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="last-div" style="width: 100%; clear: both; margin-left: 0px;">
      <div class="container">
        <div class="row">
          <div class="copyright">
            © 2018 eNno Multi-purpose theme | <a target="_blank" href="http://bootstraptaste.com">Bootstraptaste</a>
          </div>  
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=eNno
                    -->       
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
      
      <a href="" class="scrollup" style="display: block;"><i class="fa fa-chevron-up"></i></a>        
      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>    
    </div>  
  <!-- </footer> -->
</div>
  <!-- END FOOTER -->
  

<?php

//jika tidak maka muncul punya si admin

  // }else if (!isset($mode)||$mode=='view'){
  // if ($this->session->userdata('username') and $this->session->userdata('userpass')){
  }else if (!isset($mode)&&$this->session->userdata('username') and $this->session->userdata('userpass')){

// tema memakai wrapper sbg container, jadi di wrap. gk usah pake tag penutup untuk div wrapper.

?>

<footer>
  <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
</footer>

<?php
}
?>




<!-- try footer from template  -->
<!-- Javascript -->

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/toastr/toastr.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/common.js'); ?>"></script>

<?php
//jika butuh chart
if(false){?>
<script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js'); ?>"></script>
<?php }?>

<?php
//jika menulis post
if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
  ?>

<script src="<?php echo base_url('assets/vendor/summernote/summernote.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/markdown/markdown.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/to-markdown/to-markdown.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.js');?>"></script>

<script>
$(function() {
  // summernote editor
  $('.summernote').summernote({
    height: 300,
    focus: true,
    onpaste: function() {
      alert('You have pasted something to the editor');
    }
  });

  // markdown editor
  var initContent = '<h4>Hello there</h4> ' +
    '<p>How are you? I have below task for you :</p> ' +
    '<p>Select from this text... Click the bold on THIS WORD and make THESE ONE italic, ' +
    'link GOOGLE to google.com, ' +
    'test to insert image (and try to tab after write the image description)</p>' +
    '<p>Test Preview And ending here...</p> ' +
    '<p>Click "List"</p> Enjoy!';

  $('#markdown-editor').text(toMarkdown(initContent));
});
</script>
<?php } ?>

<?php
//jika menulis post
if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"){?>

<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
<?php } ?>

<?php //jika media
if($page=="Media"){?>

<script src="<?php echo base_url('assets/vendor/dropify/js/dropify.min.js');?>"></script>
<script>
$(function() {
  $('.dropify').dropify();

  var drEvent = $('#dropify-event').dropify();
  drEvent.on('dropify.beforeClear', function(event, element) {
    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
  });

  drEvent.on('dropify.afterClear', function(event, element) {
    alert('File deleted');
  });

  $('.dropify-fr').dropify({
    messages: {
      default: 'Glissez-déposez un fichier ici ou cliquez',
      replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
      remove: 'Supprimer',
      error: 'Désolé, le fichier trop volumineux'
    }
  });
});
</script>
<?php } ?>

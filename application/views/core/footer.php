<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*

  footer.php untuk footer
  di load terakhir, tampil di client bagian paling bawah.

*/
if ($this->session->userdata('username') and $this->session->userdata('userpass')){
 ?>

  </div>
  <!-- END CONTAINER -->
  </div>
  <!-- END WRAPPER -->
  <!-- CREDIT -->
  <?php } ?>
 
  <footer>
    <?php
  //jika $mode di controller ada dan halaman bukan hal.instalasi , maka muncul navbar utk pengunjung
  if ($page!='Instalasi'&&isset($mode)) {
?>
      <!-- FOOTER -->

      <!-- <footer> -->
      <div class="inner-footer backgroundpict">
        <div class="container">
          <div class="row" style="padding-bottom: 20px">
            <div class="col-xs-12 col-md-12 col-lg-4 f-about">
              <h3 class="widgetheading" style=""><?php echo $cmprofil->pnama;?></h3>
              <!-- <div class="transbox"> -->
                <p class="phitam textfooter clearspc transbox">
                  <?php echo nl2br($pgt->cmfoot1);?>
                </p>
              <!-- </div> -->
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4 l-posts">
              <h3 class="widgetheading clearspc">Post terbaru</h3>
              <!-- <div class="col-md-12 transbox"> -->
                <ul class="clearspc transbox">
                  <?php
                  $n = 1;
                  // <td><a href=".base_url('beranda/post/'.$v->postid).">".$v->psjudul."</a></td>
                  if (isset($cmpostfoot)) {
                    $cmpost=$cmpostfoot;
                  }
                  ?>
                    <!-- <li>a</li> -->
                    <?php
                    foreach ($cmpost as $v) {
                      //  echo "<li style='text-decoration: none;'><a class='phitam' href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></li>";
                       echo "<li style=''><a class='phitam' href=".base_url('beranda/post/'.urlencode($v->psjudul)).">".$v->psjudul."</a></li>";
                       //tampil 5 post terbaru
                       if ($n==5) {
                         break;
                       }
                       $n++;
                    }?>
                </ul>
              <!-- </div> -->
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4 f-contact" style="">
              <h3 class="widgetheading">Info</h3>
              <!-- <div class="transbox"> -->
                <div class="col-xs l-posts pputih clearspc">
                  <p class="phitam textfooter clearspc transbox">
                    <?php echo nl2br($pgt->cmfoot2);?>
                  </p>
                </div>
              <!-- </div> -->
              <!-- <h3 class="widgetheading">Hubungi Kami</h3>

              <a href="#">
                <p class="phitam nomargin nopadding"><i class="fa fa-envelope"></i>masjidtaqwa@gmail.com</p>
              </a>
              <p class="phitam nomargin nopadding"><i class="fa fa-phone"></i> +345 578 59 45 416</p>
              <p class="phitam nomargin nopadding"><i class="fa fa-home"></i> Masjid taqwa | Tulusrejo Lowokwaru, Malang</p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="last-div" style="margin:0px">
        <div class="container">
          <div class="row">
            <div class="col-md-12 copyright">
              <?php echo date('Y'); ?> &copy; eNno Theme. All Rights Reserved. Customized by AFAdev
              <div class="credits">
                Thx <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>

        <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


      </div>
      <?php

//jika tidak maka muncul punya si admin
  }else if ($this->session->userdata('username') and $this->session->userdata('userpass')){

// tema memakai wrapper sbg container, jadi di wrap. gk usah pake tag penutup untuk div wrapper.

?>
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>

        <?php
}
?>
  </footer>
  <!-- try footer from template  -->
  <!-- Javascript -->


  <?php

        //jika pengunjung true
        if (isset($mode)) {
          ?>
    <!-- JS Netizen -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.bxslider.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/fliplightbox.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/functions.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/datatables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.jqueryui.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.foundation.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.semanticui.min.js');?>"></script>
    <script type="text/javascript">
      $('.portfolio').flipLightBox();
      $(document).ready(function () {
          $('.dropdown-toggle').dropdown();
      });
      $(document).ready(function() {
          $('#datatable').DataTable();
          $('#datatable2').DataTable();
        })
    </script>
    <?php
        //jika admin
      }else{
        ?>
        <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.min.js');?>"></script>
      <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/toastr/toastr.js'); ?>"></script>
      <script src="<?php echo base_url('assets/scripts/common.js'); ?>"></script>
      <script src="<?php echo base_url('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js'); ?>"></script>
      <?php
      }
//jika menulis post
if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
  ?>

        <script src="<?php echo base_url('assets/vendor/summernote/summernote.min.js');?>"></script>
        <script src="<?php echo base_url('assets/vendor/summernote/summernote-cleaner.js');?>"></script>
        <script src="<?php echo base_url('assets/vendor/markdown/markdown.js');?>"></script>
        <script src="<?php echo base_url('assets/vendor/to-markdown/to-markdown.js');?>"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.js');?>"></script>

        <script>
          $(function() {
            // summernote editor
            $('.summernote').summernote({
              height: 300,
              focus: true,
              fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64', '82', '150'],
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
//jika halaman kegiatan
if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"|| $page=="Tambah Entri" || $page=="Ubah Entri"){?>

          <!-- <script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/moment-with-locales.js');?>"></script> -->
          <!-- <script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/mixpanel-2-latest.min.js');?>"></script> -->

          <?php } ?>
          <script src="<?php echo base_url('assets/vendor/dropify/js/dropify.min.js');?>"></script>

          <script src="<?php echo base_url('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js');?>"></script>
          <script>
            $('.form_datetime').datetimepicker({
              //language:  'fr',
              weekStart: 1,
              todayBtn: 1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              forceParse: 0,
              showMeridian: 1
            });
            <?php //jika media
            if($page=="Media" || $page=="Profil Admin" or isset($search)){?>
            $(function() {

              $('.dropify').dropify();

              var drEvent = $('#dropify-event').dropify();
              drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Yakin hapus \"" + element.file.name + "\" ?");
              });

              drEvent.on('dropify.afterClear', function(event, element) {
                drEvent.value = "";
                alert('Terhapus');
              });
            });
            <?php } ?>
          </script>

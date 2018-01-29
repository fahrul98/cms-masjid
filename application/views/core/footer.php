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
<footer>
  <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
</footer>

<!-- try footer from template  -->
<!-- Javascript -->

<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/toastr/toastr.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/common.js'); ?>"></script>


<?php
//jika menulis post
if($page=="Tulis Postingan"||$page=="Ubah Postingan"){?>

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

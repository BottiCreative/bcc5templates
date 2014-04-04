<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>



<!-- Begin Footer -->
<div class="fullWidth footerBackground">

  <div class="row">
   
    <div class="footer">
    
      <div class="grid-6 column">
        
             <?php  
		        $a = new GlobalArea(' Footer Nav ');
		        $a->display();
		        ?>
      
      </div>
      
      <div class="grid-6 column">
      
        <div class="social">       
          <a href="#" rel="nofollow" target="_blank" class="youLink"></a>
          <a href="#" rel="nofollow" target="_blank" class="pinLink"></a>
          <a href="#" rel="nofollow" target="_blank" class="twittLink"></a>
          <a href="#" rel="nofollow" target="_blank" class="fbLink"></a>
        </div>
      
      </div>
      
      <div class="clearfix"></div>
      
      <div class="grid-6 column">
      
        Copyright &copy; <?php  echo date('Y')?> 
      
      </div>
      
      <div class="grid-6 column">
      
        <p><span>Website built by Botti Creative</span></p>
      
      </div>
  
    </div>
   
  </div>

</div><!-- End Footer -->




    <!--<script src="js/foundation.min.js"></script>-->
    <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.js"></script>
     <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.interchange.js"></script>
    <script>
      $(document).foundation();
</script>



<script src="<?php  echo $this->getThemePath(); ?>/js/jquery.fitvids.js"></script>
   <script>
        // Basic FitVids Test
        $(".fitvid").fitVids();
        // Custom selector and No-Double-Wrapping Prevention Test
        $(".fitvid").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
      </script>
      

<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/jquery.watermark.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.watermark').watermark();
		$('.watermark1').watermark();
	});
</script>

        
        


<?php   Loader::element('footer_required'); ?>

</body>
</html>



********************************************************************************************************************************************
********************************************************************************************************************************************

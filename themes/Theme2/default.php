<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


<!-- Begin Main Info -->
<div class="fullWidth">

  <div class="row">

    <div class="mainInfo">
   
      <div class="grid-8 column"> 
      
      	<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
  

  
      </div>

      <div class="grid-4 column">
      
      
			<?php  
			$a = new Area('Sidebar');
			$a->display($c);
			?>
      

    
      </div>
      
    </div>
      
  </div>
  
</div><!-- End Main Info -->      



<!-- Begin Testimonial -->
<div class="fullWidth testimonialBackground">

  <div class="row">
  <div class="testimonial">
  
            <?php  
			$a = new Area('Testimonial');
			$a->display($c);
			?>
            </div>



  </div>

</div><!-- End Testimonial -->



<!-- Begin Packages --->
<div class="row">

  <div class="packages">

    <div class="grid-3 column packageHolder">
    
      <div class="packageWrapper">
       
          <?php  
			$a = new Area('Package 1');
			$a->display($c);
			?>
    
    
    
      </div>
      
    </div>
    
    <div class="grid-3 column packageHolder">
    
      <div class="packageWrapper">
                  <?php  
			$a = new Area('Package 2');
			$a->display($c);
			?>
      </div>
      
    </div>
    
    <div class="grid-3 column packageHolder">
    
      <div class="packageWrapper">
                  <?php  
			$a = new Area('Package 3');
			$a->display($c);
			?>
      </div>
      
    </div>
    
    <div class="grid-3 column packageHolder">
    
      <div class="packageWrapper">
                  <?php  
			$a = new Area('Package 4');
			$a->display($c);
			?>
      </div>
      
    </div>         
    
  </div>  

</div><!-- End Packages --->

	

		
		
			
	
	
			
	
	
<?php  $this->inc('elements/footer.php'); ?>

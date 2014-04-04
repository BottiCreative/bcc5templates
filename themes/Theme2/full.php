<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	 <!-- Begin Main Info -->
<div class="fullWidth">

  <div class="row">

    <div class="mainInfo">
    

   
      <div class="grid-12 column"> 
      
      	<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
  

  
      </div>


      
    </div>
      
  </div>
  
</div><!-- End Main Info -->      

<?php  $this->inc('elements/footer.php'); ?>

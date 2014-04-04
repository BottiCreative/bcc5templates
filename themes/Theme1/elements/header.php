<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">

<head>

<?php   Loader::element('header_required'); ?>

<!-- Site Header Content //-->



<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
    
    <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/foundation.css" />
    
	<script src="<?php  echo $this->getThemePath(); ?>/js/modernizr.js"></script>

<link href='//fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css' />


</head>

<body class="vidFull fitvid">


<!-- Begin Header -->
<div class="fullWidth headerBackground">

  <div class="row">

    <div class="header">    
      
      <div class="grid-4 column text-center">
      
        <img src="<?php  echo $this->getThemePath(); ?>/images/logo.png" alt="Logo">
      
      </div>
      
      <div class="grid-8 column">
      
        <p>Call us today on: 0121 654 5559</p>
        
        
        	        <?php  
		        $a = new GlobalArea(' Header Nav ');
		        $a->display();
		        ?>
     

      
      </div>
      
    </div> 
  
  </div>
  
</div><!-- End Header -->


 





        
		


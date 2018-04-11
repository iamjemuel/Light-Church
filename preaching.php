<?php 
include('apps/variables.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <?php
            if(strpos($uri, 'kids-ministry')){
                echo "<title>Kids Ministry | Light Church</title>";
            }elseif(strpos($uri, 'youth-ministry')){
                echo '<title>Youth Ministry | Light Church</title>';
            }elseif(strpos($uri, 'young-adult-professional-ministry')){
                echo '<title>Young Adult/Professional Ministry | Light Church</title>';
            }elseif(strpos($uri, 'Community')){
                echo '<title>Community Ministry | Light Church</title>';
            }else{
                
                echo '<title>Preachings | Light Church</title>';
            }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url; ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $url; ?>assets/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $url; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $url; ?>assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $url; ?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $url; ?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        
    </head>
    <body>
		<?php include('apps/views/navigation.php'); ?>
		
		<div class="main-container">
		<?php
            if(strpos($uri, 'topic-title')){
                include('apps/views/preachings/sample.php');
            }else{
                include('apps/views/preachings/all-preachings.php');
            }
			 
			include('apps/views/footer.php'); 
		?>
		</div> 
		<script src="<?php echo $url; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $url; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $url; ?>assets/js/flexslider.min.js"></script>
        <script src="<?php echo $url; ?>assets/js/parallax.js"></script>
        <script src="<?php echo $url; ?>assets/js/scripts.js"></script>
    </body>
</html>
				
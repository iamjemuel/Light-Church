<?php 
include('apps/variables.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <?php
            if(strpos($uri, 'our-story')){
                echo '<title>Our Story | Light Church</title>';
            }elseif(strpos($uri, 'our-purpose')){
                echo '<title>Our Purpose | Light Church</title>';
            }elseif(strpos($uri, 'our-statement-of-faith')){
                echo '<title>Our Statement of Faith | Light Church</title>';
            }elseif(strpos($uri, 'journey')){
                echo '<title>Journey | Light Church</title>';
            }else{
                echo '<title>Page Not Found | Light Church</title>';
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
            if(strpos($uri, 'our-story')){
                include('apps/views/read/our-story.php');
            }elseif(strpos($uri, 'our-purpose')){
                include('apps/views/read/our-purpose.php');
            }elseif(strpos($uri, 'our-statement-of-faith')){
                include('apps/views/read/our-faith.php');
            }elseif(strpos($uri, 'journey')){
                include('apps/views/read/journey.php');
            }else{
                include('apps/views/404.php');
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
				
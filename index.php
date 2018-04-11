<?php 
include('apps/variables.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome | Light Church</title>
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
            include('apps/views/slider.php'); 
            include('apps/views/home.php');
			 
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
<script>
    console.log('Welcome to Light Church!');
</script>
				
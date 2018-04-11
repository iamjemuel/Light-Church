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
            }elseif(strpos($uri, 'community')){
                echo '<title>Community Ministry | Light Church</title>';
            }elseif(strpos($uri, 'lifegroup')){
                echo '<title>Lifegroup | Light Church</title>';
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
            if(strpos($uri, 'kids-ministry')){
                include('apps/views/ministries/kids.php');
            }elseif(strpos($uri, 'youth-ministry')){
                include('apps/views/ministries/youth.php');
            }elseif(strpos($uri, 'young-adult-professional-ministry')){
                include('apps/views/ministries/young-pro.php');
            }elseif(strpos($uri, 'community')){
                include('apps/views/ministries/community.php');
            }elseif(strpos($uri, 'lifegroup')){
                include('apps/views/ministries/lifegroup.php');
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
				
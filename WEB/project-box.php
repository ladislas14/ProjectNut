<?php $cats = array('web','dev','3D'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="css/box.css" />
        <!--[if lt IE 9]>
	        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	        <link rel="stylesheet" href="css/ie.css" />
	    <![endif]-->	
    </head>
<body>
	
	<div class="content">
		<div id="projects">
			<?php for ($i=0; $i < 30; $i++) :  ?>
	        <div class="project <?php echo $cats[$i%4]; ?>" id="projet<?php echo $i; ?>">
	        	<a class="thumb" href="#projet<?php echo $i; ?>">HTML</a>
	        	<div class="info">
	        		<img src="http://placehold.it/640x300" alt="" width="630" height="300">
	        		<p>Ici les infos de mon projet</p>
	        	</div>
	        </div>
	        <?php endfor; ?>
		</div>
	</div>

	
</body>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	    <script type="text/javascript" src="js/masonry.js"></script>
	    <script type="text/javascript" src="js/main.js"></script>
</html>
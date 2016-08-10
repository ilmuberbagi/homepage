<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php $this->load->view('template/inc/open_graph');?>
    <title><?php echo isset($title) ? $title : "Mitra Komunitas Ilmu Berbagi Foundation";?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css';?>">
	
	<?php if($this->uri->segment(1) == "program" || $this->uri->segment(1) == "blog"){?>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.default.css';?>" id="theme-stylesheet">
	<?php }else if($this->uri->segment(1) == "layanan"){?>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.pink.css';?>" id="theme-stylesheet">
	<?php }else if($this->uri->segment(1) == "komunitas"){?>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.red.css';?>" id="theme-stylesheet">
	<?php }else{?>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.red.css';?>" id="theme-stylesheet">
	<?php } ?>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css';?>">
    <link rel="shortcut icon" href="<?php echo base_url().'assets/img/ico.png';?>">

    <link href="<?php echo base_url().'assets/css/owl.carousel.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/owl.theme.css';?>" rel="stylesheet">

	<?php
    $meta_page = "default";
    if(isset($page)) $meta_page = $page;
    if(file_exists(APPPATH."views/template/meta_top/{$meta_page}.php")) 
        $this->load->view("template/meta_top/{$meta_page}");
    ?>
</head>
<body>
	<div id="all">
	
		<?php $this->load->view("template/header");?>
		<?php
		if (!empty($page))
			if(file_exists(APPPATH."views/template/{$page}.php"))
				$this->load->view("template/".$page);
		?>
		<?php $this->load->view("template/footer");?>
		
	</div>
    <!-- Javascript files-->
    <script src="<?php echo base_url().'assets/js/jquery-1.11.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.cookie.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/waypoints.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.counterup.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.parallax-1.1.3.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/front.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>

    <?php
    if(file_exists(APPPATH."views/template/meta_bottom/{$meta_page}.php"))
        $this->load->view("template/meta_bottom/{$meta_page}");
    ?>
	<!-- GA -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  // ga('create', 'UA-76967486-1', 'auto');
	  ga('create', 'UA-75163965-1', 'auto');
	  ga('send', 'pageview');
	</script>

  </body>
</html>

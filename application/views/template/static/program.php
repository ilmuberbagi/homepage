<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1><?php echo ucwords(str_replace('-',' ', $this->uri->segment(2)));?></h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>">Home</a></li>
					<li><?php echo ucwords(str_replace('-',' ', $this->uri->segment(2)));?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9 clearfix">
				<section>
					<div id="text-page">
						<?php $this->load->view('template/static/inc/'.$content);?>
					</div>
				</section>
			</div>
			<div class="col-sm-3">
				<div class="panel panel-default sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Program</h3>
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo base_url().'program/berbagi-tulisan';?>">Berbagi Tulisan</a></li>
							<li><a href="<?php echo base_url().'program/berbagi-video';?>">Berbagi Video</a></li>
							<li><a href="<?php echo base_url().'program/berbagi-buku';?>">Berbagi Buku</a></li>
							<li><a href="<?php echo base_url().'program/ib-webinar';?>">IB Webinar</a></li>
							<li><a href="<?php echo base_url().'program/ib-mengudara';?>">IB Mengudara</a></li>
						</ul>
					</div>
				</div>
				<div class="banner">
					<a href="shop-category.html">
						<img src="<?php echo base_url().'assets/img/banner.jpg';?>" alt="sales 2014" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
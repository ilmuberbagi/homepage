<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1><?php echo $this->uri->segment(3) ? ucwords(str_replace('-',' ', $this->uri->segment(3))):'Blog/Artikel';?></h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>">Home</a></li>
					<li><a href="<?php echo site_url().'blog';?>">Blog</a></li>
					<?php if($this->uri->segment(2) != ""){?>
					<li><?php echo ucwords(str_replace('-',' ', $this->uri->segment(3)));?></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="content">
	<div class="container">
		<div class="row">
			<h3>Blog</h3>
			<?php if(!empty($article->data)){ ?>
			<div class="col-md-9" id="blog-listing-small">
				<div class="row">
					<?php foreach($article->data as $ar){?>
					<div class="col-md-4 col-sm-6">
						<div class="box-image-text blog">
							<div class="top">
								<div class="image">
									<img src="<?php echo set_image($ar->article_image,'thumb');?>" class="img-responsive img-post" style="width:150px; height:120px">
								</div>
							</div>
							<div class="content">
								<div class="author-category"><a href="<?php echo site_url().'blog/read/'.$ar->article_id.'/'.gen_url($ar->article_title);?>"><?php echo $ar->article_title;?></a></div>
								<p class="title">Oleh <a href="#"><?php echo $ar->author;?></a> @ <a href="<?php echo site_url().'blog/category/'.gen_url($ar->category_name);?>"><?php echo $ar->category_name;?></a>
								</p>
								<p class="read-more"><a href="<?php echo site_url().'blog/read/'.$ar->article_id.'/'.gen_url($ar->article_title);?>" class="btn btn-template-main">Baca Selengkapnnya</a>
								</p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<ul class="pager">
					<li class="previous"><a href="#">&larr; Older</a></li>
					<li class="next"><a href="#">Newer &rarr;</a></li>
				</ul>
			</div>
			<?php }else {?>
			<div class="col-md-9" id="blog-listing-small">Belum ada artikel yang dapat ditampilkan...</div>
			<?php } ?>
			
			<!-- right side -->
			<div class="col-md-3">
				<div class="panel panel-default sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Quote of The Day</h3>
					</div>
					<div class="panel-body text-widget">
						<p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
						</p>
					</div>
				</div>
				<div class="panel panel-default sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Search</h3>
					</div>
					<div class="panel-body">
						<form role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-default sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Categories</h3>
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<?php if(!empty($article_categories->data)){foreach($article_categories->data as $ac){?>
							<li class="<?php echo gen_url($ac->category_name) == $this->uri->segment(3) ? 'active':'';?>"><a href="<?php echo site_url().'blog/category/'.gen_url($ac->category_name);?>"><?php echo $ac->category_name;?></a></li>
							<?php }} ?>
						</ul>
					</div>
				</div>

				<div class="panel sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Tags</h3>
					</div>
					<div class="panel-body">
						<ul class="tag-cloud">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
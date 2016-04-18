<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1><?php echo $this->uri->segment(4) ? ucwords(str_replace('-',' ', $this->uri->segment(4))):'Blog/Artikel';?></h1>
			</div>
			<div class="col-md-5">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url();?>">Home</a></li>
					<li><a href="<?php echo site_url().'blog';?>">Blog</a></li>
					<?php if($this->uri->segment(4) != ""){?>
					<li><?php echo ucwords(str_replace('-',' ', $this->uri->segment(4)));?></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9" id="blog-post">
				
				<p class="text-muted text-uppercase mb-small text-right">Oleh <a href="#"><?php echo $article[0]->member_name;?></a> | <?php echo date('Y M d H:i', strtotime($article[0]->article_date_update));?></p>
				<p class="lead"></p>
				<div id="post-content">
					<?php echo set_image($article[0]->article_image);?>
					<?php echo $article[0]->article_content;?>
				</div>
				
				<div id="comments">
					<h4 class="text-uppercase">1 comments</h4>
					<div class="row comment">
						<div class="col-sm-3 col-md-2 text-center-xs"></div>
						<div class="col-sm-9 col-md-10">
							<h5 class="text-uppercase">Sabbana Azmi</h5>
							<p class="posted"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y H:i');?></p>
							<p>Artikelnya bagus kak, terimakasih sudah berbagi ilmunya kepada kita semua...</p>
						</div>
					</div>
				</div>

				<div id="comment-form">
					<h4 class="text-uppercase">Leave comment</h4>
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="name">Name <span class="required">*</span>
									</label>
									<input type="text" class="form-control" id="name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="email">Email <span class="required">*</span>
									</label>
									<input type="text" class="form-control" id="email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="comment">Comment <span class="required">*</span>
									</label>
									<textarea class="form-control" id="comment" rows="4"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-right">
								<button class="btn btn-template-main"><i class="fa fa-comment-o"></i> Post comment</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<!-- right side -->
			<div class="col-md-3">
				<div class="panel panel-default sidebar-menu">
					<div class="panel-heading">
						<h3 class="panel-title">Quote of The Day</h3>
					</div>
					<div class="panel-body text-widget">
						<p>Tidak ada yang lebih baik dibandingkan dua insan yang saling menjaga hati memiliki perasaan, namun memilih mengabadikannya dalam diam karena tak mau Tuhan mencemburu dan semakin membuatnya jauh. Karena semua akan indah pada waktunya.
						</p>
						<a href="#">By : Mbak Nana</a>
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
							<?php if(!empty($article_categories)){foreach($article_categories as $ac){?>
							<li class="<?php echo gen_url($ac->category_name) == $this->uri->segment(3) ? 'active':'';?>"><a href="<?php echo site_url().'blog/category/'.gen_url($ac->category_name);?>"><?php echo $ac->category_name.'<span class="label label-warning pull-right">'.$ac->count_article.'</span>';?></a></li>
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
							<li>ibf</li>
							<li>tentang ibf</li>
							<li>sekilas ibf</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
					<li>Read</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9" id="blog-post">
				
				<p class="text-muted text-uppercase mb-small text-right">Oleh <a href="#"><?php echo $article[0]->author;?></a> | <?php echo date('d/m/Y - H:i', strtotime($article[0]->article_date_input));?></p>
				<p class="lead"></p>
				<div id="post-content">
					<h2><?php echo $article[0]->article_title;?></h2>
					<?php echo $article[0]->article_content;?>
				</div>
				<div class="social-sharing" style="clear:both; font-size:4em">
					<a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>','facebook-share-dialog','width=626,height=436'); return false;" href="javascript:void(0);">
					<span class="fa fa-facebook-square"></span></a>
					
					<a onclick="window.open('http://twitter.com/intent/tweet?text=<?php echo current_url(); ?>','twitter-share-dialog','width=626,height=436'); return false;" href="javascript:void(0);">
					<span class="fa fa-twitter-square"></span></a>
					
					<a onclick="window.open('https://plus.google.com/share?url=<?php echo current_url(); ?>','twitter-share-dialog','width=626,height=436'); return false;" href="javascript:void(0);">
					<span class="fa fa-google-plus-square"></span></a>
					
					<a href="whatsapp://send?text=<?php echo $article[0]->article_title.' '.current_url();?>">
					<span class="fa fa-share-alt-square"></span></a>

				</div>
				
				<div id="comments">
					<h4 class="text-uppercase">1 comments</h4>
					<div class="row comment">
						<div class="col-sm-12">
							<?php echo set_image($this->session->userdata('avatar'),'thumb','50px');?>
							<h5 class="text-uppercase">Sabbana Azmi</h5>
							<p class="posted"><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y H:i');?></p>
							<p>Artikelnya bagus kak, terimakasih sudah berbagi ilmunya kepada kita semua...</p>
						</div>
					</div>
				</div>

				<div id="comment-form">
					<h2 class="text-uppercase">Leave comment</h2>
					<?php if($this->session->flashdata('comment_status') != ""){?>
					<div class="alert alert-info"><?php echo $this->session->flashdata('comment_status');?></div>
					<?php } ?>
					<form action="<?php echo site_url().'blog/post_comment';?>" method="post">
						<input type="hidden" name="article_id" value="<?php echo $article[0]->article_id;?>">
						<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="guest_name" class="form-control" id="name" value="<?php echo $this->session->userdata('name');?>" <?php echo $this->session->userdata('name')!=""? 'readonly':'';?> placeholder="Name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" name="guest_email" class="form-control" id="email" value="<?php echo $this->session->userdata('email');?>" <?php echo $this->session->userdata('email')!=""? 'readonly':'';?> placeholder="Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="comment">Comment <span class="required">*</span></label>
									<textarea class="form-control" name="guest_comment" id="comment" rows="4"></textarea>
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
						<p>Tidak ada yang lebih baik dibandingkan dua insan yang saling menjaga hati memiliki perasaan, namun memilih mengabadikannya dalam diam karena tak mau Tuhan mencemburu dan semakin membuatnya jauh. Karena semua akan indah pada waktunya.</p>
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
							<?php 
							$tags = array(); 
							if($article[0]->article_tags !== ""){
								$tags = json_decode($article[0]->article_tags);
								for($a=0; $a<count($tags); $a++){
							?>
							<li><a href="<?php echo site_url().'blog/tag/'.$tags[$a];?>"><i class="fa fa-tags"></i> <?php echo $tags[$a];?></a></li>
							<?php }} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
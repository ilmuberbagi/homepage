<!-- facebook comment plugins -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.6&appId=866991670110955";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
					<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="100%" data-numposts="10"></div>
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
						<h3 class="panel-title">Kategori</h3>
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
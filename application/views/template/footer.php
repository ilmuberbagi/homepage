<div id="get-it">
	<div class="container">
		<div class="col-md-8 col-sm-12">
			<h3>Apakah Anda mendukung gerakan berbagi berkelanjutan?</h3>
		</div>
		<div class="col-md-4 col-sm-12">
			<a href="http://ilmuberbagi.id/blog/read/364/donasi" class="btn btn-template-transparent-primary">Mari Berdonasi</a>
		</div>
	</div>
</div>

<footer id="footer">
	<div class="container">
		<div class="col-md-3 col-sm-6">
			<h4>Tentang IBF</h4>
			<p>Wadah berbagi berkelanjutan <br/>Online dan Offline</p>
			<hr>
			<h4>Update Artikel IBF</h4>
			<form>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>
					</span>
				</div>
			</form>
			<hr class="hidden-md hidden-lg hidden-sm">
		</div>

		<div class="col-md-3 col-sm-6">
			<h4>Blog</h4>
			<div class="blog-entries">
				<?php if(!empty($footer_article)){ foreach ($footer_article as $fa){?>
				<div class="item same-height-row clearfix">
					<div class="image same-height-always">
						<a href="<?php echo site_url().'blog/read/'.$fa->article_id.'/'.gen_url($fa->article_title);?>">
							<img src="<?php echo set_image($fa->article_image,'thumb');?>" style="max-width:40px">
						</a>
					</div>
					<div class="name same-height-always">
						<h5><a href="<?php echo site_url().'blog/read/'.$fa->article_id.'/'.gen_url($fa->article_title);?>"><?php echo $fa->article_title;?></a></h5>
					</div>
				</div>
				<?php }}else{ echo "Belum ada artikel yang dapat ditampilkan..."; } ?>
			</div>
			<hr class="hidden-md hidden-lg">
		</div>
		
		<div class="col-md-3 col-sm-6">
			<h4>Contact</h4>
			<p>
				<strong>Rumah Komunitas Ilmu Berbagi Foundation</strong>
				<br/>Jl.Pandegasiwi no.14, Kaulirang KM.5,6 
				<br/>Kec.Depok, Sleman, 
				<br/>Jogjakarta 55281 

			</p>
			<a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>
			<hr class="hidden-md hidden-lg hidden-sm">
		</div>
		
		<div class="col-md-3 col-sm-6">
			<h4>Agenda Terdekat</h4>
			<div class="photostream">
				
			</div>
		</div>
	</div>
</footer>

<div id="copyright">
	<div class="container">
		<div class="col-md-12">
			<p class="pull-left">&copy; 2016 Ilmu Berbagi Foundation</p>
			<p class="pull-right">Template by <a href="http://bootstrapious.com">Bootstrap 4 Themes</a> with support from <a href="http://kakusei.cz">Designové předměty</a> 
			</p>

		</div>
	</div>
</div>
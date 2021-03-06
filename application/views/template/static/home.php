<section>
	<div class="home-carousel">
		<!--div class="dark-mask"></div-->
		<div class="container">
			<div class="homepage owl-carousel">
				<div class="item">
					<div class="row">
						<div class="col-sm-5 right">
							<h1>Sharing Knowledge</h1>
							<p>Mengoptimalkan ilmu pengetahuan yang dimiliki anggota Komunitas Ilmu Berbagi hingga dapat bermanfaat bagi kebaikan orang banyak</p>
						</div>
						<div class="col-sm-7">
							<img class="img-responsive" src="<?php echo base_url().'assets/img/template-homepage.png';?>" alt="">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-7 text-center">
							<img class="img-responsive" src="<?php echo base_url().'assets/img/template-mac.png';?>" alt="">
						</div>
						<div class="col-sm-5">
							<h1>Berbagi Berkelanjutan</h1>
							<p>Dengan segala sumber daya komunitas, berusaha untuk terus berbagi berkelanjutan dalam memberikan pelayanan sosial pendidikan di Indonesia.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-5 right">
							<h1>Pendidikan untuk semua</h1>
							<p>Membantu adik-adik yang berasal dari keluarga dhuafa maupun yatim-piatu agar dapat mengakses pendidikan yang layak hingga mencapai kemandiriannya.</p>
						</div>
						<div class="col-sm-7">
							<img class="img-responsive" src="<?php echo base_url().'assets/img/template-easy-customize.png';?>" alt="">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-7">
							<img class="img-responsive" src="<?php echo base_url().'assets/img/template-easy-code.png';?>" alt="">
						</div>
						<div class="col-sm-5">
							<h1>Semangat Berbagi</h1>
							<p>Menjalankan dan menyebarkan semangat berbagi sesuai dengan 4 Komitmen dasar Ilmu Berbagi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bar background-white">
	<div class="container">
		<div class="col-md-12">
			<div class="heading text-center">
				<h5>Layanan Ilmu Berbagi</h5>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="<?php echo site_url().'layanan/rumah-komunitas';?>"><i class="fa fa-home text-primary"></i></a>
							<h5>Rumah Komunitas</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="<?php echo site_url().'blog';?>"><i class="fa fa-file-text text-primary"></i></a>
							<h5>Blog/Artikel</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="http://jurnal.ilmuberbagi.or.id"><i class="fa fa-book text-primary"></i></a>
							<h5>Jurnal IB</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="http://youtube.com/ilmuberbagi"><i class="fa fa-play-circle text-primary"></i></a>
							<h5>Channel IB</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- 2nd rows -->
			<div class="row">
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="#"><i class="fa fa-shopping-cart text-primary"></i></a>
							<h5>Market IB</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="http://mitra.ilmuberbagi.or.id"><i class="fa fa-share-alt text-primary"></i></a>
							<h5>Mitra Komunitas</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="http://quote.ilmuberbagi.or.id"><i class="fa fa-comments text-primary"></i></a>
							<h5>Quote Berbagi</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-simple">
						<div style="font-size:5em">
							<a href="http://portal.ilmuberbagi.or.id"><i class="fa fa-users text-primary"></i></a>
							<h5>Direktori Member</h5>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="bar background-image-fixed-2 no-mb color-white text-center">
	<div class="dark-mask"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="icon icon-lg"><i class="fa fa-heart"></i>
				</div>
				<h5 class="text-uppercase">Apakah Anda tertarik dengan IBF?</h5>
				<p class="lead">Kami dengan sangat senang hati menyambut Anda untuk bergabung dengan Ilmu Berbagi untuk berbagi berkelanjutan menuju Indonesia yang lebih baik.</p>
				<p class="text-center">
					<a href="http://portal.ilmuberbagi.id/register" class="btn btn-template-transparent-black btn-lg">Ayo Berbagung!</a>
				</p>
			</div>

		</div>
	</div>
</section>

<section class="bar background-white no-mb">
	<div class="container">

		<div class="col-md-12">
			<div class="heading text-center">
				<h5>Artikel Terbaru</h5>
			</div>

			<p class="lead">Jangan lewatkan artikel-artikel terbaru yang kaya akan ilmu pengetahuan yang selalu dibagikan oleh para kontributor tulisan sobat ilmu berbagi dari berbagai disiplin ilmu. <span class="accent">Check our blog!</span>
			</p>

			<div class="row">
				<?php if(!empty($top4->data)){ foreach ($top4->data as $t4){?>
				<div class="col-md-3 col-sm-6">
					<div class="box-image-text blog">
						<div class="top">
							<div class="image">
								<img src="<?php echo set_image($t4->article_image,'thumb');?>">
							</div>
						</div>
						<div class="content">
							<h4><a href="<?php echo site_url().'blog/read/'.$t4->article_id.'/'.gen_url($t4->article_title);?>"><?php echo $t4->article_title;?></a></h4>
							<p class="author-category">Oleh <a href="#"><?php echo $t4->author;?></a> Pada <a href="<?php echo site_url().'blog/'.$t4->article_id.'/'.gen_url($t4->category_name);?>"><?php echo $t4->category_name;?></a>
							</p>
							<p class="intro"><?php echo headline($t4->article_content);?></p>
							<p class="read-more"><a href="<?php echo site_url().'blog/read/'.$t4->article_id.'/'.gen_url($t4->article_title);?>" class="btn btn-template-main">Baca Selengkapnya</a>
							</p>
						</div>
					</div>
				</div>
				<?php }}?>
			</div>
		</div>
	</div>
</section>

<section class="bar background-gray no-mb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading text-center">
					<h5>Partner Komunitas</h5>
				</div>
				<ul class="owl-carousel customers">
					<?php for($a=1; $a<=15; $a++){?>
					<li class="item"><img src="<?php echo base_url().'assets/img/partners/'.$a.'.png';?>" alt="" class="img-responsive"></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>

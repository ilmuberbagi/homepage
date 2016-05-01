		<?php #print_r($this->session->all_userdata());?>
		<header>
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
							<?php if($this->session->userdata('avatar') != ""){?>
                            <p class="hidden-sm hidden-xs">
								<img src="<?php echo $this->session->userdata('avatar');?>" class="img-circle"  style="max-width:30px">
								<span style="margin-left:10px">
									<a href="http://portal.ilmuberbagi.id/member/<?php echo $this->session->userdata('ibf_code');?>" target="_blank" data-animate-hover="pulse" style="color:#FFF">
										<?php echo $this->session->userdata('name');?>
										| Member sejak <?php echo $this->session->userdata('year');?>
									</a>
								</span>
							</p>
                            <p class="hidden-md hidden-lg">
								<img src="<?php echo $this->session->userdata('avatar');?>" class="img-circle" style="max-width:30px">
                            </p>
							<?php } ?>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="http://faceboook.com/ilmuberbagi" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="http://google.com/plus/ilmuberbagi" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="http://twitter.com/ilmuberbagi" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="mailto:info@ilmuberbagi.or.id" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
								<?php if($this->session->userdata('ibf_code') != ""){?>
									<a href="<?php echo site_url().'auth/logout';?>"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Log Out</span></a>
								<?php }else{?>
									<a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
									<a href="http://portal.ilmuberbagi.id/register"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="<?php echo site_url();?>">
                                <img src="<?php echo base_url().'assets/img/logo.png';?>" alt="Ilmu berbagi Foundation" class="hidden-xs hidden-sm">
                                <img src="<?php echo base_url().'assets/img/logo.png';?>" alt="Ilmu berbagi Foundation" class="visible-xs visible-sm"><span class="sr-only">Ilmu Berbagi - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="<?php echo $this->uri->segment(1)?'':'active';?>">
                                    <a href="<?php echo site_url();?>"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw <?php echo $this->uri->segment(1) == 'program'?'active':'';?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Program <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php echo base_url().'assets/img/template-easy-customize.png';?>" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Kegiatan Online</h5>
                                                        <ul>
                                                            <li><a href="<?php echo site_url().'program/berbagi-tulisan';?>">Berbagi Tulisan</a></li>
                                                            <li><a href="<?php echo site_url().'program/berbagi-video';?>">Berbagi Video</a></li>
                                                            <li><a href="<?php echo site_url().'program/berbagi-buku';?>">Berbagi Buku</a></li>
                                                            <li><a href="<?php echo site_url().'program/ib-webinar';?>">IB Webinar</a></li>
                                                            <li><a href="<?php echo site_url().'program/ib-mengudara';?>">IB Mengudara</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Kegiatan Offline</h5>
                                                        <ul>
                                                            <li><a href="<?php echo site_url().'program/pelatihan';?>">Pelatihan dan Sertifikasi Gratis</a></li>
                                                            <li><a href="<?php echo site_url().'program/berbagi-ilmu';?>">Berbagi Ilmu Tematik</a></li>
                                                            <li><a href="<?php echo site_url().'program/ib-gts';?>">IB Goes to School</a></li>
                                                            <li><a href="<?php echo site_url().'program/ib-academy';?>">IB Academy</a></li>
                                                        </ul>
														<h5>Beasiswa</h5>
                                                        <ul>
                                                            <li><a href="<?php echo site_url().'program/beastudi-ib';?>">Beastudi Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'program/ib-academy-heroes';?>">Ilmu Berbagi Academy Heroes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw <?php echo $this->uri->segment(1) == 'layanan'?'active':'';?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php echo base_url().'assets/img/template-homepage.png';?>" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h5>Layanan</h5>
                                                        <ul>
                                                            <li><a href="<?php echo site_url().'layanan/rumah-komunitas';?>">Rumah Komunitas IBF</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/blog';?>">Blog/Artikel</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/jurnal';?>">Jurnal Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/channel';?>">Channel Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/quote-berbagi';?>">Quote Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/member';?>">Direktori Sobat Komunitas</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/mitra';?>">Portal Mitra Komunitas</a></li>
                                                            <li><a href="<?php echo site_url().'layanan/market';?>">Market Ilmu Berbagi</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw" <?php echo $this->uri->segment(1) == 'komunitas'?'active':'';?>>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Komunitas <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                    </div>    
                                                    <div class="col-sm-6">
                                                        <h5>Komunitas</h5>
                                                        <ul>
                                                            <li><a href="<?php echo site_url().'komunitas/sobat-komunitas-ib';?>">Sobat Komunitas Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'komunitas/penerima-beastudi-ib';?>">Penerima Beastudi Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'komunitas/alumni-beastudi-ib';?>">Alumni Beastudi Ilmu Berbagi</a></li>
                                                            <li><a href="<?php echo site_url().'komunitas/alumni-pelatihan-gratis';?>">Alumni Pelatihan Gratis</a></li>
                                                            <li><a href="<?php echo site_url().'komunitas/peserta-ib-academy-heroes';?>">Peserta Ilmu Berbagi Academy Heroes</a></li>
                                                            <li><a href="<?php echo site_url().'komunitas/mitra-komunitas';?>">Mitra Komunitas Ilmu Berbagi</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <?php if(!empty($article_categories)){foreach($article_categories as $ac){?>
										<li><a href="<?php echo site_url().'blog/category/'.gen_url($ac->category_name);?>"><?php echo $ac->category_name;?></a></li>
										<?php }} ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse clearfix" id="search">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
										<button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
									</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login" style="text-align:center"><i class="fa fa-lock"></i> Member login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url().'auth';?>" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="email_modal" placeholder="username atau email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password_modal" placeholder="password">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Belum terdaftar sebagai member?</p>
                        <p class="text-center text-muted"><a href="http://portal.ilmuberbagi.id/register"><strong>Gabung sekarang!</strong></a> Bergabung dengan sobat Ilmu Berbagi dan buatlah hidupmu lebih bermakna!</p>
                    </div>
                </div>
            </div>
        </div>

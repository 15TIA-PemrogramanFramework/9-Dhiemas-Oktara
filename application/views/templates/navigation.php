return <div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
						<div class="sidebar-user-info">

				<div class="sui-normal">
					<a href="#" class="user-link">
						<img src="assets/images/thumb-11.png" alt="" class="img-circle" />

						<span>Admin</span>
						<strong><?php  echo $this->session->userdata('username'); ?></strong>
					</a>
					<strong></strong>
				</div>

				<div class="sui-hover inline-links animate-in">
					<a href="<?php echo site_url('login/logout') ?>">
						<i class="entypo-lock"></i>
						Log Off
					</a>

					<span class="close-sui-popup">&times;</span><!-- this is mandatory -->				</div>
			</div>
			
									
			<ul id="main-menu" class="main-menu">
				
				<li>
					<a href="<?php echo site_url('home') ?>">
						<i class="entypo-home"></i>
						<span class="title">Home</span>
					</a>
					
				</li>
				<li>
					<a href="<?php echo site_url('admin') ?>">
						<i class="entypo-vcard"></i>
						<span class="title">Admin</span>
					</a>
					
				</li>

				<li>
					<a href="<?php echo site_url('penemu') ?>">
						<i class="entypo-user"></i>
						<span class="title">Data Penemu</span>
					</a>
					
				</li>

				<li>
					<a href="<?php echo site_url('pemilik') ?>">
						<i class="entypo-user"></i>
						<span class="title">Data Pemilik</span>
					</a>
					
				</li>

				<li>
					<a href="<?php echo site_url('barang') ?>">
						<i class="entypo-tools"></i>
						<span class="title">Data Barang</span>
					</a>
					
				</li>
			
					<li>
					<a href="<?php echo site_url('penemuan') ?>">
						<i class="entypo-reply"></i>
						<span class="title">Penemuan</span>
					</a>
					<ul>
						<li>
							<a href="<?php echo site_url('penemuan/tambah_Penemuan') ?>">
						<span class="title">Form Penemuan</span>
					</a>
						</li>
						<li>
					<a href="<?php echo site_url('penemuan') ?>">
						<span class="title">Penemuan</span>
					</a>
			</li>
					</ul></li>

					<li>
					<a href="<?php echo site_url('pengambilan') ?>">
						<i class="entypo-forward"></i>
						<span class="title">Pengembalian</span>
					</a>
					<ul>
						<li>
							<a href="<?php echo site_url('penemuan/tambah_Penemuan') ?>">
						<span class="title">Form Pengambilan</span>
					</a>
						</li>
						<li>
					<a href="<?php echo site_url('pengambilan') ?>">
						<span class="title">Pengambilan</span>
					</a>
			</li>
					</ul>

		</div>

	</div>
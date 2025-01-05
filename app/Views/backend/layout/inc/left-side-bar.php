<div class="left-side-bar">
	<div class="brand-logo">
		<a href="index.html">
			<img src="backend/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
			<img
				src="backend/vendors/images/deskapp-logo-white.svg"
				alt=""
				class="light-logo" />
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				<li>
					<a href="/" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-home"></span><span class="mtext">home</span>
					</a>
				</li>
				<li>
					<a href="<?= route_to('playlist') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-list"></span><span class="mtext">Playlist</span>
					</a>
				</li>
				<li>
					<a href="<?= route_to('musik') ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-music"></span><span class="mtext">Musik</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
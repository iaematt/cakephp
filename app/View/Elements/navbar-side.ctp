<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
	<!-- sidebar-collapse -->
	<div class="sidebar-collapse">
		<!-- side-menu -->
		<ul class="nav" id="side-menu">
			<li>
				<!-- user image section-->
				<div class="user-section">
					<div class="user-section-inner">
						<img src="assets/img/user.jpg" alt="">
					</div>
					<div class="user-info">
						<div>Jonny <strong>Deen</strong></div>
						<div class="user-text-online">
							<span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
						</div>
					</div>
				</div>
				<!--end user image section-->
			</li>
			<li class="sidebar-search">
				<!-- search section-->
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<!--end search section-->
			</li>
			<li>
				<a href="<?php echo $this->Html->url('/') ?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
			</li>
			<li>
				<a href="<?php echo $this->Html->url('/news'); ?>"><i class="fa fa-list fa-fw"></i> News<!--<span class="fa arrow"></span>--></a>
				<!-- <ul class="nav nav-second-level">
					<li>
						<a href="flot.html">Flot Charts</a>
					</li>
					<li>
						<a href="morris.html">Morris Charts</a>
					</li>
				</ul>
				second-level-items -->
			</li>

		</ul>
		<!-- end side-menu -->
	</div>
	<!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->

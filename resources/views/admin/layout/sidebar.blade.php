<!-- begin #sidebar -->
<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-14.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								{{Session::get('username')}}
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="material-icons">home</i>
						    <span>Dashboard</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="/layout/admin">Dashboard</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<i class="material-icons">book</i>
							<span>Data</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="{{ url ('/customer/form') }}">Customers</a></li>
						    <li><a href="{{ url ('/packages/formpackages') }}">Packages</a></li>
							<li><a href="{{ url ('/booking/formbooking') }}">Bookings</li>
						</ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
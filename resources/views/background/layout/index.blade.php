
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Xenon - Blank Page - Static Sidebar</title>

	<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>



	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">

	<div class="settings-pane">

		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>

		<div class="settings-pane-inner">

			<div class="row">

				<div class="col-md-4">

					<div class="user-info">

						<div class="user-image">
							<a href="extra-profile.html">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>

						<div class="user-details">

							<h3>
								<a href="extra-profile.html">John Smith</a>

								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>

							<p class="user-title">Web Developer</p>

							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>

						</div>

					</div>

				</div>

				<div class="col-md-8 link-blocks-env">

					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>

						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>

					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>

						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
Support Center
</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
Submit a Ticket
</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
Domains Protocol
</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
Terms of Service
</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others">

			<div class="sidebar-menu-inner">

				<header class="logo-env">

					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>

						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>

					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>

						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>

					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>


				</header>



				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
<!-- 					<li>
						<a href="dashboard-1.html">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
						<ul>
							<li>
								<a href="dashboard-1.html">
									<span class="title">Dashboard 1</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
							<li>
								<a href="dashboard-4.html">
									<span class="title">Dashboard 4</span>
								</a>
							</li>
							<li>
								<a href="skin-generator.html">
									<span class="title">Skin Generator</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">Layouts</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">Layout Variants &amp; API</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">Collapsed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-static-sidebar.html">
									<span class="title">Static Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu.html">
									<span class="title">Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-plus-sidebar.html">
									<span class="title">Horizontal &amp; Sidebar Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-click-to-open-subs.html">
									<span class="title">Horizontal Open On Click</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-min.html">
									<span class="title">Horizontal Menu Minimal</span>
								</a>
							</li>
							<li>
								<a href="layout-right-sidebar.html">
									<span class="title">Right Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-chat-open.html">
									<span class="title">Chat Open</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
									<span class="title">Both Menus &amp; Collapsed</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed.html">
									<span class="title">Boxed Layout</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed-horizontal-menu.html">
									<span class="title">Boxed &amp; Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="http://www.cssmoban.com">
									<span class="title">weidea.net</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">UI Elements</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">Panels</span>
								</a>
							</li>
							<li>
								<a href="ui-buttons.html">
									<span class="title">Buttons</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">Tabs &amp; Accordions</span>
								</a>
							</li>
							<li>
								<a href="ui-modals.html">
									<span class="title">Modals</span>
								</a>
							</li>
							<li>
								<a href="ui-breadcrumbs.html">
									<span class="title">Breadcrumbs</span>
								</a>
							</li>
							<li>
								<a href="ui-blockquotes.html">
									<span class="title">Blockquotes</span>
								</a>
							</li>
							<li>
								<a href="ui-progressbars.html">
									<span class="title">Progress Bars</span>
								</a>
							</li>
							<li>
								<a href="ui-navbars.html">
									<span class="title">Navbars</span>
								</a>
							</li>
							<li>
								<a href="ui-alerts.html">
									<span class="title">Alerts</span>
								</a>
							</li>
							<li>
								<a href="ui-pagination.html">
									<span class="title">Pagination</span>
								</a>
							</li>
							<li>
								<a href="ui-typography.html">
									<span class="title">Typography</span>
								</a>
							</li>
							<li>
								<a href="ui-other-elements.html">
									<span class="title">Other Elements</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-widgets.html">
							<i class="linecons-star"></i>
							<span class="title">Widgets</span>
						</a>
					</li>
					<li>
						<a href="mailbox-main.html">
							<i class="linecons-mail"></i>
							<span class="title">Mailbox</span>
							<span class="label label-success pull-right">5</span>
						</a>
						<ul>
							<li>
								<a href="mailbox-main.html">
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">Tables</span>
						</a>
						<ul>
							<li>
								<a href="tables-basic.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li>
								<a href="tables-responsive.html">
									<span class="title">Responsive Table</span>
								</a>
							</li>
							<li>
								<a href="tables-datatables.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="forms-native.html">
							<i class="linecons-params"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li>
								<a href="forms-native.html">
									<span class="title">Native Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Form Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-input-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-editors.html">
									<span class="title">Editors</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-gallery.html">
							<i class="linecons-beaker"></i>
							<span class="title">Extra</span>
							<span class="label label-purple pull-right hidden-collapsed">New Items</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons-fontawesome.html">
									<span class="title">Icons</span>
									<span class="label label-warning pull-right">4</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons-fontawesome.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-linecons.html">
											<span class="title">Linecons</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-elusive.html">
											<span class="title">Elusive</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-meteocons.html">
											<span class="title">Meteocons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-maps-google.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-maps-google.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-advanced.html">
											<span class="title">Advanced Map</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-vector.html">
											<span class="title">Vector Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login-light.html">
									<span class="title">Login Light</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-center.html">
									<span class="title">Timeline Centerd</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li>
								<a href="blank-sidebar.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li>
								<a href="extra-not-found.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="extra-loader.html">
									<span class="title">Loading Progress</span>
								</a>
							</li>
							<li>
								<a href="extra-page-loading-ol.html">
									<span class="title">Page Loading Overlay</span>
								</a>
							</li>
							<li>
								<a href="extra-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable-lists.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollable.html">
									<span class="title">Scrollable</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li> -->
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">后台管理1.0</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="/MasterList">
									<i class="entypo-flow-line"></i>
									<span class="title">高手推荐管理</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">解绑手机号码</span>
								</a>
							</li>
							<li>
							<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">高手榜单管理</span>
								</a>
							</li>
							<li>
							<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">高手类型管理</span>
								</a>
							</li>
							<li>
							<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">用户明细查询</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>

		</div>

		<div class="main-content">

			<!-- User Info, Notifications and Menu Bar -->

			<nav class="navbar user-info-navbar" role="navigation">

				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">

					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>

						<ul class="dropdown-menu messages">
							<li>

								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
Hayden Cartwright
<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
Sandra Eberhardt
<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

									<!-- Repeated -->

									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>

									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
Hayden Cartwright
<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>

									<li>
										<a href="#">
											<span class="line">
Sandra Eberhardt
<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>

								</ul>

							</li>

							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>

						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
You have <strong>3</strong> new notifications.
								</p>
							</li>

							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>

											<span class="line">
												<strong>New user registered</strong>
											</span>

											<span class="line small time">
30 seconds ago
</span>
										</a>
									</li>

									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>

											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

											<span class="line small time">
3 hours ago
</span>
										</a>
									</li>

									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>

											<span class="line">
												<strong>Someone special liked this</strong>
											</span>

											<span class="line small time">
2 minutes ago
</span>
										</a>
									</li>

									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>

											<span class="line">
John cancelled the event
</span>

											<span class="line small time">
9 hours ago
</span>
										</a>
									</li>

									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>

											<span class="line">
The server is status is stable
</span>

											<span class="line small time">
yesterday at 10:30am
</span>
										</a>
									</li>

									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>

											<span class="line">
New comments waiting approval
</span>

											<span class="line small time">
last week
</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

				</ul>


				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">

					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>

					</li>

					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
Arlind Nushi
<i class="fa-angle-down"></i>
							</span>
						</a>

						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
Logout
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>

				</ul>

			</nav>
            <!--
           <div class="page-title">

               <div class="title-env">
                   <h1 class="title">下面的数据暂时是假的~</h1>
                   <p class="description">EveryThing You Want and their types</p>
               </div>

                   <div class="breadcrumb-env">

                               <ol class="breadcrumb bc-1">
                                   <li>
                           <a href="dashboard-1.html"><i class="fa-home"></i>EveryThing You Want</a>
                       </li>
                               <li>

                                       <a href="ui-panels.html">EveryThing You Want</a>
                               </li>
                           <li class="active">

                                       <strong>EveryThing You Want</strong>
                               </li>
                               </ol>

               </div>

           </div>

<script type="text/javascript">
        jQuery(document).ready(function($)
               {
                   // Notifications
                   setTimeout(function()
                   {
                       var opts = {
                       "closeButton": true,
                           "debug": false,
                           "positionClass": "toast-top-right toast-default",
                           "toastClass": "black",
                           "onclick": null,
                           "showDuration": "100",
                           "hideDuration": "1000",
                           "timeOut": "5000",
                           "extendedTimeOut": "1000",
                           "showEasing": "swing",
                           "hideEasing": "linear",
                           "showMethod": "fadeIn",
                           "hideMethod": "fadeOut"
                       };

                       toastr.info("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
                   }, 3000);

                   // Charts
                   var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];

                   // Pageviews Visitors Chart
                   var i = 0,
                       line_chart_data_source = [
                       { id: ++i, part1: 4, part2: 2 },
                       { id: ++i, part1: 5, part2: 3 },
                       { id: ++i, part1: 5, part2: 3 },
                       { id: ++i, part1: 4, part2: 2 },
                       { id: ++i, part1: 3, part2: 1 },
                       { id: ++i, part1: 3, part2: 2 },
                       { id: ++i, part1: 5, part2: 3 },
                       { id: ++i, part1: 7, part2: 4 },
                       { id: ++i, part1: 9, part2: 5 },
                       { id: ++i, part1: 7, part2: 4 },
                       { id: ++i, part1: 7, part2: 3 },
                       { id: ++i, part1: 11, part2: 6 },
                       { id: ++i, part1: 10, part2: 8 },
                       { id: ++i, part1: 9, part2: 7 },
                       { id: ++i, part1: 8, part2: 7 },
                       { id: ++i, part1: 8, part2: 7 },
                       { id: ++i, part1: 8, part2: 7 },
                       { id: ++i, part1: 8, part2: 6 },
                       { id: ++i, part1: 15, part2: 5 },
                       { id: ++i, part1: 10, part2: 5 },
                       { id: ++i, part1: 9, part2: 6 },
                       { id: ++i, part1: 9, part2: 3 },
                       { id: ++i, part1: 8, part2: 5 },
                       { id: ++i, part1: 8, part2: 4 },
                       { id: ++i, part1: 9, part2: 5 },
                       { id: ++i, part1: 8, part2: 6 },
                       { id: ++i, part1: 8, part2: 5 },
                       { id: ++i, part1: 7, part2: 6 },
                       { id: ++i, part1: 7, part2: 5 },
                       { id: ++i, part1: 6, part2: 5 },
                       { id: ++i, part1: 7, part2: 6 },
                       { id: ++i, part1: 7, part2: 5 },
                       { id: ++i, part1: 8, part2: 5 },
                       { id: ++i, part1: 6, part2: 5 },
                       { id: ++i, part1: 5, part2: 4 },
                       { id: ++i, part1: 5, part2: 3 },
                       { id: ++i, part1: 6, part2: 3 },
                   ];

                   $("#pageviews-visitors-chart").dxChart({
                       dataSource: line_chart_data_source,
                       commonSeriesSettings: {
                   argumentField: "id",
                           point: { visible: true, size: 5, hoverStyle: {size: 7, border: 0, color: 'inherit'} },
                           line: {width: 1, hoverStyle: {width: 1}}
                       },
                       series: [
                           { valueField: "part1", name: "Pageviews", color: "#68b828" },
                           { valueField: "part2", name: "Visitors", color: "#eeeeee" },
                       ],
                       legend: {
                   position: 'inside',
                           paddingLeftRight: 5
                       },
                       commonAxisSettings: {
                   label: {
                       visible: false
                           },
                   grid: {
                       visible: true,
                               color: '#f9f9f9'
                           }
               },
                       valueAxis: {
                   max: 25
                       },
                       argumentAxis: {
                   valueMarginsEnabled: false
                       },
                   });



                   // Server Uptime Chart
                   var bar1_data_source = [
                       { year: 1, 	europe: 10, americas: 0, africa: 5 },
                       { year: 2, 	europe: 20, americas: 5, africa: 15 },
                       { year: 3, 	europe: 30, americas: 10, africa: 15 },
                       { year: 4, 	europe: 40, americas: 15, africa: 30 },
                       { year: 5, 	europe: 30, americas: 10, africa: 20 },
                       { year: 6, 	europe: 20, americas: 5,  africa: 10 },
                       { year: 7, 	europe: 10, americas: 15, africa: 0 },
                       { year: 8, 	europe: 20, americas: 25, africa: 8 },
                       { year: 9, 	europe: 30, americas: 35, africa: 16 },
                       { year: 10,	europe: 40, americas: 45, africa: 24 },
                       { year: 11,	europe: 50, americas: 40, africa: 32 },
                   ];

                   $("#server-uptime-chart").dxChart({
                       dataSource: [
                           {id: ++i, 	sales: 1},
                           {id: ++i, 	sales: 2},
                           {id: ++i, 	sales: 3},
                           {id: ++i, 	sales: 4},
                           {id: ++i, 	sales: 5},
                           {id: ++i, 	sales: 4},
                           {id: ++i, 	sales: 5},
                           {id: ++i, 	sales: 6},
                           {id: ++i, 	sales: 7},
                           {id: ++i, 	sales: 6},
                           {id: ++i, 	sales: 5},
                           {id: ++i, 	sales: 4},
                           {id: ++i, 	sales: 5},
                           {id: ++i, 	sales: 4},
                           {id: ++i, 	sales: 4},
                           {id: ++i, 	sales: 3},
                           {id: ++i, 	sales: 4},
                       ],

                       series: {
                   argumentField: "id",
                           valueField: "sales",
                           name: "Sales",
                           type: "bar",
                           color: '#7c38bc'
                       },
                       commonAxisSettings: {
                   label: {
                       visible: false
                           },
                   grid: {
                       visible: false
                           }
               },
                       legend: {
                   visible: false
                       },
                       argumentAxis: {
                   valueMarginsEnabled: true
                       },
                       valueAxis: {
                   max: 12
                       },
                       equalBarWidth: {
                   width: 11
                       }
                   });



                   // Average Sales Chart
                   var doughnut1_data_source = [
                       {region: "Asia", val: 4119626293},
                       {region: "Africa", val: 1012956064},
                       {region: "Northern America", val: 344124520},
                       {region: "Latin America and the Caribbean", val: 590946440},
                       {region: "Europe", val: 727082222},
                       {region: "Oceania", val: 35104756},
                       {region: "Oceania 1", val: 727082222},
                       {region: "Oceania 3", val: 727082222},
                       {region: "Oceania 4", val: 727082222},
                       {region: "Oceania 5", val: 727082222},
                   ], timer;

                   $("#sales-avg-chart div").dxPieChart({
                       dataSource: doughnut1_data_source,
                       tooltip: {
                   enabled: false,
                             format:"millions",
                           customizeText: function() {
                       return this.argumentText + "<br/>" + this.valueText;
                   }
                       },
                       size: {
                   height: 90
                       },
                       legend: {
                   visible: false
                       },
                       series: [{
                   type: "doughnut",
                           argumentField: "region"
                       }],
                       palette: ['#5e9b4c', '#6ca959', '#b9f5a6'],
                   });



                   // Pageview Stats
                   $('#pageviews-stats').dxBarGauge({
                       startValue: -50,
                       endValue: 50,
                       baseValue: 0,
                       values: [-21.3, 14.8, -30.9, 45.2],
                       label: {
                   customizeText: function (arg) {
                       return arg.valueText + '%';
                   }
               },
                       //palette: 'ocean',
                       palette: ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'],
                       margin : {
                   top: 0
                       }
                   });

                   var firstMonth = {
                   dataSource: getFirstMonthViews(),
                       argumentField: 'month',
                       valueField: '2014',
                       type: 'area',
                       showMinMax: true,
                       lineColor: '#68b828',
                       minColor: '#68b828',
                       maxColor: '#7c38bc',
                       showFirstLast: false,
                   },
                   secondMonth = {
                   dataSource: getSecondMonthViews(),
                       argumentField: 'month',
                       valueField: '2014',
                       type: 'splinearea',
                       lineColor: '#68b828',
                       minColor: '#68b828',
                       maxColor: '#7c38bc',
                       pointSize: 6,
                       showMinMax: true,
                       showFirstLast: false
                   },
                   thirdMonth = {
                   dataSource: getThirdMonthViews(),
                       argumentField: 'month',
                       valueField: '2014',
                       type: 'splinearea',
                       lineColor: '#68b828',
                       minColor: '#68b828',
                       maxColor: '#7c38bc',
                       pointSize: 6,
                       showMinMax: true,
                       showFirstLast: false
                   };

                   function getFirstMonthViews() {
                       return [{ month: 1, 2014: 7341 },
                       { month: 2, 2014: 7016 },
                       { month: 3, 2014: 7202 },
                       { month: 4, 2014: 7851 },
                       { month: 5, 2014: 7481 },
                       { month: 6, 2014: 6532 },
                       { month: 7, 2014: 6498 },
                       { month: 8, 2014: 7191 },
                       { month: 9, 2014: 7596 },
                       { month: 10, 2014: 8057 },
                       { month: 11, 2014: 8373 },
                       { month: 12, 2014: 8636 }];
                   };

                   function getSecondMonthViews() {
                       return [{ month: 1, 2014: 189742 },
                       { month: 2, 2014: 181623 },
                       { month: 3, 2014: 205351 },
                       { month: 4, 2014: 245625 },
                       { month: 5, 2014: 261319 },
                       { month: 6, 2014: 192786 },
                       { month: 7, 2014: 194752 },
                       { month: 8, 2014: 207017 },
                       { month: 9, 2014: 212665 },
                       { month: 10, 2014: 233580 },
                       { month: 11, 2014: 231503 },
                       { month: 12, 2014: 232824 }];
                   };

                   function getThirdMonthViews() {
                       return [{ month: 1, 2014: 398},
                       { month: 2, 2014: 422},
                       { month: 3, 2014: 431},
                       { month: 4, 2014: 481},
                       { month: 5, 2014: 551},
                       { month: 6, 2014: 449},
                       { month: 7, 2014: 442},
                       { month: 8, 2014: 482},
                       { month: 9, 2014: 517},
                       { month: 10, 2014: 566},
                       { month: 11, 2014: 630},
                       { month: 12, 2014: 737}];
                   };


                   $('.first-month').dxSparkline(firstMonth);
                   $('.second-month').dxSparkline(secondMonth);
                   $('.third-month').dxSparkline(thirdMonth);


                   // Realtime Network Stats
                   var i = 0,
                       rns_values = [130,150],
                       rns2_values = [39,50],
                       realtime_network_stats = [];

                   for(i=0; i<=100; i++)
                   {
                       realtime_network_stats.push({ id: i, x1: between(rns_values[0], rns_values[1]), x2: between(rns2_values[0], rns2_values[1])});
                   }

                   $("#realtime-network-stats").dxChart({
                       dataSource: realtime_network_stats,
                       commonSeriesSettings: {
                   type: "area",
                           argumentField: "id"
                       },
                       series: [
                           { valueField: "x1", name: "Packets Sent", color: '#7c38bc', opacity: .4 },
                           { valueField: "x2", name: "Packets Received", color: '#000', opacity: .5},
                       ],
                       legend: {
                   verticalAlignment: "bottom",
                           horizontalAlignment: "center"
                       },
                       commonAxisSettings: {
                   label: {
                       visible: false
                           },
                   grid: {
                       visible: true,
                               color: '#f5f5f5'
                           }
               },
                       legend: {
                   visible: false
                       },
                       argumentAxis: {
                   valueMarginsEnabled: false
                       },
                       valueAxis: {
                   max: 500
                       },
                       animation: {
                   enabled: false
                       }
                   }).data('iCount', i);

                   $('#network-realtime-gauge').dxCircularGauge({
                       scale: {
                   startValue: 0,
                           endValue: 200,
                           majorTick: {
                       tickInterval: 50
                           }
                       },
                       rangeContainer: {
                   palette: 'pastel',
                           width: 3,
                           ranges: [
                               { startValue: 0, endValue: 50, color: "#7c38bc" },
                               { startValue: 50, endValue: 100, color: "#7c38bc" },
                               { startValue: 100, endValue: 150, color: "#7c38bc" },
                               { startValue: 150, endValue: 200, color: "#7c38bc" },
                           ],
                       },
                       value: 140,
                       valueIndicator: {
                   offset: 10,
                           color: '#7c38bc',
                           type: 'triangleNeedle',
                           spindleSize: 12
                       }
                   });

                   setInterval(function(){  networkRealtimeChartTick(rns_values, rns2_values); }, 1000);
                   setInterval(function(){ networkRealtimeGaugeTick(); }, 2000);
                   setInterval(function(){ networkRealtimeMBupdate(); }, 3000);



                   // CPU Usage Gauge
                   $("#cpu-usage-gauge").dxCircularGauge({
                       scale: {
                   startValue: 0,
                           endValue: 100,
                           majorTick: {
                       tickInterval: 25
                           }
                       },
                       rangeContainer: {
                   palette: 'pastel',
                           width: 3,
                           ranges: [
                               { startValue: 0, endValue: 25, color: "#68b828" },
                               { startValue: 25, endValue: 50, color: "#68b828" },
                               { startValue: 50, endValue: 75, color: "#68b828" },
                               { startValue: 75, endValue: 100, color: "#d5080f" },
                           ],
                       },
                       value: between(30, 90),
                       valueIndicator: {
                   offset: 10,
                           color: '#68b828',
                           type: 'rectangleNeedle',
                           spindleSize: 12
                       }
                   });


                   // Resize charts
                   $(window).on('xenon.resize', function()
                   {
                       $("#pageviews-visitors-chart").data("dxChart").render();
                       $("#server-uptime-chart").data("dxChart").render();
                       $("#realtime-network-stats").data("dxChart").render();

                       $('.first-month').data("dxSparkline").render();
                       $('.second-month').data("dxSparkline").render();
                       $('.third-month').data("dxSparkline").render();
                   });

               });

               function networkRealtimeChartTick(min_max, min_max2)
               {
                   var $ = jQuery,
                       i = 0;

                   var chart_data = $('#realtime-network-stats').dxChart('instance').option('dataSource');

                   var count = $('#realtime-network-stats').data('iCount');

                   $('#realtime-network-stats').data('iCount', count + 1);

                   chart_data.shift();
                   chart_data.push({id: count + 1, x1: between(min_max[0],min_max[1]), x2: between(min_max2[0],min_max2[1])});

                   $('#realtime-network-stats').dxChart('instance').option('dataSource', chart_data);
               }

               function networkRealtimeGaugeTick()
               {
                   var nr_gauge = jQuery('#network-realtime-gauge').dxCircularGauge('instance');

                   nr_gauge.value( between(50,200) );
               }

               function networkRealtimeMBupdate()
               {
                   var $el = jQuery("#network-mbs-packets"),
                       options = {
                   useEasing : true,
                           useGrouping : true,
                           separator : ',',
                           decimal : '.',
                           prefix : '' ,
                           suffix : 'mb/s'
                       },
                       cntr = new countUp($el[0], parseFloat($el.text().replace('mb/s')), parseFloat(between(10,25) + 1/between(15,30)), 2, 1.5, options);

                   cntr.start();
               }

               function between(randNumMin, randNumMax)
               {
                   var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);

                   return randInt;
               }
           </script>

           <div class="row">
               <div class="col-sm-3">

                   <div class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="99.9" data-suffix="%" data-duration="2">
                       <div class="xe-icon">
                           <i class="linecons-cloud"></i>
                       </div>
                       <div class="xe-label">
                           <strong class="num">0.0%</strong>
                           <span>Server uptime</span>
                       </div>
                   </div>

                   <div class="xe-widget xe-counter xe-counter-purple" data-count=".num" data-from="1" data-to="117" data-suffix="k" data-duration="3" data-easing="false">
                       <div class="xe-icon">
                           <i class="linecons-user"></i>
                       </div>
                       <div class="xe-label">
                           <strong class="num">1k</strong>
                           <span>Users Total</span>
                       </div>
                   </div>

                   <div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="1000" data-to="2470" data-duration="4" data-easing="true">
                       <div class="xe-icon">
                           <i class="linecons-camera"></i>
                       </div>
                       <div class="xe-label">
                           <strong class="num">1000</strong>
                           <span>New Daily Photos</span>
                       </div>
                   </div>

               </div>
               <div class="col-sm-6">

                   <div class="chart-item-bg">
                       <div class="chart-label">
                           <div class="h3 text-secondary text-bold" data-count="this" data-from="0.00" data-to="14.85" data-suffix="%" data-duration="1">0.00%</div>
                           <span class="text-medium text-muted">More visitors</span>
                       </div>
                       <div id="pageviews-visitors-chart" style="height: 298px;"></div>
                   </div>

               </div>
               <div class="col-sm-3">

                   <div class="chart-item-bg">
                       <div class="chart-label chart-label-small">
                           <div class="h4 text-purple text-bold" data-count="this" data-from="0.00" data-to="95.8" data-suffix="%" data-duration="1.5">0.00%</div>
                           <span class="text-small text-upper text-muted">Current Server Uptime</span>
                       </div>
                       <div id="server-uptime-chart" style="height: 134px;"></div>
                   </div>

                   <div class="chart-item-bg">
                       <div class="chart-label chart-label-small">
                           <div class="h4 text-secondary text-bold" data-count="this" data-from="0.00" data-to="320.45" data-decimal="," data-duration="2">0</div>
                           <span class="text-small text-upper text-muted">Avg. of Sales</span>
                       </div>
                       <div id="sales-avg-chart" style="height: 134px; position: relative;">
                           <div style="position: absolute; top: 25px; right: 0; left: 40%; bottom: 0"></div>
                       </div>
                   </div>

               </div>
           </div>


           <div class="row">
               <div class="col-sm-6">

                   <div class="chart-item-bg">
                       <div id="pageviews-stats" style="height: 320px; padding: 20px 0;"></div>

                       <div class="chart-entry-view">
                           <div class="chart-entry-label">
Pageviews
                           </div>
                           <div class="chart-entry-value">
                               <div class="sparkline first-month"></div>
                           </div>
                       </div>

                       <div class="chart-entry-view">
                           <div class="chart-entry-label">
Visitors
                           </div>
                           <div class="chart-entry-value">
                               <div class="sparkline second-month"></div>
                           </div>
                       </div>

                       <div class="chart-entry-view">
                           <div class="chart-entry-label">
Converted Sales
</div>
                           <div class="chart-entry-value">
                               <div class="sparkline third-month"></div>
                           </div>
                       </div>
                   </div>

               </div>
               <div class="col-sm-6">

                   <div class="chart-item-bg">
                       <div class="chart-label">
                           <div id="network-mbs-packets" class="h1 text-purple text-bold" data-count="this" data-from="0.00" data-to="21.05" data-suffix="mb/s" data-duration="1">0.00mb/s</div>
                           <span class="text-small text-muted text-upper">Download Speed</span>
                       </div>
                       <div class="chart-right-legend">
                           <div id="network-realtime-gauge" style="width: 170px; height: 140px"></div>
                       </div>
                       <div id="realtime-network-stats" style="height: 320px"></div>
                   </div>

                   <div class="chart-item-bg">
                       <div class="chart-label">
                           <div id="network-mbs-packets" class="h1 text-secondary text-bold" data-count="this" data-from="0.00" data-to="67.35" data-suffix="%" data-duration="1.5">0.00%</div>
                           <span class="text-small text-muted text-upper">CPU Usage</span>

                           <p class="text-medium" style="width: 50%; margin-top: 10px">Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties.</p>
                       </div>
                       <div id="other-stats" style="min-height: 183px">
                           <div id="cpu-usage-gauge" style="width: 170px; height: 140px; position: absolute; right: 20px; top: 20px"></div>
                       </div>
                   </div>

               </div>
           </div>
测试   -->

                                     @yield('content')
<!-- start: Chat Section -->
<div id="chat" class="fixed">

    <div class="chat-inner">


        <h2 class="chat-header">
            <a href="#" class="chat-close" data-toggle="chat">
                <i class="fa-plus-circle rotate-45deg"></i>
            </a>

            Chat
            <span class="badge badge-success is-hidden">0</span>
        </h2>

        <script type="text/javascript">
            // Here is just a sample how to open chat conversation box
            jQuery(document).ready(function($)
            {
                var $chat_conversation = $(".chat-conversation");

                $(".chat-group a").on('click', function(ev)
                {
                    ev.preventDefault();

                    $chat_conversation.toggleClass('is-open');

                    $(".chat-conversation textarea").trigger('autosize.resize').focus();
                });

                $(".conversation-close").on('click', function(ev)
                {
                    ev.preventDefault();
                    $chat_conversation.removeClass('is-open');
                });
            });

            //自制alert
            function Myalert(param,error)
            {
                if(error!=null || error!=undefined)
                {
                    $('#cd_text').text(error);
                }
                $('#'+param+'').modal('show', {backdrop: 'fade'});
                setTimeout(function(){
                    $('#'+param+'').modal('hide');
                }, 2000);
            }
        </script>


        <div class="chat-group">
            <strong>Favorites</strong>

            <a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
            <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
            <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
        </div>


        <div class="chat-group">
            <strong>Work</strong>

            <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
        </div>


        <div class="chat-group">
            <strong>Other</strong>

            <a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
            <a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
            <a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
            <a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
            <a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
        </div>

    </div>

    <!-- conversation template -->
    <div class="chat-conversation">

        <div class="conversation-header">
            <a href="#" class="conversation-close">
                &times;
            </a>

            <span class="user-status is-online"></span>
            <span class="display-name">Arlind Nushi</span>
            <small>Online</small>
        </div>

        <ul class="conversation-body">
            <li>
                <span class="user">Arlind Nushi</span>
                <span class="time">09:00</span>
                <p>Are you here?</p>
            </li>
            <li class="odd">
                <span class="user">Brandon S. Young</span>
                <span class="time">09:25</span>
                <p>This message is pre-queued.</p>
            </li>
            <li>
                <span class="user">Brandon S. Young</span>
                <span class="time">09:26</span>
                <p>Whohoo!</p>
            </li>
            <li class="odd">
                <span class="user">Arlind Nushi</span>
                <span class="time">09:27</span>
                <p>Do you like it?</p>
            </li>
        </ul>

        <div class="chat-textarea">
            <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
        </div>

    </div>

</div>
<!-- end: Chat Section -->

</div>
</div>


        <div class="modal fade custom-width" id="modal-1">
            <div class="modal-dialog" style="width: 60%;">
                <div class="col-md-6">
                    <div class="alert alert-success">
                        <strong>温馨提示</strong>       操作成功！
                    </div>
                </div>
            </div>
        </div>


      






    <!-- Modal 5 (Long Modal)-->
    <div class="modal fade" id="modal-5">
        <div class="modal-dialog">
                      <div class="col-md-6">
                          <div class="alert alert-success">
                              <strong>温馨提示</strong>       <span id="cd_text">操作成功！</span>
                          </div>
                      </div>
          </div>
      </div>


<!-- Modal 6 (Long Modal)-->
    <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Master Info</h4>
                </div>
                
                <div class="modal-body">
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-1" class="control-label">Update Rank:</label>
                                
                                <input type="text" class="form-control" id="rank" placeholder="添入名次">
                            </div>  
                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal 4 (Confirm)-->
    <div class="modal fade" id="modal-4" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title">Confirm</h4>
                </div>
                
                <div class="modal-body">
                
                   <strong>继续吗？</strong>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="btn_Confirm" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>



<div class="page-loading-overlay">
        <div class="loader-2"></div>
    </div>

      <!-- Bottom Scripts -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/resizeable.js"></script>
<script src="assets/js/joinable.js"></script>
<script src="assets/js/xenon-api.js"></script>
<script src="assets/js/xenon-toggles.js"></script>

<!-- Imported scripts on this page -->
<script src="assets/js/xenon-widgets.js"></script>
<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
<script src="assets/js/toastr/toastr.min.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="assets/js/xenon-custom.js"></script>

</body>
</html>
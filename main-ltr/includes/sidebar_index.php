<?php




include('config.php');

if(!$_SESSION['alogin'])
{
	header('Location: ./pages/auth_login2.php');
}

$email = $_SESSION['alogin'];

$sql="SELECT * from `users` where email='$email'";
$result=mysqli_query($conn,$sql);
// $row1= mysqli_fetch_array($result1,MYSQLI_ASSOC);
$unique=mysqli_num_rows($result);

if($unique === 1)
{
	$res=mysqli_fetch_assoc($result);
	$name=$res['name'];
}
?>



<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="#">
				  <!-- logo for regular state and mobile devices -->
				  <h3><b>GPP</b></h3>
				</a>
			</div>
			<div class="profile-pic">
				<img src="../images/user5-128x128.jpg" alt="user">	
					<div class="profile-info"><h4><?php echo $name;?></h4>
						<!-- <div class="list-icons-item dropdown">
							<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><span class="badge badge-ring fill badge-primary mr-2"></span>Online</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item">Update data</a>
								<a href="#" class="dropdown-item">Detailed log</a>
								<a href="#" class="dropdown-item">Statistics</a>
								<a href="#" class="dropdown-item">Clear list</a>
							</div>
						</div> -->
					</div>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		  
        <li class="header nav-small-cap">PERSONAL</li>
		
		<li class="treeview active">
          <a href="#">
            <i class="ti-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="ti-more"></i>Home</a></li>
            <li><a href="pages/user_profile.php"><i class="ti-more"></i>User Profile</a></li>
            <!-- <li><a href="index-2.html"><i class="ti-more"></i>e-Commerce Dashboard</a></li>
            <li><a href="index-3.html"><i class="ti-more"></i>Analytics</a></li>
            <li><a href="index-4.html"><i class="ti-more"></i>Hospital</a></li>
            <li><a href="index-5.html"><i class="ti-more"></i>Banking</a></li>
            <li class="active"><a href="index-6.html"><i class="ti-more"></i>Cab Booki</a></li> -->
          </ul>
        </li>  
		
        <!-- <li class="treeview">
          <a href="#">
            <i class="ti-files"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout_boxed.html"><i class="ti-more"></i>Boxed</a></li>
            <li><a href="pages/layout_fixed.html"><i class="ti-more"></i>Fixed</a></li>
            <li><a href="pages/layout_collapsed_sidebar.html"><i class="ti-more"></i>Mini Sidebar</a></li>
          </ul>
        </li>   -->
<!-- 		
        <li class="treeview">
          <a href="#">
            <i class="ti-direction-alt"></i>
            <span>Page Layouts </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="ti-more"></i>Inner Left Sidebar </a></li>
            <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="ti-more"></i>Inner Right Sidebar </a></li>
            <li><a href="pages/page_layout_inner_fixed_left_sidebar.html"><i class="ti-more"></i>Inner Fixed Left Sidebar </a></li>
            <li><a href="pages/page_layout_inner_fixed_right_sidebar.html"><i class="ti-more"></i>Inner Fixed Right Sidebar </a></li>
          </ul>
        </li> -->
		  
		
        <li class="header nav-small-cap">APPS</li>
		  
         <li class="treeview">
          <a href="#">
            <i class="fa fa-sort-numeric-asc"></i> <span>Leaderboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/leaderboard_team.php"><i class="ti-more"></i>Team Leaderboard</a></li>
            <li><a href="pages/leaderboard_user.php"><i class="ti-more"></i>User Leaderboard</a></li>
            <!-- <li><a href="pages/view_team.php"><i class="ti-more"></i>Your Team</a></li> -->
          </ul>
        </li>
		  
       <!-- <li class="treeview">
          <a href="#">
            <i class="ti-user"></i>
            <span>Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/contact_app_chat.html"><i class="ti-more"></i>Chat app</a></li>
            <li><a href="pages/contact_app.html"><i class="ti-more"></i>Contact / Employee</a></li>
            <li><a href="pages/contact_userlist_grid.html"><i class="ti-more"></i>Userlist Grid</a></li>
			<li><a href="pages/contact_userlist.html"><i class="ti-more"></i>Userlist</a></li>
          </ul>
        </li> -->
		  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Team Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li><a href="pages/create_team.php"><i class="ti-more"></i>Create Team</a></li>
      <li><a href="pages/view_team.php"><i class="ti-more"></i>View Team</a></li>
            <!-- <li><a href="pages/extra_app_ticket.php"><i class="ti-more"></i>View Team</a></li> -->
            <!-- <li><a href="pages/extra_profile.html"><i class="ti-more"></i>Profile</a></li>
            <li><a href="pages/extra_taskboard.html"><i class="ti-more"></i>Project DashBoard</a></li> -->
          </ul>
        </li>
		  
		
        <!-- <li class="header nav-small-cap">Coupons Section</li> -->
		  
		  
      <li class="treeview">
        <a href="#">
          <i class="fa fa-shopping-bag"></i>
          <span>Store</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/redeem_store.php"><i class="ti-more"></i>Reedem</a></li>
            <!-- <li><a href="pages/ui_border_utilities.html"><i class="ti-more"></i>Border</a></li>
            <li><a href="pages/ui_buttons.html"><i class="ti-more"></i>Buttons</a></li>	
            <li><a href="pages/ui_color_utilities.html"><i class="ti-more"></i>Color</a></li>
            <li><a href="pages/ui_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="pages/ui_dropdown_grid.html"><i class="ti-more"></i>Dropdown Grid</a></li>
            <li><a href="pages/ui_typography.html"><i class="ti-more"></i>Typography</a></li>
            <li><a href="pages/ui_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
            <li><a href="pages/ui_grid.html"><i class="ti-more"></i>Grid</a></li>
            <li><a href="pages/ui_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
            <li><a href="pages/ui_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="pages/ui_tab.html"><i class="ti-more"></i>Tabs</a></li>
            <li><a href="pages/ui_timeline.html"><i class="ti-more"></i>Timeline</a></li>
            <li><a href="pages/ui_timeline_horizontal.html"><i class="ti-more"></i>Horizontal Timeline</a></li> -->
          </ul>
        </li>   
		
		<!-- <li class="treeview">
          <a href="#">
            <i class="ti-smallcap"></i>
            <span>Icons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
            <li><a href="pages/icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
            <li><a href="pages/icons_material.html"><i class="ti-more"></i>Material Icons</a></li>	
            <li><a href="pages/icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
            <li><a href="pages/icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
            <li><a href="pages/icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
          </ul>
        </li> 		  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-check-box"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">			
            <li><a href="pages/component_bootstrap_switch.html"><i class="ti-more"></i>Bootstrap Switch</a></li>
            <li><a href="pages/component_date_paginator.html"><i class="ti-more"></i>Date Paginator</a></li>
            <li><a href="pages/component_media_advanced.html"><i class="ti-more"></i>Advanced Medias</a></li>
			<li><a href="pages/component_modals.html"><i class="ti-more"></i>Modals</a></li>
			<li><a href="pages/component_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="pages/component_notification.html"><i class="ti-more"></i>Notification</a></li>
            <li><a href="pages/component_portlet_draggable.html"><i class="ti-more"></i>Draggable Portlets</a></li>
            <li><a href="pages/component_sweatalert.html"><i class="ti-more"></i>Sweet Alert</a></li>
            <li><a href="pages/component_rangeslider.html"><i class="ti-more"></i>Range Slider</a></li>
            <li><a href="pages/component_rating.html"><i class="ti-more"></i>Ratings</a></li>
            <li><a href="pages/component_animations.html"><i class="ti-more"></i>Animations</a></li>
          </ul>
        </li>		  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-package"></i>
            <span>Box Cards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/box_cards.html"><i class="ti-more"></i>User Card</a></li>
			<li><a href="pages/box_advanced.html"><i class="ti-more"></i>Advanced Card</a></li>
            <li><a href="pages/box_basic.html"><i class="ti-more"></i>Basic Card</a></li>
            <li><a href="pages/box_color.html"><i class="ti-more"></i>Card Color</a></li>
			<li><a href="pages/box_group.html"><i class="ti-more"></i>Card Group</a></li>
          </ul>
        </li>		  
        
		<li class="treeview">
          <a href="#">
            <i class="ti-palette"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/widgets_blog.html"><i class="ti-more"></i>Blog</a></li>
            <li><a href="pages/widgets_chart.html"><i class="ti-more"></i>Chart</a></li>
            <li><a href="pages/widgets_list.html"><i class="ti-more"></i>List</a></li>
            <li><a href="pages/widgets_social.html"><i class="ti-more"></i>Social</a></li>
            <li><a href="pages/widgets_statistic.html"><i class="ti-more"></i>Statistic</a></li>
            <li><a href="pages/widgets_weather.html"><i class="ti-more"></i>Weather</a></li>
            <li><a href="pages/widgets.html"><i class="ti-more"></i>Widgets</a></li>
          </ul>
        </li>
		  
		
        <li class="header nav-small-cap">FORMS And TABLES</li> 
		
		
        <li class="treeview">
          <a href="#">
            <i class="ti-write"></i>
			<span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
            <li><a href="pages/forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
            <li><a href="pages/forms_editor_markdown.html"><i class="ti-more"></i>Markdown</a></li>
            <li><a href="pages/forms_editors.html"><i class="ti-more"></i>Editors</a></li>
            <li><a href="pages/forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
            <li><a href="pages/forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
            <li><a href="pages/forms_general.html"><i class="ti-more"></i>General Elements</a></li>
            <li><a href="pages/forms_mask.html"><i class="ti-more"></i>Formatter</a></li>
            <li><a href="pages/forms_xeditable.html"><i class="ti-more"></i>Xeditable Editor</a></li>
            <li><a href="pages/forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid4"></i>
			<span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
            <li><a href="pages/tables_data.html"><i class="ti-more"></i>Data tables</a></li>
            <li><a href="pages/tables_editable.html"><i class="ti-more"></i>Editable Tables</a></li>
            <li><a href="pages/tables_color.html"><i class="ti-more"></i>Table Color</a></li>
          </ul>
        </li>
		   -->
<!-- 		
        <li class="header nav-small-cap">CHARTS</li> 
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-stats-up"></i>
            <span>Chart</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
			<li><a href="pages/charts_flot.html"><i class="ti-more"></i>Flot</a></li>
            <li><a href="pages/charts_inline.html"><i class="ti-more"></i>Inline charts</a></li>
            <li><a href="pages/charts_morris.html"><i class="ti-more"></i>Morris</a></li>
			<li><a href="pages/charts_peity.html"><i class="ti-more"></i>Peity</a></li>
			<li><a href="pages/charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-stats-up"></i>
			<span>C3 Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_c3_axis.html"><i class="ti-more"></i>Axis Chart</a></li>
            <li><a href="pages/charts_c3_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
            <li><a href="pages/charts_c3_data.html"><i class="ti-more"></i>Data Chart</a></li>
            <li><a href="pages/charts_c3_line.html"><i class="ti-more"></i>Line Chart</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-pie-chart"></i>
			<span>Echarts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts_echarts_basic.html"><i class="ti-more"></i>Basic Charts</a></li>
            <li><a href="pages/charts_echarts_bar.html"><i class="ti-more"></i>Bar Chart</a></li>
            <li><a href="pages/charts_echarts_pie_doughnut.html"><i class="ti-more"></i>Pie & Doughnut Chart</a></li>
          </ul>
        </li>
		  
		  
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
		  
		<li>
          <a href="pages/email_index.html">
            <i class="ti-envelope"></i>
			<span>Emails</span>
          </a>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i class="ti-map-alt"></i>
			<span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/map_google.html"><i class="ti-more"></i>Google Map</a></li>
            <li><a href="pages/map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="ti-plug"></i>
			<span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/extension_fullscreen.html"><i class="ti-more"></i>Fullscreen</a></li>
			<li><a href="pages/extension_pace.html"><i class="ti-more"></i>Pace</a></li>
          </ul>
        </li> 
		  
		  
		<li class="header nav-small-cap">SAMPLE PAGES</li>
		  
		
		<li class="treeview">
          <a href="#">
            <i class="ti-shopping-cart"></i>
			<span>Ecommerce Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/ecommerce_products.html"><i class="ti-more"></i>Products</a></li>
            <li><a href="pages/ecommerce_cart.html"><i class="ti-more"></i>Products Cart</a></li>
            <li><a href="pages/ecommerce_products_edit.html"><i class="ti-more"></i>Products Edit</a></li>
            <li><a href="pages/ecommerce_details.html"><i class="ti-more"></i>Product Details</a></li>
            <li><a href="pages/ecommerce_orders.html"><i class="ti-more"></i>Product Orders</a></li>
            <li><a href="pages/ecommerce_checkout.html"><i class="ti-more"></i>Products Checkout</a></li>
          </ul>
        </li>		  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-shield"></i>
			<span>Authentication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/auth_login.html"><i class="ti-more"></i>Login</a></li>
            <li><a href="pages/auth_login2.html"><i class="ti-more"></i>Login 2</a></li>
			<li><a href="pages/auth_register.html"><i class="ti-more"></i>Register</a></li>
			<li><a href="pages/auth_register2.html"><i class="ti-more"></i>Register 2</a></li>
			<li><a href="pages/auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
			<li><a href="pages/auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>	
          </ul>
        </li> 		  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-receipt"></i>
			<span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="pages/invoice.html"><i class="ti-more"></i>Invoice</a></li>
			<li><a href="pages/invoicelist.html"><i class="ti-more"></i>Invoice List</a></li>	
          </ul>
        </li>		  
		  
		<li class="treeview">
          <a href="#">
            <i class="ti-alert"></i>
			<span>Error Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="pages/error_400.html"><i class="ti-more"></i>Error 400</a></li>
			<li><a href="pages/error_403.html"><i class="ti-more"></i>Error 403</a></li>
			<li><a href="pages/error_404.html"><i class="ti-more"></i>Error 404</a></li>
			<li><a href="pages/error_500.html"><i class="ti-more"></i>Error 500</a></li>
			<li><a href="pages/error_503.html"><i class="ti-more"></i>Error 503</a></li>
			<li><a href="pages/error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
          </ul>
        </li>   
		  -->
		<li class="treeview">
          <a href="#">
            <i class="fa fa-camera-retro"></i>
			<span>AI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/ai_camera.php"><i class="ti-more"></i>Camera</a></li>
            <li><a href="pages/ai_gallery.php"><i class="ti-more"></i>Gallery</a></li>
			<!--            <li><a href="pages/sample_custom_scroll.html"><i class="ti-more"></i>Custom Scrolls</a></li>
        <li><a href="pages/sample_faq.html"><i class="ti-more"></i>FAQ</a></li>
			<li><a href="pages/sample_gallery.php"><i class="ti-more"></i>Gallery</a></li>
			<li><a href="pages/sample_lightbox.html"><i class="ti-more"></i>Lightbox Popup</a></li>
			<li><a href="pages/sample_pricing.html"><i class="ti-more"></i>Pricing</a></li> -->
          </ul>
        </li>
		  
		   
		<!-- <li class="header nav-small-cap">EXTRA</li>		   -->
		  
        <li >
          <a href="./includes/logout.php?logout-submit=logout">
            <i class="ion-log-out"></i>
			<span>Logout</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span> -->
          </a>
</li>
          <!-- <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>   -->
		  
		<!-- <li>
          <a href="pages/auth_login.html"> 
            <i class="ti-power-off"></i>
			<span><a class="dropdown-item" href='./includes/logout.php?logout-submit=logout'><i class="ion-log-out"></i> Logout</a></span>
          </a>
        </li>  -->
        
      <!-- </ul> -->
    </section>
  </aside>

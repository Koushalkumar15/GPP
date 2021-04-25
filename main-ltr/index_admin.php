

<?php
session_start();

include('includes/config.php');

if(!$_SESSION['admin'])
{
	header('Location: auth_login2.php');
}


$email = $_SESSION['admin'];

$sql="SELECT * from `users` where email='$email'";
$result=mysqli_query($conn,$sql);
$row5 = mysqli_fetch_array($result,MYSQLI_ASSOC);
$co=$row5['coins'];






$sql8 = "SELECT count(email) as count FROM camera WHERE email = '$email'";
	$result8 = mysqli_query($conn,$sql8);
	$row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC);

	$scans=$row8['count'];



$unique=mysqli_num_rows($result);

if($unique === 1)
{
	$res=mysqli_fetch_assoc($result);
	$name=$res['name'];
}
   
//************************ USER DATAA ***************
$t=array();
$c=array();
// $array = array();



$sql5 = "SELECT coins,email FROM users";
$result5 = mysqli_query($conn,$sql5);
$top=0;

while ($row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)) {

 $d= $row5['coins'];
 $email= $row5['email'];

 $array[$email] = $d;

}  		
	  //  array_push($t,$team);
	  //  array_push($c,$top);

$email = $_SESSION['alogin'];
arsort($array);
// print_r($array);
$r= array_flip(array_keys($array))[$email];
$rank=$r+1;


$e1=array_keys( $array );

// print_r($e);

//***********************TEAM DATA*********************

$t1=array();
$c1=array();
// $array = array();


$sql4 = "SELECT DISTINCT team_id as teamid FROM users";
$result4 = mysqli_query($conn,$sql4);
//   $row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
while ($row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)) {



$team=$row4['teamid'];

$sql5 = "SELECT coins FROM users where team_id='$team'";
$result5 = mysqli_query($conn,$sql5);
$top1=0;

while ($row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)) {

 $d1= $row5['coins'];
 $top1= $top1+$d1;
 
}  		
	  //  array_push($t,$team);
	  //  array_push($c,$top);

		  $array1[$team] = $top1;

}
arsort($array1);
// print_r($array);
// $r= array_flip(array_keys($array1))[$team_id];
$rank=$r+1;

$e=array_keys( $array1 );


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>GPP | Garbage Profiling Porblem</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- daterange picker -->	
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">	
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- CrmX Admin skins -->
	<link rel="stylesheet" href="css/skin_color.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-vintage" >
	
	<div class="art-bg">
	  <img src="../images/art1.svg" alt="" class="art-img light-img">
	  <img src="../images/art2.svg" alt="" class="art-img dark-img">
    </div>
	
<div class="wrapper">
  <!-- HEADER -->
<?php
 include("./includes/header_index_admin.php");
 ?>

  <!-- Left side column. contains the logo and sidebar -->
  <!-- SIDEBAR -->
  <?php
 include("./includes/sidebar_index_admin.php");
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto w-p50">
					<h4 class="page-title br-0"><?php echo $email;?></h4>
				</div>
				<!-- DATE PICKER -->
				<div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker" style="pointer-events:none;">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-primary"></span>
						</span>
						<!-- <a href="#" class="btn btn-rounded btn-sm btn-primary">
							<i class="fa fa-angle-down"></i>
						</a> -->
					</span>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
			<div class="row">
				<div class="col-md-6 col-lg-3 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<!-- <a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a> -->
								<!-- <div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div> -->
							  </li>
							  <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="75" data-bar-color="#ff4c52" data-scale-color="transparent">
								<span class="icon-box"><i class="fas fa-camera text-danger"></i></span>
							  </div>
							  <h3 >  <?php echo $scans;?>
 </h3>
							  <p class="mb-0">My Total Scans</p>
							  <p class="text-fade"><small> </small></p>
							  <div id="barchart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<!-- <a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div> -->
							  </li>
							  <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="82" data-bar-color="#0bb2d4" data-scale-color="transparent">
								<span class="icon-box"><i class="fas fa-coins text-danger"></i></span>
							  </div>
							  <h3 >
							  
							  <?php echo $co;?>
							  </h3>
							  <p class="mb-0">My Total Coins</p>
							  <p class="text-fade"><small> </small></p>
							  <div id="linearea2" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<!-- <a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div> -->
							  </li>
							  <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="45" data-bar-color="#17b3a3" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-star text-info"></i></span>
							  </div>
							  <h3 > <?php echo $rank;?></h3>
							  <p class="mb-0">My Rank</p>
							  <p class="text-fade"><small> </small></p>
							  <div id="linechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<!-- <a data-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div> -->
							  </li>
							  <li><a href="" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="55" data-bar-color="#faa700" data-scale-color="transparent">
								<span class="icon-box"><i class=" fa fa-gift text-warning"></i></span>
							  </div>
							  <h3 >0</h3>
							  <p class="mb-0">Coins Redeemed</p>
							  <p class="text-fade"><small></small></p>
							  <div id="discretechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
				</div>
				<!-- <div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Monthly History</h4>
						</div>
						<div class="box-body"> -->
							<!-- <div id="monthlyhistory"></div> -->
						<!-- </div>
					</div>
				</div> -->
				
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Top Team's</h4>
						  <div class="box-controls pull-right">
							<!-- <div class="lookup lookup-circle lookup-right">
							  <input type="text" name="s">
							</div> -->
						  </div>
						</div>
						<!-- /.box-header -->
						<div class="box-body no-padding">
							<div class="table-responsive">
							  <table class="table table-hover">
								
							  <thead>
							<tr>
								<th>Team ID</th>
								<th>Team Name</th>
								<th>Created By</th>
								<th>Coins</th>
								<th>Total Scans</th>
								<th>Rank</th>

							</tr>
						</thead>
						<tbody>


						<?php

session_start();

$b=0;
$coin=array();

for ($x = 0; $x <= count($e); $x++) {
	$a=0;
	
$f= $e[$x];
// echo ($f);
$sql7 = "SELECT teamname,team_id,created_by  FROM Team WHERE team_id = '$f'";
$result7 = mysqli_query($conn,$sql7);
$row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC);

$team=$row7['team_id'];

$sql5 = "SELECT coins,email FROM users where team_id='$team'";
$result5 = mysqli_query($conn,$sql5);

while ($row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)) {
	$top1=0;



	$d= $row5['coins'];
	$top1= $top1+$d;
	array_push($coin,$top1);

	$em= $row5['email'];
	

	$sql1 = "SELECT count(email) as count FROM camera WHERE email = '$em'";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

	$scans=$row1['count'];
	$a=$a+ $scans;
	$b=$b+ $scans;

	$r= array_flip(array_keys($array))[$team];
	$rank=$r+1;

	
   }  


?>
							<tr>

								<td><?php  echo($row7['team_id']);  ?></td>
								<td><?php  echo($row7['teamname']);  ?></td>
								<td><?php  echo($row7['created_by']);  ?></td>
								<td><?php  echo $top1;  ?> </td>
								<td><?php     echo $a;  ?></td>
								<td><?php  echo $rank;  ?> </td>
								
							</tr>

<?php } 
?>
						</tbody>
							  </table>
							</div>
						</div>
						<!-- /.box-body -->
					  </div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box box-body">
						<div class="flexbox">
							<h6 class="text-uppercase">User's Total scans</h6>
							<!-- <h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6> -->
						</div>

						<ul class="list-inline my-10">
							<li class="px-10">
							  <h6 class="mb-0 text-bold">12</h6>
							  <small>This Week</small>
							</li>

							<li class="br-1 bl-1 px-10">
							  <h6 class="mb-0 text-bold">24</h6>
							  <small>This Month</small>
							</li>

							
						</ul>

						<div id="linearea">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
					</div>
					<div class="box box-body">
						<div class="flexbox">
							<h6 class="text-uppercase">Team total Scans</h6>
							<!-- <h6><i class="ion-android-arrow-dropdown text-danger font-size-18 mr-1"></i> %10</h6> -->
						</div>

						<ul class="list-inline my-10">
							<li class="px-10">
							  <h6 class="mb-0 text-bold">34</h6>
							  <small>This Week</small>
							</li>

							<li class="br-1 bl-1 px-10">
							  <h6 class="mb-0 text-bold">54</h6>
							  <small>This Month</small>
							</li>

							
						</ul>

						<div id="linearea5">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
					</div>
				</div>
				
				<div class="col-xl-5 col-12">
					
					</div>
				</div>
				<div class="col-xl-7 col-12"> 
				  <div class="box">
					<div class="box-body">
						<h4 class="box-title">Top User's</h4>
						<div class="table-responsive">
							<table class="table mb-0">
							<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
							    <th>Coins</th>
								<th>Total Scans</th>
								<th>Rank</th>

							</tr>
						</thead>
						<tbody>


						<?php


$coin=array();
for ($x = 0; $x <= count($e1); $x++) {
						
$f= $e1[$x];
$sql7 = "SELECT id,name,email,coins FROM users WHERE email = '$f'";
$result7 = mysqli_query($conn,$sql7);
$row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC);

$name=$row7['id'];
$name=$row7['name'];
$email=$row7['email'];
$coins=$row7['coins'];

// echo $coins;

array_push($coin,$coins);


	$sql1 = "SELECT count(email) as count FROM camera WHERE email = '$email'";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

	$scans=$row1['count'];

	$r= array_flip(array_keys($array))[$email];
	$rank=$r+1;

// echo $coin[2];
   
?>

							<tr>
                                <td><?php  echo($row7['id']);  ?></td>
                                <td><?php  echo($row7['name']);  ?></td>
								<td><?php  echo($row7['email']);  ?></td>
								<td><?php  echo($row7['coins']);  ?></td>
                                <td><?php     echo $scans;  ?></td>
                                <td><?php  echo $rank;  ?> </td>

								
							</tr>

<?php } ?>
						</tbody>




							</table>
						</div>
					</div>
				  </div> 
				</div>
				<!-- <div class="col-12">
					<div class="box card-inverse bg-img" style="background-image: url('../images/gallery/full/2.jpg'); padding-top: 275px">
					  <div class="flexbox align-items-center px-20" data-overlay="4">
						<div class="flexbox align-items-center mr-auto">
						  <a href="#">
							<img class="avatar avatar-xl avatar-bordered" src="../images/avatar/4.jpg" alt="">
						  </a>
						  <div class="pl-10 d-none d-md-block">
							<h5 class="mb-0"><a class="hover-primary text-white" href="#">Roben Clark</a></h5>
							<span>Best Driver</span>
						  </div>
						</div>

						<ul class="flexbox flex-justified text-center py-20">
						  <li class="px-10">
							<span class="opacity-60">Followers</span><br>
							<span class="font-size-20">9.6K</span>
						  </li>
						  <li class="px-10">
							<span class="opacity-60">Following</span><br>
							<span class="font-size-20">9845</span>
						  </li>
						  <li class="pl-10">
							<span class="opacity-60">Tweets</span><br>
							<span class="font-size-20">8456</span>
						  </li>
						</ul>
					  </div>

					</div> -->
				  </div>
			</div>
			
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
	<!-- FOOTER -->
 <?php
	include('includes/footer.php');
 ?>

  <!-- Control Sidebar -->
  <?php
	include('includes/control_sidebar.php');
 ?>
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- Sparkline -->
	<script src="../assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- easypiechart -->
	<script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	
	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- apexcharts -->
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
		<!-- <DARKMODE> -->
			<script src="js/dark-mode.js"></script>	
	<!-- CrmX Admin App -->
	<script src="js/template.js"></script>
	
	<!-- CrmX Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard6.js"></script>
	
	<!-- CrmX Admin for demo purposes -->
	<script src="js/demo.js"></script>	
	
	
</body>
</html>
 


<?php
session_start();

include('includes/config.php');


if(!$_SESSION['alogin'] )
{
	header('Location: pages/auth_login2.php');
}


$email = $_SESSION['alogin'];

$sql="SELECT * from users where email='$email' ";
$result=mysqli_query($conn,$sql);
$row5 = mysqli_fetch_array($result,MYSQLI_ASSOC);
$co=$row5['coins'];

// print_r($row5);






$sql8 = "SELECT count(email) as count FROM camera WHERE email = '$email' ";
	$result8 = mysqli_query($conn,$sql8);
	$row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC);

	$scans1=$row8['count'];



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



$sql5 = "SELECT coins,email FROM users where role='user' ";
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


$sql4 = "SELECT DISTINCT team_id as teamid FROM users where team_id !=''";
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
    <link rel="icon" href="../images/favicon.ico">

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

<body class="hold-transition light-skin sidebar-mini theme-vintage">
	
	<div class="art-bg">
	  <img src="../images/art1.svg" alt="" class="art-img light-img">
	  <img src="../images/art2.svg" alt="" class="art-img dark-img">
    </div>
	
<div class="wrapper">
<!-- HEADER -->
<?php
 include("includes/header_index.php");
 ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php
 include("includes/sidebar_index.php");
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
				  <div class="box" style=" background-image: url('../')">				  
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
							  <div class="easypie" data-percent="100" data-bar-color="#ff4c52" data-scale-color="transparent">
								<span class="icon-box"><i class="fas fa-camera text-danger"></i></span>
							  </div>
							  <h3 >  <?php echo $scans1;?>
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
							  <div class="easypie" data-percent="100" data-bar-color="#0bb2d4" data-scale-color="transparent">
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
							  <div class="easypie" data-percent="100" data-bar-color="#17b3a3" data-scale-color="transparent">
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
							  <div class="easypie" data-percent="100" data-bar-color="#faa700" data-scale-color="transparent">
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
						<div class="box-body">
							<div id="monthlyhistory"></div>
						</div>
					</div>
				</div> -->
				</div>
				<div class="row">
	
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Monthly History</h4>
						  <div class="box-controls pull-right">
							<div class="lookup lookup-circle lookup-right">
							  <input type="text" name="s">
							</div>
						  </div>
						</div>
						<!-- /.box-header -->
						<div class="box-body no-padding">
							<div class="table-responsive">
							  <table class="table table-hover">
								
							  <thead>
							<tr>
								<th>Image Clicked</th>
								<th>Dry %</th>
								<th>Wet %</th>
								<th>Banned plastic %</th>
								<th>Location</th>
								<th>Date</th>
								<th>Coins Earned</th>


							</tr>
						</thead>
						<tbody>


					
						<?php

// session_start();
$b=0;

$coin=array();

// echo ($f);
$sql7 = "SELECT *  FROM camera WHERE email = '$email'";
$result7 = mysqli_query($conn,$sql7);
while ($row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC)) {
$a=array();

$a=explode(",",$row7['dw']);

$result= array_count_values ($a);
$drycnt= $result['Dry'];
$wetcnt= $result['Wet'];
$banccnt= $result['Banned_plastic'];

// echo $banccnt;

$dryper=floor(($drycnt/($drycnt+$wetcnt+$banccnt))*100);
$wetper=floor(($wetcnt/($drycnt+$wetcnt+$banccnt))*100);
$bancper=floor(($banccnt/($drycnt+$wetcnt+$banccnt))*100);


?>
							<tr>
							<!-- <a href="../uploads_worker/'+str[i].image+'.jpg" data-toggle="lightbox" data-gallery="multiimages"><img id="'+str[i].image+'" src="../uploads_worker/'+str[i].image+'.jpg" alt="Segregated Result" style="width:50px; border-radius:50%;" /></a> -->
								<td><?php  echo "<a href='uploads_user/" . $row7['image'] . ".jpg'  data-toggle='lightbox' data-gallery='multiimages'><img src='uploads_user/" . $row7['image'] . ".jpg' alt='Segregated Result'  style='width:50px; border-radius:50%;' >"; ?></td>
								<td><?php  echo($dryper);  ?></td>
								<td><?php  echo($wetper);  ?></td>
								<td><?php  echo($bancper);  ?></td>
								<td><?php  echo ($row7['loc']);  ?> </td>
								<td><?php  echo ($row7['date']);  ?></td>
								<td><?php  echo ($row7['coins']);  ?> </td>

								
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

<div class="box">
	<div class="box-header with-border">
		<h4 class="box-title">My Total Scans </h4>
		<ul class="box-controls pull-right">
		  <li class="dropdown">
			<!-- <a data-toggle="dropdown" href="#"><i class="ti-more-alt"></i></a> -->
			<div class="dropdown-menu dropdown-menu-right">
			  <a class="dropdown-item" href="#"><i class="iconsmind-Flash-2"></i> Activity</a>
			  <a class="dropdown-item" href="#"><i class="iconsmind-Email"></i> Messages</a>
			  <a class="dropdown-item" href="#"><i class="iconsmind-File-Edit"></i> FAQ</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="#"><i class="consmind-Gear-2"></i> Support</a>
			</div>
		  </li>
		</ul>
  </div>
	<div class="box-body bb-1 bbr-0">
		<span class="font-size-50 text-primary">							
		<span class="mdi mdi-camera font-size-30"></span>
<?php   
echo $scans1;

// $sql1 = "SELECT count(email)as count FROM camera WHERE email = '$email'";
// 	$result1 = mysqli_query($conn,$sql1);
// 	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

// 	$scans=$row1['count'];


$c=0;
$w=0;
$b=0;

$email = $_SESSION['alogin'];

// echo $email;
$sql = "SELECT `dw` FROM `camera` where email='$email'";
$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$st = Array();

while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

$st[] =  $row['dw'];

}
// print_r($st);  




for ($x = 0; $x < count($st); $x++) {
$ex=explode (",", $st[$x]); 
for ($y = 0; $y < count($ex); $y++) {
// echo $ex[$y];

if($ex[$y] == 'Dry')
{ $d=$d+1;} 
elseif ($ex[$y] == 'Wet')
{$w=$w+1;}
elseif ($ex[$y] == 'Banned_plastic')
{$b=$b+1;}

}
}


$dper=round($d/($d+$w+$b)*100);
$wetper=round($w/($d+$w+$b)*100);
$bpper=round($b/($d+$w+$b)*100);


// echo $d;
// echo "--";
// echo $w;
?></span>
	</div>
	<div class="box-body">
		<div class="row justify-content-between pb-25">
			<div class="col-4">
				<h2 class="mb-0"><?php 
								if(is_nan($dper))
									{$dper=0;}
				echo $dper ?>%</h2>				         
				<div class="progress progress-xs mb-0 mb-10">
				  <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $dper ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>					  
				</div>						 
				<span class="font-size-16 text-fade">
					Dry
				</span>
			</div>
			<div class="col-4">
				<h2 class="mb-0"><?php 
				if(is_nan($wetper))
				{$wetper=0;}
				echo $wetper ?>%</h2>				         
				<div class="progress progress-xs mb-0 mb-10">
				  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $wetper ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>					  
				</div>						 
				<span class="font-size-16 text-fade">
					Wet
				</span>
			</div>
			<div class="col-4">
				<h2 class="mb-0"><?php
				if(is_nan($bpper))
				{$bpper=0;}
				echo $bpper ?>%</h2>				         
				<div class="progress progress-xs mb-0 mb-10">
				  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $bpper ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>					  
				</div>						 
				<span class="font-size-16 text-fade">
					Banned Plastic
				</span>
			</div>
		</div>
		</div>
</div>
</div>
</div>

				</div>
				<!-- <div class="col-xl-4 col-12">
					<div class="box box-body">
						<div class="flexbox">
							<h6 class="text-uppercase">User's Total scans</h6>
							<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
						</div>

						<ul class="list-inline my-10">
							<li class="px-10">
							  <h6 class="mb-0 text-bold"></h6>
							  <small>This Week</small>
							</li>
echo $b;echo $b+12;
							<li class="br-1 bl-1 px-10">
							  <h6 class="mb-0 text-bold"></h6>
							  <small>This Month</small>
							</li>

							
						</ul>

						<div id="linearea">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
					</div>
					<div class="box box-body">
						<div class="flexbox">
							<h6 class="text-uppercase">Team total Scans</h6>
							<h6><i class="ion-android-arrow-dropdown text-danger font-size-18 mr-1"></i> %10</h6>
						</div>

						<ul class="list-inline my-10">
							<li class="px-10"> -->
							  <!-- <h6 class="mb-0 text-bold"> -->
								  <?php 
							  $coin=array();
$c=0;
for ($x = 0; $x < count($e1); $x++) {
						
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
	$c=$c+$scans; 
	
}
	// echo $c;
	 ?>
	<!-- </h6> -->
							  <!-- <small>This Week</small>
							</li>
echo $c+12;
							<li class="br-1 bl-1 px-10">
							  <h6 class="mb-0 text-bold"></h6>
							  <small>This Month</small>
							</li>

							
						</ul>

						<div id="linearea5">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
					</div>
				</div> -->
				
				<!-- <div class="col-xl-5 col-12">
					
					</div> -->
				
			
				
<div class="col-lg-12">
					<center><h1 style="color:black">RECENT HEADLINES.</h1></center>
				
			<main id="main"></main>
			</div> 
		
			<script src="news/index.js" type="module"></script>
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
  <aside class="control-sidebar control-sidebar-light">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <!-- <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul> -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
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

	
	<!-- gallery -->
	<script type="text/javascript" src="../../assets/vendor_components/gallery/js/animated-masonry-gallery.js"></script>
    <script type="text/javascript" src="../../assets/vendor_components/gallery/js/jquery.isotope.min.js"></script>
   
    <!-- fancybox -->
    <script type="text/javascript" src="../../assets/vendor_components/lightbox-master/dist/ekko-lightbox.js"></script>
	<script src="../js/pages/gallery.js"></script> 
	
	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- apexcharts -->
	<script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- CrmX Admin App -->
	<script src="js/template.js"></script>
	
	<!-- CrmX Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard6.js"></script>
	
	<!-- CrmX Admin for demo purposes -->
	<script src="js/demo.js"></script>	
	<!-- <DARKMODE> -->
	<script src="js/dark-mode.js"></script>	

	<!-- dsd -->
	

</body>
</html>
 
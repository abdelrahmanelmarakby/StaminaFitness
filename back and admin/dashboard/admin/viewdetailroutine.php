<?php
require '../../include/db_conn.php';
page_protect();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Detail Routine</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../css/table.css" >
	<style>
    	.page-container .sidebar-menu #main-menu li#routinehassubopen > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>
	<script>
	function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
	</script>

</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>						
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>
				<h2>Routine Detail</h2>
				<hr/>

		<?php
		$id=$_GET['id'];
		$sql="Select * from timetable t Where t.tid=$id";
		$res=mysqli_query($con, $sql);
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
						
		?>
        <h1><?php echo $row['tname'] ?></h1>
		<div id=print>
<table class="table1">
	<thead>
		<tr>
		<th><h1>Day/program</h1></th>

			<th><h1>Day1</h1></th>
			<th><h1>Day2</h1></th>
			<th><h1>Day3</h1></th>
			<th><h1>Day4</h1></th>
			<th><h1>Day5</h1></th>

			<th><h1>Day6</h1></th>
			<th><h1>Day7</h1></th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>PROGRAM</td>
			<td><?php echo $row['day1'] ?></td>
			<td><?php echo $row['day2'] ?></td>
			<td><?php echo $row['day3'] ?></td>
			<td><?php echo $row['day4'] ?></td>
			<td><?php echo $row['day5'] ?></td>
			<td><?php echo $row['day6'] ?></td>
			<td></td>

		</tr>
		
	</tbody>
</table></div>

				<input type="button" class="a1-btn a1-blue" value="PRINT ROUTINE" onclick="myFunction()">
		
		
		
		
		
		
		

			

    	</div>

	<?php include('footer.php'); ?>


	<?php
	$day-1
	$_SESSION['days']=['']
	?>
</html>
<?php /*$_SESSION["table"]=	<table class="table1">
	<thead>
		<tr>
		<th><h1>Day/program</h1></th>

			<th><h1>Day1</h1></th>
			<th><h1>Day2</h1></th>
			<th><h1>Day3</h1></th>
			<th><h1>Day4</h1></th>
			<th><h1>Day5</h1></th>

			<th><h1>Day6</h1></th>
			<th><h1>Day7</h1></th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>PROGRAM</td>
			<td><?php echo $row['day1'] ?></td>
			<td><?php echo $row['day2'] ?></td>
			<td><?php echo $row['day3'] ?></td>
			<td><?php echo $row['day4'] ?></td>
			<td><?php echo $row['day5'] ?></td>
			<td><?php echo $row['day6'] ?></td>
			<td></td>

		</tr>
		
	</tbody>
</table>; */?>
    </body>

										

<?php
session_start();

if ( $_SESSION['id'] != 'ROOT' && $_SESSION['id'] != 'EMP' )
{ header("Location:/"); }
else
{
include("./connect.php");


}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="./Dashboard.js"></script>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body class="bg" onload='date();show_insert();'>
<header class="border search" >
<img src="00-logo-tt-thumb.png" width=190px />
<h1 style="color: #0532BA; " > Gestion Du Stock : </h1>
 </header>
	<div class="container1">
		<div class="border action">
		<div class="container">
			<div class="choose">
				<ul>
					<li><a onclick="show_insert()" href="" > Insert </a></li>
					<?php
					if ( $_SESSION['id'] === 'ROOT') {
					echo '<li><a  onclick="show_add()" > Add </a></li>' ; }
					?>
					<li><a href="./logout.php"  style="background-color :red ; " >Quitter</a></li>
				</ul>
			</div>
							<form action="./insert.php" method=POST class="insertion center" id="insert">
							    <span class="title" id=title > ADD AN ITEM TO STOCK </span>
								<p><span class="aligner">Doc_N : </span><input type="text" name="ndoc" id="ndoc" required></p>
								<p><span class="aligner">Client : </span><input type="text" name="client" id="client" required></p>
								<p><span class="aligner">Reference : </span><input type="text" name="ref" id="ref" required></p>
								<p><span class="aligner">Type : </span>
									<select name="type_select" id="type_select" required>
										<option value='' > Select a type </option>
									<?php
									$types = $conn->query(" select * from types ;") ;
										while (	$row = $types->fetch() ) {
											echo "<option>".$row[0]."</option>"  ;}
									 ?>
									</select></p>
								<p><span class="aligner">Routeur : </span>
									<select  name="router_select" id="router_select" required>
										<option value='' > Select a router </option>
				          <?php
									$routers = $conn->query(" select * from routers ;") ;
                  	while (	$row = $routers->fetch() ) {
											echo "<option>".$row[0]."</option>"  ;}
									 ?>
									</select>
								</p>
								<p><span class="aligner">Module : </span>
									<select  name="module_select[]" id="module_select" >
										<option value='' > Select a module </option>
				          <?php
									$modules = $conn->query(" select * from modules ;") ;
                  	while (	$row = $modules->fetch() ) {
											echo "<option>".$row[0]."</option>"  ;}
									 ?>
									</select>
									<img class="img"  onclick="add_more(this,'module_select[]');"  src="./plus.png" /></p>
								<p><span class="aligner">Carte : </span>
									<select  name="carte_select[]" id="carte_select">
										<option value='' > Select a carte </option>
									<?php
									$cartes = $conn->query(" select * from cartes ;") ;
										while (	$row = $cartes->fetch() ) {
											echo "<option>".$row[0]."</option>"  ;}
									 ?>
									</select>
									<img class="img" onclick="add_more(this,'carte_select[]');" src="./plus.png" /></p>
								<p><span class="aligner">Date : </span><input type="date" name="datec" id="datec" required></p>
								<p><span class="aligner">Note : </span><input type="text" name="com" id="com" ></p>
								<?php
								if ( isset($_SESSION['ERROR']) ) {
								if ( $_SESSION['ERROR'] == true  )
								{ echo	'<p><span style="color:red;" > This Reference Already Exist !! </span></p>' ;			}
								  else if ( $_SESSION['ERROR'] == false ) {
									echo  '<p><span style="color:#0FB82C;" > Successfully added !! </span></p>' ;
									}
								 $_SESSION['ERROR'] = NULL ; }
							    ?>
								<input type="text" id="carte" name="Rtype" hidden/>
								<button  type="submit" class="btn"> Submit </button>
								</form>
								<div class="insertion center" id="add" style="display:none">
									<span class="title" > ADD TO DATABASE </span>
									<p><span class="aligner">Type : </span>
										<input list="typeListe" name="list_type" />
										<datalist id="typeListe" >
										<?php
										$types = $conn->query(" select * from types ;") ;
											while (	$row = $types->fetch() ) {
												echo "<option value='".$row[0]."' >"  ;}
										 ?>
									 </datalist>
									 <img class="img"  onclick="control_db('add','ltype',this)"  src="./plus.png" />
									 <img class="img"  onclick="control_db('delete','ltype',this)"  src="./close_red.png" />
								 </p>
									<p><span class="aligner">Routeur : </span>
										<input list="routeursListe" name="list_router" />
										<datalist id="routeursListe">
										<?php
										$routers = $conn->query(" select * from routers ;") ;
											while (	$row = $routers->fetch() ) {
												echo "<option value='".$row[0]."' >"  ;}
										 ?>
									 </datalist>
									 <img class="img"  onclick="control_db('add','router',this)"  src="./plus.png" />
									 <img class="img"  onclick="control_db('delete','router',this)"  src="./close_red.png" />
									</p>
									<p><span class="aligner">Module : </span>
										<input list="modulesListe" name="list_module" />
										<datalist id="modulesListe">
										<?php
										$modules = $conn->query(" select * from modules ;") ;
											while (	$row = $modules->fetch() ) {
												echo "<option value='".$row[0]."' >"  ;}
										 ?>
									 </datalist>
										<img class="img"  onclick="control_db('add','module',this)"  src="./plus.png" />
										<img class="img"  onclick="control_db('delete','module',this)"  src="./close_red.png" /></p>
									<p><span class="aligner">Carte : </span>
										<input list="cartesListe" name="list_carte" />
										<datalist id="cartesListe" >
										<?php
										$cartes = $conn->query(" select * from cartes ;") ;
											while (	$row = $cartes->fetch() ) {
												echo "<option value='".$row[0]."' >"  ;}
										 ?>
									 </datalist>
										<img class="img"  onclick="control_db('add','carte',this)"  src="./plus.png" />
										<img class="img"  onclick="control_db('delete','carte',this)" src="./close_red.png" /></p>
								</div>

		</div>
		</div>
		<div class="border analyse">

		<h2 class="logtext" > LOG SYSTEM [ Last 20 Event ] </h2>

		<?php
		$data = $conn->query(" select * from logtable order by time desc limit 22 ;") ;
		while (	$row = $data->fetch() ) {
		echo "<span class='events' style='color:white;font-size:12px'><span style='color:grey'>@[".$row[3]."]</span> ".$row[0]." ".$row[1]." <span style='color:grey'>".$row[2]."</span></span><br/>" ;
		}
		?>
	</div>
	</div>
	<nav class="border search" >
	<p><span class="aligner"> Order By : </span>
	<select onchange="order(this.value);">
	      <option value="Ref"   > Default </option>
          <option value="Ref"   > Reference</option>
          <option value="DateC" >Date</option>
          <option value="Router"   >Router</option>
        </select>
	<span class="aligner" style="float:right;">Search : </span><input type="text" onchange=search(this.value); id="dateSys" style="float:right;"></p>
	</nav>
	<div class="border" id="display" style="padding:10px;" >
		<ul>
			<li><a href='./Dashboard.php#display'> All </a></li>
			<?php
			$types = $conn->query(" select * from types ;") ;
				while (	$row = $types->fetch() ) {
					echo "<li><a href='./Dashboard.php?order=Ref&type=".$row[0]."#display');>".$row[0]."</a></li>" ; }
			 ?>
		</ul><table id=displaytab >
		<?php

		$order = isset($_REQUEST['order'])?$_REQUEST['order']:'Ref' ;
		$type  = isset($_REQUEST['type'])?$_REQUEST['type']:null ;
		$search  = isset($_REQUEST['search'])?$_REQUEST['search']:null ;


		if ( $search != null )

		{ $data = $conn->query(" select numc , client , Ref from stock where numc like '*$search*' or client like  '*$search*' or Ref '*$search*' like order by $order ;") ; }

		else if ( $type != null )

		{ $data = $conn->query(" select * from stock where type='$type' order by $order ;") ; }

		else

		{ $data = $conn->query(" select * from stock order by $order ;") ; }

		 $html = "<tr><th> Client </th><th> Router </th><th> Modules </th><th> Cartes </th><th> Date </th> <th> Note </th><th> Actions </th></tr> " ;
		while (	$row = $data->fetch() ) {
		 $html .= "<tr id=".$row[0]." value=".$row[3]."><td><p>".$row[0]."</p><p>".$row[1]."</p><p>".$row[2]."</p></td><td><p>".$row[4]."</p></td><td><p>".$row[5]."</p><p>".$row[6].
		 "</p><p>".$row[7]."</p></td><td><p>".$row[8]."</p><p>".$row[9]."</p><p>".$row[10]."</p></td><td><p>".$row[11]."</p></td><td><p>".$row[12]."</p></td><td><img class='img'  onclick='delete_this(this);'  src='./Recycle_Bin_Full.png' /><img class='img'  onclick='modify(this);'  src='./modify_1_01__709180.png' /></td></tr>" ;
		}
		  echo $html ;
    ?>
	</table>
	</div>

</body>
</html>

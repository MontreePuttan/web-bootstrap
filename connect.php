<?php  
//Connected DB
$dbc = mysqli_connect("localhost","root","mohara","web-bootstrap") or die("Error : ".mysqli_connect_error());
//echo "Connected";

//Variable
if(isset($_GET['page'])){
	$pageid = $_GET['page'];
}else{
	$pageid = 1;
}

function datapage($dbc,$pageid){
	$sql = "select * from pages where id = '$pageid'";
	$result = mysqli_query($dbc,$sql);
	$data = mysqli_fetch_assoc($result);

	return $data;
}


//Call function
$pageShow = datapage($dbc,$pageid);
?>

<nav class="navbar navbar-default" role="navigation">
	<ul class="nav navbar-nav">
	<?php
	$sql = "select * from pages";
	$result = mysqli_query($dbc,$sql);
	while($nav = mysqli_fetch_assoc($result)){
	?>

	
		<li <?php if($pageid==$nav['id']){echo "class='active'";} ?>><a href="first.php?page=<?php echo $nav['id']; ?>"><?php echo $nav['title']; ?></a></li>
		<?php } ?>
	</ul>
	
</nav><!-- end navbar -->
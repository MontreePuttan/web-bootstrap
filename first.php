<?php  
$pageid = $_GET['page'];
include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageShow['title']; ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
</head>

<body>
	<div class="container">
		<?php include ('navigation.php'); ?>
	</div><!-- end container -->
	<div class="container">
		<h1><?php echo $pageShow['header']; ?></h1>
		<p><?php echo $pageShow['body']; ?></p>
	</div><!-- end container -->
	<div class="container">

		<div class="row">
			<div class="col-md-3">

			<div class="list-group">
					<?php
					$sql = "select * from pages order by title asc";
					$result = mysqli_query($dbc,$sql);
					while($page_list = mysqli_fetch_assoc($result)){?>
						<?php $content = substr($page_list['body'],0,150); ?>
						<a href="first.php?select=<?php echo $page_list['id']; ?>" class="list-group-item">
							<h4 class="list-group-item-heading">
							<?php echo $page_list['title']; ?>
							</h4>
							<p class="list-group-item-text">
								<?php echo $content; ?>
							</p>
						</a>
					<?php } ?>
			</div>

				<?php
					$sql = "select * from pages order by title asc";
					$result = mysqli_query($dbc,$sql);
					while($page_list = mysqli_fetch_assoc($result)){
						echo $page_list['title']."<br>";
					}
				?>
			</div>
			<div class="col-md-9">
			<?php
			if(isset($_POST['submited'])){
				$title = $_POST['title'];
				$header = $_POST['header'];
				$body = $_POST['body'];

				$sql = "insert into pages(title,header,body) values('$title','$header','$body')";
				
				$result = mysqli_query($dbc,$sql);
				if($result){
					echo "<p>Page Add</p>";
				}else{
					echo "<p>Fail</p>".mysqli_error($dbc);
				}
			}
			?>

			<?php
			if(isset($_GET['select'])){
				$sql = "select * from pages where id=$_GET[select]";
				$result = mysqli_query($dbc,$sql);
				$open = mysqli_fetch_assoc($result);
				//print_r($open);
			}
			?>
				<form id="commentForm" action="first.php" role="form" method="post">
					<div class="form-group">
						<label>Title</label>
						<input type="text" id="title" name="title" class="form-control" placeholder="Title" value="<?php echo $open['title'] ?>" required>
					</div>
					<div class="form-group">
						<label>Header</label>
						<input type="text" id="header" name="header" class="form-control" placeholder="Header" value="<?php echo $open['header'] ?>" required>
					</div>
					<div class="form-group">
						<label>Body</label>
						<textarea id="body" name="body" class="form-control" placeholder="Body" required>value="<?php echo $open['body'] ?>"</textarea>
					</div>
					<button type="submit" class="btn btn-success">Save</button>
					<button class="btn btn-primary">Edit</button>
					<input type="hidden" name="submited" value="1">
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<?php include ('footerpage.php'); ?>
	</div>
</body>


<script>
        $("#commentForm").validate({
            messages:{
                title:{
                    required:"Input title"
                },
                header:{
                    required:"Input header"
                },
                body:{
                    required:"Input body"
                }
            }
        });
    </script>
</html>
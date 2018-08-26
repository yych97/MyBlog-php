<?php
    include("conn.php");//引入连接数据库
    if(!empty($_POST['sub'])){
        $title = $_POST['title'];
        $type = $_POST['type'];
        $link = $_POST['link'];
        $sql = "insert into `links` (`title`, `dates`, `type`, `link`) values('$title',now(),'$type','$link')";
        //echo $sql;
        mysql_query($sql);
        echo "<script>alert('添加成功');location.href='index.php'</script>";
    }    
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Black &amp; White</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/pace.css">
	    <link rel="stylesheet" href="css/custom.css">

	    <!-- js -->
	    <script src="js/jquery-2.1.3.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/pace.min.js"></script>
	    <script src="js/modernizr.custom.js"></script>
	</head>

	<body id="page">
		<div class="container">	
			<?php include('header.php')?>
		</div>

		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<h1 class="page-title">Add</h1>
						<article class="post">
							<div class="entry-content clearfix">
								<form action="addlink.php" method="post" class="contact-form">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<input type="hidden" name="type" value="<?php echo $_GET['type']?>"/>
											<input type="text" name="title" placeholder="Title" required>											
											<textarea name="link" rows="4" placeholder="link" required></textarea>
											<input type="submit" name="sub" class="btn-send btn-5 btn-5b ion-ios-paperplane"></input>
										</div>
									</div>	<!-- row -->
								</form>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
		<footer id="site-footer">
			
		</footer>

		<!-- Mobile Menu -->
		<?php include('menu.php')?>

		<script src="js/script.js"></script>
		
	</body>
</html>

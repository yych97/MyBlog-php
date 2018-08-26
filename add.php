<?php
    include("conn.php");//引入连接数据库
    if(!empty($_POST['sub'])){
        $title = $_POST['title'];
        $con = $_POST['con'];
        $sql = "insert into `news` (`id`, `title`, `dates`, `contents`) values(null,'$title',now(),'$con')";
        //echo $sql;
        mysql_query($sql);
        echo "<script>alert('插入成功');location.href='index.php'</script>";
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
								<form action="add.php" method="post" class="contact-form">
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<input type="text" name="title" placeholder="Name" required>											
											<textarea name="con" rows="16" required></textarea>
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

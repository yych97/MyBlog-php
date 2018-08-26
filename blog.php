<?php
	include("conn.php");
	if(!empty($_POST['keys'])){
        $w="`title` like '%".$_POST['keys']."%'";
    }else{
        $w=1;
    }
    $sql="select * from `news` where $w order by id desc";
    $query = mysql_query($sql);
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

	<body>
		<div class="container">	
			<?php
				include('header.php');
			?>
		</div>

		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<?php
							while($rs = mysql_fetch_array($query)){
						?>
						<article class="post post-1">
							<header class="entry-header">
								<h1 class="entry-title"><?php echo $rs['title'] ?></h1>
								<div class="entry-meta">									
									<span class="post-date"><a href="#"><time class="entry-date"><?php echo $rs['dates'] ?></time></a></span>			
			
									<span class="click"><a href="#"><?php echo $rs['hits'] ?> Clicks</a></span>
									
									<span class="edit"><a href="edit.php?id=<?php echo $rs['id'] ?>">编辑</a></span>
									
									<span class="delete"><a href="del.php?del=<?php echo $rs['id'];?>">删除</a></span>			
								</div>
							</header>
							<div class="entry-content clearfix">
								<p><?php echo iconv_substr($rs['contents'],0,500,"utf-8") ?></p>
								<div class="read-more cl-effect-14">
									<a href="single.php?id=<?php echo $rs['id'] ?>" class="more-link">Continue reading <span class="meta-nav">→</span></a>
								</div>
							</div>
						</article>
						<?php
							}
						?>														
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

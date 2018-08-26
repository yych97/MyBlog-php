<?php
	include('conn.php');	
?>
<aside class="col-md-4">
	<div class="widget widget-recent-posts">		
		<h3 class="widget-title">Recent Visite</h3>		
		<ul>
			<?php
				$sql = "select * from `links` where `type`='link'";
    			$query = mysql_query($sql); 
				while($arr=mysql_fetch_array($query)){
			?>
			<li>
				<a href="<?php echo $arr['link']?>" target="_blank"><?php echo $arr['title']?></a>
			</li>
			<?php }?>					
		</ul>
		<a href="addlink.php?type=link" style="margin-left: 15%; font-size: large;">+</a>
	</div>
	<div class="widget widget-archives">		
		<h3 class="widget-title">Archives</h3>		
		<ul>
			<li>
				<a href="#">November 2017</a>
			</li>
			<li>
				<a href="#">September 2017</a>
			</li>
			<li>
				<a href="#">January 2018</a>
			</li>
		</ul>
	</div>

	<div class="widget widget-category">		
		<h3 class="widget-title">Category</h3>		
		<ul>
			<li>
				<a href="#">OurTimes</a>
			</li>
			<li>
				<a href="#">Map</a>
			</li>
			<li>
				<a href="#">Bus</a>
			</li>
		</ul>
	</div>
</aside>
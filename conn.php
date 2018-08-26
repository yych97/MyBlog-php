<?php
  @mysql_connect("localhost:3306", "root", "root")or die("mysql连接失败");
  @mysql_select_db("myblog")or die("db连接失败");
?>
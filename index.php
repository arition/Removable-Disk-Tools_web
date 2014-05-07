<?php
$login_failed=false;
if($_GET["action"]=="login"){
	if($_POST["username"]=="admin"&&$_POST["password"]=="admin"){
		session_start();
		$_SESSION['login']="true";
		$_SESSION["username"]=$_POST["username"];
		header("Location: /device.php");
		exit();
	}else{
		$login_failed=true;
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>登录 - Removable Disk Tools</title>
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootflat.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- site css -->
    <link rel="stylesheet" href="css/site.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Removable Disk Tools</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a class="nav-link" href="#">设备管理</a></li>
          <li><a class="nav-link" href="#">文件列表</a></li>
          <li><a class="nav-link" href="#">关于</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="starter-template"> 
        <form action="/index.php?action=login" method="post" class="form-signin" role="form">
          <h3>登录</h3>
          <div class="alert alert-warning alert-dismissable fade in"<?php if(!login_failed){ ?> style="display:none"<?php } ?>>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            用户名或密码错误！
          </div>
          <input id="username" name="username" type="text" class="form-control" placeholder="用户名" required autofocus>
          <br />
          <input id="password" name="password" type="password" class="form-control" placeholder="密码" required>
          <br />
          <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
        </form>
      </div>
    </div>
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  </body>
 </html>
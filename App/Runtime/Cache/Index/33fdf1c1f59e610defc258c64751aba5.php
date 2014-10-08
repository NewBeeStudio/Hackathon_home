<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="SJTU, 新蜂工作室, hackathon, 黑客马拉松，报名表">
	<meta name="author" content="Newbee Studio">
	<meta name="viewpoint" content="width=divice-width,initial-scale=1">

	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
	<link href="__PUBLIC__/css/Index_Index_index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Index_Join_index.css">

	<script src="__PUBLIC__/js/jquery.min.js"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/js/Index_Join_index.js"></script>

</head>
<body>
	<div class="nav-bar">
		<nav class="navbar bgnav " role="navigation">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" id="brandcolor" href="<?php echo U('Index/Index/index');?>">Hackathon</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav nav-pills ">
				<li role="presentation"><a href="<?php echo U('Index/Index/index');?>" >首页</a></li>
				<li role="presentation"><a href="#" >详细介绍</a></li>
				<li role="presentation"><a href="#" >参加比赛</a></li>
				<li role="presentation"><a href="#" >作品提交</a></li>
				<li role="presentation"><a href="#" >作品展示</a></li>
			  </ul>
			  <ul class="nav navbar-nav nav-pills navbar-right">
				<li	role="presentation"><a href="<?php echo U('Index/Join/index');?>">戳我报名</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>

	<div class='form'>
		<div id="intro"><img src="__PUBLIC__/img/word.gif"></div>
		<div class='row'>
			<div class="col-md-3"></div>
			<div class="col-md-6" id="login">
				<form class='form-inline' role='form' name='join' method='post' action="<?php echo U('Index/Join/handle');?>">
					<div class="form-group">
						<label for="name">姓名：</label>
						<input type="text" class="form-control" id="name" name="name" placeholder=""><br>

						<label for="sex">性别：</label>
						<input type="radio" name="sex" value="option1" checked="checked"><span>男</span>
						<input type="radio" name="sex" value="option2" style="margin-left:60px;"><span>女</span><br>

						<label for="college">学院：</label>
						<input type="text" class="form-control" id="college" name="college" placeholder=""><br>

						<label for="grade">年级：</label>
						<input type="text" class="form-control" id="grade" name="grade" placeholder=""><br>


						<label for="major">专业：</label>
						<input type="text" class="form-control" id="major" name="major" placeholder=""><br>


						<label for="tel">手机：</label>
						<input type="text" class="form-control" id="tel"  name="tel" placeholder=""><br>


						<label for="e-mail">邮箱：</label>
						<input type="text" class="form-control" id="e-mail" name="e-mail" placeholder=""><br>

						<input type="submit" class="btn btn-default" id="submit"></input>
					</div>
				</form>	
			</div>
			<div class="col-md-3"></div><br>
		</div>
	</div>
	
	<div class="row">
		<footer class="footer">
	    	<p>SJTU Hackathon 2014</p>
	    	<p>© 上海交通大学网络信息中心OmniLab</p>   
		</footer> 
	</div> 
</body>


</html>
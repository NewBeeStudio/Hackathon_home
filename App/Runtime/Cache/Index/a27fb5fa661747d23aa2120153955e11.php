<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SJTU-Hackathon</title>

    <!-- Bootstrap -->
     <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	 <link href="__PUBLIC__/css/Index_Index_index.css" rel="stylesheet">

	 <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="__PUBLIC__/jquery.min.js"></script>
	
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
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
				<li	role="presentation" onmouseover="mOver(this)" onmouseout="mOut(this)"><a href="<?php echo U('Index/Join/index');?>">戳我报名</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>

	<div id="main-img">
		<h1>SJTU Hac<span style="font-family:'Gabriola'; font-size:140%;">k</span>athon</h1>
        <h4>Little Steps Make a Difference</h4>
		<a class="btn btn-lg btn-primary btn-shadow" role="button" style="margin-top: 40px" href="<?php echo U('Index/Join/index');?>">Join Now!</a>
	</div>

	<div id="main">
		<div id="intro">
			<h1>What's Hackathon?</h1>
				<div id="intro-more">
					<a href="#">
						<img src="__PUBLIC__/img/more.gif" style="width:55px; margin-top:7px;"></img>
					</a>
				</div>
			<div id="intro-container">
				<div class="block border">
					<h2><span id="easy-to-do">E</span>asy-to-do</h2>
					<p class="first-line"><span>0</span> 基础玩单片机?当然可以！</p>
					<p>一个个组件模块，在新蜂工作室大神们的努力下，被包装成简易可用的黑盒子...</p>
					<p>只需要少量C/C++的基本编程知识，黑客马拉松的大门就为你敞开！</p>
				</div>
				<div class="block border">
					<h2><span id="creative">C</span>reative</h2>
					<p class="first-line"><span>38</span> 种组件，数不清的组合方式！</p>
					<p>你会用它们来做什么?火焰传感器、三色LED、自制继电器......任何</p>
					<p>如果你有很棒的创意，或是想尝试新鲜事事物，它们就为你开放！</p>
				</div>
				<div class="block">
					<h2><span id="exciting">E</span>xciting</h2>
					<p class="first-line"><span>48</span> 小时的时间，可以做什么?</p>
					<p>在宿舍教室和食堂来回跑动，就和往常一样?</p>
					<p>或是尝试一种全新的体验?</p>
					<p>在黑客马拉松这项活动里，你将体验急速开发，一步步实现自己创意的快感！</p>
				</div>
			</div>
		</div>
		<div id="info">
			<p>支持单位</p>
			<a href="http://newbee.io" class="btn btn-primary btn-shadow bs3-link" id="link1" target="_blank">新蜂工作室</a>
			<a href="http://net.sjtu.edu.cn" class="btn btn-warning btn-shadow bs3-link" id="link2" target="_blank">交大网络信息中心</a>
			<a href="http://www.arduino.cn" class="btn btn-danger btn-shadow bs3-link" id="link3" target="_blank">Arduino</a>
		</div>
	</div>

	<footer class="footer">
	     <p>SJTU Hackathon 2014</p>
	     <p>© 上海交通大学网络信息中心OmniLab</p>   
	</footer>   
</body>

</html>
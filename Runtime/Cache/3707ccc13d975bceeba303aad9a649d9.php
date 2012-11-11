<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C// DTD HTML 4.0 Transitional//EN">
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<title>ThinkPHP示例</title>
  	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/common.css" />
  	<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
  	<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
  	<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>
  </head>
  <body>
  	<script type="text/javascript">
  	  function save(){
  	  	ThinkAjax.sendForm('form1','__URL__/update',complete,'result');
  	  }
  	  function complete(data, status){
  	  	if(status == 1){
  	  		window.setTimeout(function (){window.location.href='__URL__',20000});
  	  	}
  	  }
  	</script>
  	<div class="main">
  	 <form id="form1" method='post' action="">
        <div id="result"></div>
        <input type="text" placeholder="标题" name="title" value="<?php echo ($vo["title"]); ?>" >
        <br />
        <input type="email" placeholder="邮箱" name="email" value="<?php echo ($vo["email"]); ?>">
        <br />
        <textarea placeholder="内容" rows="8" cols="25" name=
        "content"><?php echo ($vo["content"]); ?></textarea>
        <br />
        <input type="hidden" name="ajax" value="1">
        <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
        <input type="button" onClick="save()" class="button" value="保 存">
        <input type="reset" value="清空">
      </form>
  	</div>
  </body>
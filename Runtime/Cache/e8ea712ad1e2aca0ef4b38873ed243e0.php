<?php if (!defined('THINK_PATH')) exit();?><html>
  <head><title>Form Test</title></head>
  <body>
  	<form method='post' action="__URL__/insert">
  		<ul>
  		  <li>
  		  	<label for="title">标题：</label>
  		  	<input name="title" type="text" />
  		  </li>
  		  <li>
  		  	<label for="email">邮箱：</label>
  		  	<input name="email" type="text" />
  		  </li>
  		  <li>
  		  	<label for="content">内容：</label>
  		  	<textarea name="content"></textarea>
  		  </li>
  		</ul>
  		<input type="submit" vaule="提交">
  		<input type="reset" value="清空">
  	</form>
  	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["title"]); ?> <span style="color:gray">[<?php echo ($vo["email"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>]</span>
		<div class="content"><?php echo (nl2br($vo["content"])); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
  </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
    <script language="JavaScript">
    
    function add(){
        window.location.href="__URL__/add";
    }
    function edit(id){
        window.location.href="__URL__/edit/id/"+id;
    }
    function del(id){
        ThinkAjax.send('__URL__/delete','ajax=1&id='+id,complete,'result');
        window.setTimeout(function (){window.location.href='__URL__',20000});
    }
    function complete(data, status){
        if(status==1){
            $('list').removeChild($('div_'+data));
        }
    }
    </script>
    <div class="main">

        <input type="button" value="新增" onClick="add()">
        <div id="result"></div>
        <div id="list">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="div_<?php echo ($vo["id"]); ?>"></div>
                <div >
                    <?php echo ($vo["title"]); ?> [<?php echo ($vo["email"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>]
                    <br />
                    <?php echo ($vo["content"]); ?>
                    <br />
                    <input type="button" value="编辑" onClick="edit(<?php echo ($vo["id"]); ?>)">
                    <input type="button" value="删除" onClick="del(<?php echo ($vo["id"]); ?>)">
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div><?php echo ($page); ?></div>
        </div>
    </div>

</body>
</html>
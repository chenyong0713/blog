<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
<link rel="stylesheet" href="/blog3/Public/Home/__CSS__/index.css"/>
</head>

<body>
<div class="header">
    <div class="nav">
        <ul>
         <li> <a href="<?php echo U('Index');?>">主页</a></li>
          <li><a href="<?php echo U('Index/log');?>">日志</a></li>
          <li><a href="<?php echo U('Index/photo');?>">相册</a></li>
          <li><a href="<?php echo U('Index/message');?>">留言板</a></li>
          <li><a href="<?php echo U('Index/talk');?>">说说</a></li>
          <li><a href="<?php echo U('Index/personal');?>">个人档</a></li>
          <li><a href="<?php echo U('Index/music');?>">音乐</a></li>
          <li><a href="<?php echo U('Index/more');?>">更多</a></li>
        </ul>
    </div>
</div>
</body>
</html>
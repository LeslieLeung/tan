<?php /*a:1:{s:61:"C:\Users\lesil\PhpstormProjects\tan\app\view\index\example.html";i:1593869686;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
简单赋值调用
<!--litera 是用来原样输出的-->

模板输出 {$name}

<br>
<?php echo htmlentities($name); ?>
<hr>

数组赋值调用

模板输出 {$data.name}/{$data.name2}

<br>
<?php echo htmlentities($data['name']); ?>/<?php echo htmlentities($data['name2']); ?>
<hr>

二维数组循环 两种方式 foreach | volist <br>

foreach 模板使用 <br>

{foreach $list as $key=>$vo }<br>
{$vo.name}<br>
{/foreach}<br>

<br>
foreach 的 key 从 0 起始 <br>
<?php foreach($list as $key=>$vo): ?>
<?php echo htmlentities($key); ?> >> <?php echo htmlentities($vo['name']); ?><br>
<?php endforeach; ?>
<hr>

volist 模板使用 <br>

{volist name='list' id='vo' k='i' }<br>
{$vo.name}<br>
{/volist}<br>

<br>
volist 的 key 从 1 起始 <br>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<?php echo htmlentities($i); ?> >> <?php echo htmlentities($vo['name']); ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>

<hr>
使用函数  {:函数名} <br>
使用 MD5() 函数加密 $data.name <br>
如  {:MD5($data.name)} / {$data.name | md5}  <br>
加密后 <?php echo MD5($data['name']); ?> / <?php echo htmlentities(md5($data['name'])); ?>
<hr>
默认值 default <br>
 {$data.names|default="没有字符串的时候出现我"}  <br>
<?php echo htmlentities((isset($data['names']) && ($data['names'] !== '')?$data['names']:"没有字符串的时候出现我")); ?>

</body>
</html>
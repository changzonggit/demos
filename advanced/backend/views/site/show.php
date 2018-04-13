<?php
   use yii\helpers\Html;
   use yii\helpers\Url;
   $this->title = '展示';
   $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>id</td>
			<td>姓名</td>
			<td>性别</td>
			<td>时间</td>
			<td colspan="2" align="center">操作</td>
		</tr>
		<?php foreach ($data as $value):?>
		<tr>
			<td><?=$value['id']?></td>
			<td><?=$value['username']?></td>
			<td><?=$value['sex']?></td>
			<td><?=$value['time']?></td>
			<td>
				<a href="index.php?r=demo/del&id=<?php echo $value['id']?>">刪除</a>
				<a href="index.php?r=demo/upl&id=<?php echo $value['id']?>">修改</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>

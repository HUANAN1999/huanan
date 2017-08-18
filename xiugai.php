<html>
<body>
<?php
include_once("conn.php");
if (!empty($_POST))
{
  mysql_query("UPDATE `message` SET `title` = '$_POST[title]', `content` = '$_POST[content]' WHERE `id` = '$_POST[id]'");
  echo"<script>alert('修改成功');location.href='list.php'</script>";
}
  if (isset($_GET['id']))
  {
    $result = mysql_query('SELECT * FROM `message` WHERE `id` = \'' . $_GET['id'] . '\'');
    $row = mysql_fetch_array($result);
?>

<form action="xiugai.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
标题:<input type="text" name="title" value="<?php echo $row['title']; ?>" />
<br>
内容:<textarea name="content"><?php echo $row['content']; ?></textarea>
<br>
<input type="submit" value="确认修改"/>
</form>
<?php
  }
?>
</body>
</html>
	









































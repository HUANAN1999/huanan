<?php
include("conn.php");
include("head.php");
?>
<form action='#' method="POST">
搜索:<input type="text" name="keys"/>
<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="确认"/><a href=add.php>返回</a>
</form>
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
if(!empty($_POST['keys'])){
    $keys = "WHERE title like '%".$_POST['keys']."%' OR user LIKE '%".$_POST['keys']."%' OR content LIKE '%".$_POST['keys']."%' ";
	//$keys="SELECT * FROM `message` WHERE user LIKE '%".$_POST['keys']."%' OR title LIKE '%".$_POST['keys']."%' OR content LIKE '%".$_POST['keys']."%'";
    var_dump($keys);
} else {
    $keys = "";
	exit();
}
$sql = "SELECT * FROM message ".$keys." ORDER BY id DESC";
$query = mysql_query($sql);
//$rs = mysql_fetch_array($query);
//var_dump($sql);
//var_dump($query);
//var_dump($rs);
while($row=mysql_fetch_array($query)){
?>
  <tr bgcolor="#eff3ff">
  <td>标题：<?php echo @$row['title'];?>&nbsp用户：<?php echo @$row['user'] ;?></td>
  </tr>
  <tr bgcolor="ffffff">
  <td>内容：<?php echo @$row['content'];?></td>
  
  <?php
   }
   ?>
   </table>
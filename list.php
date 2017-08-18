<?php
include("conn.php");
include("head.php");
?>
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
$sql="select * from message";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query)){
?>
  <tr bgcolor="#eff3ff">
  <td>标题：<?php echo $row['title'];?>&nbsp用户：<?php echo $row['user'] ;?></td>
  </tr>
  <tr bgcolor="ffffff">
  <td>内容：<?php echo $row['content'];?><a href="shanchu.php?id=<?php echo $row['id'];?>">删除</a>&nbsp <a href="xiugai.php?id=<?php echo $row['id'];?>">修改</a></td>
  
  <?php
   }
   ?>
   </table>
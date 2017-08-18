<?php
include("conn.php");
include("head.php");
?>
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
$sql="select `keys` from message";
$query=mysql_query($sql);var_dump($sql);
while($row=mysql_fetch_array($query)){
?>
  <tr bgcolor="#eff3ff">
  <td>标题：<?php echo $row['title'];?>&nbsp用户：<?php echo $row['user'] ;?></td>
  </tr>
  <tr bgcolor="ffffff">
  <td>内容：<?php echo $row['content'];?><a href="shanchu.php?id=<?php echo $row['id'];?>"></td>
  
  <?php
   }
   ?>
   </table>
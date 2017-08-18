<?php
include("conn.php");
include("head.php");
error_reporting(0);
if(isset($_POST['submit']))
{
 $username=empty($_POST['user'])?'':$_POST['user'];
 $password=empty($_POST['password'])?'':$_POST['password'];
 $sql="select * from message where user='$username' and password='$password'";
 $query=mysql_query($sql);
 $array=mysql_fetch_array($query);
 if(!empty($array)){
        SESSION_start();
        $_SESSION['user']=$username;
  echo "<script>alert('登录成功');location.href='add.php'</script>";
 }
 else{
  echo "<script>alert('请先注册')</script>";
 }
}
?>
<SCRIPT language=JavaScript>
function Checklogin()
{
 if (myform.user.value=="")
 {
  alert("请填写登录名");
  myform.user.focus();
  return false;
 }
  if (myform.password.value=="")
 {
  alert("密码不能为空");
  myform.password.focus();
  return false;
 }
}
</SCRIPT>
<form action="login.php" method="post" name="myform">
<table border=1 align=center width=500 height=300 bgcolor=#ffffff bordercolor=#666666>
<tr>
<td colspan=2 align=center>用户登录</td>
</tr>
<tr>
<td>用户名：</td>
<td><input type="text" name="user" id="user"/></td>
</tr>
<tr>
<td>密码：</td>
<td><input type="password" name="password" id="password"/></td>
</tr>
<tr>
<td colspan=3 align=center>
<input type="submit" name="submit" value="登录"/>
<input type="reset" name="reset" value="重置"/>
<a href="register.php">注册</a>
</td>
</tr>
</table>
</form>

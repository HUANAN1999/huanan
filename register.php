<?php
include("conn.php");
if (isset($_POST["submit"]))
{
 $username=empty($_POST['user'])?'':$_POST['user'];
 $password=empty($_POST['password'])?'':$_POST['password'];
 $sql="insert into message (user,password)".
        "values('$_POST[user]','$_POST[password]')";
 $array=mysql_query($sql);
 if(!empty($array)){
        SESSION_start();
        $_SESSION['user']=$username;
  echo "<script>alert('注册成功');location.href='add.php'</script>";
 }
}

?>
<SCRIPT language=JavaScript>
function Checklogin()
{
 if (myform.user.value=="")
 {
  alert("请填写用户名");
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
<form action="register.php" method="post" name="myform">
<table border=1 align=center width=500 height=100 bgcolor=#ffffff bordercolor=#666666>
	<tr><td colspan="2" align="center">注册</td></tr>
	<tr><td>用户名</td>
	<td><input type="text" name="user" /></td></tr>
	<tr><td>密码</td>
	<td><input type="text" name="password"/></td></tr>
	<tr><td colspan="2" align="right"><input type="submit" name="submit" value="提交"/><a href="login.php">返回</a></td></tr>
	</table>
</form>

<?php
include("conn.php");
if(@$_POST['submit']){
   $sql="insert into message (user,title,content,lastdate)".
        "values('$_POST[user]','$_POST[title]','$_POST[content]',now())";
mysql_query($sql);
echo "<script language=\"javascript\">alert('添加成功');</script>";
}
 include("head.php");
?>
<SCRIPT language=javascript>
function CheckPost()
{
	var x=myform.user.value;
	var y=myform.title.value;
	var z=myform.content.value;
	if (x=="")
	{
		alert("请填写用户名");
		myform.user.focus();
		return false;
	}
	if (y.length<5)
	{
		alert("标题不能少于5个字符");
		myform.title.focus();
		return false;
	}
	if (z=="")
	{
		alert("必须要填写留言内容");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>
  <form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
   用户：<input type="text" size="10" name="user"/><br/> 
   标题：<input type="text" name="title" /><br/>
   内容：<textarea name="content"></textarea><br/>
   
   <input type="submit" name="submit" value="发布留言"/>
   <meta http-equiv='content-type' content="text/html;charset=utf-8"><!--刷新页面-->
   </form>
   
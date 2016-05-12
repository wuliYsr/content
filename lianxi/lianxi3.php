<?php
header("content-type:text/html;charset=utf-8");
$acc=$_POST['account'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];
$eamil=$_POST['eamil'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$ah=$_POST['ah'];
$tel=$_POST['tel'];

if($acc==""){
	echo "账户名不能为空";die;
}else if(strlen($acc)<6){
	echo "账户名不能小于六位";die;
}else if(is_numeric(substr($acc,0,1))){
	echo "账户名首字母不能为数字";die;
}
if($pwd==""){
	echo "密码不能为空";die;
}else if(strlen($pwd)<=6){
	echo "密码不能小于六位";die;
}
if($pwd1==""){
	echo "确认密码不能为空";die;
}else if($pwd1!=$pwd){
	echo "两次密码必须一致";die;
}
if($eamil==""){
	echo "邮箱不能为空";die;
}else if(strpos($eamil,"@")==false||strpos($eamil,"@")==0){
	echo "请输入正确的邮箱格式";die;
}
if(count($ah)<2){
	echo "必须选两个以上的爱好";die;
}
if($tel==""){
	echo "电话不能为空";die;
}else if(strlen(trim($tel))!=11){
	echo "电话号码必须是11位";die;
}else if(!is_numeric($tel)){
	echo "电话号码必须为数字";die;
}
?>
		<center>
		<h1><font color=red>注册成功</font></h1>
		<table border=1>
		<tr>
			<td>账号</td>
			<td><?php echo $acc?></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><?php echo $pwd?></td>
		</tr>
		<tr>
			<td>确认密码</td>
			<td><?php echo $pwd1?></td>
		</tr>
		<tr>
			<td>邮箱</td>
			<td><?php echo $eamil?></td>
		</tr>
		<tr>
			<td>性别</td>
			<td><?php echo $sex?></td>
		</tr>
		<tr>
			<td>年龄</td>
			<td><?php echo $age?></td>
		</tr>
		<tr>
			<td>爱好</td>
			<td><?php echo $ah?></td>
		</tr>
		<tr>
			<td>电话</td>
			<td><?php echo $tel?></td>
		</tr>
		</table>
		</center>
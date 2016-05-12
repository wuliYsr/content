<?php
	//语言声明
	//接受值
	header("content-type:text/html;charset=utf-8");
	$acc=$_POST['account'];
	$pwd=$_POST['pwd'];
	$pwd1=$_POST['pwd1'];
	$eamil=$_POST['eamil'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$ah=$_POST['ah'];
	$tel=$_POST['tel'];
	//判断账户
	if($acc==""){
		echo "账户不能为空";die;
	}else if(strlen($acc)<6){
		echo "账号不能少于六位";die;
	}else if(is_numeric(substr($acc,0,1))){
		echo "首字母不能为数字";die;
	}
	//判断密码
	if($pwd==""){
		echo "密码不能为空";die;
	}else if(strlen($pwd)<=6){
		echo "密码不能小于六位";die;
	}
	//判断确认密码
	if($pwd1==""){
		echo "确认密码不能为空";die;
	}else if($pwd1!=$pwd){
		echo "两次密码必须一致";die;
	}
	//判断邮箱
	if($eamil==""){
		echo "邮箱不能为空";die;
	}else if(strpos($eamil,"@")==false||strpos($eamil,"@")==0){
		echo "邮箱格式不正确";die;
	}
	//判断爱好
	if(count($ah)<2){
		echo "必须选两个爱好";die;
	}
	//判断电话号码
	if($tel==""){
		echo "电话号码不能为空";die;
	}else if(strlen(trim($tel))!=11){
		echo "电话号码必须为11位";die;
	}else if(!is_numeric($tel)){
		echo "电话号码必须为数字";die;
	}
?>
		<center>
		<h1><font color=blue>资料库</font></h1>
		<table border=1>
		<font color=red>
		<tr>
			<td><font color=red>账号</font></td>
			<td><?php echo $acc?></td>
		</tr>
		<tr>
			<td><font color=red>密码</font></td>
			<td><?php echo $pwd?></td>
		</tr>
		<tr>
			<td><font color=red>确认密码</font></td>
			<td><?php echo $pwd1?></td>
		</tr>
		<tr>
			<td><font color=red>邮箱</font></td>
			<td><?php echo $eamil?></td>
		</tr>
		<tr>
			<td><font color=red>性别</font></td>
			<td><?php echo $sex?></td>
		</tr>
		<tr>
			<td><font color=red>年龄</font></td>
			<td><?php echo $age?></td>
		</tr>
		<tr>
			<td><font color=red>爱好</font></td>
			<td><?php foreach($ah as $value){echo $value;}?></td>
		</tr>
		<tr>
			<td><font color=red>电话</font></td>
			<td><?php echo $tel?></td>
		</tr>
		</font>
		</table>
			<?php echo "<h2>注册成功</h2>"?>
		</center>
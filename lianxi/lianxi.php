<html>
	<meta charset="utf-8">
	<center>
	<h1><font color=red>欢迎注册</font></h1>
	<body>
		<form method="post" action="lianxi1.php">
			<table border=1>
			<tr>
				<td>账号</td>
				<td><input type="text" name="account"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" name="pwd1"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" name="eamil"></td>
			</tr>
			<tr>
				<td>性别</td>
				<td><input type="radio" name="sex" value="男">男
				<input type="radio" name="sex" value="女">女
				</td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><select name="age">
					<?php
						for($i=18;$i<=70;$i++){
					?>	
						<option value="<?php echo $i?>"><?php echo $i?></option>
					<?php	
					}
					?>
				</select></td>
			</tr>
			<tr>
				<td>爱好</td>
				<td><input type="checkbox" name="ah[]" value="吃饭">吃饭
					<input type="checkbox" name="ah[]" value="睡觉">睡觉
					<input type="checkbox" name="ah[]" value="打豆豆">打豆豆
				</td>
			</tr>
			<tr>
				<td>电话</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册"></td>
			</tr>
			</table>
			
		</form>
	</body>
	</center>
</html>
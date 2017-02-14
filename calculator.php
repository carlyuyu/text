<!DOCTYPE html>
<title>calculator</title>
<head>
<?php
if(!empty($_POST))
{
	$num1=$_POST['data1'];
	$num2=$_POST['data2'];
	$fuhao=$_POST['sign'];
	if($fuhao == '+')
	{
		$out=$num1 + $num2;
	}else if($fuhao == '-')
	{
		$out=$num1 - $num2;
	}else if($fuhao == '*')
	{
		$out=$num1*$num2;
	}else if($fuhao == '/')
	{
		$out=$num1 / $num2;
	}	
}else{
	$out="";
	$num1="";
	$num2="";
	$fuhao="";
}

?>
</head>
<body>
<form name="form1" action="" method="post">
<input type="text" name="data1" value="<?php echo $num1;?>"/>
<select name="sign">
	<option value="+" <?php if($fuhao=="+"){echo 'selected="selected"';}?> >+</option>
	<option value="-" <?php if($fuhao=="-"){echo 'selected="selected"';}?> >-</option>
	<option value="*" <?php if($fuhao=="*"){echo 'selected="selected"';}?>  >*</option>
	<option value="/" <?php if($fuhao=="/"){echo 'selected="selected"';}?>  >/</option>	
</select>
<input type="text" name="data2" value="<?php echo $num2;?>"/>
<input type="submit" value="计算" />
<input type="text" name="result" value="<?php echo $out;?>" />
<input type="reset" value="重置" />

</form>
</body>
</html>
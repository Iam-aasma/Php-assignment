<!DOCTYPE html>
<html>
<head>
	<title>chess</title>
</head>
<body>
	<h3>Chess Board using Nested For Loop</h3>
	<table border="1px">
		<?php
		for ($row=1;$row<=8;$row++)
		{
			echo "<tr>";
			for ($col=1;$col<=8;$col++)
		{
	$total=$row+$col;
	if($total%2==0)
{
echo "<td height=30px width=30px bgcolor=#ffffff></td>";
}
else
{
	echo "<td height=30px width=30px bgcolor=#000000></td>";
}
}
echo "</tr>";
}
?>
</table>
</body>
</html>
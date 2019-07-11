<?php
$n=5;
echo "n = ".$n."<br>";
$count=1;
for ($i=$n; $i<=6; $i--)
{
	for ($j=$i; $j<$n; $j++)
	{
		echo $count;
		$count++;
	}
	echo "<br/>";
}
?>
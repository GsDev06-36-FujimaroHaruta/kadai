<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$kw=$_POST["kw"];
$web=$_POST["web"];
?>



<html>
<body>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<?php
$str = $name.",".$mail.",".$kw.",".$web;
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>

<body>
<?php
$lines = file("data/data.csv");
	
print<<<EOT
<table border='1'>
<tr>
<th>名前</th><th>メール</th><th>KW</th><th>検索サイト</th>
</tr>
EOT;
	
foreach($lines as $line){
$memo =explode(",",$line);
	$n=$memo[0];
	$n=explode(",",$n);
	$m=$memo[1];
	$m=explode(",",$m);
	$k=$memo[2];
	$k=explode(",",$k);
	$w=$memo[3];
	$w=explode(",",$w);

for($i=0;$i<count($n);$i++){
	print "<tr>";
	print "<td>".$n[$i]."</td>";
	print "<td>".$m[$i]."</td>";
	print "<td>".$k[$i]."</td>";
	print "<td>".$w[$i]."</td>";
	print "</tr>";
}

}
	print "</table>";

?>




</body>

</body>
</html>
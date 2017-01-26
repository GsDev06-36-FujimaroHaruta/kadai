<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="output_data.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	検索KW: <input type="text" name="kw">
	検索サイト:
		<select name="web">
		<option value="Google">Google</option>
		<option value="Yahoo">Yahoo</option>
		<option value="others">その他</option>
		</select>
	<input type="submit" value="送信">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Encrypt Now! 🔐</title>
	<link rel="icon" href="secure.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="nav" align="center">Encrypt Now! 🔐</div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		Text: <input type="text" name="text" id="text" class="txt_input">
		<br>
		Algorithm:
			<input type="radio" name="algo" value="MD5" required> MD5
			<input type="radio" name="algo" value="SHA256"> SHA256
			<input type="radio" name="algo" value="SHA512"> SHA512
			<input type="radio" name="algo" value="RIPEMD128"> RIPEMD128
			<input type="radio" name="algo" value="tiger128,3"> tiger128,3
			<input type="radio" name="algo" value="fnv132"> fnv132
			<input type="radio" name="algo" value="joaat"> joaat
			<input type="radio" name="algo" value="haval128,4"> haval128,4
			<input type="radio" name="algo" value="md4"> md4

		<input type="submit" name="submit" value="Encrypt Now">
	</form>
	<br><br>
	<form id="resultArea">
		<h3 id='result'></h3>
		<input type="text" name="res" id="res" class="txt_input" readonly>
	</form>
	<br><br><br>

	<div align="right">
		This is just a test version for hash() funtion in PHP<br>
		We will not save the data you encrypt!<br>
		This website is made with 💓 by <a href="https://twitter.com/_SreelalTS">Sreelal TS</a>.<br> Please contact <a href="mailto:sreelusreelal519@gmail.com">Sreelal TS</a> for more info.
	</div>
</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		$text = $_POST['text'];
		$hashAlgo = $_POST['algo'];

		switch ($hashAlgo) {
			case 'MD5':
				$out = strtoupper(hash('md5', $text));
				break;
			case 'SHA256':
				$out = strtoupper(hash('sha256', $text));
				break;
			case 'SHA512':
				$out = strtoupper(hash('sha512', $text));
				break;
			case 'RIPEMD128':
				$out = strtoupper(hash('ripemd128', $text));
				break;
			case 'tiger128,3':
				$out = strtoupper(hash('tiger128,3', $text));
				break;
			case 'fnv132':
				$out = strtoupper(hash('fnv132', $text));
				break;
			case 'joaat':
				$out = strtoupper(hash('joaat', $text));
				break;
			case 'haval128,4':
				$out = strtoupper(hash('haval128,4', $text));
				break;
			case 'md4':
				$out = strtoupper(hash('md4', $text));
				break;
			
			default:
				echo "Error! Unknown Algorithm!";
				break;
		}
		echo "<script> document.getElementById('result').innerHTML = '<font color=green>" . $text . "</font> can be encrypted as'; document.getElementById('res').value = '". $out ."';</script>";
	}else{
		echo "<script>document.getElementById('resultArea').style.display = 'none';</script>";
	}
?>



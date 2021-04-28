<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<title>Security</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "index.css">
		<link rel = "stylesheet" type = "text/css" href = "support.css?v=<?php echo time();?>">
	</head>
	<body>
		<?php
			// define variables and set to empty values
			$name = "";
			$phone = "";
			$message = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = test_input($_POST["name"]);
				$phone = test_input($_POST["phone"]);
				$message = test_input($_POST["message"]);
			}
			
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} else {
					$name = input($_POST["name"])
				}
			
				if (empty($_POST["phone"])) {
					$phoneErr = "Phone is required";
				} else {
					$phone = input($_POST["phone"])
				}
			}
			
			
		?>
	</body>
</html>
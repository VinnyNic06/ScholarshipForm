<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<title>Scholarship Form</title>
</head>
<body>
	<?php

		//definition of the displayRequired function
		function displayRequired($fieldName) {
			echo "The field \"$fieldName\" is required.<br/>";
		}


		function validateInput($data, $fieldName) {
			global $errorCount;
			if(empty($data)) {
				displayRequired($fieldName);
				++$errorCount;
				$retval = "";
			}
			else {
				//Only clean uo the input if the data is not empty
				$retval = trim($data);
				$retval = stripslashes($retval);
			}
			// return whatever version of $retval we have
			return $retval;
		}

		$errorCount = 0;
		$firstName = validateInput($_POST["fName"], "First Name");
		$lastName = validateInput($_POST["lName"], "Last Name");

		if($errorCount > 0) {
			echo "Please use the \"Back\" button to re-enter thr data/<br/>";
		}
		else {
		echo "Thank you for filling out the scholarship form, $firstName $lastName.";
		}


	?>

</body>
</html>
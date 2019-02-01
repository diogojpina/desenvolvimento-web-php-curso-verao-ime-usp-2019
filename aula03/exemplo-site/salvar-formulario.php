<?php
print_r($_POST);

if (!isset($_POST['onde'])) {
	echo 'Precisa escolher onde encontrou!';
	return false;
}

header("Location: index.php?success=true");


?>
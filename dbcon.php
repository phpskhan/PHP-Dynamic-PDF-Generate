<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$database = 'pdf_data';

	$con = mysqli_connect($host, $user, $password, $database);

	if (!$con){
		?>
			<script>alert("Connection Unsuccessful!!!");</script>
		<?php
	}
?>

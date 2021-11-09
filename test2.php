<?php
include './assets/php/connect_db.php';
if( isset( $_GET[ 'login' ] ) ) {
	// Check Anti-CSRF token
	checkToken( $_REQUEST[ 'user_token' ], $_SESSION[ 'session_token' ], 'index.php' );

	// Get input
	$user = $_GET[ 'user' ];
	$pass  =$_GET['password'];
	// Was a number entered?
	if($user) {
		switch ($_DVWA['SQLI_DB']) {
			case MYSQL:
				// Check the database
				$data = $con->prepare( "SELECT * FROM khachhang WHERE (User = '$user' AND Password = '$pass') LIMIT 1;" );
				//$data->bindParam( ':id', $id, PDO::PARAM_INT );
				$data->execute();
				$row = $data->fetch();

				// Make sure only 1 result is returned
				if( $data->rowCount() == 1 ) {
					$_SESSION['user'] = $user;
                    header('Location: ./index.php');
				}
				break;
		}
	}
}

// Generate Anti-CSRF token
generateSessionToken();

?>
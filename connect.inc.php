  $database = "sakila";
	$username = "root";
	$password = "root";
		try {
		    $connection = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
		    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		return $connection;	
		} catch(PDOException $e) {
		    die( "<div class='alert alert-error'>ERROR : " . $e->getMessage() . "</div>");
 		}

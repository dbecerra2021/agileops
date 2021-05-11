<?php

$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "agileops";
$port = "3306";

require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/retoibm/sumar/:sumando01/:sumando02', function ($sumando01,$sumando02) {
    $result = new Result(( $sumando01 + $sumando02 ));

#    try {
#      $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
      // set the PDO error mode to exception
#      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#      echo "Conexión exitosa";
  
#      $sql = "INSERT INTO suma VALUES ($sumando01, $sumando02, $result->result)";

#      $conn->exec($sql);

#      echo "Se ingresó nuevo registro";

#    } catch(PDOException $e) {
#      echo "La conexión falló: " . $e->getMessage();
#    }
#    $conn = null;

    echo json_encode($result);
});
$app->run();

class Result {
    // constructor
    public function __construct($result) {
        $this->result = $result;
        $this->hostname = gethostname();
    }
}

?>

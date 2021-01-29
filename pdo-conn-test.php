<?php
$strDSN = "pgsql:dbname=uf3;host=localhost;user=postgres;
       password=root";

// Let's connect
try {
  $objPDO = new PDO($strDSN);
  print "Successfully connected ....\n";
} catch (PDOException $e) {
  echo "An error occured connecting: " . $e->getMessage() . "\n";
  exit(0);
}

// Let's disconnect
$objPDO = NULL;
print "Successfully disconnected.\n";

?>
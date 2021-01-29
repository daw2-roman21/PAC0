<?php
$strDSN = "pgsql:dbname=uf3;host=localhost;user=postgres;password=root";
// Let’s connect

try {
  $objPDO = new PDO($strDSN);
  print "Successfully connected... .\n ";

} catch(PDOException $e) {
  echo "An error occurred connecting:  ".$e->getMessage()." \n ";
  exit(0);
}

$strUsername = "ed";
$strQuery1 = "SELECT * FROM \"user\" WHERE \"username\" = '$strUsername'";
$strQuery2 = "SELECT * FROM \"user\"";


$objPDO = new PDO($strDSN);
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {

	// begin the transaction
	$objPDO->beginTransaction();
	//$objPDO->exec($strQuery1);
	// $objPDO->exec($strQuery2);
	//QUERY 1
	$i = 0;
	$objStatement = $objPDO->prepare($strQuery1);
	$objStatement->execute();
	while ($arRow = $objStatement->fetch(PDO::FETCH_ASSOC)) {
	print "Row $i<br />\n";
	foreach ($arRow as $key => $value) {
	print " - Column $key, value $value<br />\n";
	};
	$i++;
	};
	//QUERY 2
	$i = 0;
	$objStatement = $objPDO->prepare($strQuery2);
	$objStatement->execute();
	while ($arRow = $objStatement->fetch(PDO::FETCH_ASSOC)) {
	print "Row $i<br />\n";
	foreach ($arRow as $key => $value) {
	print " - Column $key, value $value<br />\n";
	};
	$i++;
	};


// commit the transaction
$objPDO->commit();

} catch (Exception $e) {

	// rollback the transaction
	$objPDO->rollBack();
	echo "Failed: ".$e->getMessage();
}
?>

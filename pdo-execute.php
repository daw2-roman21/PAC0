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

// Let’s interrogate the database
// $i = 0;
// $strQuery = "SELECT * FROM \"user\"";
// $objStatement = $objPDO->query($strQuery);
// foreach ($objStatement as $arRow) {
//         print "Row $i <br/>\n";
//         foreach($arRow as $key => $value) {
//                 if (!is_numeric($key)) 
// 					print "- Column $key, value $value <br/>\n";
//         };
//         $i++;
// };  

// $i = 0;
// $strQuery = "SELECT * FROM \"user\"";
// $objStatement = $objPDO->prepare($strQuery);
// $objStatement->execute();
// foreach ($objStatement as $arRow) {
//         print "Row $i <br/>\n";
//         foreach($arRow as $key => $value) {
//                 if (!is_numeric($key)) 
// 					print "- Column $key, value $value <br/>\n";
//         };
//         $i++;
// };

// $i = 0;
// $strUsername = "ed";
// $strQuery = "SELECT * FROM \"user\" WHERE \"username\" = :username";
// $objStatement = $objPDO->prepare($strQuery);
// $objStatement->bindParam(':username',$strUsername, PDO::PARAM_STR);
// $objStatement->execute();
// while($arRow = $objStatement->fetch(PDO::FETCH_ASSOC)) {
//         print "Row $i <br/>\n";
//         foreach($arRow as $key => $value) {
//                 if (!is_numeric($key)) 
// 					print "- Column $key, value $value <br/>\n";
//         };
//         $i++;
// };  


?>

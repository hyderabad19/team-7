<?php 
require('db.php');
$se=$_REQUEST["search"];
//var $pdo;

$data = $conn ->query("SELECT * FROM db1.uploadfile WHERE filename like '%$se%'")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['filename']."<br />\n";
}

?>
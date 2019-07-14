<?php 
require('db.php');
$se=$_REQUEST["search"];
//var $pdo;

$data = $conn ->query("SELECT * FROM db1.uploadfile WHERE filename like '%$se%'")->fetchAll();
// and somewhere later:
foreach ($data as $row)
 {
    
?>
        <table>
        <tr>
        <td><?php echo $row['filename'] ?></td>
        <td><a href="uploads/<?php echo $row['filename'] ?>" target="_blank">View Content</a></td>
        </tr>
	</table>
        <?php
 }
 ?>

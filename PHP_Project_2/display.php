<?php require('db.php')
?>

<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM `uploadfile`";
 $result_set=$conn->query($sql);
 foreach($result_set->fetchall() as $row)
 {
  ?>
        <tr>
        <td><?php echo $row['filename'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['filename'] ?>" target="_blank">view file</a></td>
        <td><BUTTON>Like</BUTTON></td>
        </tr>
        <?php
 }
 ?>
</table>

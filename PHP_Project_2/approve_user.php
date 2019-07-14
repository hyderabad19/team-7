<?php
session_start();
$con=mysqli_connect("localhost","root","","lcdb");
if(!$con)
{
  die("Database connection error");
}
?>
<html>
<body>
	<div class="container" >
   <div class="col-lg-9">
<table class="table table-striped table-hover " style="margin-top:10px; ">
  <thead>
    <tr>
      <th>Teacher Name</th>
      <th>School</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$i=1;
$query="select * from user where is_approved='0'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
if($count>0)
{
  while($row=mysqli_fetch_array($res))
  {
?>

    <tr>
      <td><?php echo"$i";?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['school'];?></td>
      <td> <input type="checkbox" name="approve" value="1">Approve<br></td>
    </tr>
   <?php $i++;}} else{
echo "No record Found";
   }?>
    
  </tbody>
</table> 
</div></div></div></div>
<div class="col-md-1"></div>

</body>
</html>
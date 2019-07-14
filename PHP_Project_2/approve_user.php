

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Approve User | Learning Curve</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <img src="https://img-resize.com/view/ffae87b7611c510b88cd09fac2ee6031.jpg" alt="curve">
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                         <li><a href = "approve_user.php"><span class = "glyphicon glyphicon-user"></span>Approve User</a></li>
                         <li><a href = "analytics/index.html"><span class = "glyphicon glyphicon-signal"></span>Get Analytics</a></li>
                        <li><a href = "upload.php"><span class = "glyphicon glyphicon-save"></span>Upload Content</a></li>
                         <li><a href = "#"><span class = "glyphicon glyphicon-trash"></span>Delete Content</a></li>
                          <li><a href = "schoolregister.html"><span class = "glyphicon glyphicon-home"></span>Add School</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
 <button type="submit" name="login" class="btn btn-primary">Confirm</button><br><br>
</div></div></div></div>
<div class="col-md-1"></div>

    </body>
</html>



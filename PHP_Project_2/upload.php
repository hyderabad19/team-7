<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload Content| Learning Curve</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
            <body background="https://images.unsplash.com/photo-1522661067900-ab829854a57f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                    <img src="https://img-resize.com/view/ffae87b7611c510b88cd09fac2ee6031.jpg" alt="curve">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "approve_user.php"><span class = "glyphicon glyphicon-user"></span>Approve User</a></li>
                         <li><a href = "analytics/index.html"><span class = "glyphicon glyphicon-signal"></span>Get Analytics</a></li>
                        <li><a href = "#"><span class = "glyphicon glyphicon-save"></span>Upload Content</a></li>
                         <li><a href = "#"><span class = "glyphicon glyphicon-trash"></span>Delete Content</a></li>
                          <li><a href = "schoolregister.html"><span class = "glyphicon glyphicon-home"></span>Add School</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                         <h2><font color="white">UPLOAD CONTENT</font> </h2>
                        <form  action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Title" name="title"  required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Give some description"  name="description" required>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Enter some keywords" maxlength="10" size="10" name="keywords" required>
                                </div>
                            <div class="form-group">
                                <input type="file" class="form-control"  placeholder="Upload file" maxlength="10" size="10" name="file" required>
                            </div>
                            
                         <!--   <div>
                                <select class="form-control" name="school" required="">
                                    <option value="Govt High School,Himayat Nagar, Hyderabad">Govt High School,Himayat Nagar, Hyderabad</option>
                                    <option value="Govt High School,pragathi nagar, Hyderabad">Govt High School,pragathi nagar, Hyderabad</option>
                                    <option value="Govt High School,panjagutta, Hyderabad">Govt High School,panjagutta, Hyderabad</option>
                                    <option value="Govt High School,bachupally, Hyderabad">Govt High School,bachupally, Hyderabad</option>
                                </selec
                        </div> -->

                        <br>
                            <button type="submit" name="btn-upload" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>
                    <p></p>	
                </center>
            </div>
        </footer>
    </body>
</html>

<?php
session_start();

$conn=mysqli_connect("localhost","root","","lcdb");
// 'test'.$conn;
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO uploadfile(filename,type,size) VALUES('$file','$file_type','$file_size')";

 $conn->exec($sql); 
echo "<script>alert('Uploaded successfully')</script>";
}
?>

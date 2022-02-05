<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">

    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>

<?php 

require('db.php');
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
     //$employeeid = $_POST["title"];
    
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
 
    #sql query to insert into database
    $query = "INSERT into users(uploadtask) VALUES('$pname') ";
    $result   = mysqli_query($con, $query);
    if($result){
 
    echo "File Sucessfully uploaded";
    
    }
    else{
        echo "Error";
    }
}
 
 
?>
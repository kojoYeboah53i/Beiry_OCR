<?php
//invoke the tesseract lib

if(isset($_POST['sub'])){

if(!isset($_FILES['image'])){
echo "image not found";
}
else {
    # code...
   // $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image'];
    
    move_uploaded_file($file_tmp,"images/".$file_name);
$out =shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\testing001\\doc_parser_loginv0\\images\\'.$file_name.'" out');
    
    echo "<h3>Image Upload Success</h3>";
    echo "<\br> .$out.  <\<br> ";
    echo "<\br> .$filename.  <\<br> ";
    
  //  echo '<img src="images/'.$file_name.'" style="width:100%">';
}
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <body>
    
    <center>
    <h3>Select pdf file</h3>
    <form action="ocr_.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
    </form>
    <br />
    <button type="button" id="" name ="sub_">show</button>

    </center>
    <button> 
    </body> 
    </html>
<?php
   if(isset($_FILES['image'])){
         $file_name = $_FILES['image']['name'];
         $file_tmp =$_FILES['image']['tmp_name'];
         if(move_uploaded_file($file_tmp,"D:/".$file_name)){
         echo "Success";
        }else{
           echo "failed";
        }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
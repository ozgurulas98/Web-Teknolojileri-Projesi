<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   <?php
       $name= $_POST["adi"];
       $surname= $_POST["soyadi"];
       $email= $_POST["mail"];
       $gender= $_POST["cinsiyet"];
       $text= $_POST["mesaj"];
    
    
       echo $name.'<br/>';
       echo $surname.'<br/>';
       echo $email.'<br/>';
       echo $gender.'<br/>';
       echo $text.'<br/>';
       
    
    ?>
    
</body>
</html>

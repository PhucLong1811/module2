<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form method="post" action="">
       Số a: <input type="text" name="soDau"/><br>
       phép tính: <input list="browsers" name="browser"><br>
       <datalist id="browsers">
           <option value="cộng">
           <option value="trừ">
           <option value="nhân">
           <option value="chia">
         </datalist>
       Số b: <input type="text" name="soCuoi"/>
       <input type = "submit" id = "submit" value = "calculate"/>
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $phepTinh= $_POST["browser"];
       $firstNum= $_POST["soDau"];
       $lastNum= $_POST["soCuoi"];
       switch ($phepTinh) {
           case 'cộng':
               $result=$firstNum + $lastNum;
               break;
           case 'trừ':
               $result=$firstNum - $lastNum;
           break;
           case 'nhân':
               $result=$firstNum * $lastNum;
           break;
           case 'chia':
               if ($lastNum != 0) {
                   $result =$firstNum / $lastNum;
               }
               else $result= "error";
           break;
       }
       echo $result;
   }
   ?>
</body>
</html>
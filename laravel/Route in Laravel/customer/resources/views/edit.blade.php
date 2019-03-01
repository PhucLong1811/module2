<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <!-- from>(label+input[name=""])*5 tạo ra from -->
    <form action="edit/{id}" method="post">
        
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" ><br>
        <label for="phone">phone</label>
        <input type="text" name="phone"><br>
        <label for="email">email</label>
        <input type="text" name="email"><br>
        <label for="gender">gender</label>

        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br>

        <label for="address">address</label>
        <input type="text" name="address"><br>

        <label for=""></label>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
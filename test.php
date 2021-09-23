<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello1</h1>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="user">
        <button type="submit">sub</button>
    </form>
</body>
</html>
<?php
// if(isset($_GET['user'])){
//     header("location: test.php?controller=index&users=234");
//     die();
// }

// $conn = new mysqli('localhost', 'root', '', 'test');//mysqli_connect('localhost', 'root', '', 'test');
// //mysqli_set_charset($conn, 'utf8');
// $data = $conn->query("select * from users");//mysqli_query($conn, "select * from users");
// mysqli_close($conn);
// //row count
// $row = mysqli_num_rows($data);
// while($listUser = mysqli_fetch_array($data)){
//     $user[] = $listUser;
// }
// foreach ($user as $value) {
//     print_r($user);
//     echo $value[0].$value[1];
// }
// echo '<pre>';
// print_r($user);
// echo $row;
$now = "Current date of server: ".date("H:i:s, d-m-Y");
$date = "Date fixed: ".date("H:i:s, d-m-Y", mktime(14, 2, 30, 9, 18, 2021));
echo $now."<br>";
echo $date;
?>
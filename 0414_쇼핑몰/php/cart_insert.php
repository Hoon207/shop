<?php
include('../db/dbconn.php');
$no = $_GET['no'];
$quan = $_POST['quantity'];

session_start();
$session_id=session_id();

$sql = "select * from shop_data where no = $no";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$no = $row['no'];
$regtime(); //현재날짜
$img = $row['img'];
$name = $row['name'];
$price = $row['price'];
$money = $quan * $row['price'];
$parent = $row['parent'];
//sql 퀄문 작성하여 변수값을 테이블에 삽입
$sql = "INSERT INTO shop_temp(name, parent, count, money, img, comment, seesion_id) VALUES('$name','$parent','$quan','$price','$money','$img','$comment','$session_id')";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<script>location.href='../cart.php'</script>
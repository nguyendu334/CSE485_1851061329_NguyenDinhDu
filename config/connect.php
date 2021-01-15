<!-- Đây là file để kết nối DB 
Code 1 lần, lần sau dùng thì coppy paste
-->
<?php
//real time : chat
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "vc";
$cookie_name = 'siteAuth';
$cookie_time = (60);
$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn) {
    // thiết lập ngôn ngữ 
    mysqli_query($conn, "SET NAMES 'utf8'");

// echo "Thành Công!";

}
else{
echo "Thất Bại!";
}
?>
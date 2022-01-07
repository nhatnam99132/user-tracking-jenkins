<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "user-tracking";

$a = $_POST['interactions'];
$b = $_POST['loadTime'];
$c = $_POST['unloadTime'];
$d = $_POST['page'];
$e = $_POST['clientStart'];
$f = $_POST['clientEnd'];
$g = $_POST['platform'];
$h = $_POST['port'];

$interactions = print_r($a, true);
$loadTime = print_r($b, true);
$unloadTime = print_r($c, true);
$page = print_r($d, true);
$clientStart = print_r($e, true);
$clientEnd = print_r($f, true);
$platform = print_r($g, true);
$port = print_r($h, true);





$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO interactions (`interactions`, `loadTime`, `unloadTime`, `page`, `clientStart`, `clientEnd`, `platform`, `port`)
        VALUE('".$interactions."', '".$loadTime."', '".$unloadTime."', '".$page."', '".$clientStart."', '".$clientEnd."', '".$platform."', '".$port."')";
if(mysqli_query($conn, $sql)) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Thêm dữ liệu thất bại";
}


echo "Thời gian bắt đầu trang:<br> " , $loadTime;
echo "<hr>Thời gian kết thúc sự kiện:<br> ", $unloadTime;
echo "<hr>Hành động:<br> ", ($interactions);

echo "<hr>Trang:<br> ",($page);
echo "<hr> Giá trị lúc bắt đầu client:<br> ",($clientStart);
echo "<hr> Giá trị lúc kết thúc client:<br> ",($clientEnd);
echo "<hr> platform: ",($platform);
echo "<hr>Cổng: ",($port);

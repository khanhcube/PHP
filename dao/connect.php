<?php
$conn = mysqli_connect('localhost', 'root', '', 'tours');
if(!$conn) {
    die('Kết nôi thất bại DB!');
} else {
    echo "Kết nối thành công " ;
}

?>
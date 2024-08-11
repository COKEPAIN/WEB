<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "WEBSTUDY";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// isset => null인지 확인 / 존재 -> TRUE, 존재X -> False ---> 여기서는 참이면 intval함수로, 거짓이면 0
// intval => 문자열을 정수로 변환

$sql = "SELECT title, content FROM posts WHERE id=$post_id";
$result = $conn->query($sql);


if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    $content = "<h1>".htmlspecialchars($row["title"])."</h1>";
    $content = $row["content"];

} else if{
    $content = "<p>해당 게시물을 찾을 수 없습니다.</p>";
}



$conn -> close();

include 'layout.php';
?>
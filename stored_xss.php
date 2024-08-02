<?php
// 데이터베이스 설정
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "WEBSTUDY";

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// XSS 게시물 가져오기
$sql = "SELECT title, content FROM posts WHERE type='stored'";
$result = $conn->query($sql);

// 콘텐츠 생성
$content = "<h1>Stored XSS</h1>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $content .= "<h2>" . htmlspecialchars($row["title"]) . "</h2>";
        $content .= "<p>" . $row["content"] . "</p>";
    }
} else {
    $content .= "<p>게시물이 없습니다.</p>";
}

$conn->close();

// 레이아웃 파일 포함
include 'layout.php';
?>

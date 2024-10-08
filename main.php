<?php
// 오류 표시 활성화
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// POST 요청 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($conn->real_escape_string($_POST['title']);, ENT_QUOTES,'UTF-8');
    $content = htmlspecialchars($conn->real_escape_string($_POST['content']);, ENT_QUOTES,'UTF-8');
    $type = htmlspecialchars($conn->real_escape_string($_POST['type']);, ENT_QUOTES,'UTF-8');
    
    $sql = "INSERT INTO posts (title, content, type) VALUES ('$title', '$content', '$type')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('새로운 게시물이 추가되었습니다.')</script>";
    } else {
        echo "<script>alert('오류:$conn->error')";
    } 
} 
 
$conn->close();
$content = <<<HTML
<head>
<meta
  http-equiv="Content-Security-Policy"
  content="default-src 'self'; img-src https://*; child-src 'none';" />
</head>
<body>
    <div class="content">
        <div class="form-container">
            <h2>게시물 작성</h2><hr>
            <form method="post" action="">
                <label for="title">제목:</label>
                <input type="text" id="title" name="title" required><br><br>
                <label for="content">내용:</label>
                <textarea id="content" name="content" rows="4" cols="50" required></textarea><br><br>
                <label for="type"></label>
                    <input type="submit" value="게시물 추가" style="text-align : right">
            </form>
        </div>
    </div>
</body>
HTML;
include 'layout.php';
?>
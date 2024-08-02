<?php
// 콘텐츠 생성
$content = <<<HTML
<h1>Reflected XSS</h1>
<form method="get" action="">
    <label for="input">입력:</label>
    <input type="text" id="input" name="input">
    <input type="submit" value="전송">
</form>
<p>입력된 값: <?php echo isset(\$_GET['input']) ? htmlspecialchars(\$_GET['input']) : ''; ?></p>
HTML;

// 레이아웃 파일 포함
include 'layout.php';
?>

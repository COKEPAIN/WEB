<?php
// 콘텐츠 생성
$content = <<<HTML
<h1>DOM-Based XSS</h1>
<input type="text" id="input" placeholder="Enter something">
<button onclick="display()">Display</button>
<p id="output"></p>

<script>
    function display() {
        var input = document.getElementById('input').value;
        document.getElementById('output').innerHTML = input;
    }
</script>
HTML;

// 레이아웃 파일 포함
include 'layout.php';
?>

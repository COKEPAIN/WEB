<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB STUDY</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header {background-color: #f4f4f4; padding: 10px; text-align: left; margin: 0 0 0 10px;}
        .footer { background-color: #f4f4f4; padding: 10px; text-align: center; }
        .main { display: flex; }
        .nav { width: 200px; background-color: #e0e0e0; padding: 10px; }
        .content { flex: 1; padding: 10px; }
        .nav a { display: block; padding: 5px 0; text-decoration: none; color: #000; }
        .nav a:hover { background-color: #ccc; }
    </style>
</head>
<body>

<div class="header">
    <span><h1>WEB STUDY <small>created by FUZZER</small></h1></span>
</div>

<div class="main">
    <div class="nav">
        <h3><a href="WEBSTUDY.php">HOME</a></h3><hr>
        
        <h4>XSS</h4><hr>
        <a href="stored_xss.php">Stored XSS</a>
        <a href="reflected_xss.php">Reflected XSS</a>
        <a href="dom_based_xss.php">DOM-Based XSS</a>

        <h4>CSRF</h4><hr>
        <a href="csrf.php">CSRF</a>

        <h4>Injection</h4><hr>
        <a href="#">SQL Injection</a>
        <a href="#">Blind SQL Injection</a>
    </div>

    <div class="content">
        <?php echo $content;?>
    </div>
</div>

    <div class="footer">
        &copy; 2024 WEB STUDY. All Rights Reserved.
    </div>

</body>
</html>

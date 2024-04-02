<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
    <style>
     
        .container {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<center>
<div class="container">
    <?php

    $file_path = "example.txt";

    $file = fopen($file_path, "r") or die("Unable to open file!");

    echo "<p>File opened successfully!</p>";

    $file_content = fread($file, filesize($file_path));

    fclose($file);

    echo "<p>File read successfully:</p>";
    echo "<p>$file_content</p>";

    ?>
</div>
</center>
</body>
</html>

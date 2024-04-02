<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Process the feedback (you can save it to a database or send it via email)

    echo "Thank you, $name, for your feedback!<br>";
    echo "Email: $email<br>";
    echo "Feedback: $feedback<br>";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $category = $_POST["select"];
    $subcategory = $_POST["subcategory"];
    $description = $_POST["description"];
    
    $to = "support@" . $_SERVER['HTTP_HOST'];
    $subject = "New Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Category: $category\n";
    $body .= "Subcategory: $subcategory\n";
    $body .= "Description: \n$description";

    $headers = "From: $to \r\n";

    mail($to, $subject, $body, $headers);

    header("Location: thanks.html");
    exit();
}
?>


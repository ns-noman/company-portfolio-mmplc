<?php
// Initialize variables
$Name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$Email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$Subject = isset($_POST['Subject']) ? trim($_POST['Subject']) : '';
$Comment = isset($_POST['Comment']) ? trim($_POST['Comment']) : '';

$error = false;
$errorMessage = "";

// Basic validation
if ($Name === "") {
    $error = true;
    $errorMessage .= "<li>Name cannot be empty.</li>";
}

if ($Email === "") {
    $error = true;
    $errorMessage .= "<li>Email cannot be empty.</li>";
} elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $errorMessage .= "<li>Invalid email format.</li>";
}

if ($Subject === "") {
    $error = true;
    $errorMessage .= "<li>Subject cannot be empty.</li>";
}

if ($Comment === "") {
    $error = true;
    $errorMessage .= "<li>Comment cannot be empty.</li>";
}

if ($error) {
    include('contact.php');
} else {
    $toEmail = "bdc.mkt@bdg.com.bd";
    $message = nl2br(htmlspecialchars($Comment)); // Escape HTML and keep line breaks

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . htmlspecialchars($Name) . " <" . $Email . ">\r\n";

    if (mail($toEmail, htmlspecialchars($Subject), $message, $headers)) {
        echo "<div style='border:1px solid green; padding:10px; color:green;'>
                Your query has been sent to the administrator.
              </div>";
    } else {
        echo "<div style='border:1px solid red; padding:10px; color:red;'>
                Failed to send email. Please try again later.
              </div>";
    }
}
?>

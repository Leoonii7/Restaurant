<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $menuItem = $_POST["menu-item"];
    $quantity = $_POST["quantity"];
    $address = $_POST["address"];
    $instructions = $_POST["additional-instructions"];

    // Validate and sanitize data (add more validation as needed)
    if (empty($name) || empty($email) || empty($phone) || empty($menuItem) || empty($quantity) || empty($address) ||) {
        die("Please fill in all required fields.");
    }

    // Create an email message with the order details
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Order from My Restaurant";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Menu Item: $menuItem\n";
    $message .= "Quantity: $quantity\n";
    $message .= "address: $address\n";
    $message .= "Additional Instructions: $instructions\n";

    // Send the email
    $headers = "From: $email\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Failed to submit the order. Please try again later.";
    }
} else {
    // Handle invalid request
    echo "Invalid request.";
}
?>

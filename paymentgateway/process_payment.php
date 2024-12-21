<?php
// Database configuration
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "payment_gateway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$amount = $_POST['amount'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvv = $_POST['cvv'];

// Payment gateway integration (example with a dummy API URL)
// Note: Replace with actual payment gateway API endpoint and credentials
$api_url = "https://api.razorpay.com/v1/orders";

$api_key = "your_api_key";

$data = array(
    'amount' => $amount,
    'card_number' => $card_number,
    'expiry_date' => $expiry_date,
    'cvv' => $cvv,
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n" .
                      "Authorization: Bearer $api_key\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$response = file_get_contents($api_url, false, $context);

if ($response === FALSE) {
    die('Error occurred during payment processing.');
}

// Decode the JSON response
$response_data = json_decode($response, true);

// Save payment details to database
$sql = "INSERT INTO payments (amount, card_number, expiry_date, cvv, response_data) VALUES ('$amount', '$card_number', '$expiry_date', '$cvv', '" . json_encode($response_data) . "')";
if ($conn->query($sql) === TRUE) {
    echo "Payment processed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

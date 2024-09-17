<?php
// Function to validate username (only letters allowed)
function validateUsername($username) {
    return preg_match('/^[a-zA-Z]+$/', $username);
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate password (at least 8 chars, 1 uppercase, 1 lowercase, 1 number)
function validatePassword($password) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$university = $_POST['university'];
$program = $_POST['program'];
$hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
$password = $_POST['password'];

// Array to collect error messages
$errors = [];

// Validate username: only letters allowed
if (!validateUsername($username)) {
    $errors[] = "Username hanya boleh terdiri dari huruf (tanpa angka dan karakter khusus).";
}

// Validate email
if (!validateEmail($email)) {
    $errors[] = "Format email tidak valid.";
}

// Validate password
if (!validatePassword($password)) {
    $errors[] = "Password harus memiliki minimal 8 karakter, termasuk 1 huruf besar, 1 huruf kecil, dan 1 angka.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .result-container {
            background-color: white;
            width: 50%;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            color: #333;
            font-size: 16px;
        }
        .info {
            font-weight: bold;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        // Check if there are any errors
        if (count($errors) > 0) {
            // Use JavaScript to display an alert with the error messages
            echo "<script>";
            echo "alert('Error processing form:\\n" . implode("\\n", $errors) . "');";
            echo "window.history.back();"; // Go back to the form page after closing the alert
            echo "</script>";
        } else {
            // JavaScript alert untuk notifikasi sukses
            echo "<script>alert('Form submitted successfully!');</script>";

            // Tampilkan data yang disubmit kecuali password
            echo "<h2>Pendaftaran Berhasil!</h2>";
            echo "<h3>Display Detail Informasi Data</h3>";
            echo "<p><span class='info'>Username:</span> $username</p>";
            echo "<p><span class='info'>Email:</span> $email</p>";
            echo "<p><span class='info'>University:</span> $university</p>";
            echo "<p><span class='info'>Program Studi:</span> $program</p>";
            echo "<p><span class='info'>Hobbies:</span> " . (count($hobbies) > 0 ? implode(', ', $hobbies) : 'Tidak ada') . "</p>";
        }
        ?>
    </div>
</body>
</html>

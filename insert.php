<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // চেক করুন ইমেইল আগে থেকে আছে কিনা
    $check = "SELECT id FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows > 0) {
        echo "এই ইমেইল আগে থেকেই রেজিস্টার্ড!";
        echo "<br><a href='register.php'>আবার চেষ্টা করুন</a>";
    } else {
        // নতুন ইউজার যোগ করুন
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        
        if ($stmt->execute()) {
            echo "রেজিস্ট্রেশন সফল!";
            header("refresh:2; url=index.php");
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    }
    
    $check_stmt->close();
    $conn->close();
} else {
    header("Location: register.php");
}
?>
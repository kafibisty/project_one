<?php
// config.php - ডাইনামিক কনফিগারেশন (লোকাল ও লাইভ ডিটেক্ট করবে)

// সার্ভার চেক করুন - লোকাল না লাইভ?
$is_local = ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1');

if ($is_local) {
    // লোকাল ডাটাবেস কানেকশন (XAMPP)
    $host = 'localhost';
    $user = 'root';        // XAMPP-এ ডিফল্ট ইউজার
    $pass = '';            // XAMPP-এ ডিফল্ট পাসওয়ার্ড (খালি)
    $db   = 'testfile';  // লোকাল ডাটাবেসের নাম
} else {
    // লাইভ ডাটাবেস কানেকশন (InfinityFree)
    $host = 'sqlXXX.infinityfree.com';  // আপনার InfinityFree হোস্ট
    $user = 'if0_41323768';             // আপনার FTP ইউজারনেম
    $pass = '8UGTejma1EHO7';             // আপনার FTP পাসওয়ার্ড
    $db   = 'if0_41323768_testfile'; // আপনার ডাটাবেসের নাম
}

// কানেকশন তৈরি করুন
$conn = new mysqli($host, $user, $pass, $db);

// কানেকশন চেক করুন
if ($conn->connect_error) {
    die("সংযোগ ব্যর্থ: " . $conn->connect_error);
}

// চারসেট সেট করুন
$conn->set_charset("utf8");

// ডিবাগের জন্য (প্রয়োজনে কমেন্ট আউট করুন)
// echo "সংযোগ সফল! (লোকাল: " . ($is_local ? 'হ্যাঁ' : 'না
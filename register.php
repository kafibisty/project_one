<!DOCTYPE html>
<html>
<head>
    <title>রেজিস্টার</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>নতুন ইউজার রেজিস্টার</h1>
    
    <nav>
        <a href="index.php">হোম</a>
        <a href="register.php">রেজিস্টার</a>
    </nav>
    
    <div class="content">
        <form method="POST" action="insert.php">
            <div>
                <label>আপনার নাম:</label><br>
                <input type="text" name="name" required>
            </div>
            
            <div>
                <label>ইমেইল:</label><br>
                <input type="email" name="email" required>
            </div>
            
            <div>
                <label>পাসওয়ার্ড:</label><br>
                <input type="password" name="password" required>
            </div>
            
            <div>
                <button type="submit">রেজিস্টার করুন</button>
            </div>
        </form>
    </div>
</body>
</html>
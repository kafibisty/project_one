<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আমার ওয়েবসাইট</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* নেভিগেশন */
header {
    background: #2c3e50;
    color: white;
    padding: 1rem 0;
    position: sticky;
    top: 0;
    z-index: 100;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo h2 {
    color: white;
}

.menu {
    display: flex;
    list-style: none;
}

.menu li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    margin: 0 5px;
    border-radius: 5px;
    transition: background 0.3s;
}

.menu li a:hover {
    background: #34495e;
}

/* হিরো সেকশন */
.hero {
    background: linear-gradient(135deg, #3498db, #2c3e50);
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background: #e74c3c;
    color: white;
    padding: 12px 30px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    transition: background 0.3s;
}

.btn:hover {
    background: #c0392b;
}

/* ফিচার সেকশন */
.features {
    padding: 60px 0;
    background: #f9f9f9;
}

.features h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 32px;
    color: #2c3e50;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    padding: 0 20px;
}

.feature-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-card h3 {
    margin-bottom: 15px;
    color: #3498db;
}

/* ইউজার সেকশন */
.users-section {
    padding: 60px 0;
}

.users-section h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 32px;
    color: #2c3e50;
}

.user-list {
    list-style: none;
    max-width: 800px;
    margin: 0 auto;
}

.user-list li {
    background: #f9f9f9;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
    border-left: 4px solid #3498db;
}

/* কন্টেন্ট সেকশন */
.content {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.content h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #2c3e50;
}

.content table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.content table th {
    background: #2c3e50;
    color: white;
    padding: 12px;
    text-align: left;
}

.content table td {
    padding: 10px 12px;
    border-bottom: 1px solid #ddd;
}

.content table tr:hover {
    background: #f5f5f5;
}

/* ফুটার */
footer {
    background: #2c3e50;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
}

/* রেসপনসিভ ডিজাইন */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
    }
    
    .menu {
        margin-top: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .hero h1 {
        font-size: 36px;
    }
    
    .hero p {
        font-size: 18px;
    }
    
    .content table {
        font-size: 14px;
    }
}
</style>

<body>
    <!-- হেডার সেকশন -->
    <header>
        <nav>
            <div class="logo">
                <h2>আমার সাইট</h2>
            </div>
            <ul class="menu">
                <li><a href="index.php">হোম</a></li>
                <li><a href="register.php">রেজিস্টার</a></li>
                <li><a href="index.html">স্ট্যাটিক হোম</a></li>
                <li><a href="about.html">আমাদের সম্পর্কে</a></li>
                <li><a href="contact.html">যোগাযোগ</a></li>
            </ul>
        </nav>
    </header>

    <!-- হিরো সেকশন -->
    <section class="hero">
        <div class="hero-content">
            <h1>স্বাগতম আমার ওয়েবসাইটে!</h1>
            <p>আধুনিক ও ডায়নামিক ওয়েবসাইট ডিজাইন</p>
            <a href="register.php" class="btn">রেজিস্টার করুন</a>
        </div>
    </section>

    <!-- PHP ডাটাবেস কানেকশন -->
    <?php
    // ডাটাবেস কানেকশন
    include 'config.php';
    
    // কানেকশন চেক
    if (!$conn) {
        echo "<p style='color:red; text-align:center;'>ডাটাবেস কানেকশন ব্যর্থ হয়েছে!</p>";
    }
    ?>

    <!-- ইউজার লিস্ট সেকশন -->
    <section class="content">
        <h2>📋 রেজিস্টার্ড ইউজার লিস্ট</h2>
        
        <?php
        // ডাটাবেস থেকে ইউজার সংগ্রহ
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th>
                    <th>নাম</th>
                    <th>ইমেইল</th>
                    <th>রেজিস্ট্রেশনের তারিখ</th>
                  </tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . date('d M Y, h:i A', strtotime($row['created_at'])) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<p style='margin-top: 20px;'>মোট ইউজার: " . $result->num_rows . " জন</p>";
        } else {
            echo "<div style='text-align: center; padding: 40px; background: #f9f9f9; border-radius: 10px;'>";
            echo "<p style='font-size: 18px; color: #666;'>কোনো ইউজার নেই। প্রথম ইউজার হন!</p>";
            echo "<a href='register.php' class='btn' style='margin-top: 20px;'>রেজিস্টার করুন</a>";
            echo "</div>";
        }
        
        // কানেকশন বন্ধ করুন
        $conn->close();
        ?>
    </section>

    <!-- ফিচার সেকশন -->
    <section class="features">
        <div class="container">
            <h2>আমাদের সেবাসমূহ</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <h3>📱 ওয়েব ডিজাইন</h3>
                    <p>আধুনিক ও আকর্ষণীয় ওয়েবসাইট ডিজাইন যা সব ডিভাইসে কাজ করে</p>
                </div>
                <div class="feature-card">
                    <h3>💻 ডেভেলপমেন্ট</h3>
                    <p>প্রফেশনাল ওয়েব ডেভেলপমেন্ট সেবা PHP, MySQL প্রযুক্তিতে</p>
                </div>
                <div class="feature-card">
                    <h3>🗄️ ডাটাবেস</h3>
                    <p>ডায়নামিক ওয়েবসাইটের জন্য MySQL ডাটাবেস ম্যানেজমেন্ট</p>
                </div>
                <div class="feature-card">
                    <h3>⚡ অটোমেশন</h3>
                    <p>GitHub Actions দিয়ে স্বয়ংক্রিয় ডিপ্লয়মেন্ট সিস্টেম</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ফুটার -->
    <footer>
        <div class="container">
            <p>&copy; 2026 - <?php echo date('Y'); ?> আমার ওয়েবসাইট। সর্বস্বত্ব সংরক্ষিত।</p>
            <p style="margin-top: 10px; font-size: 14px;">পাওয়ার্ড বাই: PHP, MySQL, GitHub Actions</p>
        </div>
    </footer>

    <!-- জাভাস্ক্রিপ্ট -->
    <script>
    // স্ক্রল ইফেক্ট
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = '#1a252f';
        } else {
            header.style.background = '#2c3e50';
        }
    });

    // অ্যানিমেশন
    document.addEventListener('DOMContentLoaded', function() {
        // ফিচার কার্ডে অ্যানিমেশন
        const cards = document.querySelectorAll('.feature-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 200);
        });
        
        // টেবিল রোতে হোভার ইফেক্ট
        const rows = document.querySelectorAll('table tr');
        rows.forEach((row, index) => {
            if (index > 0) { // হেডার বাদে
                row.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#f0f7ff';
                });
                row.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '';
                });
            }
        });
    });

    // ফর্ম ভ্যালিডেশন
    function validateForm() {
        const name = document.getElementById('name')?.value;
        const email = document.getElementById('email')?.value;
        const password = document.getElementById('password')?.value;
        
        if (name && name.length < 3) {
            alert('নাম কমপক্ষে ৩ অক্ষর হতে হবে');
            return false;
        }
        
        if (email && !email.includes('@')) {
            alert('সঠিক ইমেইল দিন');
            return false;
        }
        
        if (password && password.length < 6) {
            alert('পাসওয়ার্ড কমপক্ষে ৬ অক্ষর হতে হবে');
            return false;
        }
        
        return true;
    }

    // কনসোলে ডেটা দেখান (ডিবাগিং)
    console.log('ওয়েবসাইট লোড হয়েছে!');
    </script>
</body>
</html>
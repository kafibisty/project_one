// script.js - জাভাস্ক্রিপ্ট ফাংশন

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
});

// ফর্ম ভ্যালিডেশন
function validateForm() {
    const name = document.getElementById('name')?.value;
    const email = document.getElementById('email')?.value;
    
    if (name && name.length < 3) {
        alert('নাম কমপক্ষে ৩ অক্ষর হতে হবে');
        return false;
    }
    
    if (email && !email.includes('@')) {
        alert('সঠিক ইমেইল দিন');
        return false;
    }
    
    return true;
}
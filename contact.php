<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Naseeg</title>
    <link rel="stylesheet" href="Style/co.css">
</head>
<body>
    <header>
        <h1>Contact Naseeg</h1>
    </header>
    
    <main class="contact-form">
        <form action="thankyou.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Send</button>
        </form>
    </main>
    
    <nav class="main-nav">
        <a href="home.php">Home</a> 
        <a href="about.php">About Us</a>
    </nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Chat</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="chat-container">
        <div id="chat-box">
            <!-- Messages will be loaded here -->
        </div>
        <form id="chat-form">
            <input type="text" id="username" placeholder="Enter your name" required>
            <input type="text" id="message" placeholder="Enter your message" required>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>

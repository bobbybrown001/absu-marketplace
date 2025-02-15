<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Link -->
    <link rel="stylesheet" href="./css/message.css">
    <!-- css link for light to dark mood -->
    <link rel="stylesheet" href="./css/dark-lightmode.css">
    <!-- css link for side bar -->
    <link rel="stylesheet" href="./css/sidebar.css">
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Message</title>
</head>
<body>
    <!-- nav.bar -->
    <?php include ('./include/sidebar.php') ?>

    <!-- Main Content -->
    <div class="maincontainer">

        <!-- Conversations List -->
        <section class="conversations">
            <div class="head">
                <h3>Conversations</h3>
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <ul class="chat-list" id="user_message">
                <li class="chat-item active"><img src="../asset/image/image1.png" alt="Profile">John Doe</li>
                <li class="chat-item"><img src="../asset/image/image1.png" alt="Profile">Emmanuel Chimaobi</li>
                <li class="chat-item"><img src="../asset/image/image1.png" alt="Profile">Bobby brown</li>
            </ul>
        </section>

        <!-- Chat Box -->
        <section class="chat-box">
            <!-- profile -->
            <div class="profile">
                <img src="../asset/image/image1.png" alt="Profile Picture">
                <h6>Jane Doe</h6>
            </div>

            <!-- message box -->
            <div class="message-box">
                <div id="messageList" class="message-container">
                    <!-- message will diplay here -->
                </div>
            </div>

            <!-- Input -->
            <div class="input-container">
                <form id="messageForm">
                    <span class="material-symbols-outlined">photo_library</span>
                    <textarea id="messageInput" placeholder="Type your message..." required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
            
        </section>
    </div>

    <!-- Custom JavaScript -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
    const messageForm = document.getElementById("messageForm");
    const messageInput = document.getElementById("messageInput");
    const messageList = document.getElementById("messageList");
    const chatItems = document.querySelectorAll(".chat-item");

    // Auto-scroll to the bottom
    function scrollToBottom() {
        messageList.scrollTop = messageList.scrollHeight;
    }

    // Function to append a message
    function appendMessage(text, sender = "sender") {
        if (!text.trim()) return;

        const messageItem = document.createElement("div");
        messageItem.classList.add("message-item", sender);
        messageItem.textContent = text;

        messageList.appendChild(messageItem);
        scrollToBottom();
    }

    // Handle form submission
    messageForm.addEventListener("submit", (event) => {
        event.preventDefault();
        
        const messageText = messageInput.value;
        appendMessage(messageText, "sender"); // Add sender message
        messageInput.value = ""; // Clear input field
        
        // Simulate a response after 1 second
        setTimeout(() => {
            appendMessage("Hello! How can I help you?", "receiver");
        }, 1000);
    });

    // Chat selection logic
    chatItems.forEach((item) => {
        item.addEventListener("click", () => {
            document.querySelector(".chat-item.active")?.classList.remove("active");
            item.classList.add("active");
            // Update chat header (you can fetch messages here later)
            const profileName = document.querySelector(".chat-box .profile h6");
            profileName.textContent = item.textContent.trim();
            messageList.innerHTML = ""; // Clear messages for new chat
        });
    });

    scrollToBottom();
})
    </script>

    <!-- javascript cdn -->
    <script src="./dark-lightmode.js"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</body>
</html>
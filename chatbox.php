<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Website with Side Chat</title>
    <style>
        /* Chat Container */
        #chat-container {
            position: fixed;
            right: 20px;
            bottom: 20px;
        }

        /* Chat Button */
        .chat-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 16px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Chat Box */
        .chat-box {
            display: none;
            width: 300px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .chat-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close-chat {
            cursor: pointer;
            font-size: 24px;
        }

        .chat-content {
            padding: 10px;
            max-height: 200px;
            overflow-y: auto;
        }

        .chat-input {
            display: flex;
            padding: 10px;
        }

        input[type="text"] {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
        }

        /* Chat Send Button */
        #sendMessageBtn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="chat-container">
        <button id="openChatBtn" class="chat-button">Open Chat</button>
        <div id="chat-box" class="chat-box">
            <div class="chat-header">
                <span class="close-chat" id="closeChatBtn">&times;</span>
                <h2>Live Chat</h2>
            </div>
            <div class="chat-content">
                <!-- Chat messages will be displayed here -->
            </div>
            <div class="chat-input">
                <input type="text" id="messageInput" placeholder="Type your message...">
                <button id="sendMessageBtn">Send</button>
            </div>
        </div>
    </div>

    <script>
        // Get the chat elements
        var chatBtn = document.getElementById("openChatBtn");
        var chatBox = document.getElementById("chat-box");
        var closeChatBtn = document.getElementById("closeChatBtn");
        var sendMessageBtn = document.getElementById("sendMessageBtn");
        var messageInput = document.getElementById("messageInput");

        // Toggle the chat box when the chat button is clicked
        chatBtn.onclick = function () {
            chatBox.style.display = "block";
        };

        // Close the chat box when the close button is clicked
        closeChatBtn.onclick = function () {
            chatBox.style.display = "none";
        };

        // Send a message (you can customize this function)
        sendMessageBtn.onclick = function () {
            var message = messageInput.value.trim();

            if (message !== "") {
                // Here, you can implement your chat functionality, e.g., append the message to the chat content
                var chatContent = document.querySelector(".chat-content");
                chatContent.innerHTML += `<div class="message">${message}</div>`;
                messageInput.value = "";
            }
        };

    </script>
</body>

</html>
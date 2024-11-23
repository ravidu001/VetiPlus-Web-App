<?php

if (session_status() === PHP_SESSION_NONE) session_start();

$message = null;
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<?php if ($message): ?>
    <style class="message-styles">
        .blurred-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #B89ACB;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            z-index: 1000;

        }
    </style>
    <div class="blurred-background"></div>
    <div class="message">
        <?= htmlspecialchars($message) ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const message = document.querySelector('.message');
            if (message) {
                setTimeout(() => {
                    document.querySelector('.blurred-background').remove();
                    document.querySelector('.message-styles').remove();
                    message.remove();
                }, 3000);
            }
        });
    </script>
<?php endif; ?>
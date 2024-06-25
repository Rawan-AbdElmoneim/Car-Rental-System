<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script>
        window.onload = function() {
            var urlParams = new URLSearchParams(window.location.search);
            var name = urlParams.get('name');
            document.getElementById('welcomeMessage').textContent = 'Welcome ' + name;
        };
    </script>
    <style>
        body {
            background: url(network-connection-background-abstract-style_23-2148875738.avif);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            color: white;
          }
          #welcomeMessage {
            margin: 1rem auto;
            padding: 10px;
            animation: neon 1s ease infinite;
        }
        @keyframes neon {
            0%,
            100% {
                text-shadow: 0 0 10px #ef00e3a8, 0 0 20px #ef00e3a8, 0 0 20px #ef00e3a8, 0 0 20px #ef00e3a8, 0 0 2px #fed128, 2px 2px 2px #806914;
                color: #f5efcb;
            }
            50% {
                text-shadow: 0 0 2px #800e0b, 0 0 5px #800e0b, 0 0 5px #800e0b, 0 0 5px #800e0b, 0 0 2px #800e0b, 4px 4px 2px #40340a;
                color: #eda0d3;
            }
        }
          
    </style>
</head>
<body>
    <h1 id="welcomeMessage" ></h1>
    <?php
    session_start();
    if (isset($_SESSION['ssn'])) {
        $ssn = $_SESSION['ssn'];
        echo $ssn;
    } else {
        echo "Session variable 'ssn' is not set.";
    }
    ?>
</body>
</html>
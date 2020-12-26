<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Street Diamonds Management Application</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
</head>
<body>
    <main class="welcome">
        <h2 id="greeting"class="mb">Happy Monday!</h2>
        <img src="img/MSD.svg" alt="MSD Logo" class="logo mb">
        <h1  class="mb">MSD Management Application</h1>
        <a  href="login.php" class="btn-xl mt">Enter</a>
    </main> 

    <script>
        let greeting = document.getElementById('greeting');
        let dateObj = new Date()
        var weekday = dateObj.toLocaleString("default", { weekday: "long" })
        // weekday = "Saturday"
        
        greeting.innerText = `Happy ${weekday}!`;
    </script>
</body>
</html>


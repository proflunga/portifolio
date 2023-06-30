

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
</head>

<body>
    <h2>Blog Page</h2>
    <div class="countdown">
        <p class="timer">
            <span id="countdown_timer"></span>
            <?php

                if (!isset($_COOKIE['mainpage'])) {
                    echo "Cookie named  is not set!";
                } else {
                    // echo "Cookie '" . $cookie_name . "' is set!<br>";
                    $mainpage = $_COOKIE['mainpage'];
                    echo "<a href= '$mainpage' id='get_link' style=' visibility:hidden; '> Get Link</a> " ;
                }

                ?>
            
        </p>
    </div>

  
    <script>
        
        let counter = 10;
        // countedown method
      var interval =   setInterval(
            function countdown() {
                if (counter == 0) {
                    document.getElementById('countdown_timer').innerText = 0;
                    document.getElementById('get_link').style.visibility = 'visible';
                    clearInterval(interval);
                    return;
                }
                document.getElementById('countdown_timer').innerText = counter;
                counter--;

            }, 1000);
    </script>
 
</body>

</html>
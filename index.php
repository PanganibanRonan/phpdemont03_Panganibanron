<?php
$username = "BSIT NT 3103";
$user_id = 12345;

$Pangalan = "Kuya Wil";
$apelyido = "Revillame";
$hephep = "Hooray"; 
$bisa = "is ya si bai";

echo "<u>Output From Pure PHP</u>";
echo "<br>";
echo $username;
echo "<br>";
echo $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo NT 3103</title>
</head>
<body>
    <br><a href="next_page.php">Go to Next Page</a>
    
    <h1>Hello kuya wil</h1>
    <?php echo "<h1>Hello kuya</h1>"; ?>
    <h3>
    username: <u><?php echo $username ?></u>
    <br>
    user_id: <u><?php echo $user_id ?></u>
    </h3>
    <button type="button" onclick=greetUser()>Greet User</button>
    <script>
        const username = "<?php echo $username; ?>";
        const userId = "<?php echo $user_id; ?>";
        function greetUser() {
            alert("Hello "+username+" your user id is "+userId);
        }
    </script>
    <br>
    <button type="button" onclick=batiin()>batiin mo</button>  
    <script>
        const Pangalan = "<?php echo $Pangalan; ?>";
        const apelyido = "<?php echo $apelyido; ?>";
        const hephep = "<?php echo $hephep; ?>";
        function batiin() {
            alert("Hello "+Pangalan+" "+apelyido+" your user id is "+hephep);
        }
    </script>
     </script>
    <br>
    <button type="button" onclick=pindute()>PINDOT</button>  
    <script>
        const bisa = "<?php echo $bisa; ?>";
        function pindute() {
            alert("AH AH "+bisa);
        }
    </script>

</body>
</html>
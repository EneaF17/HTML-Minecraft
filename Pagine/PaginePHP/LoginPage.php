<?php 
    session_start();
    require("../../data/connessioneDB.php");

    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
             session_destroy();
        }
     }

    // if (isset($_POST["Username"])) {$_SESSION["UsernameLog"] = $_POST ["UsernameLog"];} else {$_SESSION["UsernameLog"] = "";}
    if (isset($_SESSION["UsernameLog"])) {$Username = $_SESSION["UsernameLog"];} else {$Username = "";}
    
    if(isset($_SESSION["Reindirizza"])) {
        $LinkUscita = $_SESSION["Reindirizza"];
    }
    else {
        $LinkUscita = "SP_Home.php";
    }
    $loading = false;
    $random = rand(1,4);
?>


<!DOCTYPE html>
<html lang="it">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN - Minecraft</title>
        <link rel="icon" type="image/x-icon" href="../Immagini/SfondoHeader.jpg">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../../style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="header">
        <div class="logo">
            <a href="../../" class="logo-link">            
                <img src="../../immagini/logo.png" alt="">
           </a>
        </div>
        <div class="cta">
            <a href="RegisterPage.php" class="intro-text">Registrati</a>
        </div>
    </div>

    

    <div class="loginBox">
        <h1>LOGIN</h1>
        <form action="" method="post">
            <table class="LoginTable" >
                <tr>
                    <td> <label for="Username">Username </label></td>
                    <td><input type="text" required name="Username" id="Username" value="<?php echo $Username?>"></td>
                </tr>
                <tr>
                    <td> <label for="Password">Password </label></td>
                    <td><input type="password" required name="Password" id="Password" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="SubmitButtonIcone" type="submit"></td>
                </tr>
            </table>
        </form>
        <?php 
            if (isset($_POST["Username"]) and isset($_POST["Password"])) {
                $Username = $_POST["Username"] ;
                $Password = $_POST["Password"] ;
                $_SESSION["UsernameLog"] = $_POST["Username"];
                

                $LoginQuery = "SELECT Username, password FROM giocatore WHERE Username='$Username' AND password='$Password' ";
                
                $ris = $Connessione->query($LoginQuery) or die("ERRORE NELLA QUERY". $Connessione->error);

                if($ris ->num_rows == 0) {
                    echo "<p> Nome utente o password errati </p>";
                    header("Refresh: $random;");
                    $loading = true;
                }
                else {
                    $_SESSION["Username"] = $Username;

                    $loading = true;
                    header("Refresh: $random; $LinkUscita");
                    // echo"CONNESSIONE ESEGUITA";
                }
            }
            if ($loading) {
                echo <<<EOD
                <div class="CopriTutto">
                    <div class="loaderGen1"></div>
                    <div class="loaderGen2"></div>
                </div>
                EOD;
                $loading =false;
            }
            
        ?>
    </div>
</body>
<footer class="footerLogin">
<p class="small-text">Sito non ufficiale programmato al solo scopo didattico e dimostrativo da Alessandro Beretta e Enea Fascilla</p>
</footer>

</html>
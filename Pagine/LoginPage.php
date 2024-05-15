<?php 
    session_start();
    require("../data/connessioneDB.php");

    if (isset($_POST["Username"])) {$Username = $_POST ["Username"];} else {$Username = "";}
?>


<!DOCTYPE html>
<html lang="it">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN - Minecraft</title>
        <link rel="icon" type="image/x-icon" href="../Immagini/SfondoHeader.jpg">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="header">
        <div class="logo">
            <a href="../" class="logo-link">            
                <img src="../immagini/logo.png" alt="">
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
                    <td>Username</td>
                    <td><input type="text" required name="Username" value="<?php echo $Username?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" required name="Password" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit"></td>
                </tr>
            </table>
        </form>
        <?php 
            if (isset($_POST["Username"]) and isset($_POST["Password"])) {
                $Username = $_POST["Username"] ;
                $Password = $_POST["Password"] ;

                $LoginQuery = "SELECT Username, password FROM giocatore WHERE Username='$Username' AND password='$Password' ";
                
                $ris = $Connessione->query($LoginQuery) or die("ERRORE NELLA QUERY". $Connessione->error);

                if($ris ->num_rows == 0) {
                    echo "<p> Nome utente o password errati </p>";
                    $Connessione ->close(); }
                else {
                    $_SESSION["Username"] = $Username;
                    $Connessione -> close();

                    header("location: ../SpazioPersonale/SP_Home.php");
                    // echo"CONNESSIONE ESEGUITA";
                }
            }

        ?>  
    </div>
</body>
</html>
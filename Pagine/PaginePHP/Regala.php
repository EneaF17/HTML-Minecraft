<?php 
    session_start();
    require("../../data/connessioneDB.php");

    if(!isset($_SESSION["Username"]))
    {
        header("location: LoginPage.php");
    }
    $Username=$_SESSION["Username"];

    if(isset($_POST["Regala"])){
        $Regala=$_POST["Regala"];
    }
    else $Regala="";

    // if (isset($_POST["Username"])) {$_SESSION["UsernameLog"] = $_POST ["UsernameLog"];} else {$_SESSION["UsernameLog"] = "";}
    if(!isset($_GET["nome_gioco"]))
    {
        header("location: Negozio.php");
    }
    $LinkUscita="Gioco.php?nome_gioco=".$_GET['nome_gioco'];
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
    </div>

    

    <div class="loginBox">
        <h1>REGALA</h1>
        <form action="" method="post">
            <table class="LoginTable" >
                <tr>
                    <td><label for="Regala">Regala a</label></td>
                    <td><input type="text" required name="Regala" id="Regala" value="<?php echo $Regala?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="SubmitButtonIcone" type="submit"></td>
                </tr>
            </table>
        </form>
        <?php             
            if(isset($_POST["Regala"]))  
            {
                $Regala=$_POST["Regala"];
                $RegalaQuery = "SELECT Username FROM giocatore WHERE Username='$Regala'";
                $ris = $Connessione->query($RegalaQuery) or die("ERRORE NELLA QUERY". $Connessione->error);

                if($ris ->num_rows == 0) {
                    echo "<p> Nome utente errato </p>";
                    header("Refresh: $random;");
                    $loading = true;
                }
                elseif($Regala==$Username){
                    echo "<p> Non puoi regalare a te stesso!</p>";
                    header("Refresh: $random;");
                    $loading = true;
                }
                else {
                    $Regala = $_POST["Regala"];
                    $LinkUscita=$LinkUscita."&Regala=$Regala";
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
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <?php
        $conn=mysqli_connect("localhost","root","","wedkowanie");
        $sql="SELECT nazwa,wystepowanie from ryby where styl_zycia=1";
        $query=mysqli_query($conn,$sql);
        while($result=mysqli_fetch_assoc($query)){
            $nazwa=$result['nazwa'];
            $wystepowanie=$result['wystepowanie'];
            echo "<li>$nazwa, występowanie: $wystepowanie </li>";

        }
        mysqli_close($conn);
        ?>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Joszczyk Hubert</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <div class="container">
        <section id="lewy">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
                <li>
                    <a href="znajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </section>
        <section id="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post">
            Podaj nazwę miasta:
            <input type="text" name="miasto" >
            <button type="submit">SPRAWDŹ</button>
        </form>
        <?php
            $conn = new mysqli("localhost", "root", "", "kwiaciarnia");

            $miasto = $_POST['miasto'];

            $sql = "SELECT nazwa, ulica FROM `kwiaciarnie` WHERE miasto = '$miasto';";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();

            echo "<h3>" . $row['nazwa'] . ", " . $row['ulica'] . "</h3>";

            $conn->close();
        ?>
        </section>
    </div>
    <footer>
        <p>Stronę opracował: 00000000000</p>
    </footer>
</body>

</html>

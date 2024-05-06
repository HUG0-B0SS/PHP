<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <h1>Iseseisev</h1>
            <?php
                /*
                    Iseseisev
                    Hugo-Hendrik Vainlu
                    24.04.2024
                */
                // lihtne tekst
                echo 'Juhan liiv, "ääremärkused"';
                echo '<br><br>';
                // intress
                $pangas_raha = 2000;
                for ($i = 0; $i < 5; $i++){
                    $pangas_raha = $pangas_raha * 1.2;
                }
                echo $pangas_raha." Lõpp summa viie aasta pärast";
                echo "<br><br>";
                //loend
                $arv = 10;
                while ($arv > 0){
                    echo $arv."<br>";
                    $arv--;
                }
                echo "<br>";

                // naljakad laused
                $alus = array("mõis", "buss", "mario");
                $oeldis = array("on", "ei ole", "võibolla");
                $sihitis = array("armas", "suur", "ilus");
                echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];

            ?>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

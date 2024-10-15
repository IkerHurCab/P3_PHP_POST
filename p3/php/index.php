<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendador de canciones</title>
    <link rel="stylesheet" href="../style/styles.css">
    <script src="../scripts/script.js" defer></script>

    
</head>
<body>

    <div class="flex" style="justify-content: center; padding: 25px">
        <h1 style="text-align: center;">¡Introduce tu estado de ánimo y te recomendaremos una canción!</h1>
    </div>

    <div class="flex divForm">
        <form action="index.php" method="post" id="formulario_emociones">
            <label for="estado_emocional">Selecciona tu estado emocional:</label>
            <select id="estado_emocional" name="estado_emocional" required>
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="Feliz">Feliz</option>
                <option value="Triste">Triste</option>
                <option value="Energético">Energético</option>
                <option value="Relajado">Relajado</option>
                <option value="Inspirado">Inspirado</option>
                <option value="Estresado">Estresado</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estado = $_POST['estado_emocional'];

    $recomendaciones = [
        "Feliz" => ["<img src = '../media/loveyou.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "Ezra Furman - Love You So Bad<br><br>", 
        "<audio controls>
            <source src='../audio/loveyou.mp3' type='audio/mpeg'>
         </audio>"
        ],

        "Triste" => ["<img src = '../media/pan.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "Silvia Pérez Cruz - No Hay Tanto Pan<br><br>",
        "<audio controls>
            <source src='../audio/pan.mp3' type='audio/mpeg'>
        </audio>"],

        "Energético" => ["<img src = '../media/acdc.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "AC/DC - Thunderstruck<br><br>",
        "<audio controls>
            <source src='../audio/acdc.mp3' type='audio/mpeg'>
        </audio>"
        ],

        "Relajado" => ["<img src = '../media/ludovico.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "Ludovico Einaudi - Nuvole Bianche<br><br>",
        "<audio controls>
            <source src='../audio/ludo.mp3' type='audio/mpeg'>
        </audio>"
        ],

        "Inspirado" => ["<img src = '../media/art.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "Alt-J - Breezeblocks<br><br>",
        "<audio controls>
            <source src='../audio/bre.mp3' type='audio/mpeg'>
        </audio>"
        ],

        "Estresado" => ["<img src = '../media/col.jpg' style = 'height: 400px; width: 300px; border: 1px solid black;'><br><br>", "John Coltrane - Giant Steps<br><br>",
        "<audio controls>
            <source src='../audio/gia.mp3' type='audio/mpeg'>
        </audio>"
        ]
    ];

        echo "<br><div class = 'flex flexPhp'><h2>Tu estado de ánimo es: $estado</h2><br>";
        echo "<h3>Canción recomendada:</h3><br>";
        echo "<ul>";
        foreach ($recomendaciones[$estado] as $cancion) {
            echo "<li>$cancion</li>";
        }
        echo "</ul></div>";

}

?>
</body>
</html>




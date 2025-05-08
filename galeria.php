<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Galeria</title>
    <meta name="description" content="Galeria mojej strony." />
    <meta name="keywords" content="kosmos, fantastyka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Adrian Leśniak" />

    <style>
        /* Stylizacja pominięta dla czytelności */

        /* ... */

        .image-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }

        .image-container img:hover,
        .image-container img:focus {
            transform: scale(1.2);
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <h1>Galeria</h1>

    <header>

        <nav>
            <ul>
                <li><a href="index.html">Powrót do strony głównej</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        <div class="image-container">
            <?php
            $imageDirectory = 'img'; // Ścieżka do folderu z obrazkami
            $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif'); // Dozwolone rozszerzenia plików

            // Pobieranie listy plików z folderu
            $files = scandir($imageDirectory);

            foreach ($files as $file) {
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                // Sprawdzanie, czy plik ma dozwolone rozszerzenie
                if (in_array($extension, $allowedExtensions)) {
                    $imagePath = $imageDirectory . '/' . $file;
                    $altText = pathinfo($file, PATHINFO_FILENAME);

                    echo '<a href="' . $imagePath . '" target="_blank">';
                    echo '<img src="' . $imagePath . '" alt="' . $altText . '" class="image"/>';
                    echo '</a>';
                }
            }
            ?>
        </div>
    </div>

    <footer><br /><br />AL 2023</footer>

</body>

</html>

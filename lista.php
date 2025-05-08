<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Lista użytkowników</title>
    <meta name="description" content="Strona próbna z galerią i listą użytkowników.">
    <meta name="keywords" content="www, użytkownicy, fani">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Adrian Leśniak">

    <style>
        @media only screen and (max-width: 600px) {
            table {
                width: 100%;
            }

            th,
            td {
                display: block;
                width: 100%;
            }

            th {
                text-align: left;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #e6e6e6;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Lista użytkowników</h1>

    <header>
        <nav>
            <ul>
                <li><a href="index.html">Powrót do strony głównej</a></li>
            </ul>
        </nav>
    </header>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imię i Nazwisko</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $lines = file('Lista.txt'); // Odczytaj plik Lista.txt do tablicy

                foreach ($lines as $index => $line) {
                    $id = $index + 1; // Numer porządkowy jest równy indeksowi tablicy + 1
                    $name = trim($line); // Imię i Nazwisko znajduje się w linii

                    echo "<tr>
                            <td>$id</td>
                            <td>$name</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

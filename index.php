<!DOCTYPE html>

<html lang="nl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Ballenspel</title>

</head>

<body>



    <?php


        $numberOfBalls = random_int(1, 10); // Aantal te gebruiken ballen in het spel

        $sizeHole = random_int(20, 40);  // willekeurig gekozen minimum & maximum grootte gat

        $maxSizeBalls = random_int(1, 2*$sizeHole); // Maximum grootte van de ballen

        $arrayBalls = array(); // Deze array gaat de groottes van de ballen bevatten

        $numberFittingBalls = 0; //Aantal ballen dat door het gat past

        $maxNumberOfGuesses = 3; // Aantal keer dat er geraden mag worden



        for($i = 1; $i <= $numberOfBalls; $i++)

        {

            $arrayBalls[$i] = random_int(1, $maxSizeBalls);

        }

        $arrayBalls[0] = $sizeHole + 10; // voorkomen dat lege array-element problemen geeft



        foreach ($arrayBalls as $sizeOfBall)

        {

            if ($sizeOfBall < $sizeHole)

            {

                $numberFittingBalls ++;  // Tel 1 bij het aantal passende ballen op

            }

        }



        // aankondiging op het scherm van het spel

        echo "<p>Welkom bij ons spelletje</p>";

        echo "<p>In het spel zijn $numberOfBalls ballen aanwezig.<br>";

        echo "Het gat is $sizeHole groot.<br>";

        echo "Hoeveel ballen passen er doorheen?</p>";



        for ($i = 1; $i <= $maxNumberOfGuesses; $i++)

        {

            $userAnswer = random_int(0, $numberOfBalls);

            if ($userAnswer <> $numberFittingBalls)

            {

                echo "<p>Jouw antwoord was $userAnswer.<br>";

                echo "HELAAS, je hebt FOUT geraden!!<br>";

                echo "Het waren $numberFittingBalls passende ballen.</p>";

            } else 

            {

                echo "<p>Jouw antwoord was $userAnswer.<br>";

                echo "GEFELICITEERD, je hebt GOED geraden!!</p>";

                $i = $maxNumberOfGuesses + 1; //Beëindigen van loop

            }

        }



    ?>

    

</body>

</html>
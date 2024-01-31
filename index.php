<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    // A while loop showing even numbers only

        $evenLoop = 20;
        while ($evenLoop <= 100) {
            if ($evenLoop % 2 == 0) {
                echo $evenLoop. ", ";
            }
            $evenLoop+= 10;
        }

    echo "<br/ >";

    // A while loop showing odd numbers only
        $oddLoop = 20;
        while ($oddLoop <= 100) {
            if ($oddLoop % 2 !== 0) {
                echo $oddLoop.", ";
            }
            $oddLoop+= 3;
        }

        echo "<br/ >";
        
        // simple while loop

        $i = 1;
        while ($i <= 15) {
          echo  $i++;
        }

        echo "<br />";
        

        // for loops
            for ($i = 0; $i <= 15; $i++) {
                echo $i;
            }

            echo "<br />";

        // for loops iterating over strings

        $greet = 'Hello World';
        
        for ($i = 0; $i < strlen($greet); $i++) {
            echo $greet[$i] .'';
        }

        echo "<br />";


        // for loops iterating over arrays

        $greet = ['a', 'b', 'c', 'd'];
        $length = count($greet);
        for ($i = 0; $i < $length; $i++) {
            echo $greet[$i]. '<br>';
        };

        echo "<br />";


        // foreach loops
        $progLang = ['PHP', 'JavaScript', 'Python', 'Java', 'C++'];
        foreach($progLang as $langNum => $lang) {
            echo $langNum. " ".$lang. "<br />";
        }

        echo "<br>";

        $schoolNames = ['sambol', 'mandate', 'Adeola', 'ladem'];
        foreach($schoolNames as $schNum => $names) {
            echo $schNum. " ". $names. "<br />";
        }

        echo "<br />";

        // simple arrays with more details

        $animals = ['dog', 'fish', 'cow', 'goat', 'sheep'];
        var_dump($animals[3] = [
            'creator' => 'God',
            'color' =>  'Black',
            'strength' => 'horns',
            'ability' => 'very strong',
            'weight' => '450kg',
        ]);

        echo '<pre>';
            print_r($animals);
            
            
        echo '</pre>';

        echo '<br />';

        

        // SWITCH STATEMENT

        $paymentStatus = 'Payment delayed';
        switch ($paymentStatus) {
            case 'paid':
                echo 'paid';
                break;

            case 'Payment Declined':
            case 'Payment Rejected':
                echo 'failed';
                break;
            
            case 'Payment Processing':
                echo 'please wait, your transaction is processing';
                break;

            default;
            echo 'unknown payment status';
            
        }

        echo '<br />';


        //  MATCH STATEMENT

    //    How to include files in PHP

    $x = 5;

        require 'file.php';
        
        echo 'Hello world';
        echo '<br />';

        echo $x. "<br />";
    ?>
</body>
</html>
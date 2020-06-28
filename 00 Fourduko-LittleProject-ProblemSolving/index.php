<!DOCTYPE HTML>
<html>
<head>
    <title>Problem Solving PHP</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="sudoku">
    <div class="inline">
        <h3>FOURDOKU</h3>
        <?php
        require('./fourdoku.php');
        $fourdoku = new fourdoku();

        if (!empty($_POST)) {
            echo "<form>";
            $fourdoku->checkSolution();
            echo "<br>";
            echo '<input type="submit" value="Reset">';
            echo '</form>';



        } else {
            echo "<form method=\"post\">";
            $fourdoku = new fourdoku();
            $fourdoku->generate();
            $fourdoku->print();
            echo "<br>";
            echo "<input type=\"submit\">";
            echo "</form>";
        }
        ?>
    </div>
</div>
</body>
</html>
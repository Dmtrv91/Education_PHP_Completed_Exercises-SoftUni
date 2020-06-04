<?php

$n = readline();

            for ($row = 1; $row <= $n; $row++) {
                for ($j = 0; $j < $row; $j++) {
                    echo "$row";
                }
                echo PHP_EOL;
            }
?>
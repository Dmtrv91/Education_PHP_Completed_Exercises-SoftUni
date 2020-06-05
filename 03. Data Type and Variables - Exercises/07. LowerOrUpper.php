<?php

$char = readline();

if(ctype_upper($char)){
    echo "upper-case";
}else if(ctype_lower($char)){
    echo "lower-case";
} else {
    echo "not consistent chars";
}


?>

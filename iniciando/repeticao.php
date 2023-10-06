<?php

$numero = 1;

/*while ($numero <= 15) {
    echo "$numero".PHP_EOL;
    $numero += 1;
}
echo PHP_EOL;*/

for ($numero = 1; $numero <= 20; $numero++){
    if ($numero == 13){
        continue;
    }
    echo "$numero".PHP_EOL;
}


echo "Adeus!";


<?php

if (isset($_POST['expr']))
{
    $res = preg_match($_POST['expr'], $_POST['string'], $matches);
    if ($res === false)
    {
        echo "ОШИБКА\n";
    }
    else {
        echo "Найдено совпадений: $res\n";
    }
    echo "------\n";
    print_r($matches);
    exit;
}

die('no command');

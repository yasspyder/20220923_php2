<?php

do {
    $question = readline("В каком году произошло крещение Руси: 810, 990 или 740? Ваш вариант: ");
    if ($question == "990") {
        echo "Поздравляю, Вы ввели правильный ответ!";
        break;
    } elseif ($question == "810" || $question == "740") {
        echo "Ответ не верен!";
        break;
    }
} while (true);

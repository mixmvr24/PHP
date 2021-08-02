<?php

// 1.  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.

function calendar($a){
    $day = [
        '1' => 'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье'
    ];
    return $day[$a];
}
echo calendar(2);

//2. Создайте функцию, которая обрезает строку до нужного размера. Необходимо учесть, что слово в конце строки не должно быть обрезано.

$stri = "I don't remember anything";
function cutStr($str, $length=20, $postfix='...')
{
    if ( strlen($str) <= $length)
        return $str;

    $temp = substr($str, 0, $length);
    return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
}

echo cutStr($stri);

// 3.  Написать функцию, которая будет менять порядок слов в строке на обратный.

function ret($str){
    $str = strrev($str);
    return $str;
}

echo ret('My name Igor');

//4. Написать функцию, которая вычисляет среднее арифметическое элементов массива,
//переданного ей в качестве аргумента.  Не использовать array_sum и т.д. Простым перебором через цикл.

$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

function summ($arg){
    $sum = 0;
    for($i=0;$i<count($arg);$i++) {
        $sum += $arg[$i];
    }
    return ($sum/count($arg));
}
echo (summ($arr));

//5.  Написать функцию, которая генерирует массив случайных значений. Количество элементов массива передается в качестве аргумента

function random($N){
    $arr = [];
    for($i=0; $i<$N; $i++) {
        $arr[$i] = rand(0,$N);
    }
    return($arr);
}
print_r(random(20));




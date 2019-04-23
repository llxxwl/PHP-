<?php
/**
 * 参数传递的方式有按值传递、按引用传递和默认参数
 */

    //按值传递方式
    function test1($str1,$str2,$str3){
        echo $str1."\n";
        echo $str2."\n";
        echo $str3."\n";
    }
    test1(1,2,3);

    //按引用传递方式：将参数的内存地址传递到函数中。这时，在函数内部的所有操作都会影响到调用者参数的值
    function test(&$str1,$str2,$str3){
        echo $str1."\n";
        $str1++;
        echo $str2."\n";
        echo $str3."\n";
    }
    $n1 = 1;
    $n2 = 2;
    $n3 = 3;
    test($n1,$n2,$n3);
    echo $n1."\n";
    echo $n2."\n";
    echo $n3."\n";
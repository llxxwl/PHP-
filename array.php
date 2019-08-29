<?php
    $arr = array("apple","banana","pear","orange","grape");
    foreach($arr as $key){
        echo $key."\n";     //遍历数组
    }
    echo count($arr)."\n";  //统计数组内元素个数
    echo array_pop($arr)."\n";   //获取数组中最后一个元素
    array_push($arr,"grape");    //向数组中添加元素
    print_r($arr);
    array_unique($arr);      //删除数组中重复的元素
    print_r($arr);
    //对数组排序用sort函数，计算数组中所有值的和用array_num函数
    


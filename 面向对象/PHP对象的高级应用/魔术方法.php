<?php
/**
 * 魔术方法是指在创建类时PHP自动包含的一些方法，一__开头
 * __set()方法：当程序试图写入一个未定义或不可见的成员变量时，PHP就会执行此方法。此方法包含两个参数，分别表示变量名称和变量值，两个参数不可省略
 * __get()方法：当程序调用一个未定义或不可见的成员变量时，PHP就会执行此方法。此方法有一个参数，表示要调用的变量名。
 * __call()方法：当程序试图调用一个不存在或不可见的成员变量时，PHP会优先调用此方法来存储方法名及其参数
 * __toString()方法：当使用echo或print输出对象时，将对象转化为字符串。
 */

//set和get方法
class student {
    private $a;
    private $b = 0;
    public $c;
    public $d = 0;
    public function __get($name){
        return 123;
    }
    public function __set($name,$value){
        echo 'this is set function';
    }
}
$s = new student();
var_dump($s->a);//输出123
var_dump($s->b);//输出123
var_dump($s->c);//输出null
var_dump($s->d);//输出0
var_dump($s->e);//输出123
$s->a = 3;//输出this is set function
$s->c = 3;//没有输出
$s->f = 3;//输出this is set function

//call方法
class sportObject{
    public function myDream(){
        echo '调用的方法存在，可直接调用';
    }
    public function __call($name, $arguments)
    {
        echo '方法不存在，则执行call方法.';
        echo '方法名为：'.$name."\n";
        echo '参数有：';
        print_r($arguments);
    }
}
$exam = new sportObject();
$exam->myDream();
$exam->mDream('how','what','why');

//toString方法
class toStr{
    private $type = 'DIY';
    public function __toString()
    {
        return $this->type;
    }
}
$mc = new toStr();
echo '$mc的值为：';
echo $mc;
<?php
/**
 * 抽象类是一种不能被实例化的类，只能作为其他类的父类来使用，用关键字abstract来声明
 * 抽象类至少要包含一个抽象方法，抽象方法没有方法体，其功能的实现只能在子类中完成。
 * 在抽象方法后要有分号";"
 */
abstract class commodityObject{ //定义抽象类
    abstract function service($getname,$price,$num); //定义抽象方法
}
class myBook extends commodityObject{  //继承抽象类
    function service($getname, $price, $num)  //定义方法，但不是抽象方法
    {
        echo '您购买的商品为'.$getname.',该商品的价格为：'.$price.'元。';
        echo '您购买的数量为'.$num.'本';
    }
}
$book = new myBook();
$book->service('hahh',85,6);
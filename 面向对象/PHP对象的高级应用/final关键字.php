<?php
/**
 * 如果有一个类被final声明，说明该类不可以被继承，也不能有子类
 * 如果有一个方法被final关键字声明，说明该方法在子类中不可以被重写，也不可以被覆盖
 */
final class sportObject{  //final类
    function __construct()
    {
        echo 'initialize object';
    }
}
//创建sportObject的子类,如果用的是专门编写PHP的编译器，不需要运行，就会提示错误
//如果需要运行，可以将此类取消注释
/*class myBook extends sportObject
{
    public static function exam()
    {
        echo '看不见我';
    }
}
myBook::exam();   //调用子类方法
*/
/*运行后，可以看到程序的报错“Fatal error: Class myBook may not inherit from final class (sportObject) in F:\wamp64\www\PHP基础\面向对象\PHP对象的高级应用\final关键字.php on line 16
”，说明用final关键字声明的类不可以被继承。*/
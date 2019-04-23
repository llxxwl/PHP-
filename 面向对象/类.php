<?php
//类是属性和方法的集合，这是面向对象编程方式的核心和基础
//对象是类进行实例化后的产物，是一个实体
//面向对象编程的三大特点：封装、继承、多态。
/**
 * 运动类（父类）
 */
class sportObject{
    //定义成员变量
    public $name;  
    public $age;
    public $weight;
    public $sex;
    //定义构造方法
    public function __construct($name,$age,$weight,$sex)// 初始化对象，生成对象时自动执行
    {
        //为成员变量赋值
        $this->name = $name;    //$this->的作用是调用本类中的成员变量或成员方法
        $this->age = $age;
        $this->weight = $weight;
        $this->sex = $sex;
    }
    //在父类中定义方法
    function showMe(){
        echo " 这句话不会显示";
    }
}    
/**
 * 篮球类  （子类）
 */
class playBasketball extends sportObject{   //用extends关键词定义子类，继承父类
    public $height;
    function __construct($name,$height){
        $this->name = $name;
        $this->height = $height;
    }
    //定义方法
    function showMe(){
        if($this->height > 185){
            return $this->name."符合打篮球的要求";
        }else{
            return $this->name."不符合打篮球的要求";
        }
    }
}
/**
 * 举重类（子类）
 */
class weightLifting extends sportObject{   //继承父类
    function showMe()
    {
        if($this->weight < 85){
            return $this->name."符合举重的要求";
        }else{
            return $this->name."不符合举重的要求";
        }
        /**
         * 析构函数，PHP使用的垃圾回收机制，自动清除不再使用的对象，释放内存，一般不需要手动创建析构方法
         */
        function __destruct(){
            echo "对象被销毁，调用析构函数";
        }
    }
}
//实例化对象
$playbasketball = new playBasketball("lxw","190");
$weightlifting = new weightLifting("lpower","185","80","20","男");
echo $playbasketball->showMe()."\n";
echo $weightlifting->showMe()."\n";

/**
 * 操作符"::"的使用
 * 可以在没有声明任何实例的情况下访问类中的成员方法或成员变量
 */
class Book{
    const NAME = 'computer';
    function __construct(){
        echo Book::NAME."\n";
    }
}
class bookRank extends Book{
    const NAME = 'foreign book';
    function __construct(){
        parent::__construct();
        echo self::NAME."\n";
    }
}
$obj = new bookRank();
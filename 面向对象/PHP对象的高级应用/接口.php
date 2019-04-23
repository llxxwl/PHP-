<?php
/**
 * PHP只支持单继承，如果想实现多重继承，就要使用接口类
 * 接口类通过interface关键字来声明，并且类中只能包含未实现的方法和一些成员变量
 * 子类通过implements关键字实现接口，如果要实现多个接口，每个接口之间要用','连接
 * 所有未实现的方法需要在子类中全部实现，否则将会报错
 */

 //声明接口MPopedom
 interface MPopedom{
     function popedom();
 }
 //声明接口MPurview
 interface MPurview{
     function purview();
 }
 //创建子类，实现一个接口
 class member implements MPurview{
     function purview(){
         echo '我最帅';
     }
 }
 //创建子类，实现多个接口
 class manager implements MPopedom,MPurview{
     function popedom(){
         echo '我不管，我最帅';
     }
     function purview(){
         echo '不好意思，还是我最帅';
     }
 }
 $member = new member();
 $manager = new manager();
 $member->purview();
 echo "\n";
 $manager->purview();
 echo "\n";
 $manager->popedom();
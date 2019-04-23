<?php
/**
 * trim()函数：去除字符串首尾处的空白字符
 * 获取字符串长度：strlen()获取指定字符串的长度    mb_strlen()可以处理中文字符，多字节的字符被记为1.
 * 截取字符串：substr()截取英文字符    mb_substr()截取中文或中英文混合字符
 * 检索字符串：strstr()检索一个指定字符串在另一个字符串中首次出现的位置到后者末尾的子字符串  strpos()函数检索字符串首次出现的位置，返回首次出现的数字位置
 * 替换字符串：str_replace()函数可以使用心得子字符串，替换原始字符串中被指定要替换的字符串。 substr_replace()可对指定字符串中的部分字符串进行替换。
 * 分割、合成字符串：explode()按指定规则对一个字符串进行分割，返回值为数组   implode()将数组内容合并成一个新字符串
 */
    //trim()函数
    $keyword = '  php   ';
    echo $keyword."\n";
    $keyword = trim($keyword);
    echo $keyword."\n";

    // 检查字符串长度
    function checkUsername($username){
        $len = mb_strlen($username,'UTF-8');//使用mb_strlrn函数获取字符串长度
        echo $len; 
        if($len<3 || $len>18){
            $message = "input error"."\n";
        }
        else{
            $message = "input right"."\n";
        }
        return $message;   
    }
    $username1 = '哈哈哈';
    $res = checkUsername($username1);
    $username2 = '哈哈';
    $res1 = checkUsername($username2);
    echo $res."\n";
    echo $res1."\n";

    //截取字符串
    $str = "she is a beautiful girl";
    echo substr($str,0)."\n";  //从第一个字符开始截取
    echo substr($str,4,14)."\n";  //从第5个字符开始连续截取14个字符
    echo substr($str,-4,4)."\n";   //从倒数第四个字符开始连续截取4个字符
    echo substr($str,0,-4)."\n";     //从第一个字符开始截取，到倒数第四个字符为止

    //检索字符串
    $email = '123456789@163.com';
    $domain = strstr($email,'@');
    echo $domain."\n";
    $user = strstr($email,'@',true);
    echo $user."\n";

    //替换字符串
    $username = 'hhh';
    $username_phone = '12345678945';
    $replace = '****';//替换的字符串
    echo $username."的手机号为".substr_replace($username_phone,$replace,3,4)."\n";//用****替换从第四个数字开始，连续替换四个字符
    
    // 分割字符串
    
    $str = "@lxl @lxw @lpower";
    $arr = explode(' ',$str);
    echo "您@的好友有:";
    for($i=0;$i<3;$i++){
        echo trim($arr[$i],'@')."\n";
    }

    // 合成字符串
    $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(" ",$arr)."\n";
    echo implode("+",$arr)."\n";
    echo implode("-",$arr)."\n"; 
    echo implode("X",$arr)."\n";
    /**
     * 匹配正则表达式
     *
     * @param [type] $mobile
     * @return void
     */
    function checkMobile($mobile){
        if(preg_match('/1[35789]\d{9}$/',$mobile)){  //匹配以1开头，3、5、7、8、9任意一位为第二位，后九位匹配九次任意数字来判断手机号格式
            echo "格式正确";
        }else{
            echo "格式错误";
        }
    }
    $mobile = '13546487874';
    checkMobile($mobile);
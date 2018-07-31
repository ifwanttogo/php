<?php
/**
 * Created by PhpStorm.
 * User: xiaohan
 * Date: 2018-07-30
 * Time: 10:01
 */

//用array()创建数组
//索引数组
$arr = array('a','b','c');
$arr[0] = 'a'; $arr[1] = 'b'; $arr[2] = 'c';
//关联数组
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr['a'] = 'age'; $arr['b'] = 'boy'; $arr['c'] = 'class';
//list()提取数组  list() 函数用于在一次操作中给一组变量赋值。
$arr = array('a','b','c');
list($a,$b,$c) = $arr;
echo $a,$b,$c; //return a,b,c
echo '<br/>';
//range() 函数创建一个包含指定范围的元素的数组，包含从 low 到 high （包含 low 和 high）之间的整数或字符。如果 high 比 low 小，则返回反序的数组。
$arr = range(1,5);
print_r($arr) ;//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
$arr = array(1,2,3,4,5);
echo '<br/>';
//range(）奇偶数 数组
$arr =  range(0,10,2);
print_r($arr);//Array ( [0] => 0 [1] => 2 [2] => 4 [3] => 6 [4] => 8 [5] => 10 )
echo '<br/>';
$arr =  range(1,10,2);
print_r($arr);//Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 )
echo '<br/>';
//判断是否是数组is_array() boolean类型
$arr = array('1','2');
$res = is_array($arr);
var_dump($res);//boolean true
echo '<br/>';
$a = 1;
$res = is_array($a);
var_dump($res);//boolean false
echo '<br/>';
//在数组头添加元素array_unshift() 返回int类型
$arr =  array('a','b','c');
$new_arr = array_unshift($arr,'d','e','f');
var_dump($new_arr); // return int 6
var_dump($arr);
/*array (size=6)
0 => string 'd' (length=1)
  1 => string 'e' (length=1)
  2 => string 'f' (length=1)
  3 => string 'a' (length=1)
  4 => string 'b' (length=1)
  5 => string 'c' (length=1)*/
echo '<br/>';
//在数组尾添加元素array_push()
$arr =  array('a','b','c');
$new_arr = array_push($arr,'d','e','f');
var_dump($new_arr);// return int 6
var_dump($arr);
/*array (size=6)
  0 => string 'a' (length=1)
  1 => string 'b' (length=1)
  2 => string 'c' (length=1)
  3 => string 'd' (length=1)
  4 => string 'e' (length=1)
  5 => string 'f' (length=1)*/
echo '<br/>';
//从数组头部删除元素array_shift()
$arr =  array('a','b','c');
$new_arr = array_shift($arr);
var_dump($new_arr);// return string 'a' (length=1)
var_dump($arr);
/*array (size=2)
  0 => string 'b' (length=1)
  1 => string 'c' (length=1)*/
echo '<br/>';
//从数组尾删除元素array_pop()
$arr =  array('a','b','c');
$new_arr = array_pop($arr);
var_dump($new_arr);// return string 'c' (length=1)
var_dump($arr);
/*array (size=2)
  0 => string 'a' (length=1)
  1 => string 'b' (length=1)*/
echo '<br/>';
//判断元素在数组中是否存在，搜索功能in_array() boolean  true or  false
$a = 'a';
$arr = array('a','b','c');
$res = in_array($a,$arr);
var_dump($res);//boolean true
echo '<br/>';
//搜索关联数组键名key array_key_exists()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$res = array_key_exists('a',$arr);
var_dump($res); //boolean true
echo '<br/>';
//搜索关联数组键值value array_search() 返回键名
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$res = array_search('age',$arr);
var_dump($res);//string 'a' (length=1)
echo '<br/>';
//获取数组所有键名 array_keys()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr_keys = array_keys($arr);
var_dump($arr_keys);
/*array (size=3)
  0 => string 'a' (length=1)
  1 => string 'b' (length=1)
  2 => string 'c' (length=1)*/
//获取关联数组当前键名 key()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
while ($keys = key($arr))
{
    echo $keys.'<br/>';
    next($arr);//next()推动指针移动
}
/*a
b
c*/
echo '<br/>';
var_dump($arr);
$keys = key($arr);
var_dump($keys); //null 由于next()当前指针所在位置没有值
//获取数组所有的键值 array_values()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr_values = array_values($arr);
var_dump($arr_values);
/*array (size=3)
  0 => string 'age' (length=3)
  1 => string 'boy' (length=3)
  2 => string 'class' (length=5)*/

//获取数组当前指针所在位置的键值 current()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$current =  current($arr);
var_dump($current);
next($arr);
$current =  current($arr);
var_dump($current);
//获取当前数组指针键和值each() 执行一次指针自动推进一位
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$res = each($arr);
var_dump($res);
/*array (size=4)
  1 => string 'age' (length=3)
  'value' => string 'age' (length=3)
  0 => string 'a' (length=1)
  'key' => string 'a' (length=1)*/

$people = array("Bill", "Steve", "Mark", "David");

reset($people);

while (list($key, $val) = each($people))
{
    echo "$key => $val<br>";
}
/*0 => Bill
1 => Steve
2 => Mark
3 => David*/

//移动数组指针到下一位 next()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr1 = next($arr);
var_dump($arr1); //string 'boy' (length=3)
$arr2 = next($arr);
var_dump($arr2); //string 'class' (length=5)
$arr3 = next($arr);
var_dump($arr3); //boolean false
//将指针移动到前一个数组的位置prev()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$ne_arr1 = next($arr);//string 'boy' (length=3)
$ne_arr2 = next($arr);//string 'class' (length=5)
$arr4 = prev($arr);
var_dump($arr4);//string 'boy' (length=3)
//将数组指针设置成开始的位置reset()
$re_arr = reset($arr);
var_dump($re_arr);//string 'age' (length=3)
//将数组指针移动到最后的位置 end()
$end_arr = end($arr);
var_dump($end_arr);//string 'class' (length=5)

//向函数传递数组值array_walk()
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');

/*Before ...: d. lemon
a. orange
b. banana
c. apple
... and after: d. fruit: lemon
a. fruit: orange
b. fruit: banana
c. fruit: apple*/

function myfunc1tion($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunc1tion");
/*The key a has the value red
The key b has the value green
The key c has the value blue*/

$arr = array(
    'num' => array('111','222'),
    'ip' => array('ip1','ip2')
);
$result = array();

foreach($arr as $key => $value) {
    $i = 0;
    foreach($value as $data) {
        $result[$i][$key] = $data;
        ++$i;
    }
}
$result=json_encode($result);

print_r($result);
echo "<br>";
//[{"num":"111","ip":"ip1"},{"num":"222","ip":"ip2"}]


function myfunction($value,$key)
{
// echo "The key $key has the value $value<br>";
    var_dump($value);
}


$a=array(
    '0'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue"),
    '1'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew"),
    '3'=>array("id"=>"2","a"=>"red","b"=>"green","c"=>"blue"),
    '4'=>array("id"=>"3","a"=>"back","b"=>"go","c"=>"yew"),
    '5'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue"),
    '6'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew")
);
array_walk($a,"myfunction");
echo "<br>";

/*D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '1' (length=1)
  'a' => string 'red' (length=3)
  'b' => string 'green' (length=5)
  'c' => string 'blue' (length=4)
D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '1' (length=1)
  'a' => string 'back' (length=4)
  'b' => string 'go' (length=2)
  'c' => string 'yew' (length=3)
D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '2' (length=1)
  'a' => string 'red' (length=3)
  'b' => string 'green' (length=5)
  'c' => string 'blue' (length=4)
D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '3' (length=1)
  'a' => string 'back' (length=4)
  'b' => string 'go' (length=2)
  'c' => string 'yew' (length=3)
D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '1' (length=1)
  'a' => string 'red' (length=3)
  'b' => string 'green' (length=5)
  'c' => string 'blue' (length=4)
D:\phpStudy\PHPTutorial\WWW\php\manual\array.php:247:
array (size=4)
  'id' => string '1' (length=1)
  'a' => string 'back' (length=4)
  'b' => string 'go' (length=2)
  'c' => string 'yew' (length=3)*/

$a=array(
    '0'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue"),
    '1'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew"),
    '3'=>array("id"=>"2","a"=>"red","b"=>"green","c"=>"blue"),
    '4'=>array("id"=>"3","a"=>"back","b"=>"go","c"=>"yew"),
    '5'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue"),
    '6'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew")
);

$b=array(
    '0'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue","d"=>"want"),
    '1'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew","d"=>"want"),
    '3'=>array("id"=>"2","a"=>"red","b"=>"green","c"=>"blue","d"=>"want"),
    '4'=>array("id"=>"3","a"=>"back","b"=>"go","c"=>"yew","d"=>"want"),
    '5'=>array("id"=>"1","a"=>"red","b"=>"green","c"=>"blue","d"=>"want"),
    '6'=>array("id"=>"1","a"=>"back","b"=>"go","c"=>"yew","d"=>"want")
);
array_walk($a,function(&$value,$key) use($b){
    foreach ($b as $val) {
        if($value['id']==$val['id']){
            $value['new'][]=$val['d'];
        }
    }

});

print_r($a);
echo "<br>";
/*Array (
[0] => Array ( [id] => 1 [a] => red [b] => green [c] => blue [new] => Array ( [0] => want [1] => want [2] => want [3] => want ) )
[1] => Array ( [id] => 1 [a] => back [b] => go [c] => yew [new] => Array ( [0] => want [1] => want [2] => want [3] => want ) )
[3] => Array ( [id] => 2 [a] => red [b] => green [c] => blue [new] => Array ( [0] => want ) )
[4] => Array ( [id] => 3 [a] => back [b] => go [c] => yew [new] => Array ( [0] => want ) )
 [5] => Array ( [id] => 1 [a] => red [b] => green [c] => blue [new] => Array ( [0] => want [1] => want [2] => want [3] => want ) )
 [6] => Array ( [id] => 1 [a] => back [b] => go [c] => yew [new] => Array ( [0] => want [1] => want [2] => want [3] => want ) ) ) */


//确定数组的大小 count()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$num = count($arr);
var_dump($num);//3

//统计数组元素出现的频度array_count_values()
$arr = array('a'=>'age','b'=>'boy','c'=>'class','d'=>'class');
$res = array_count_values($arr);
var_dump($res);
/*array (size=3)
'age' => int 1
  'boy' => int 1
  'class' => int 2*/
//确定唯一的数组元素array_unique()
$arr = array('a'=>'age','b'=>'boy','c'=>'class','d'=>'class');
$arr = array_unique($arr);
var_dump($arr);
/*array (size=3)
  'a' => string 'age' (length=3)
  'b' => string 'boy' (length=3)
  'c' => string 'class' (length=5)*/

//数组排序逆置数组元素顺序array_reverse()
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr = array_reverse($arr);
var_dump($arr);
/*array (size=3)
  'c' => string 'class' (length=5)
  'b' => string 'boy' (length=3)
  'a' => string 'age' (length=3)*/
//数组键名键值互换
$arr = array('a'=>'age','b'=>'boy','c'=>'class');
$arr = array_flip($arr);
var_dump($arr);
/*array (size=3)
  'age' => string 'a' (length=1)
  'boy' => string 'b' (length=1)
  'class' => string 'c' (length=1)*/
//数组排序sort()由低到高 不保持键对值
$arr = array('a'=>'age','c'=>'class','b'=>'boy');
sort($arr);
print_r($arr);//Array ( [0] => age [1] => boy [2] => class )
echo "<br>";
$arr = array('1','3','80','23','65','12');
sort($arr);
print_r($arr);// Array ( [0] => 1 [1] => 3 [2] => 12 [3] => 23 [4] => 65 [5] => 80 )
echo "<br>";
//保持键值对对数组排序asort()由低到高
$arr = array('a'=>'age','c'=>'class','b'=>'boy');
asort($arr);
print_r($arr);//Array ( [a] => age [b] => boy [c] => class )
echo "<br>";
//逆序排序rsort()不保持键对值
$arr = array('a'=>'age','c'=>'class','b'=>'boy');
rsort($arr);
print_r($arr);//Array ( [0] => class [1] => boy [2] => age )
echo "<br>";
//逆序排序arsort()保持键对值
$arr = array('a'=>'age','c'=>'class','b'=>'boy');
arsort($arr);
print_r($arr);//Array ( [c] => class [b] => boy [a] => age )
echo "<br>";
//数组自然排序natsort() 区分大小写
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
natsort($arr);
print_r($arr);//Array ( [a] => a1 [b] => a2 [e] => a3 [c] => a5 [d] => a9 )
echo "<br>";
$arr = array('a'=>'a1','c'=>'A5','b'=>'a2','d'=>'a9','e'=>'A3');
natsort($arr);
print_r($arr);//Array ( [e] => A3 [c] => A5 [a] => a1 [b] => a2 [d] => a9 )
echo '<br/>';
//不区分大小写自然排序natcasesort()
$arr = array('a'=>'a1','c'=>'A5','b'=>'a2','d'=>'a9','e'=>'A3');
natcasesort($arr);
print_r($arr);//Array ( [a] => a1 [b] => a2 [e] => A3 [c] => A5 [d] => a9 )
echo '<br/>';
//按键值进行数组排序ksort()升序
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
ksort($arr);
print_r($arr);//Array ( [a] => a1 [b] => a3 [c] => a5 [d] => a9 [e] => a2 )
echo "<br/>";
//按键值进行数组排序krsort()降序
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
krsort($arr);
print_r($arr);//Array ( [e] => a2 [d] => a9 [c] => a5 [b] => a3 [a] => a1 )
echo "<br/>";
//usort()用户自定义排序usort(数组,自定义排序方法)
$date = array('10-11-2010','1-12-2010','11-12-2016','11-12-2013','1-16-2011','11-12-2009','1-16-2011');
function datesortasc($a,$b)
{
    if($a == $b ) return;//日期相等什么也不做
    //反编汇日期
    list($amonth,$adays,$ayears) = explode('-',$a);
    list($bmonth,$bdays,$byears) = explode('-',$b);
    //如果没有前导0则给月份加0
    $amonth = str_pad($amonth,'2','0',STR_PAD_LEFT);
    $bmonth = str_pad($bmonth,'2','0',STR_PAD_LEFT);
    //如果没有前导0则给日份加0
    $adays = str_pad($adays,'2','0',STR_PAD_LEFT);
    $bdays = str_pad($bdays,'2','0',STR_PAD_LEFT);
    //重组日期
    $a = $ayears.$amonth.$adays;
    $b = $byears.$bmonth.$bdays;
    return ($a > $b) ? 1 : 0;


}

usort($date,'datesortasc');
print_r($date);
//Array ( [0] => 11-12-2009 [1] => 1-12-2010 [2] => 10-11-2010 [3] => 1-16-2011 [4] => 1-16-2011 [5] => 11-12-2013 [6] => 11-12-2016 )
echo '<br/>';
function datesortdesc($a,$b)
{
    if($a == $b ) return;//日期相等什么也不做
    //反编汇日期
    list($amonth,$adays,$ayears) = explode('-',$a);
    list($bmonth,$bdays,$byears) = explode('-',$b);
    //如果没有前导0则给月份加0
    $amonth = str_pad($amonth,'2','0',STR_PAD_LEFT);
    $bmonth = str_pad($bmonth,'2','0',STR_PAD_LEFT);
    //如果没有前导0则给日份加0
    $adays = str_pad($adays,'2','0',STR_PAD_LEFT);
    $bdays = str_pad($bdays,'2','0',STR_PAD_LEFT);
    //重组日期
    $a = $ayears.$amonth.$adays;
    $b = $byears.$bmonth.$bdays;
    return ($a < $b) ? 1 : 0;


}
usort($date,'datesortdesc');
print_r($date);
//Array ( [0] => 11-12-2016 [1] => 11-12-2013 [2] => 1-16-2011 [3] => 1-16-2011 [4] => 10-11-2010 [5] => 1-12-2010 [6] => 11-12-2009 )
echo '<br/>';
//数组合并 array_merge() 覆盖前一个数组中键名已存在的键值
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$arr2 = array('a'=>'age','c'=>'class','b'=>'boy');
$new_arr = array_merge($arr1,$arr2);
print_r($new_arr);
//Array ( [a] => age [c] => class [e] => a2 [b] => boy )
echo '<br/>';
//递归追加数组 array_merge_recursive()
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$arr2 = array('a'=>'age','c'=>'class','b'=>'boy');
$new_arr = array_merge_recursive($arr1,$arr2);
print_r($new_arr);
//Array ( [a] => Array ( [0] => a1 [1] => age ) [c] => Array ( [0] => a5 [1] => class ) [e] => a2 [b] => boy )
echo '<br/>';
//合并两个数组 array_combine() 数组必须元素个数相同
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$arr2 = array('a'=>'age','c'=>'class','b'=>'boy');
$new_arr = array_combine($arr1,$arr2);
print_r($new_arr);//Array ( [a1] => age [a5] => class [a2] => boy )
echo '<br/>';
//拆分数组array_slice()
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$new_arr = array_slice($arr,3);
print_r($arr);//Array ( [a] => a1 [c] => a5 [e] => a2 [d] => a9 [b] => a3 )
echo '<br/>';
print_r($new_arr);//Array ( [d] => a9 [b] => a3 )
echo '<br/>';
//接合数组array_splice()
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$new_arr = array_splice($arr,3);
print_r($new_arr);//Array ( [d] => a9 [b] => a3 )
echo '<br/>';
print_r($arr);//Array ( [a] => a1 [c] => a5 [e] => a2 )
echo '<br/>';
$arr = array('a'=>'a1','c'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$new_arr = array_splice($arr,3,-1,array('wo','rt'));
print_r($new_arr);//Array ( [d] => a9 )
echo '<br/>';
print_r($arr);//Array ( [a] => a1 [c] => a5 [e] => a2 [0] => wo [1] => rt [b] => a3 )
echo '<br/>';
//数组的交集array_intersect()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$res = array_intersect($arr,$arr1);
print_r($res);//Array ( [a] => a1 [c] => a5 [e] => a2 )
echo '<br/>';
//关联数组的交集array_intersect_assoc()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$res = array_intersect_assoc($arr,$arr1);
print_r($res);//Array ( [a] => a1 [e] => a2 )
echo '<br/>';
//求数组的差集array_diff()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$arr2 = array('b'=>'a3');
$res = array_diff($arr,$arr1,$arr2);
print_r($res);//Array ( [d] => a9 )
echo '<br/>';
//求关联数组的差集array_diff_assoc()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$arr1 = array('a'=>'a1','c'=>'a5','e'=>'a2');
$arr2 = array('b'=>'a3');
$res = array_diff_assoc($arr,$arr1,$arr2);
print_r($res);// Array ( [f] => a5 [d] => a9 )
echo '<br/>';
//获取数组中的随机键名array_rand()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$res = array_rand($arr,2);
print_r($res);//随机的键名 Array ( [0] => a [1] => b )
echo '<br/>';
//获取数组的随机洗牌的元素shuffle()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$res = shuffle($arr);
print_r($res);//1
echo '<br/>';
print_r($arr);//Array ( [0] => a9 [1] => a3 [2] => a1 [3] => a2 [4] => a5 )
echo '<br/>';
//数组求和array_sum()只求数值的和
$arr = array('a'=>'23','f'=>'a5','e'=>'32','d'=>'43','b'=>'a3');
$res =  array_sum($arr);
print_r($res);//98
echo '<br/>';
//分割数组array_chunk()
$arr = array('a'=>'a1','f'=>'a5','e'=>'a2','d'=>'a9','b'=>'a3');
$res = array_chunk($arr,2);
print_r($res);
//Array ( [0] => Array ( [0] => a1 [1] => a5 ) [1] => Array ( [0] => a2 [1] => a9 ) [2] => Array ( [0] => a3 ) )

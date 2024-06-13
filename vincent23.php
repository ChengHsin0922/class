<?php



sayYa();
sayYa();
sayHello('Vincent');
sayHello();   //如果定義function時有參數，呼叫時不輸入參數則會產生嚴重錯誤，除非有預設值
sayHelloV2('Amy', 2);
sayHelloV2('Mark');
sayHelloV2();
sayHelloV2('Peter');
//sayHelloV2( ,3)  語法錯誤
$v = sum(1, 2, 3, 4, 5, 6);
echo $v;

function sum()
{
    $args = func_get_args();
    $ret = 0;     
    foreach($args as $v) {
        $ret += $v;
    }
    return $ret;
}


function sayYa()
{
    echo 'Ya<br />';
}

function sayHello($name = 'World')
{   //World為預設值
    echo "Hello, {$name}<br />";
}

function sayHelloV2($name = 'World', $times = 1)
{
    for ($i = 0; $i < $times; $i++) {
        echo "HelloV2, {$name}<br />";
    }
}

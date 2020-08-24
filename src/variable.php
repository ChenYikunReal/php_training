<?php
$x = 1;
// 换行符 => PHP_EOL
echo $x, PHP_EOL;
$y = 2;
$z = $x + $y;
echo $z, PHP_EOL;
function test() {
    echo "test()被调用", PHP_EOL;
    // 可以调用外部变量
    global $x;
    $x = 2*$x;
    echo $x + $x, PHP_EOL;
    // static变量
    static $i = 3;
    echo $i++, PHP_EOL;
}
test();
test();
test();
// echo可以输出一个或多个字符串；print只能输出一个字符串
echo $x, PHP_EOL;

echo <<<EOF
测试EOF
测试EOF
测试EOF
EOF;

<?php

if(42 == "42") {
    echo '1、值相等', PHP_EOL;
}

if(42 === "42") {
    echo '2、类型相等', PHP_EOL;
} else {
    echo '3、不相等', PHP_EOL;
}

// 整型
echo 1 <=> 1, PHP_EOL; // 0
echo 1 <=> 2, PHP_EOL; // -1
echo 2 <=> 1, PHP_EOL; // 1

// 浮点型
echo 1.5 <=> 1.5, PHP_EOL; // 0
echo 1.5 <=> 2.5, PHP_EOL; // -1
echo 2.5 <=> 1.5, PHP_EOL; // 1

// 字符串
echo "a" <=> "a", PHP_EOL; // 0
echo "a" <=> "b", PHP_EOL; // -1
echo "b" <=> "a", PHP_EOL; // 1

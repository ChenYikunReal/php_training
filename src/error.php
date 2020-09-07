<?php

// 错误处理函数
function customError($errno, $errStr) {
    echo "Error: [$errno] $errStr", PHP_EOL;
    echo "脚本结束", PHP_EOL;
    die();
}

// 设置错误处理函数
set_error_handler("customError",E_USER_WARNING);

// 触发错误
$test=2;
if ($test>1) {
    trigger_error("变量值必须小于等于 1",E_USER_WARNING);
}

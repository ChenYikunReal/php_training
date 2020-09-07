<?php

namespace MyProject;

echo '命名空间为："', __NAMESPACE__, '"', PHP_EOL;

echo '这是第 " '  . __LINE__ . ' " 行', PHP_EOL;

echo '该文件位于 " '  . __FILE__ . ' " ', PHP_EOL;

echo '该文件位于 " '  . __DIR__ . ' " ', PHP_EOL;

function test_function() {
    echo  '函数名为：' . __FUNCTION__ , PHP_EOL;
    echo  '方法名为：' . __METHOD__ , PHP_EOL;
}
test_function();

class test_class {
    function _print() {
        echo '类名为：'  . __CLASS__ , PHP_EOL;
        echo  '函数名为：' . __FUNCTION__ , PHP_EOL;
    }
}
$t = new test_class();
$t->_print();

class Base {
    public function sayHello() {
        echo 'Hello ', PHP_EOL;
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!', PHP_EOL;
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

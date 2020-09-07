<?php

class Car {
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

$car_obj = new Car;
echo $car_obj->what_color();

class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

$site1 = new Site;
$site2 = new Site;
$site3 = new Site;

// 调用成员函数，设置标题和URL
$site1->setTitle("百度");
$site2->setTitle("谷歌");
$site3->setTitle("Bing");

$site1->setUrl('www.baidu.com');
$site2->setUrl('www.google.com');
$site3->setUrl('www.bing.com');

// 调用成员函数，获取标题和URL
$site1->getTitle();
$site2->getTitle();
$site3->getTitle();

$site1->getUrl();
$site2->getUrl();
$site3->getUrl();

class Child_Site extends Site {
    var $category;

    function setCate($par){
        $this->category = $par;
    }

    function getCate(){
        echo $this->category . PHP_EOL;
    }

    // 重写
    function getUrl() {
        echo $this->url . PHP_EOL;
        return $this->url;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
        return $this->title;
    }
}

// 声明一个'iTemplate'接口
interface iTemplate {
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate {
    private $vars = array();

    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }

    public function getHtml($template) {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}

// 抽象类
abstract class AbstractClass {
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass {
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass {
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;

class Foo {
    // static变量
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

print Foo::$my_static . PHP_EOL;
$foo = new Foo();

print $foo->staticValue() . PHP_EOL;

class BaseClass {
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}

class ChildClass extends BaseClass {
//    // 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()
//    public function moreTesting() {
//        echo "ChildClass::moreTesting() called"  . PHP_EOL;
//    }
}

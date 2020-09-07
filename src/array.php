<?php

$classes = array("Chinese","Math","English");
var_dump($classes);

echo "I like " . $classes[0] . ", " . $classes[1] . " and " . $classes[2] . ".", PHP_EOL;

echo count($classes), PHP_EOL;

for ($x=0; $x<count(($classes)); $x++) {
    echo $classes[$x], PHP_EOL;
}

// 关联数组
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.", PHP_EOL;

foreach ($age as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value, PHP_EOL;
}

// 多维数组
$sites = array
(
    "Chinese"=>array
    (
        "语文",
        "120"
    ),
    "Math"=>array
    (
        "数学",
        "130"
    ),
    "English"=>array
    (
        "英语",
        "140"
    )
);
print_r($sites);

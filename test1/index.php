<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>This is First Page</h1>
<?php
$x = 1;
$y = 2;
if ($y < $x) {
    echo '<div class="demo">', $x + $y, '</div>';
} else {
    echo '<div class="demo">', 'y < x', '</div>';
}
?>
<?php
$x1 = '测试1';
$x2 = '测试2';
if ($x1 == '测试1') {
    $x1 = '1测试';
}
$x3 = array('ZhangSan', 'LiSi');
define('y1', $x1);//定义常量y1
define('y2', '测试3');//定义常量y2
echo y1;
echo '<h1>', $x1, '</h1>';
?>

<h2><?php echo $x2; ?></h2>
<?php
foreach ($x3 as $value) {
    echo "<h2>$value</h2>";
    if ($x1 != $y) {
        echo $x1, '>', $y;
    }
    print "<h2>$value</h2>";
}
?>
</body>
<script>
    var t = document.getElementById('dd');
    var to = document.getElementById('tt');
    var x = 1;
    console.log(<?php echo '111'?>);
</script>
</html>

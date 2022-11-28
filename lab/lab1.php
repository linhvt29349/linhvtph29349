<h1>Phần 1</h1>
Bài 1: Xuất chuỗi <br>
<?php
echo"Hello <br>";
echo ("Hello <br>");
echo"Hello World <br>";
echo "Hello","World";
?>

<br>
Bài 2: Xuất biến <br>
<?php
$str="hello string";
$x=200;
$y=44.6;
echo "string is: $str <br/>";
echo "integer is: $x <br/>";
echo "float is: $y <br/>";
?>

<br>
Bài 3: Xuất chuỗi và biến <br>
<?php
$color="red";
echo"My car is". $color ."<br>";
echo"My house is". $COLOR ."<br>";
echo"My boat is". $coLOR ."<br>";
?>

<h1>
Phần 2</h1>
<!-- Bài 1: Toán tử -->
<?php
$x=(2==3);
echo $x;
$x=(2!=3);
echo $x;
$x=(2<>3);
echo $x;
$x=(2===3);
echo $x;
$x=(2!==3);
echo $x;
$x=(2>3);
echo $x;
$x=(2<3);
echo $x;
$x=(2>=3);
echo $x;
$x=(2<=3);
echo $x;
?>

<!-- Bài 2: chuỗi -->
<?php
$s="Hello\nWorld";
echo $s;
$s='It\'s\n';
echo $s;
echo "\nHello<br>World";
echo "\u{00C2A9}";
echo "\u{C2A9}";
?>

<?php
$a='hello';
$$a='world';
echo "$a ${$a} <br>";
?>

<!-- Bài 3: Tính tổng 2 số cho sẵn -->
<?php
$one=10;
$two=5;
echo "Tổng 2 số là:".$one+$two;
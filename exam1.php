<?php
#1
echo "<table border='1' style='border-collapse: collapse;'>";
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $color = ($row + $col) % 2 == 0 ? "black" : "white";
        echo "<td style='width:30px; height:30px; background-color: $color;'></td>";
    }
    echo "</tr>";
}
echo"</table>";

echo "<br>";
echo "<hr>";

#2
// الجزء العلوي
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('&nbsp;', (5 - $i) * 2);
    echo str_repeat('* ', $i) . "<br>";
}
// الجزء السفلي
for ($i = 4; $i >= 1; $i--) {
    echo str_repeat('&nbsp;', (5 - $i) * 2);
    echo str_repeat('* ', $i) . "<br>";
}

echo "<br>";
echo "<hr>";
#3

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// ترتيب تصاعدي
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Asc: " . implode(', ', $array) . "<br>";

// ترتيب تنازلي
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Des: " . implode(',',$array);

echo "<br>";
echo "<hr>";

#4
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum = 0;
foreach ($array as $num) {
    $sum += $num;
}
$average = $sum / count($array);
echo "average numbers: $average";

echo "<br>";
echo "<hr>";

#5
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// تصفية الأرقام الزوجية
$evenNumbers = [];
foreach ($array as $num) {
    if ($num % 2 == 0) {
        $evenNumbers[] = $num;
    }
}
echo "evenNumbers: " . implode(', ', $evenNumbers) . "<br>";

// حذف الأرقام الزوجية
$array = array_filter($array, function($num) {
    return $num % 2 != 0;
});
echo "delete evenNumbers: " . implode(',',$array);

echo "<br>";
echo "<hr>";

#6
$numbers = [10, 30, 20];
$max = $numbers[0];
foreach ($numbers as $num) {
    if ($num > $max) {
        $max = $num;
    }
}
echo "أكبر رقم هو: $max";

echo "<br>";
echo "<hr>";

#7
$date = '2012-12-21';
$newDate = date('Y-m-d', strtotime($date . ' +1 month'));
echo "التاريخ الجديد: $newDate";

echo "<br>";
echo "<hr>";

#8
$lastMonth = date('F', strtotime('last month'));
echo "الشهر السابق: $lastMonth";

echo "<br>";
echo "<hr>";

#9
$string = "Hello, welcome to the PHP world!";
$substring = "PHP";

if (strpos($string, $substring) !== false) {
    echo "السلسلة تحتوي على '$substring'";
} else {
    echo "السلسلة لا تحتوي على '$substring'";
}

echo "<br>";
echo "<hr>";

#10
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 17;
echo $number . (isPrime($number) ? " هو عدد أولي" : " ليس عددًا أوليًا");

echo "<br>";
echo "<hr>";

#11
if (isset($_POST['color'])) {
    setcookie('background', $_POST['color'], time() + (86400 * 30), "/");
    $background = $_POST['color'];
} else {
    $background = isset($_COOKIE['background']) ? $_COOKIE['background'] : "white";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo $background; ?>;">
    <form method="post">
        <label>اختر لون الخلفية:</label>
        <select name="color">
            <option value="white">أبيض</option>
            <option value="red">أحمر</option>
            <option value="blue">أزرق</option>
            <option value="green">أخضر</option>
        </select>
        <button type="submit">تغيير اللون</button>
    </form>
</body>
</html>

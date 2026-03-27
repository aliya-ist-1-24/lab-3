<?php


echo "1. count()-";
$arr = [10, 20, 30];
echo count($arr);
echo "<br>";

echo "2. array_diff()-";
$a = [1, 2, 3, 4];
$b = [3, 4, 5];
print_r(array_diff($a, $b));
echo "<br>";

echo "3. array_intersect()-";
$a = [1, 2, 3];
$b = [2, 3, 4];
print_r(array_intersect($a, $b));
echo "<br>";

echo "4. array_key_exists()-";
$arr = ["name" => "Ivan", "age" => 25];
var_dump(array_key_exists("age", $arr));
echo "<br>";

echo "5. array_keys()-";
$arr = ["a" => 1, "b" => 2];
print_r(array_keys($arr));
echo "<br>";

echo "6. array_values()-";
$arr = ["a" => 1, "b" => 2];
print_r(array_values($arr));
echo "<br>";

echo "7. array_merge()-";
$a = [1, 2];
$b = [3, 4];
print_r(array_merge($a, $b));
echo "<br>";

echo "8. array_rand()-";
$arr = ["red", "green", "blue"];
$key = array_rand($arr);
echo $arr[$key];
echo "<br>";

echo "9. array_reverse()-";
$arr = [1, 2, 3];
print_r(array_reverse($arr));
echo "<br>";

echo "10. compact()-";
$name = "lipstick";
$price = 2500;
print_r(compact("name", "price"));
echo "<br>";

echo "11. extract()-";
$data = ["name" => "aliya", "age" => 19];
extract($data);
echo $name;
echo "<br>";

echo "12. arsort()-\n";
$arr = ["a" => 3, "b" => 1, "c" => 2];
arsort($arr);
print_r($arr);
echo "<br>";

echo "13. asort()-\n";
$arr = ["a" => 3, "b" => 1, "c" => 2];
asort($arr);
print_r($arr);
echo "<br>";

echo "14. sort()-\n";
$arr = [3, 1, 2];
sort($arr);
print_r($arr);
echo "<br>";

echo "15. rsort()-\n";
$arr = [3, 1, 2];
rsort($arr);
print_r($arr);
echo "<br>";

echo "16. array_combine()-";
$keys = ["month", "year"];
$values = ["February", 2026];
print_r(array_combine($keys, $values));
echo "<br>";

echo "17. array_search()-";
$arr = ["apple", "banana", "cherry"];
echo array_search("banana", $arr);
echo "<br>";

echo "18. array_shift()-";
$arr = [1, 2, 3];
array_shift($arr);
print_r($arr);
echo "<br>";

echo "19. array_unique()-";
$arr = [1, 2, 2, 3, 3];
print_r(array_unique($arr));
echo "<br>";

echo "20. array_unshift()-";
$arr = [2, 3];
array_unshift($arr, 1);
print_r($arr);
echo "\n";

echo "21. array_flip()-";
$arr = ["a" => 1, "b" => 2];
print_r(array_flip($arr));
echo "<br>";

echo "22. array_pop()-<br>";
$arr = [1, 2, 3];
array_pop($arr);
print_r($arr);
echo "<br>";

echo "23. array_push()-\n";
$arr = [1, 2];
array_push($arr, 3);
print_r($arr);
echo "<br>";

echo "24. in_array()-\n";
$arr = ["apple", "banana"];
var_dump(in_array("banana", $arr));
echo "<br>";

echo "25. list()-\n";
$arr = ["Aliya", 25];
list($name, $age) = $arr;
echo $name;



?>

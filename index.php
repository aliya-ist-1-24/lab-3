<?php
$students = [
["Abdulaeva Aitegin", true],
["Azimov Temirlan", false],
["Aidarova Aidana", true],
["Aliev Rafayel", true],
[" Akbai kyzy Aizada", false],
["Askarbekova Malika", true],
["Djaparova Aliya", true],
["Borbueva Sheker", false],
["Kanatbekova Guldana", true],
["Kydyrbekov Kanimet", false],
["Kadyrbekov Farhat", true],
["Kubanychbekova Elina", true],
["Mavlyanova Aidana", false],
["Kubanychbek uluu Elmir", true],
["Sharipova Jibek", true],
["Toktoshev Nurbol", false],
["Masalbekova Shirin", false],
["Ysak Emir", true],
["Shadybekova Nazgul", false],
["Edilbekova Sanirabiga", true]
];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Students Attendance</title>
</head>
<body>

<table border="1" cellpadding="8">
<tr>
<th>Студент</th>
<th>Присутствие</th>
</tr>

<?php
for($i=0; $i<20; $i++){
echo "<tr>";
echo "<td>".$students[$i][0]."</td>";
echo "<td>";

if($students[$i][1]){
echo "true";
}else{
echo "false";
}

echo "</td>";
echo "</tr>";
}
?>

</table>

</body>
</html>
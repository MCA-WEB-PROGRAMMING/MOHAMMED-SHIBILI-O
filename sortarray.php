<html>
<body>
<?php
$student=array("Afeef","Shibili","Sanal","Vyshnav","Adarsh","Arun");
echo "Array:";
print_r($student);
echo "<br>"."Array in ascending order:";
asort($student);
print_r($student);
echo "<br>"."Array in descending order:";;
arsort($student);
print_r($student);
?>
</body>
</html>
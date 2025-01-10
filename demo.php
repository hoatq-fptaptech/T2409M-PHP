<?php 
$numbers = [1,5,2,7,9,13,0,8];
$numbers[3] = $numbers[3] + 1;

$foods = [
    "Phở bò",
    "Canh cá rô",
    "Tào phớ"
];
for($i=0;$i< 3; $i++){
    echo "<p>$foods[$i]</p>";
}
$foods[3] = "Bún cá";
$foods[] = "Lẩu riêu cua";
$foods[] = "Cơm rang";

for($i=0;$i< count(value: $foods); $i++){
    echo "<p>$foods[$i]</p>";
}
// foreach
foreach($foods as $item){
    echo "<p>$item</p>";
}
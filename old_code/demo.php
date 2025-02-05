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

$sv = [
    "name"=> "Nguyen Van A",
    "age"=> 18,
    "tel"=> "0987654321"
];

echo "<p>".$sv["name"]."</p>";
echo "<p>".$sv["age"]."</p>";
echo "<p>".$sv["tel"]."</p>";

$ds = [
    [
        "name"=> "Nguyen Van A",
        "age"=> 18,
        "tel"=> "0987654321"
    ],
    [
        "name"=> "Nguyen Van A",
        "age"=> 18,
        "tel"=> "0987654321"
    ],
    [
        "name"=> "Nguyen Van A",
        "age"=> 18,
        "tel"=> "0987654321"
    ]
];
foreach($ds as $s){
    // $s ->  laf thong tin 1 sinh vien
    echo $s['name'];
    echo $s['age'];
    echo $s['tel'];
    echo "<br/>";
}
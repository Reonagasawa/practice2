<?php

$name ="Reo";

if ($name = "Reo") {
  echo "私はレオです。";
} else {
  echo "あなたはレオではありません";
}

echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

echo "\n";

$fruits = array("apple", "banana", "grape", "pineapple", "dragonfruits");

foreach($fruits as $fruits){
  echo "みんなが大好きな" . $fruits;
  echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if(($i % 5) == 0) {
    echo $i; 
    echo "\n";
  }
}

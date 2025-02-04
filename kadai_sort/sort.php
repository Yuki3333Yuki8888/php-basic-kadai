<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
  <?php
// ソート関数の定義
function sort_2way(array $array, bool $order): array {
    if ($order) {
        sort($array); // 昇順ソート
    } else {
        rsort($array); // 降順ソート
    }
    return $array;
}

// ソートする配列を宣言
$nums = [15,4,18,23,10 ];

// 昇順ソート
$sorted_asc = sort_2way($nums, true);
echo "昇順ソートです。<br>";
foreach ($sorted_asc as $num) {
    echo $num . "<br>";
}

// 降順ソート
$sorted_desc = sort_2way($nums, false);
echo "降順ソートです。<br>";
foreach ($sorted_desc as $num) {
    echo $num . "<br>";
}
?>
  </p>
  
</body>
</html>
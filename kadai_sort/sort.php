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
    function sort_2way(array $array, bool $order)
    {
      if ($order) {
        echo "昇順ソートです。<br>";
        sort($array); // 昇順ソート
      } else {
        echo "降順ソートです。<br>";

        rsort($array); // 降順ソート
      }
      foreach ($array as $num) {
        echo $num . "<br>";
      }
    
    }

    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    // 昇順ソート
    sort_2way($nums, true);



    // 降順ソート
    sort_2way($nums, false);

    ?>
  </p>

</body>

</html>
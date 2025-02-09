<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編 課題016</title>
</head>
<body>
<p>
  <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;
           

            // コンストラクタを定義する
            public function __construct($name, $price) {
              $this->name = $name;
              $this->price = $price; 
            }

            public function show_price() {
              echo   $this->price ;
          }
            }

            class Animal {
              private $name;
              private $height;
              private $weight;
          
              public function __construct($name, $height, $weight) {
                  $this->name = $name;
                  $this->height = $height;
                  $this->weight = $weight ;
              }
          
              public function show_height() {
                  echo $this->height ;
              }
            }



            // インスタンス化する
        $food = new Food('potato', 250)  ;
        $animal = new Animal('dog', 60, 5000);


        // インスタンスの各プロパティの値を出力する
        print_r($food) ; 
        Print_r($animal) ; 

        $food->show_price()  ;
        $animal->show_height();

        ?>
  </p>

  
</body>
</html>
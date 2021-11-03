<html>
    <body>
        <h1>The fruit program</h1>
        <?php
         class Fruit {
             public $name;
             public $color;

             function setName($name){
                 $this->name = $name;
             }

             function getName(){
              return   $this->name;
            }
         }
          $apple = new Fruit();
          $banana = new Fruit();
          $apple->setName('Apple');
          $banana->setName('Banana');

          echo $apple->getName();
          echo "<br>";
          echo $banana->getName();

         ?>
    </body>
</html>
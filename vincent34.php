<?php
    $mybike = new Bike(); $urBike = new Bike();
    echo "{$mybike->getSpeed()} : {$urBike->getSpeed()}<br />";
    $mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();$mybike->upSpeed();
    $urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
    $urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
    $urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
    echo "{$mybike->getSpeed()} : {$urBike->getSpeed()}<br />";
    $myscooter = new Scooter();
    echo "{$myscooter->getSpeed()}<br />";
    $myscooter->upSpeed();$myscooter->upSpeed();$myscooter->upSpeed();
    echo "{$myscooter->getSpeed()}<br />";
    $myscooter->changeGear(3);
    echo "{$myscooter->getGear()}<br />";
    $myscooter->upSpeed();$myscooter->upSpeed();$myscooter->upSpeed();$myscooter->upSpeed();
    echo "{$myscooter->getSpeed()}<br />";
    
    
    
    class Bike {

        protected $speed = 0;

        function __construct() {
            $this->speed = 0;
        }

        
        function upSpeed() {
            $this->speed = $this->speed < 1 ? 1 : $this->speed*1.4;
        }

        function downSpeed() {
            $this->speed = $this->speed < 1 ? 0 : $this->speed*0.7;
        }

        function getSpeed() {
            return $this->speed;
        }

        
    }

    class Scooter extends Bike {
        
        private $gear;

        function __construct() {
            $this->gear = 0;
        }
        

        function upSpeed() {
            $this->speed = $this->speed < 1 ? 1 : $this->speed*$this->gear*1.4; //根據檔位加速不同
        }

        function changeGear($gear = 0) {
            if($gear >= 0 && $gear <= 4) {
                $this->gear = $gear;
            }
        }

        function getGear() {
            return $this->gear;
        }
    }
?>
<!-- class為定義物件(腳踏車)，var/private為定義物件的屬性(腳踏車有速度屬性)，function是方法 -->
<!-- $this->speed為引用speed屬性 -->
<!-- $this->speed = $this->speed < 1 ? 1 : $this->speed*1.4; 解釋:如果$this->speed <1 就先設定1，之後每次呼叫就*1.4 -->
<!-- 如果將var(=public大家都可以存取) $speed = 0改成private $speed = 0，則使用者僅可以透過使用function的方式來改變$speed，而不能直接宣告$speed = 20 -->
<!-- 使用private會使後面的$speed只存在該物件括號內 -->
<!-- 建構式__construct(初始化)，當new物件產生時就會出現 -->
<!-- extends為延伸的意思參考Bike(父類別)的屬性觀念很像是繼承但是不完全是 -->
<!-- 使用protected會使得Scooter(子類別)也可以存取但是分開來計算 -->
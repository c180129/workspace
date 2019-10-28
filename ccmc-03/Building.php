<?php
class Building {
    private $name;
    private $height;
    
    function __constructor(string $name, int $height) {
        $this-> name = $name;
        $this->height = $height;
        
    }
    function getName():string {
        return $this->name;
        
    }
    function getAge():int {
        return $this->age;
        
    }
    function setAge(int $age): void {
        $this->age = $age;
    }
    function getProfile():string {
        $profile = "{$this->name} の高さは {$this-height} mです。";
        return $profile;
    }
}
}
?>

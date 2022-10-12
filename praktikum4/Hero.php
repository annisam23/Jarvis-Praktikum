<?php
//paradigma procedural
$hero1_name = "alucard";
$hero1_hp = 4000;
$hero1_defanse = 120;
$hero1_demage = 300;
$hero1_mana = 0;

$hero2_name = "Akai";
$hero2_hp = 4100;
$hero2_defanse = 300;
$hero2_demage = 50;
$hero2_mana = 0;


class Hero
{
    public $name;
    public $hp;
    public $defanse;
    public $damage;
    public $mana;

    public function __construct($name, $hp, $defanse, $damage, $mana)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->defanse = $defanse;
        $this->damage = $damage;
        $this->mana = $mana;
    }

    public function attack($target)
    {
        $target->hp = $target->hp - ($this->damage - $target->defanse);
        echo "$this->name Menyerang  $target->name\n";
        echo "<br>";
        echo "HP $target->name saat ini adalah: $target->hp \n";
    }
}

$hero1 = new Hero("Alucard", 4000, 120, 400, 0);
$hero2 = new Hero("Akai", 4100, 200, 50, 0);

//echo $hero1->name;

//memanggil method
$hero1->attack($hero2);

<?php 
    require "classesandobjects.php";

    class newPaint extends Blueprint{
        public function newPaintColor(){
            return $this->paint = 'Black';
        }
    }
    $house3 = new newPaint;
    $house3->length = 40;
    $house3->width = 40;
    $house3->paint = 'Aqua Marine Blue';
    $house3->noOfDoors = 3;
    $house3->noOfWindows = 5;

    echo "<hr><br>Build Up Area for House 3 ".$house3->getBuiltUpArea();
    echo "<br>Total Doors for House 3 ".$house3->totalDoors();
    echo "<br>Total Windows for House 3 ".$house3->totalWindows();
    echo "<br>Paint Job for House 3 ".$house3->paint(); 
    echo "<br>New Paint Job for House 3 ".$house3->newPaintColor();
?>
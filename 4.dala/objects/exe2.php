<?php
class Points {
    public int $x;
    public int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints($point1, $point2) {

        (int) $q = $point1->x;
        (int) $w = $point1->y;
        (int) $z = $point2->x;
        (int) $h = $point2->y;

        $point1->x = $z;
        $point1->y = $h;

        $point2->x = $q;
        $point2->y = $w;

    }
}
$swapPoint1 = new Points(5, 2);
$swapPoint2 = new Points(-3, 6);
$swapPoint1->swapPoints($swapPoint1, $swapPoint2);

echo "({$swapPoint1->x}, {$swapPoint1->y})";
echo PHP_EOL;
echo "({$swapPoint2->x}, {$swapPoint2->y})";
echo PHP_EOL;



<?php
abstract class DongVat {
    abstract public function di($a, $b = null);
}

class TuongRatLaNgu extends DongVat {
    public function di($a) {
        return $a;
    }
}
$abc= new TuongRatLaNgu();
echo $abc->di(1,2,5);

?>
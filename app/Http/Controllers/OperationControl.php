<?php 

namespace App\Http\Controllers;

class OperationControl extends Controller {
/*    
    public function add($a, $b) {
        return $a + $b;
    }
*/
    public function restar($a, $b) {
        return $a - $b;
    }
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            throw new InvalidArgumentException("No se puede dividir por cero");
        }
        return $a / $b;
    }

    public function multiplicardec($a, $b) {
        return $a * $b;
    }


}
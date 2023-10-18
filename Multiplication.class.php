<?php
class Multiplication extends Operation {
    public function operate(){
        // controle de la valeur numérique
        if (!is_numeric($this->nombre1) || !is_numeric($this->nombre2)) {
            throw new InvalidArgumentException("La valeur doit être un nombre");
        }
        return $this->nombre1 * $this->nombre2;
    }
};
?>
<?php
class Division extends Operation {
    public function operate(){
        // controle de la valeur numérique
        if (!is_numeric($this->nombre1) || !is_numeric($this->nombre2)) {
            throw new InvalidArgumentException("La valeur doit être un nombre");
        }
        // controle de la division par 0
        if ($this->nombre2 === 0) {
            throw new InvalidArgumentException("La division par 0 est impossible");
        }
        // controle argument vide
        if (empty($this->nombre1) || empty($this->nombre2)) {
            throw new InvalidArgumentException("Merci de renseigner une valeur");
        }
        // si tout se passe bien
        return $this->nombre1 / $this->nombre2;
    }
};
?>
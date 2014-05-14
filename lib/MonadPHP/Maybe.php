<?php

namespace MonadPHP;

class Maybe extends Monad {

    const unit = "MonadPHP\Maybe::unit";

    public function bind($function, array $args = array()){
        if (!is_null($this->value)) {
            return parent::bind($function);
        }
        return $this::unit(null);
    }

}

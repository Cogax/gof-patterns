<?php

namespace Decorator\Basic;

class ConcreteComponent implements Component {

  public function operation() {
    echo 'conrete component; ';
  }
}
<?php

namespace AbstractFactory\GUI;

class OSXButton implements ButtonInterface {

  /**
   * @inheritdoc
   */
  public function paint() {
    echo '<button class="osx">';
  }
}
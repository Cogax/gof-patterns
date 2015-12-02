<?php

namespace AbstractFactory\GUI;

class WindowsButton implements ButtonInterface {

  /**
   * @inheritdoc
   */
  public function paint() {
    echo '<button class="windows">';
  }
}
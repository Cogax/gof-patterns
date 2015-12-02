<?php

namespace AbstractFactory\GUI;

class OSXFactory implements GUIFactoryInterface {

  /**
   * @inheritdoc
   */
  public function createButton() {
    $button = new OSXButton();
    $button->paint();
  }
}
<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 31/03/15
 * Time: 22:52
 */

namespace patterns\abstract_factory\src;

abstract class AbstractFactory {
  abstract function createProductA();
  abstract function createProductB();
}
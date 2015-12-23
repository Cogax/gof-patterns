<?php

namespace Decorator\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Class HttpKernel
 *
 * This class represents a "ConcreteComponent".
 *
 * @package Decorator\HttpKernel
 */
class HttpKernel implements HttpKernelInterface {

  /**
   * @inheritdoc
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    return new Response('Hello World!', Response::HTTP_OK);
  }
}
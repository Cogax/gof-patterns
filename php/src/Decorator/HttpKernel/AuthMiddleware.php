<?php

namespace Decorator\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AuthMiddleware
 *
 * This class represents a "ConcreteDecorator".
 *
 * @package Decorator\HttpKernel
 */
class AuthMiddleware extends Middleware {

  /**
   * AuthMiddleware constructor.
   * @param \Symfony\Component\HttpKernel\HttpKernelInterface $httpKernel
   */
  public function __construct(\Symfony\Component\HttpKernel\HttpKernelInterface $httpKernel) {
    parent::__construct($httpKernel);
  }

  /**
   * @inheritdoc
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    if(!empty($request->headers->get('authorization'))) {
      return $this->httpKernel->handle($request, $type, $catch);
    }

    return new Response('You are unauthorized!', Response::HTTP_UNAUTHORIZED);
  }
}
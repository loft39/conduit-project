<?php

class Home extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams): array
  {

    return [
        "name" => "Conduit"
    ];

  }
}
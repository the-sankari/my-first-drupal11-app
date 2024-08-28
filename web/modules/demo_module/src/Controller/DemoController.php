<?php
namespace Drupal\demo_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class DemoController extends ControllerBase
{
    public function demo()
    {
        return new Response('Hello, Kajol');
    }
}

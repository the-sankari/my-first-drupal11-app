<?php
namespace Drupal\games\Controller;

use Drupal\Core\Controller\ControllerBase;

class GamesController extends ControllerBase
{
    public function games()
    {
        // return new Response('Hello, games');
        return [
            '#markup' => $this->t('Kajol'),
        ];
    }
}

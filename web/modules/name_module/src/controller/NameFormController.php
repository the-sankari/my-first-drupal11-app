<?php

namespace Drupal\name_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class NameFormController extends ControllerBase
{

    public function content()
    {
        $url = Url::fromRoute('name_module.form');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();

        return [
            '#markup' => $this->t('Hello, @name! @link', ['@link' => $link]),
        ];
    }

    public function greeting($name)
    {
        //   $message = $this->t('Hello, @name!', ['@name' => $name]);
        //   return new Response($message);

        return [
            '#type' => 'markup',
            '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
        ];
    }

}

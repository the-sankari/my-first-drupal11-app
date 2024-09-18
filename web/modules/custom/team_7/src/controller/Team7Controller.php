<?php
namespace Drupal\team_7\Controller;

use Drupal\Core\Controller\ControllerBase;

class Team7Controller extends ControllerBase
{
    public function content()
    {

        return [

            "#markup" => '<div id="team_7_app"></div>',

            "#attached" => [

                "library" => ["team_7/team_7"],

            ],

        ];

    }
}

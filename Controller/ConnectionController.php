<?php

namespace ConnectionController;

use Controller\Traits\RenderViewTrait;
use Model\User\UserManager;

class ConnectionController {

    use RenderViewTrait;

    public function log() {
        $user = new UserManager();
        if($user->logAndConnect()){
            echo 'ok!';
        }
        else {
            echo 'nop !!';
        }
    }

    public function connexionPage() {

        $this->render('connection', 'connection');

    }
}
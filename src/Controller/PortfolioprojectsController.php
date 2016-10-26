<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjetportfolioController
 *
 * @author Olga
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PortfolioprojectsController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // $this->Auth->allow('add');
    }

    public function index() {
        $portfolios = $this->Portfolioprojects->find('all');
        $this->set(compact('portfolios'));
    }

    public function projetportfolio() {

        $portfolios = $this->Portfolioprojects->find('all');
        $this->set(compact('portfolios'));
    }

}

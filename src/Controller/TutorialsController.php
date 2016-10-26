<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TutoriauxController
 *
 * @author Olga & Patrick
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class TutorialsController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->paginate = [
            'maxLimit' => 9
        ];
    }

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index($type = null) {

        if (is_null($type)) {
            $this->set('tutos', $this->paginate($this->Tutorials));
            $this->set('type', "Tous nos tutoriaux");
        } else if ($type == 'Mobile') {
            $tutos = $this->Tutorials->find('all', array(
                'conditions' => array('Tutorials.tutorialtype_id' => '1')));
            $this->set('tutos', $this->paginate($tutos));
            $this->set('type', "Nos tutoriaux sur le mobile");
        } else if ($type == 'Web') {
            $tutos = $this->Tutorials->find('all', array(
                'conditions' => array('Tutorials.tutorialtype_id' => '2')));

            $this->set('tutos', $this->paginate($tutos));
            $this->set('type', "Nos tutoriaux sur Html 5");
        } else {

            $SearchString = '%' . $type . '%';
            $tutos = $this->Tutorials->find('all', array(
                'conditions' => array('Tutorials.description LIKE' => $SearchString)
            ));

            $this->set('tutos', $this->paginate($tutos));
            $this->set('type', "Filtré par : " . $type);
        }
    }

}

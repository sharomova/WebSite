<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }

    public function index() {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }
    
    public function profil() {
        $this->set(compact('users'));
    }

    public function view($id) {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $authUser = $this->Users->get($user->id)->toArray();
                $this->Auth->setUser($authUser);
                $userName = $this->Auth->user('first_name');
                $this->Flash->success(__("Compte créé avec succès, bonjour $userName"));
                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            }
            $this->Flash->error("Impossible de créer le compte");
        }
        $this->set('user', $user);
    }

    public function login() {
        if ($this->request->is('post')) {
            $userLogin = $this->Auth->identify();
            if ($userLogin) {
                $this->Auth->setUser($userLogin);
                $userName = $this->Auth->user('first_name');
                $this->Flash->success(__("Bonjour $userName !"));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Username or password incorrect"));
            $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
        }
    }

    public function logout() {
        if ($this->Auth->user()) {
            $this->Flash->success(__("Vous êtes bien déconnecté"));
            return $this->redirect($this->Auth->logout());
        } else {
            $this->Flash->error(__("Aucun compte connecté"));
            return $this->redirect(['action' => 'index']);
        }
    }

public function changePassword()
    {
        $user =$this->Users->get($this->Auth->user('id'));
        if (!empty($this->request->data)) {
            $user = $this->Users->patchEntity($user, [
                    'old_password'  => $this->request->data['old_password'],
                    'password'      => $this->request->data['password1'],
                    'password1'     => $this->request->data['password1'],
                    'password2'     => $this->request->data['password2']
                ],
                ['validate' => 'password']
            );
            if ($this->Users->save($user)) {
                $this->Flash->success('Le mot de passe a été changer avec succès');
                $this->redirect(['controller' => 'Users', 'action' => 'profil']);
            } else {
                $this->Flash->error(__('Le mot de passe n\'as pas put être changé : Mauvaise donnée'));
            }
        }
        $this->redirect(['controller' => 'Users', 'action' => 'profil']);
        $this->set('user',$user);
    }
}

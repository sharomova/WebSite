<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class UsersTable extends Table {

    public function validationDefault(Validator $validator) {
        //Fontionne mais tout les messages ne s'affiche pas donc on ne 
        //peut pas savoir qu'elle est l'erreur.
        $validator
                ->notEmpty('username', "Un nom d'utilisateur est nécessaire")
                ->add('username', 'unique', 
                        ['rule'     => 'validateUnique',
                         'provider' => 'table',
                         'message'  => "Le nom d'utilisateur est déjà utilisé."])
                ->notEmpty('password', 'Un mot de passe est nécessaire')
                ->add('password', 'length',
                        ['rule'     => ['lengthBetween', 8, 100],
                        'message'   => "Le mot de passe doit faire entre 8 et 100 charactères."])
                ->sameAs('password_confirm', 'password')
                ->notEmpty('password_confirm', 'Vos mots de passe sont différents')
                ->notEmpty('first_name', 'Un nom est nécessaire')
                ->notEmpty('email', 'Une adresse e-mail est nécessaire')
                ->email('email')
                ->notEmpty('phone_number', 'Un numeros de telephone est nécessaire')
                ->numeric('phone_number', 'Un numéros est numérique')
                ->add('phone_number', 'length',
                        ['rule'     => ['lengthBetween', 10, 10],
                        'message'   => "Le numéros de téléphone doit contenir 10 chiffres"]);
                
        return $validator;
    }

    public function validationPassword(Validator $validator )
    {
        $validator
            ->add('old_password','custom',[
                'rule'=>  function($value, $context){
                    $user = $this->get($context['data']['id']);
                    if ($user) {
                        if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                            return true;
                        }
                    }
                    return false;
                },
                'message'=>'Mot de passe incorect',
            ])
            ->notEmpty('old_password');
 
        $validator
            ->add('password1', [
                'length' => [
                    'rule' => ['minLength', 8],
                    'message' => 'Le mot de passe doit faire entre 8 et 100 charactères.',
                ]
            ])
            ->add('password1',[
                'match'=>[
                    'rule'=> ['compareWith','password2'],
                    'message'=>'Les mots de passe ne sont pas pareil.',
                ]
            ])
            ->notEmpty('password1');
        $validator
            ->add('password2', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'Le mot de passe doit faire entre 8 et 100 charactères.',
                ]
            ])
            ->add('password2',[
                'match'=>[
                    'rule'=> ['compareWith','password1'],
                    'message'=>'Les mots de passe ne sont pas pareil.',
                ]
            ])
            ->notEmpty('password2');
 
        return $validator;
    }
    
}

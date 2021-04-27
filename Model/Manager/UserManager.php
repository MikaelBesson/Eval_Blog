<?php

namespace Model\User;

use Model\DB;
use Model\Entity\User;

class UserManager {

    /**
     * Retourne un utilisateur via son id.
     * @param int $id
     * @return User
     */
    /*public function getById(int $id): User {
        $user = new User();
        $request = DB::getInstance()->prepare("SELECT id, pseudo FROM user WHERE id = :user_fk");
        $request->bindValue(':user_fk', $id);
        $result = $request->execute();
        if($result) {
            $user_data = $request->fetch();
            if($user_data) {
                $user->setId($user_data['id']);
                $user->setPseudo($user_data['pseudo']);
            }
        }
        return $user;
    }*/

    public function logAndConnect() : User {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $user = new User();
        $request = DB::getInstance()->prepare("SELECT id, pseudo, password FROM user WHERE pseudo = :pseudo");
        $request->bindValue(':pseudo', $pseudo);
        $result = $request->execute();
        if($result) {
            $user_data = $request->fetch();
            if($user_data) {
                if(password_verify($password, $user_data['password'])) {
                    $user->setId($user_data['id']);
                    $user->setPseudo($user_data['pseudo']);
                    return $user;

                }
                else {
                    echo 'le password ne correspond pas !!';
                }
            }
            else {
                $request = DB::getInstance()->prepare("INSERT INTO user (pseudo, password) VALUES (:pseudo, :password)");
                $request->bindValue(':pseudo',$pseudo);
                $request->bindValue(':password',password_hash($password, PASSWORD_DEFAULT));
                $request->execute();
                $user->setPseudo($pseudo);
                $user->setPassword();
            }
        }
        return $user;
    }
}
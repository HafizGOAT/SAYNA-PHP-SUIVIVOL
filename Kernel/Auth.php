<?php
    namespace Kernel;

    use app\Models\User;

    class Auth{
        public static function user(){
            return User::find($_SESSION['user_id'] ?? null);
        }

        public static function verif($email,$password){
            $query = 'select * from users where email=:email and motdepasse=:motdepasse';
            $users = Connexion::query($query,User::class,['email'=>$email, 'motdepasse'=>$password]);
            if(isset($users[0])){
                $_SESSION['user_id']=$users[0]->id;
            }
        }
    }
?>
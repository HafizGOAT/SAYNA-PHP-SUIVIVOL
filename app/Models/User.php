<?php
    namespace app\Models;

    use Kernel\Connexion;
    use Kernel\Model;

    class User extends Model{
        protected static string $table = 'users';

        public static function fromEmail($email){
            $query = 'select * from users where email=:email';
            return Connexion::query($query,user::class,['email'=>$email])[0] ?? null;
        }

        public function store(){
            $query = 'insert into users(email,password) values(=:email, =:password)';
            return Connexion::execute($query,['email'=>$this->email, 'motdepasse'=>$this->password]);
        }
    }
?>
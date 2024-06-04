<?php
    namespace app\Controllers;

    use app\Models\Pays;
    use app\Models\User;
    use Config\App;
    use Kernel\Auth;
    use Kernel\Request;

    class AuthController extends \Kernel\Controller{
        public function login(){
            return new \Kernel\View('auth/login.php');
        }

        public function verifLogin(){
            $password = sha1(App::KEY.$_POST['motdepasse']);
            Auth::verif(Request::post('email'),$password);
            if(null!=Auth::user()){
                header('Location:.');
            }
        }
        public function logout(){
            session_destroy();
            header('Location:.');
        }

        public function registrer(){
            return new \Kernel\View('auth/registrer.php');
        }

        public function registrerValid(){
            $user = User::fromEmail(Request::post('email'));
            if(null==$user){
                $user = new User();
                $user -> email = Request::post('email');
                $user->motdepasse=sha1(App::KEY.Request::post('motdepasse');)
            }

            header('Location:.');
        }
    }
?>
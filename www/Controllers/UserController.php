<?php
namespace App\Controllers;
use App\Core\Verificator;
use App\Models\User;
use App\Core\View;
use App\Forms\AddUser;
use App\Core\Security;

class UserController {
    
    protected int $id = 0;
    protected string $firstname;
    protected string $surname;
    protected string $email;
    protected string $phone;
    protected string $country;
    protected string $birth_date;
    protected string $thumbnail;
    protected string $pwd;
    protected bool $vip = false;

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $isLoggedIn = Security::login($username, $password);

        if ($isLoggedIn) {
            // Connexion réussie, effectuer les actions appropriées
        } else {
            // Identifiants de connexion invalides, gérer l'erreur
        }
    }    

    public function userCreateProfile(): void {
    
        $form = new AddUser();
        $view = new View("User/userCreateProfile", "front");
        $view->assign('form', $form->getConfig());
    
        if($form->isSubmit()){
            $errors = Verificator::form($form->getConfig(), $_POST);
            if(empty($errors)){
                $is_verified = "f";
                $id_role = 1;
                $hashedPassword = Security::hashPassword($_POST['pwd']);
                $user = new User();
                $user->hydrate(
                    $id_role,
                    $_POST['firstname'], 
                    $_POST['lastname'], 
                    $_POST['pseudo'], 
                    $_POST['email'], 
                    $_POST['phone'], 
                    $_POST['birth_date'], 
                    $_POST['address'],
                    $_POST['zip_code'],
                    $_POST['country'],
                    $hashedPassword,                    
                    $_POST['thumbnail'], 
                    $is_verified
                );
                // Enregistrement de l'utilisateur dans la base de données
                $user->save();
                echo "Insertion en BDD";
            } else{
                $view->assign('errors', $errors);
            }
        }
    }
    
    // public function userProfile() {
    //     $view = new View("User/userProfile", "front");
    //     // Consider rendering or returning the view here.
    // }

    public function userInterface() {
        $view = new View("User/userInterface", "front");
        // Consider rendering or returning the view here.
    }

    public function contact() {
        $view = new View("User/contact", "front");
        // Consider rendering or returning the view here.
    }
}

<?php
namespace App\Controllers;

use App\Models\User;
use App\Core\View;
use App\Core\Security;
use App\Forms\AddProduct;
use App\Forms\LoginUser;
use App\Forms\ModifyProfile;
use App\Forms\DeleteProfile;
use App\Models\Product;

class ProductController {
    
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


    public function createProduct(): void {

        $form = new AddProduct();
        $view = new View("Forms/form", "front");
        $view->assign('form', $form->getConfig());
        $id = 1;
        $isModifyForm = false; 
        $view->assign('isModifyForm', $isModifyForm);


        if($form->isSubmit()){

            $product = new Product();
            $categoryName = Security::securiser($_POST['id_category']);
            $categoryOptions = $_SESSION['categoryOptions'];
            $id_category = array_search($categoryName, array_column($categoryOptions, 'value'));
            $errors = Security::form($form->getConfig(), $_POST);

            if(empty($errors)){
                $product = new Product();
                $product->hydrate(
                    $id,
                    $id_category, 
                    $_SESSION['userData']['id'], 
                    Security::securiser($_POST['titre']), 
                    Security::securiser($_POST['description']), 
                    Security::securiser($_POST['trokos']), 
                    Security::securiser($_POST['thumbnail']), 
                );
                $product->save();
                echo "Insertion en BDD";
            } else{
                $view->assign('errors', $errors);
            }
        }
    }

}

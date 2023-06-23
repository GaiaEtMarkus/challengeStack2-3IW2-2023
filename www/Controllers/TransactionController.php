<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController
{
    public function createTransaction()
    {
        if (isset($_SESSION['userData'])) {
            $productId = $_POST['productId'] ?? null;
    
            if ($productId) {
                $product = new Product();
                $productData = $product->getProductById($productId);
    
                if ($productData) {
                    $userId = $_SESSION['userData']['id'];
                    $sellerProducts = $product->getProductsByUserId($userId);
    
                    $view = new View("transaction/createTransaction", "front");
                    $view->assign('productData', $productData);
                    $view->assign('exchangeProducts', $sellerProducts);
                } else {
                    $message = "Le produit sélectionné n'existe pas.";
                    header('Location: /?message=' . urlencode($message));
                    exit;
                }
            } else {
                // Rediriger vers une page appropriée
            }
        } else {
            $message = "Veuillez vous connecter pour créer une transaction.";
            header('Location: /?message=' . urlencode($message));
        }
    }

    public function saveTransaction()
    {
        if (isset($_SESSION['userData'])) {

            $transaction = new Transaction;
            $productId = intval($_POST['productReceiverId']);
            $receiverId = intval($_POST['receiverId']);
            $receiverTrokos = intval($_POST['receiverTrokos']);
            $exchangeProductId = $_POST['exchangeProductId'];
            $productSender = $transaction->getProductById($exchangeProductId);
            $senderTrokos = $productSender['trokos'];
            $quality = ($receiverTrokos - $senderTrokos);
            $is_validate = false;
            $id= null;
            $userId = $_SESSION['userData']['id'];
            $transaction->hydrate($id, $receiverId, $userId, $productId, $exchangeProductId, $is_validate, $quality);
            $transaction->save();

            echo "Insertion en BDD";
            $message = "Votre proposition de transaction a bien été effectué.";
            header('Location: /displayProducts?message=' . urlencode($message));        
        } else {
            $message = "Veuillez vous connecter pour créer une transaction.";
            header('Location: /displayProducts?message=' . urlencode($message));
        }
    }
    
    
}

  
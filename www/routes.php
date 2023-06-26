<?php

return [
    '/' => [
    'controller' => 'Main',
    'action' => 'index'
    ],

    '/usercreateprofile' => [
    'controller' => 'User',
    'action' => 'userCreateProfile'
    ],

    '/uservalidprofile' => [
    'controller' => 'User',
    'action' => 'userValidProfile'
    ],

    '/userprofile' => [
    'controller' => 'User',
    'action' => 'userProfile'
    ],

    '/userinterface' => [
    'controller' => 'User',
    'action' => 'userInterface'
    ],

    '/login' => [
        'controller' => 'User',
        'action' => 'showLoginForm'
    ],

    '/deconnexion' => [
        'controller' => 'User',
        'action' => 'deconnexion'
    ],

    '/contact' => [
    'controller' => 'User',
    'action' => 'contact'
    ],

    '/validcontact' => [
        'controller' => 'User',
        'action' => 'validContact'
        ],

    '/usermodifyprofile' => [
        'controller' => 'User',
        'action' => 'userModifyProfile'
    ],

    '/userdeleteprofile' => [
        'controller' => 'User',
        'action' => 'userDeleteProfile'
    ],

    '/createproduct' => [
        'controller' => 'Product',
        'action' => 'createProduct'
    ],

    '/deleteproduct' => [
        'controller' => 'Product',
        'action' => 'deleteProduct'
    ],

    '/modifyproduct' => [
        'controller' => 'Product',
        'action' => 'modifyProduct'
    ],

    '/displaynewusers' => [
        'controller' => 'Moderator',
        'action' => 'displaynewusers'
    ],

    '/validuser' => [
        'controller' => 'Moderator',
        'action' => 'validuser'
    ],

    '/displaynewproducts' => [
        'controller' => 'Moderator',
        'action' => 'displaynewproducts'
    ],

    '/validproduct' => [
        'controller' => 'Moderator',
        'action' => 'validproduct'
    ],

    '/displayproducts' => [
        'controller' => 'Product',
        'action' => 'displayproducts'
    ],

    '/displaydetailsproduct' => [
        'controller' => 'Product',
        'action' => 'displayProductDetails'
    ],

    '/createtransaction' => [
        'controller' => 'Transaction',
        'action' => 'createTransaction'
    ],

    '/savetransaction' => [
        'controller' => 'Transaction',
        'action' => 'saveTransaction'
    ],

    '/validatetransaction' => [
        'controller' => 'Transaction',
        'action' => 'validateTransaction'
    ],

    '/forgotpassword' => [
        'controller' => 'User',
        'action' => 'forgotPassword'
    ],

];

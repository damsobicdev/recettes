<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recette cuisine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main-container">
 <?php

/***************************************************************
*                           USERS                              * 
***************************************************************/

// USERS : 
    $users = [
        'damien' => [
            'full_name' => 'Damien lamarre',
            'email' => 'lamarredamien01@gmail.com',
            'age'=> 34,
            'is_admin' => true,
        ],
        'giulia' => [
            'full_name' => 'Giulia Lamarre', 
            'email' => 'giulia.lam@hotmail.com', 
            'age' => 4,
            'is_admin' => true,
        ], 
        'silene' => [
            'full_name' => 'Silene nigay-virion', 
            'email' => 'silene.web96@gmail.com', 
            'age'=> 28, 
            'is_admin'=> false,
        ], 
        'helene' => [
            'full_name' => 'Helene Caridi', 
            'email' => 'helene.caridi@laposte.net', 
            'age' => 58,
            'is_admin' => false, 
        ],
        'olivier' => [
            'full_name' => 'Olivier Versaevel', 
            'email' => 'mind.ferriel@outlook.fr', 
            'age' => 62,
            'is_admin' => false, 
        ],
    ];

/***************************************************************
*                 FUNCTION GET FIRST NAME                      * 
***************************************************************/
// FONTCION pour récupérer le nom d'utilisateur (cle) associé à l'email

//création de la fonction avec 2 arguments email et users(tableau)
function getFirstNameFromEmail($email_verif, $users){
    //création d'un foreach pour parcourir les données de chaque  utilisateurs 
    foreach($users as $firstName => $user_infos){
        // si l'email passé en argument est la même que celle d'un utilisateur 
        if($user_infos['email'] === $email_verif){
            //alors tu me donne son prénom
            return $firstName; 
        }// fin if
    } // fin foreach
    //à défaut nous metteron auteur inconnu
    echo 'Auteur inconnu'; 
} // fin fonction
 
/***************************************************************
*                         RECIPES                              * 
***************************************************************/

// RECETTES : 
    $recipes = [
        ['Cassoulet', '[...]', $users['damien']['email'], true], 
        ['couscous', '[...]', $users['silene']['email'], false], 
        ['poulet basquaise', '[...]', $users['giulia']['email'], true], 
        ['luna farcie', '[...]', $users['helene']['email'], true ], 
        ['pates carbonara','[...]', $users['damien']['email'], true], 
        ['pigeon de paris farcie', '[...]', $users['silene']['email'], true],
        ['chibre de babouin à la truffe', '[...]', $users['damien']['email'], false], 
    ];


    echo $users['damien']['email']; 

 
/***************************************************************
*                         AFFICHAGE                            * 
***************************************************************/
?>

<ul>
    <?php for($item = 0; $item < count($recipes); $item++): ?>

        <?php 
        // Récupérer le prénom (clé) associé à l'email de la recette: 
        $userEmail = $recipes[$item][2];  
        $firstName = getFirstNameFromEmail($userEmail, $users)
        ?>
        <li><?php echo $recipes[$item][0]. ' ('.$firstName.') '; ?></li>
        <?php endfor ?>
</ul>
</div>
</body>
</html>
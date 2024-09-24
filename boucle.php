<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
<!-- POLICES -->
<link rel="preconnect" href="https://fonts.googleapis.com">

    
</head>
<body>
    <div class="title-contain">
    
        <h1 class="titre-style">Les rectte de chibron-sur-mer</h1>
    </div>
        <div class="main-container">
                                                                               <!-- PHP : -->
    <?php
/*****************************************************
*                       USERS                        *
*****************************************************/
$users = [
    'damien' => [
        'prenom' => 'Damien',
        'nom' => 'lamarre', 
        'ident' => 'damsobic', 
        'mdp' => 'd4m13n', 
        'email' =>'lamarredamien01@gmail.com',
        'age' => 34, 
        'is_Admin' => true, 

    ],
    'giulia' => [
        'prenom' => 'Giulia',
        'nom' => 'lamarre', 
        'ident' => 'petit-ange', 
        'mdp' => 'g1714', 
        'email' => null,
        'age' => 4, 
        'is_Admin' => true, 

    ],
    'silene' => [
        'prenom' => 'silene',
        'nom' => 'nigay-virion', 
        'ident' => 'silhaine', 
        'mdp' => 's173n3', 
        'email'=>'silene.web96@gmail.com',
        'age' => 28, 
        'is_Admin' => false, 

    ],
    'helene' => [
        'prenom' => 'helene',
        'nom' => 'caridi', 
        'ident' => 'larelou', 
        'mdp' => 'h373n3', 
        'email' => 'helene.caridi@laposte.net',
        'age' => 58, 
        'is_Admin' => false, 

    ],
    'olivier' => [
        'prenom' => 'olivier',
        'nom' => 'versaevel', 
        'ident' => 'olivettom', 
        'mdp' => 'o71v13r', 
        'email' => 'mind.ferriel@outlook.fr',
        'age' => 63, 
        'is_Admin' => true, 

    ],
];
/*****************************************************
*                   GET FIRSTNAME                    *
*****************************************************/
//création d'une fonction pour récupérer le nom de l'utilisateur qui prends 2 arguments l'email  et le tableau users
function getFirstNameFromEmail($email_verif, $users){
    //scan de tous les users :
    foreach($users as $firstName => $user_infos) {
        if($user_infos['email'] === $email_verif) {
            return $firstName; 
        }//fin if 
    }//fin foreach
    echo "Auteur inconnu"; 
} //fin fonction 


/*****************************************************
*                      RECETTES                      *
*****************************************************/
$recipes = [
    'cassoulet' => [
        'titre' => 'cassoulet', 
        'ingredient' => '[...]', 
        'auteur' => $users['damien']['email'], 
        'on_display' => true,
    ], 
    'couscous' => [
        'titre' => 'couscous', 
        'ingredient'=> '[...]', 
        'auteur' => $users['silene']['email'], 
        'on_display' => true, 
    ], 
    'poulet_basq' => [
        'titre' => 'Poulet basquaise', 
        'ingredient' => '[...]', 
        'auteur' => $users['helene']['email'], 
        'on_display' => false,
    ], 
    'luna' => [
        'titre' => 'Luna farcie aux cepes', 
        'ingredient'=> '[...]', 
        'auteur' => $users['giulia']['email'], 
        'on_display' => true, 
    ], 
    'pigeon' => [
        'titre' => 'Pigeon de Paris rotis', 
        'ingredient' => '[...]', 
        'auteur' => $users['silene']['email'], 
        'on_display' => true,
    ], 
    'chibre' => [
        'titre' => 'chibre de babouin à la chibronaise', 
        'ingredient'=> '[...]', 
        'auteur' => $users['damien']['email'], 
        'on_display' => true, 
    ], 
    'pates_carb' => [
        'titre' => 'pâtes carbonara', 
        'ingredient'=> '[...]', 
        'auteur' => $users['giulia']['email'], 
        'on_display' => true, 
    ], 
    'endive' => [
        'titre' => 'endives braisées', 
        'ingredient'=> '[...]', 
        'auteur' => $users['olivier']['email'], 
        'on_display' => true, 
    ], 

];
/***************************************************************
*                         AFFICHAGE                            * 
***************************************************************/
?>
<!--Liste ul -->
<ul>
    <?php foreach($recipes as $recette) : ?>
        <?php
        // récupération du prénom (clé) associé à la recette : 
        $userEmail = $recette['auteur']; 
        $firstName = getFirstNameFromEmail($userEmail, $users); 
        ?>


<!-- LISTE LI -->
 <li>

        <?php 
            echo $recette['titre'] . ' (par : '.$firstName. ' ).'; 
        ?>
    
 </li>

        <?php endforeach; ?>
</ul>

    </div>

    
</body>
</html>
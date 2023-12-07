


<!-- PHP - Les formulaires
Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)  -->






<!-- Exercice 1
Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action='./informations.php' method='get'> 
               
        <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
     
    </form>



</body>
</html>  -->



<!-- Exercice 2
Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


     action = chemin vers le fichier de traitement des données du formulaire -->
    <!-- method = méthode d'envoi des données -->
    <!-- get = envoie les données dans l'url -->
    <!-- post = envoie les données dans le corps de la requête -->
    <!-- <form action='./informations.php' method='post'> 
               
        <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
       
    </form>



</body>
</html> -->


 <!-- Exercice 3
Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='get'> 

                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form>



</body>
</html>

 Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='post'> 

                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form>



</body>
</html> -->


 <!-- Exercice 5
Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom
Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode. -->



 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='get'> 
        <label>civilité</label>
        <select>
        <input type="selct" placeholder="MR ou MME"> -->
        
        <!-- <option value="homme">homme</option>
        <option value="femme">femme</option>
</select>
                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form> -->




<!-- Exercice 6
Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page. -->
<!-- <?php
// $displayForm = True;
// if (isset($_GET['submit'])){
//     $displayForm= False;
// }
// if ($displayForm === True){
?>




 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='get'> 
        <label>civilité</label>
        <select>
        <input type="selct" placeholder="MR ou MME">
        
        <option value="homme">homme</option>
        <option value="femme">femme</option>
</select>
                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form>

<?php
// };
?> -->


<!-- Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->


 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='get'> 
        <input type="file" name="monfichier">
        <label>civilité</label>
        <select>
        <input type="selct" placeholder="MR ou MME">
        
        <option value="homme"></option>
        <option value="femme"></option>
</select>
                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form> -->






<!-- Exercice 8
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='./informations.php' method='get'> 
        <input type="file" name="monfichier">
        <label>civilité</label>
        <select name="select">
        <option value="homme">homme</option>
        <option value="femme">femme</option>
</select>
                <label>Prénom </label>
        <input type="text" placeholder="votre prénom" name="prenom">

        <label>Nom de famille</label>
        <input type="text" placeholder="votre nom de famille" name="nom">

        <button type="submit">Envoyer</button>
    </form>



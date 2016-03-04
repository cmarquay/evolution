<!-- CC BY Project Brevet Evolution -->
<!-- Copyright CC BY 2016 -->
<!-- Brillet Camille -->
<!-- Fillon Aurélien -->
<!-- Foissac Nicola -->
<!-- Hanotel Guillaume -->
<!-- Henry-Brûlé Raphaël -->
<!-- Marquay Christian -->

<!-- Creative Commons Attribution 3.0 France -->
<!-- http://creativecommons.org/licenses/by/3.0/fr/legalcode -->

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?></title>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Brillet Camille, Fillon Aurélien, Foissac Nicola, Hanotel Guillaume, Henry-Brûlé Raphaël, Marquay Christian"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!---- STYLE 1 ---->
    <link title="css1" rel="stylesheet" href="css/style1.css"/>
    <!---- INSERTION DE LA POLICE "Nunito" ---->
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <!---- INSERTION DE LA POLICE "Sevillana" ---->
    <link href='https://fonts.googleapis.com/css?family=Sevillana' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <a href="index.php"><h1>Brevet Evolution</h1></a>

    <!---- MENU DE NAVIGATION ---->
    <nav>
        <ul>

            <li id="menu" ><a href="#">Cours</a></li>
            <li><a href="memo.php">Mémo</a></li>
            <li><a href="#">Quiz</a></li>
            <li><a href="#">Leaderboard</a></li>

            <!---- CONNEXION/INSCRIPTION ---->

            <div>
                <li><a href="#">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
            </div>

        </ul>
    </nav>
</header>




           <!---- MENU COURS ---->      
            
    <div id="SousListe1" class="nav1">             
        <ul>
            <li id="Algèbre"><a href="#">Algèbre</a> </li>
            <li id="Géométrie"><a href="#">Géométrie</a></li>
        </ul>     
    </div>  
    
   
    
    
    <!---- COURS ALGEBRE ---->
    <div id="SousListeAlgèbre" class="nav2">
        <ul>
                <li id="NotionFonction"><a href="notion_fonction.php">Notion de fonction</a></li>
                <li id="FonctionLineaire"><a href="fonction_affine_lineaire.php">Fonction linéaire, fonction affine</a></li>
                <li id="Statistique"><a href="statistique.php">Statistiques</a></li>
                <li id="Probabilité"><a href="probabilite.php">Probabilités</a></li>
                <li id="Nombres"><a href="entiers_rationnels.php">Nombres entiers et rationnels</a></li>
                <li id="Calculs"><a href="calculs_radicaux.php">Calculs élémentaires sur les radicaux</a></li>
                <li id="Ecritures"><a href="ecritures_litterales.php">Écritures littérales</a></li>
                <li id="Equations"><a href="equations_inequations.php">Équations et inéquations du premier degré</a></li>
        </ul>  
    </div>
    <!------------------------------>
    
    

    
    <!-- COURS GEOMETRIE -->
    <div id="SousListeGéométrie" class="nav2">
        <ul>
                <li id="Figures"><a href="figures_planes.php">Figures planes</a></li>
                <li id="ConfigurationEspace"><a href="configuration_espace.php">Configurations dans l’espace</a></li>  
                <li id="Aires"><a href="aires_volumes.php">Aires et volumes</a></li>
                <li id="Grandeurs"><a href="grandeurs_changements.php">Grandeurs composées, changement d’unités</a></li>  
        </ul>
    </div>
    
    
    
    
    


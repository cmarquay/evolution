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
            <li><a href="#">Mémo</a></li>
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
                <li id="NotionFonction"><a href="#">Notion de fonction</a></li>
                <li id="FonctionLineaire"><a href="#">Fonction linéaire, fonction affine</a></li>
                <li id="Statistique"><a href="#">Statistiques</a></li>
                <li id="Probabilité"><a href="#">Probabilités</a></li>
                <li id="Nombres"><a href="#">Nombres entiers et rationnels</a></li>
                <li id="Calculs"><a href="#">Calculs élémentaires sur les radicaux</a></li>
                <li id="Ecritures"><a href="#">Écritures littérales</a></li>
                <li id="Equations"><a href="#">Équations et inéquations du premier degré</a></li>
        </ul>  
    </div>
    <!------------------------------>
    
    

    
    <!-- COURS GEOMETRIE -->
    <div id="SousListeGéométrie" class="nav2">
        <ul>
                <li id="Figures"><a href="#">Figures planes</a></li>
                <li id="ConfigurationEspace"><a href="#">Configurations dans l’espace</a></li>  
                <li id="Aires"><a href="#">Aires et volumes</a></li>
                <li id="Grandeurs"><a href="#">Grandeurs composées, changement d’unités</a></li>  
        </ul>
    </div>
    
    
    
    
    
     <!-------------------SOUS LISTE ALGEBRE---------------------------------->
    
    <div id="SousListeNotionFonction" class="nav3">
        
        <ul>
            <h3>Notion de Fonction</h3>
            <li><a href="notion_fonction.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeFonctionsLineaire" class="nav3">
        <ul>
        <h3>Fonction linéaire, fonction affine</h3>
        
            <li><a href="fonction_affine_lineaire.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeStatistique" class="nav3">
        <ul>
        <h3>Statistiques</h3>
        
            <li><a href="statistique.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeProbabilité" class="nav3">
        <ul>
        <h3>Probabilités</h3>
        
            <li><a href="probabilite.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeNombres" class="nav3">
        <ul>
        <h3>Nombres entiers et rationnels</h3>
        
            <li><a href="entiers_rationnels.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeCalculs" class="nav3">
        <ul>
        <h3>Calculs élémentaires sur les radicaux</h3>
        
            <li><a href="calculs_radicaux.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeEcritures" class="nav3">
        <ul>
        <h3>Ecritures littérales</h3>
        
            <li><a href="ecritures_litterales.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div id="SousListeEquations" class="nav3">
        <ul>
        <h3>Equations et inéquations du premier degré</h3>
        
            <li><a href="equations_inequations.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
        

    
    
     <!----------------------------------------------------->
    
    
    
    <!-------------------SOUS LISTE GEOMETRIE---------------------------------->
    
    <div  id="SousListeFigures" class="nav3">
        <ul>
        <h3>Figures planes</h3>
        
            <li><a href="figures_planes.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
   </div>
    
    <div  id="SousListeConfigurationEspace" class="nav3">
        <ul>
        <h3>Configurations dans l'espace</h3>
        
            <li><a href="configuration_espace.php">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div  id="SousListeAires" class="nav3">
        <ul>
        <h3>Aires et volumes</h3>
        
            <li><a href="#">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    <div  id="SousListeGrandeurs" class="nav3">
        <ul>
        <h3>Grandeurs composées, changements d'unités</h3>
        
            <li><a href="#">Cours</a></li>
            <li><a href="#">Quiz</a></li>
        </ul>
    </div>
    
    
    <!----------------------------------------------------->
    
    


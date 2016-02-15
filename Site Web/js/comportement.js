$(document).ready(init);

function init() {

  
    /*********** FONCTION OUVERTURE NAV 1 *************/
    function openMenu() {
        $("#SousListe1 ul").animate({
            width : '200px'
        });
    }
    /*********** FONCTION FERMETURE NAV 1 *************/
    function closeMenu() {
        $("#SousListe1 ul").animate({
            width : '0px'
        });
    }
    
    /*********** FONCTION OUVERTURE NAV 2 *************/
    function openGéométrie() {
        $("#SousListeGéométrie").animate({
           width : '500px'   
        });
        $("#SousListeGéométrie ul").animate({
           width : '500px'   
        });
    }
     
    function openAlgèbre() {
        $("#SousListeAlgèbre").animate({
           width : '500px'     
        }); 
        $("#SousListeAlgèbre ul").animate({
           width : '500px'             
        });     
    }
    
    /*********** FONCTION FERMETURE NAV 2 *************/  
    function closeAlgèbre() {
        $("#SousListeAlgèbre").animate({
           width :'0px'  
        }); 
        $("#SousListeAlgèbre ul").animate({
           width :'0px'  
        });
    }
    
      function closeGéométrie(){      
          $("#SousListeGéométrie").animate({
           width :'0px'  
        });    
         $("#SousListeGéométrie ul").animate({
           width :'0px'  
        });
    }
    
    
    
        /*********** FONCTION OUVERTURE NAV 3 *************/

    function openNotionFonction(){
        $("#SousListeNotionFonction").animate({
            width : '300px'
        });
        $("#SousListeNotionFonction ul").animate({
            width : '300px'
        });  
    }
    
     function openFonctionLineaire(){
        $("#SousListeFonctionsLineaire").animate({
            width : '300px'
        });
        $("#SousListeFonctionsLineaire ul").animate({
            width : '300px'
        });  
    }
    
     function openStatistique(){
        $("#SousListeStatistique").animate({
            width : '300px'
        });
        $("#SousListeStatistique ul").animate({
            width : '300px'
        });  
    }
    
     function openProbabilité(){
        $("#SousListeProbabilité").animate({
            width : '300px'
        });
        $("#SousListeProbabilité ul").animate({
            width : '300px'
        });  
    }
    
     function openNombres(){
        $("#SousListeNombres").animate({
            width : '300px'
        });
        $("#SousListeNombres ul").animate({
            width : '300px'
        });  
    }
    
     function openCalculs(){
        $("#SousListeCalculs").animate({
            width : '300px'
        });
        $("#SousListeCalculs ul").animate({
            width : '300px'
        });  
    }
    
     function openEcritures(){
        $("#SousListeEcritures").animate({
            width : '300px'
        });
        $("#SousListeEcritures ul").animate({
            width : '300px'
        });  
    }
    
     function openEquations(){
        $("#SousListeEquations").animate({
            width : '300px'
        });
        $("#SousListeEquations ul").animate({
            width : '300px'
        });  
    }
    
     function openFigures(){
        $("#SousListeFigures").animate({
            width : '300px'
        });
        $("#SousListeFigures ul").animate({
            width : '300px'
        });  
    }
    
     function openConfigurationEspace(){
        $("#SousListeConfigurationEspace").animate({
            width : '300px'
        });
        $("#SousListeConfigurationEspace ul").animate({
            width : '300px'
        });  
    }
    
     function openAires(){
        $("#SousListeAires").animate({
            width : '300px'
        });
        $("#SousListeAires ul").animate({
            width : '300px'
        });  
    }
    
     function openGrandeurs(){
        $("#SousListeGrandeurs").animate({
            width : '300px'
        });
        $("#SousListeGrandeurs ul").animate({
            width : '300px'
        });  
    }
    
    
    
    
    
    
    /*********** FONCTION FERMETURE NAV 3 *************/  

    function closeNotionFonction(){
        $("#SousListeNotionFonction").animate({
            width : '0px'
        });
        $("#SousListeNotionFonction ul").animate({
            width : '0px'
        });  
    }
    
     function closeFonctionLineaire(){
        $("#SousListeFonctionsLineaire").animate({
            width : '0px'
        });
        $("#SousListeFonctionsLineaire ul").animate({
            width : '0px'
        });  
    }
    
     function closeStatistique(){
        $("#SousListeStatistique").animate({
            width : '0px'
        });
        $("#SousListeStatistique ul").animate({
            width : '0px'
        });  
    }
    
     function closeProbabilité(){
        $("#SousListeProbabilité").animate({
            width : '0px'
        });
        $("#SousListeProbabilité ul").animate({
            width : '0px'
        });  
    }
    
     function closeNombres(){
        $("#SousListeNombres").animate({
            width : '0px'
        });
        $("#SousListeNombres ul").animate({
            width : '0px'
        });  
    }
    
     function closeCalculs(){
        $("#SousListeCalculs").animate({
            width : '0px'
        });
        $("#SousListeCalculs ul").animate({
            width : '0px'
        });  
    }
    
     function closeEcritures(){
        $("#SousListeEcritures").animate({
            width : '0px'
        });
        $("#SousListeEcritures ul").animate({
            width : '0px'
        });  
    }
    
     function closeEquations(){
        $("#SousListeEquations").animate({
            width : '0px'
        });
        $("#SousListeEquations ul").animate({
            width : '0px'
        });  
    }

         function closeFigures(){
        $("#SousListeFigures").animate({
            width : '0px'
        });
        $("#SousListeFigures ul").animate({
            width : '0px'
        });  
    }
    
     function closeConfigurationEspace(){
        $("#SousListeConfigurationEspace").animate({
            width : '0px'
        });
        $("#SousListeConfigurationEspace ul").animate({
            width : '0px'
        });  
    }
    
     function closeAires(){
        $("#SousListeAires").animate({
            width : '0px'
        });
        $("#SousListeAires ul").animate({
            width : '0px'
        });  
    }
    
     function closeGrandeurs(){
        $("#SousListeGrandeurs").animate({
            width : '0px'
        });
        $("#SousListeGrandeurs ul").animate({
            width : '0px'
        });  
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /****************** OUVERTURE NAV1 **********************/
    $("#menu").click(function(){
        openMenu();
    });

    
    
 
    /****************** OUVERTURE NAV2 ALGEBRE **********************/
    
    $("#Algèbre").click(function(){
        closeNotionFonction();
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        closeFigures();
        closeConfigurationEspace();
        closeAires();
        closeGrandeurs();
        
        setTimeout(closeGéométrie,340);
        setTimeout(openAlgèbre,680);
    });
    
    /******************* OUVERTURE NAV2 GEOMETRIE *********************/
    
    $("#Géométrie").click(function(){  
        closeNotionFonction();
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        closeFigures();
        closeConfigurationEspace();
        closeAires();
        closeGrandeurs();
        
        setTimeout(closeAlgèbre,340);
        setTimeout(openGéométrie,680);
    });
    
    

    /******************* OUVERTURE NAV 3 NOTION DE FONCTION *******************/
    
    $("#NotionFonction").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        
        setTimeout(openNotionFonction,500); 
    });
    
    
       /******************* OUVERTURE NAV 3 FONCTION LINEAIRE *******************/
    
    $("#FonctionLineaire").click(function(){
        
        closeNotionFonction();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        
        setTimeout(openFonctionLineaire,500); 
    });
    
       /******************* OUVERTURE NAV 3 STATISTIQUES *******************/
    
    $("#Statistique").click(function(){
        closeFonctionLineaire();
        closeNotionFonction();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        
        setTimeout(openStatistique,500); 
    });
    
    
       /******************* OUVERTURE NAV 3 PROBABILITE *******************/
    
    $("#Probabilité").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeNotionFonction();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        
        setTimeout(openProbabilité,500); 
    });
    
       /******************* OUVERTURE NAV 3 NOMBRES *******************/
    
    $("#Nombres").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNotionFonction();
        closeCalculs();
        closeEcritures();
        closeEquations();
        
        setTimeout(openNombres,500); 
    });
    
    
       /******************* OUVERTURE NAV 3 CALCULS *******************/
    
    $("#Calculs").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeNotionFonction();
        closeEcritures();
        closeEquations();
        
        setTimeout(openCalculs,500); 
    });
    
    
       /******************* OUVERTURE NAV 3 ECRITURES *******************/
    
    $("#Ecritures").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeNotionFonction();
        closeEquations();
        
        setTimeout(openEcritures,500); 
    });
    
       /******************* OUVERTURE NAV 3 EQUATIONS *******************/
    
    $("#Equations").click(function(){
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeNotionFonction();
        
        setTimeout(openEquations,500); 
    });
    
       /******************* OUVERTURE NAV 3 FIGURES *******************/
    
    $("#Figures").click(function(){
        closeConfigurationEspace()
        closeAires()
        closeGrandeurs()
        
        setTimeout(openFigures,500); 
    });
    
    
    
           /******************* OUVERTURE NAV 3 CONFIGURATION ESPACES *******************/
    
    $("#ConfigurationEspace").click(function(){
        closeFigures()
        closeAires()
        closeGrandeurs()
        
        setTimeout(openConfigurationEspace,500); 
    });
    
    
           /******************* OUVERTURE NAV 3 AIRES *******************/
    
    $("#Aires").click(function(){
        closeConfigurationEspace()
        closeFigures()
        closeGrandeurs()
        
        setTimeout(openAires,500); 
    });
    
    
           /******************* OUVERTURE NAV 3 GRANDEURS *******************/
    
    $("#Grandeurs").click(function(){
        closeConfigurationEspace()
        closeAires()
        closeFigures()
        
        setTimeout(openGrandeurs,500); 
    });
    
    
    
    
    
    
    
    
    
    
    
    
     /****************** FERMETURE *********************/

    $("main,h1").click(function(){
        closeNotionFonction();
        closeFonctionLineaire();
        closeStatistique();
        closeProbabilité();
        closeNombres();
        closeCalculs();
        closeEcritures();
        closeEquations();
        closeFigures();
        closeConfigurationEspace();
        closeAires();
        closeGrandeurs();
        
        setTimeout(closeAlgèbre,340);
        setTimeout(closeGéométrie,340);
        
        setTimeout(closeMenu,680);
  
    });
    
    /********************************************************/
    

    
}
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
    

    /****************** OUVERTURE NAV1 **********************/
    $("#menu").click(function(){
        openMenu();
    });
 
    /****************** OUVERTURE NAV2 ALGEBRE **********************/
    
    $("#Algèbre").click(function(){

        closeGéométrie();
        setTimeout(openAlgèbre,340);
    });
    
    /******************* OUVERTURE NAV2 GEOMETRIE *********************/
    
    $("#Géométrie").click(function(){  

        closeAlgèbre();
        setTimeout(openGéométrie,340);
    });

  
    /****************** FERMETURE *********************/

    $("main,h1").click(function(){

        closeAlgèbre();
        closeGéométrie();
        
        setTimeout(closeMenu,340);
  
    });
    
}
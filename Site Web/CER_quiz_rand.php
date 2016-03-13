<?php
//"√(-2 x -2) =",
function question1(){
	$rand=rand(1,10);
	$enonce="√(-".($rand)." x -".($rand).") =";
	$bonne=$rand;
	
	$mauvaise_list=array(
		0=>"est impossible, la racine carrée n'est définie que pour les nombres positifs",
		1=>($rand)."√(-".($rand).")",
		2=>"√(-".($rand).") x √(-".($rand).")",
		3=>$rand*2);
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
    
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//√(16/49) =
function question2(){
	$rand1=rand(1,10);
	$rand2=rand(1,10);
	$enonce="√(".($rand1*$rand1)."/".($rand2*$rand2).") =";
	$bonne=$rand1/$rand2;
	
	$mauvaise_list=array(
		0=>($rand2)."/".($rand1),
		1=>($rand1)."/ √(".($rand2*$rand2).")",
		2=>"√(-".($rand1).") x √(-".($rand2).")",
		3=>$rand1/2 ."/".$rand2/2);
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}
//√(49 x 25) =
function question3(){
	$rand1=rand(1,10);
	$rand2=rand(1,10);
	$enonce="√(".($rand1*$rand1)."x".($rand2*$rand2).") =";
	$bonne=$rand1*$rand2;
	
	$mauvaise_list=array(
		0=>($rand2)."+".($rand1),
		1=>($rand1)."x √(".($rand2*$rand2).")",
		2=>"√(-".($rand1).") / √(-".($rand2).")",
		3=>$rand1/2 ."*".$rand2/2);
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//√(5929)² ="
function question4(){
	$rand=rand(1,100);
	$enonce="√".($rand*$rand).")² =";
	$bonne=$rand*$rand;
	
	$mauvaise_list=array(
		0=>$rand,
		1=>$rand*$rand/2,
		2=>$rand*2);
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//Si x² = 64, alors
function question5(){
	$rand=rand(1,10);
	$enonce="i x² = ".($rand*$rand).", alors";
	$bonne=$rand*$rand;
	
	$mauvaise_list=array(
		0=>"l'équation admet une solution : x = ".($rand*$rand),
		1=>"l'équation n'a pas de solution",
		2=>"l'équation admet une solution : x = ".$rand,
		3=>"l'équation admet une solution : x = -".$rand);
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//√(20) x √(17) =
function question6(){
	$rand1=rand(1,50);
	$rand2=rand(1,50);
	$enonce="√(".($rand1)." x ".($rand2).") =";
	$bonne="√".$rand1*$rand2;
	
	$mauvaise_list=array(
		0=>($rand2/2)*($rand1/2),
		1=>($rand1)."x √(".($rand2).")",
		2=>($rand2)."x √(".($rand1).")");
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//√(15) / √(28) =
function question7(){
	$rand1=rand(1,50);
	$rand2=rand(1,50);
	$enonce="√(".($rand1)." / ".($rand2).") =";
	$bonne="√".$rand1/$rand2;
	
	$mauvaise_list=array(
		0=>($rand2/2)*($rand1/2),
		1=>($rand1)."/ √(".($rand2).")",
		2=>($rand2)."/ √(".($rand1).")");
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//1 / √(84)=a finir
function question8(){
	$rand1=rand(1,20);
	$rand2=rand(1,20);
	$enonce="1 / √".($rand1*$rand1*$rand2).") =";
	$bonne="1/(".$rand1."√".$rand2.")";
	
	$mauvaise_list=array(
		0=>($rand2/2)*($rand1/2),
		1=>($rand1)."/ √(".($rand2).")",
		2=>($rand2)."/ √(".($rand1).")");
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//√(45) ="
function question9(){
	$rand1=rand(1,50);
	$rand2=rand(1,50);
	$enonce="√(".($rand1*$rand1*$rand2).") =";
	$bonne=$rand1."√".$rand2;
	
	$mauvaise_list=array(
		0=>($rand2/2)*($rand1/2),
		1=>($rand1)."/ √(".($rand2).")",
		2=>($rand2)."/ √(".($rand1).")",
        3=>($rand2)."* √(".($rand1).")");
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}

//"√(3/2) ="

function question10(){
	$rand1=rand(2,50);
	$rand2=rand(2,50);
	$enonce="√(".($rand1)."/".($rand2).") =";
	$bonne="√".($rand1*$rand2)."/".$rand2;
	
	$mauvaise_list=array(
		0=>($rand1*$rand1)."/".($rand2*$rand2),
		1=>($rand2)."√(".($rand1)."/)".($rand2),
		2=>($rand2)."/ √(".($rand1).")",
        3=>($rand1)."* √(".($rand2).")");
	
	shuffle($mauvaise_list);
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enonce"=>$enonce,
		"bonne_rep"=>$bonne_rep,
		"reponses"=>$retour);
}







//print_r(question2());
?>
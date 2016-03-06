<?php

//"(4/3)/(5/4) ="
function question1(){
	$rand=rand(1,20);
    $rand1=rand(1,20);
    $rand2=rand(1,20);
    $rand3=rand(1,20);
	$enoce="(".($rand)."/".($rand1).")/(".($rand2)."/".($rand3).") =";
	$sup=$rand*$rand3;
    $inf=$rand1*$rand2;
    do{
        $pgcd=gmp_gcd($sup,$inf);
        $sup=$sup/$pgcd;
        $inf=$inf/$pgcd;
    }while(gmp_gcd($sup,$inf)!=1);
        
    $bonne=($sup)." / ".($inf);
	
	$mauvaise_list=array(
		0=>($rand * $rand2)."/".($rand1 * $rand3),
		1=>,
		2=>,
		3=>);
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"4 par rapport à 12"
function question2(){
	$rand=rand(1,20);
    $rand1=rand(1,20);
    $enoce=($rand)." par rapport à ".($rand1*$rand);
	    
    $bonne= "est un diviseur";
	
	$mauvaise_list=array(
		0=>"est un multiple",
		1=>"est divisible",
		2=>"est le PGCD",
		3=>"premier");
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"Comment multiplie-t-on deux nombres rationnels ?"
function question3(){
	
	$enoce="Comment multiplie-t-on deux nombres rationnels ?";
	
    $bonne="On multiplie les deux numérateurs entre eux et les deux dénominateurs entre eux";
	
	$mauvaise_list=array(
		0=>"On multiplie le numérateur du premier avec le dénominateur du second et le numérateur du second avec le dénominateur du premier",
		1=>"On additionne les deux numérateurs entre eux et on multiplie les deux dénominateurs entre eux",
		2=>"On multiplie les deux dénominateurs entre eux et on additionne les deux dénominateurs entre eux",
		3=>"On additionne les deux dénominateurs entre eux et on multiplie les deux dénominateurs entre eux");
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"Quel est l'inverse de 5/2 ?"
function question4(){
	$rand=rand(1,20);
    $rand1=rand(1,20);
    $enoce="Quel est l'inverse de ".($rand)."/".($rand1)." ?";
	    
    $bonne= ($rand1)."/".($rand);
	
	$mauvaise_list=array(
		0=>"-".($rand)."/".($rand1),
		1=>"-".($rand)."/-".($rand1),
		2=>"-".($rand1)."/".($rand),
		3=>($rand1)*($rand));
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"Comment soustrait-on deux nombres relatifs ?"
function question5(){
	
	$enoce="Comment multiplie-t-on deux nombres rationnels ?";
	
    $bonne="On multiplie les deux numérateurs entre eux et les deux dénominateurs entre eux";
	
	$mauvaise_list=array(
		0=>"On multiplie le numérateur du premier avec le dénominateur du second et le numérateur du second avec le dénominateur du premier",
		1=>"On additionne les deux numérateurs entre eux et on multiplie les deux dénominateurs entre eux",
		2=>"On multiplie les deux dénominateurs entre eux et on additionne les deux dénominateurs entre eux",
		3=>"On additionne les deux dénominateurs entre eux et on multiplie les deux dénominateurs entre eux");
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"PGCD(20,15)
function question6(){
	$rand=rand(1,100);
    $rand1=rand(1,100);
    $enoce="PGCD(".($rand).",".($rand1).") ?";
	    
    $bonne=gmp_gcd ($rand1,$rand);
	
	$mauvaise_list=array(
		0=>$bonne-rand(1,5),
		1=>$bonne+rand(1,5),
		2=>$bonne-rand(6,10),
		3=>$bonne-rand(6,10));
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//Comment simplifier 36/63
function question7(){
	$rand=rand(1,10);
    $rand1=rand(1,10);
	$rand2=rand(1,10);
    $enoce="Comment simplifier".($rand*$rand2)."/".($rand1*$rand2)." ?";
	    
    $bonne=($rand)."/".($rand1);
	
	$mauvaise_list=array(
		0=>$bonne-rand(1,5),
		1=>$bonne+rand(1,5),
		2=>$bonne-rand(6,10),
		3=>$bonne-rand(6,10));
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

//"Lequel est divisible par 7 ?"
function question8(){
	$rand=rand(1,10);
    $rand1=rand(1,10);
	$rand2=rand(1,10);
    $enoce="Lequel est divisible par".($rand)." ?";
	    
    $bonne=($rand*$rand1);
	
	$mauvaise_list=array(
		0=>$bonne-rand(1,6),
		1=>$bonne+rand(1,6),
		2=>$bonne-rand(8,13),
		3=>$bonne-rand(8,13));
	shuffle($mauvaise_list);
	
	$bonne_rep=rand(0,3);
	$retour=array();
	for($i=0;$i<4;$i++){
		if($i==$bonne_rep)
			$retour[$i]=$bonne;
		else
            $retour[$i]=$mauvaise_list[$i];
	}
    

	return array("enoce"=>$enoce,
		"bonne_rep"=>$bonne_rep,
		"reponce"=>$retour);
}

?>
<?PHP

    
class userC {

	function ajouteruser($user){
		$sql="INSERT INTO utilisateur (nom_prenom, dateNaiss, mail,mdp,gender,tel, photo) values (:nom_prenom,:naiss,:email,:mdp,:gender,:tel,:photo)";
	
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        
        $nompre=$user->getNompre();
        $naiss=$user->getNaiss();
        $tel=$user->getTel();
        $email=$user->getEmail();
        $mdp=$user->getMdp();
    	$photo=$user->getPhoto();
    	$gend=$user->getGender();
		$req->bindValue(':nom_prenom',$nompre);
		$req->bindValue(':naiss',$naiss);	
		$req->bindValue(':email',$email);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':gender',$gend);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':photo',$photo);

		    return $req->execute();
    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function getAllusers(){
		$sql="SElECT * From utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function deleteuser($id){
		$sql="DELETE FROM utilisateur where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function getuser($id){
		$sql="SELECT * from utilisateur where id=$id";
		$db = config::getConnexion();
		try{
		$user=$db->query($sql);
		return $user;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function forget($id){
        $sql="SELECT mdp from utilisateur where tel=$id";
        $db = config::getConnexion();
        try{
            $user=$db->query($sql);
            return $user->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifieruser($user,$id){

	    $sql="UPDATE utilisateur SET nom_prenom=:nom_prenom,dateNaiss=:naiss,mail=:email,mdp=:mdp,gender=:gender,tel=:tel,photo=:photo WHERE id=:id";
        $db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
        $nompre=$user->getNompre();
        $naiss=$user->getNaiss();
        $tel=$user->getTel();
        $email=$user->getEmail();
        $mdp=$user->getMdp();
        $photo=$user->getPhoto();
        $gend=$user->getGender();

        $req->bindValue(':nom_prenom',$nompre);
        $req->bindValue(':naiss',$naiss);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':gender',$gend);
        $req->bindValue(':tel',$tel);
        $req->bindValue(':photo',$photo);
$req->bindValue(':id',$id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupereruser($id){
		$sql="SELECT * from utilisateur where id= $id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>
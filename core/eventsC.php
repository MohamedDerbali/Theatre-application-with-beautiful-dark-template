<?PHP

    
class eventsC {


    function getAllevent(){
        $sql="SElECT * From event";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function getnameEv(){
        $sql="SElECT name_event From event";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

/*
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

    function modifieruser($user,$id){
		$sql="UPDATE utilisateur SET nom = :nom, prenom=:prenom,tel=:tel,email = :email, mdp = :mdp
        		 WHERE id=:id";
		$db = config::getConnexion();
	try{
        $req=$db->prepare($sql);

	    $nom=$user->getNom();
       $prenom=$user->getprenom();
       $tel=$user->gettel();
        $email=$user->getemail();
        $mdp=$user->getmdp();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':email',$email);
		$req->bindValue(':mdp',$mdp);


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
	}*/
}
?>
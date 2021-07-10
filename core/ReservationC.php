<?PHP

    
class ReservationC {

	function Reserve($res){
		$sql="INSERT INTO reservation (userid, eventid,datee,datetwo,comment) values (:userid,:eventid,:datee,:datetwo,:comment)";
	
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       $userId=$res-> getUserid();
            $eventid=$res-> getEventid();
            $datee =$res->getDatee();
       $datetwo=$res-> getDatetwo();
      $comment =$res-> getComment();


		$req->bindValue(':userid',$userId);
		$req->bindValue(':eventid',$eventid);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':datetwo',$datetwo);
		$req->bindValue(':comment',$comment);


		    return $req->execute();
    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function getEventChecked($id){
		$sql="SELECT distinct * FROM event INNER JOIN reservation ON reservation.eventid=event.id WHERE reservation.userid=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
		try{

		$req->execute();
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function getEventUnChecked($id){
        $sql="select * from event left join reservation on reservation.eventid = event.id where reservation.userid is null";
        $db = config::getConnexion();
        $req=$db->prepare($sql);

        try{

            $req->execute();
            return $req;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function deleteuserRes($id){
		$sql="DELETE FROM reservation where id_res= :id";
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


}
?>
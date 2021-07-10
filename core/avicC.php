<?PHP
 include_once "connection/config.php";
    include_once "entities/avis.php";
class avicC {

    function addavis($av){
        $sql="INSERT INTO avis (id_event, id_usr, comment, nbre) values (:id_event,:id_usr,:comment,:nbre)";

        $db = config::getConnexion();
       //pour éléminer les probléme d'ajout sur BD
        try{

            $req=$db->prepare($sql);
            $id_event=$av->getIdEvent();
            $id_usr=$av->getIdUsr();
            $comment=$av->getComment();
            $nbre=$av->getNbre();
            //bind value pour éviter sql injection
            $req->bindValue(':id_event',$id_event);
            $req->bindValue(':id_usr',$id_usr);
            $req->bindValue(':comment',$comment);
            $req->bindValue(':nbre',$nbre);

            return $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
}
?>
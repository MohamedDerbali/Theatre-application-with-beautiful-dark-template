<?PHP


class avis{
 
	
        protected $id_avis;
        protected $id_event;
        protected $id_usr;
        protected $comment;
        protected $nbre;

    /**
     * avis constructor.
     * @param $id_event
     * @param $id_usr
     * @param $comment
     * @param $nbre
     */
    public function __construct($id_event, $id_usr, $comment, $nbre)
    {
        $this->id_event = $id_event;
        $this->id_usr = $id_usr;
        $this->comment = $comment;
        $this->nbre = $nbre;
    }

    /**
     * @return mixed
     */
    public function getIdAvis()
    {
        return $this->id_avis;
    }

    /**
     * @param mixed $id_avis
     */
    public function setIdAvis($id_avis)
    {
        $this->id_avis = $id_avis;
    }

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * @param mixed $id_event
     */
    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;
    }

    /**
     * @return mixed
     */
    public function getIdUsr()
    {
        return $this->id_usr;
    }

    /**
     * @param mixed $id_usr
     */
    public function setIdUsr($id_usr)
    {
        $this->id_usr = $id_usr;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getNbre()
    {
        return $this->nbre;
    }

    /**
     * @param mixed $nbre
     */
    public function setNbre($nbre)
    {
        $this->nbre = $nbre;
    }

}

?>
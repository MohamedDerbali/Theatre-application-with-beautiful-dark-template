<?PHP


class Reservation{
 
	    protected $id_res;
        protected $userid;
        protected $eventid;
        protected $datee;
        protected $datetwo;
        protected $comment;

    /**
     * Reservation constructor.

     * @param $userid
     * @param $eventid
     * @param $datee
     * @param $datetwo
     * @param $comment
     */
    public function __construct($userid, $eventid, $datee, $datetwo, $comment)
    {

        $this->userid = $userid;
        $this->eventid = $eventid;
        $this->datee = $datee;
        $this->datetwo = $datetwo;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getIdRes()
    {
        return $this->id_res;
    }

    /**
     * @param mixed $id_res
     */
    public function setIdRes($id_res)
    {
        $this->id_res = $id_res;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * @param mixed $eventid
     */
    public function setEventid($eventid)
    {
        $this->eventid = $eventid;
    }

    /**
     * @return mixed
     */
    public function getDatee()
    {
        return $this->datee;
    }

    /**
     * @param mixed $datee
     */
    public function setDatee($datee)
    {
        $this->datee = $datee;
    }

    /**
     * @return mixed
     */
    public function getDatetwo()
    {
        return $this->datetwo;
    }

    /**
     * @param mixed $datetwo
     */
    public function setDatetwo($datetwo)
    {
        $this->datetwo = $datetwo;
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

}

?>
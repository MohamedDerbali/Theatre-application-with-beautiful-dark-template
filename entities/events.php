<?PHP


class events{
 
	
        protected $id;
        protected $name_event;
        protected $descr;
        protected $date;
        protected $picture;

    /**
     * events constructor.
     * @param $name_event
     * @param $descr
     * @param $date
     * @param $picture
     */
    public function __construct($name_event, $descr, $date, $picture)
    {
        $this->$name_event = $name_event;
        $this->$descr = $descr;
        $this->$date = $date;
        $this->$picture = $picture;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameEvent()
    {
        return $this->name_event;
    }

    /**
     * @param mixed $name_event
     */
    public function setNameEvent($name_event)
    {
        $this->name_event = $name_event;
    }

    /**
     * @return mixed
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * @param mixed $descr
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
 

}

?>
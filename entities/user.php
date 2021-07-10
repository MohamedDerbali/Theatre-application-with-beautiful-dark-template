<?PHP


class user{
 
	protected $id_usr;
        protected $nompre;
        protected $naiss;
        protected $tel;
        protected $email;
        protected $mdp;
	protected $photo;
protected $gender;

    /**
     * user constructor.
     * @param $nompre
     * @param $naiss
     * @param $tel
     * @param $email
     * @param $mdp
     * @param $photo
     * @param $gender
     */
    public function __construct($nompre, $naiss, $tel, $email, $mdp, $photo, $gender)
    {
        $this->nompre = $nompre;
        $this->naiss = $naiss;
        $this->tel = $tel;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->photo = $photo;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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
    public function getNompre()
    {
        return $this->nompre;
    }

    /**
     * @param mixed $nompre
     */
    public function setNompre($nompre)
    {
        $this->nompre = $nompre;
    }

    /**
     * @return mixed
     */
    public function getNaiss()
    {
        return $this->naiss;
    }

    /**
     * @param mixed $naiss
     */
    public function setNaiss($naiss)
    {
        $this->naiss = $naiss;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


}

?>
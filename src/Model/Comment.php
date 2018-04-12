<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 04/04/18
 * Time: 14:41
 */

namespace Model;


class Comment
{
    private $id;
    private $firstname;
    private $lastname;
    private $date;
    private $email;
    private $wilder;
    private $avatar;
    private $profession;
    private $company;
    private $valid;
    private $like;
    private $question1;
    private $question2;
    private $question3;
    private $jobId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Comment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Comment
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Comment
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
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
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
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
     * @return Comment
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWilder()
    {
        return $this->wilder;
    }

    /**
     * @param mixed $wilder
     * @return Comment
     */
    public function setWilder($wilder)
    {
        $this->wilder = $wilder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     * @return Comment
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     * @return Comment
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     * @return Comment
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param mixed $valid
     * @return Comment
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     * @return Comment
     */
    public function setLike($like)
    {
        $this->like = $like;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion1()
    {
        return $this->question1;
    }

    /**
     * @param mixed $question1
     * @return Comment
     */
    public function setQuestion1($question1)
    {
        $this->question1 = $question1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion2()
    {
        return $this->question2;
    }

    /**
     * @param mixed $question2
     * @return Comment
     */
    public function setQuestion2($question2)
    {
        $this->question2 = $question2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion3()
    {
        return $this->question3;
    }

    /**
     * @param mixed $question3
     * @return Comment
     */
    public function setQuestion3($question3)
    {
        $this->question3 = $question3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param mixed $jobId
     * @return Comment
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }
}
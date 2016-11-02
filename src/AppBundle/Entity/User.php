<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var \AppBundle\Entity\Contact
     */
    private $contacts;


    /**
     * Set contacts
     *
     * @param \AppBundle\Entity\Contact $contacts
     *
     * @return User
     */
    public function setContacts(\AppBundle\Entity\Contact $contacts = null)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     * @return \AppBundle\Entity\Contact
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}

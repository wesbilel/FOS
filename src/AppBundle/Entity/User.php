<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your lastname.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=5,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nomMembre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenomMembre;
    /**
     * @ORM\Column(type="date")
     */
    protected $dateNaissanceMembre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your sexe.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $sexeMembre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your Telephone Number.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max=10,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $numTelMembre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your credit.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $creditMembre;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max=10,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $cinMembre;
    public function __construct()
    {
        parent::__construct();
        // your own logic
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
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * @param mixed $nomMembre
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;
    }

    /**
     * @return mixed
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * @param mixed $prenomMembre
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;
    }

    /**
     * @return mixed
     */
    public function getDateNaissanceMembre()
    {
        return $this->dateNaissanceMembre;
    }

    /**
     * @param mixed $dateNaissanceMembre
     */
    public function setDateNaissanceMembre($dateNaissanceMembre)
    {
        $this->dateNaissanceMembre = $dateNaissanceMembre;
    }

    /**
     * @return mixed
     */
    public function getSexeMembre()
    {
        return $this->sexeMembre;
    }

    /**
     * @param mixed $sexeMembre
     */
    public function setSexeMembre($sexeMembre)
    {
        $this->sexeMembre = $sexeMembre;
    }

    /**
     * @return mixed
     */
    public function getNumTelMembre()
    {
        return $this->numTelMembre;
    }

    /**
     * @param mixed $numTelMembre
     */
    public function setNumTelMembre($numTelMembre)
    {
        $this->numTelMembre = $numTelMembre;
    }

    /**
     * @return mixed
     */
    public function getCreditMembre()
    {
        return $this->creditMembre;
    }

    /**
     * @param mixed $creditMembre
     */
    public function setCreditMembre($creditMembre)
    {
        $this->creditMembre = $creditMembre;
    }

    /**
     * @return mixed
     */
    public function getCinMembre()
    {
        return $this->cinMembre;
    }

    /**
     * @param mixed $cinMembre
     */
    public function setCinMembre($cinMembre)
    {
        $this->cinMembre = $cinMembre;
    }
}
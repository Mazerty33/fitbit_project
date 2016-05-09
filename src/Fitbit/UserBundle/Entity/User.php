<?php

namespace Fitbit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Fitbit\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Fitbit\UserBundle\Entity\Objectives", cascade={"persist"})
     */
    protected $objectives;

    /**
     * Set objectives
     *
     * @param \Fitbit\UserBundle\Entity\Objectives $objectives
     *
     * @return User
     */
    public function setObjectives(\Fitbit\UserBundle\Entity\Objectives $objectives = null)
    {
        $this->objectives = $objectives;

        return $this;
    }

    /**
     * Get objectives
     *
     * @return \Fitbit\UserBundle\Entity\Objectives
     */
    public function getObjectives()
    {
        return $this->objectives;
    }
}

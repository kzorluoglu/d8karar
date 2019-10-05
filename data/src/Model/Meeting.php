<?php
namespace D8Devs\D8Karar\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meetings")
 */
class Meeting {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $tite;

    /**
     * @ORM\Column(type="string")
     */
    protected $attendees;

    /**
     * @ORM\Column(type="string")
     */
    protected $notParticipating;
    
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    protected $date;

}
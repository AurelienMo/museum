<?php

declare(strict_types=1);

/*
 * This file is part of museum
 *
 * (c) Aurelien Morvan <morvan.aurelien@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use App\Entity\Traits\IdentityPersonTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Order
 *
 * @ORM\Table(name="amo_order")
 * @ORM\Entity()
 */
class Order extends AbstractEntity
{
    use IdentityPersonTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $dateVisit;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $orderNumber;

    /**
     * Order constructor.
     *
     * @param string    $firstname
     * @param string    $lastname
     * @param string    $email
     * @param \DateTime $birthDate
     * @param \DateTime $dateVisit
     * @param string    $orderNumber
     *
     * @throws \Exception
     */
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        \DateTime $birthDate,
        \DateTime $dateVisit,
        string $orderNumber
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->dateVisit = $dateVisit;
        $this->orderNumber = $orderNumber;
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return \DateTime
     */
    public function getDateVisit(): \DateTime
    {
        return $this->dateVisit;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
}

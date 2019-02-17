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
 * Class OrderTicket
 *
 * @ORM\Table(name="amo_order_ticket")
 * @ORM\Entity()
 */
class OrderTicket extends AbstractEntity
{
    use IdentityPersonTrait;

    /**
     * @var Order
     *
     * @ORM\ManyToOne(targetEntity="Order")
     * @ORM\JoinColumn(name="amo_order_id", referencedColumnName="id")
     */
    protected $order;

    /**
     * OrderTicket constructor.
     *
     * @param string    $firstname
     * @param string    $lastname
     * @param \DateTime $birthDate
     * @param Order     $order
     *
     * @throws \Exception
     */
    public function __construct(
        string $firstname,
        string $lastname,
        \DateTime $birthDate,
        Order $order
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthDate = $birthDate;
        $this->order = $order;
        parent::__construct();
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }
}

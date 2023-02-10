<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="contrasenia", type="integer", nullable=false)
     */
    private $contrasenia;

    /**
     * @var int
     *
     * @ORM\Column(name="admin", type="integer", nullable=false)
     */
    private $admin;

    /**
     * @var float
     *
     * @ORM\Column(name="dinero", type="float", precision=8, scale=2, nullable=false)
     */
    private $dinero;

    /**
     * @var string
     *
     * @ORM\Column(name="cesta", type="text", length=65535, nullable=false)
     */
    private $cesta;


}

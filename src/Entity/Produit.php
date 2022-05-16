<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", uniqueConstraints={@ORM\UniqueConstraint(name="produit_designation_key", columns={"designation"})}, indexes={@ORM\Index(name="IDX_29A5EC27CD2D7E29", columns={"numfour"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="refprod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="produit_refprod_seq", allocationSize=1, initialValue=1)
     */
    private $refprod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qtitedispo", type="integer", nullable=true)
     */
    private $qtitedispo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="text", nullable=true)
     */
    private $designation;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numfour", referencedColumnName="numfour")
     * })
     */
    private $numfour;


}

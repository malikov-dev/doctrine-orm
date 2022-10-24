<?php
/**
 * @Entity
 * @Table(name="vinni_puh")
 **/
class VinniPuh
{
    /**
     * @OneToOne(targetEntity="VinniEntity", cascade={"persist", "remove"})
     * @JoinColumn(name="vinni_id", referencedColumnName="id")
     * @var VinniEntity
     */
    private $shipment;

    /**
     * @Id
     * @Column(name="vinni_id", type="integer", nullable=false)
     * @var int
     */
    protected $vinni_id;

    /**
     * @Column(type="string", length=100)
     * @var string
     */
    protected $name;

    /**
     * @Column(type="string", length=255)
     * @var string
     */
    protected $email;

    /**
     * @Column(type="string", length=40)
     * @var string
     */
    protected $phone;

    /**
     * @Column(type="string", length=100)
     * @var string
     */
    protected $organization;

    /**
     * @Column(type="string", length=100)
     * @var string
     */
    protected $job;

    /**
     * @Column(type="string", length=40)
     * @var string
     */
    protected $country;

}
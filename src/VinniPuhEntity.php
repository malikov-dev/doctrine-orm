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
     * @GeneratedValue()
     */
    protected $vinni_id;

    /**
     * @request @Column(type="string")
     * @var string
     */
    protected $request;



}
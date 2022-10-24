<?php
/**
 * @Entity
 * @Table(name="vinni")
 **/
class VinniEntity
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", length=50)
     * @var string
     */
    protected $ip;

    // vendor/bin/doctrine orm:schema-tool:update --force
}
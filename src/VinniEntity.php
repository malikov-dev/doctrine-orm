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
     * @Column(type="string", length=50, unique=true)
     * @var string
     */
    protected $name;

    // vendor/bin/doctrine orm:schema-tool:update --force
}
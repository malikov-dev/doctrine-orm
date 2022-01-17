<?php
/**
 * @Entity
 * @Table(name="ds_files_os")
 **/
class DsFilesOsEntity {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=255)
     */
    protected $title;

}
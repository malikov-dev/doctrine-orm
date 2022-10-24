<?php
/**
 * @Entity
 * @Table(name="ds_files_type")
 **/
class DsFilesTypeEntity {

    /**
     * @Id
     * @Column(type="smallint")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=200)
     */
    protected $title;

}
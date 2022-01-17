<?php
/**
 * @Entity
 * @Table(name="ds_files")
 **/
class DsFilesEntity {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="smallint", length=2, options={"unsigned":true})
     */
    protected $os_id;

}
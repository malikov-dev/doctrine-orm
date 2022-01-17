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
     * @Column(type="bigint")
     */
    protected $version;

    /**
     * @Column(type="smallint", options={"unsigned":true})
     */
    protected $type_id;

    /**
     * @Column(type="smallint", options={"unsigned":true})
     */
    protected $os_id;

    /**
     * @Column(type="smallint", options={"unsigned":true})
     */
    protected $customer_id;

    /**
     * @Column(type="string")
     */
    protected $path;

    /**
     * @Column(type="datetime")
     */
    protected $created_at;

}
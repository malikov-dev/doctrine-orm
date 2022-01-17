<?php
/**
 * @Entity
 * @Table(name="ds_files_customer")
 **/
class DsFilesCustomerEntity {

    /**
     * @Id
     * @Column(type="smallint")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=255)
     */
    protected $title;

}
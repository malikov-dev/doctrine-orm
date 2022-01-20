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

    public function setName($name) {
        $this->name = $name;
    }

    public function setVersion($version) {
        $this->version = $version;
    }

    public function setTypeId($type_id) {
        $this->type_id = $type_id;
    }

    public function setOsId($os_id) {
        $this->os_id = $os_id;
    }

    public function setCustomerId($customer_id) {
        $this->customer_id = $customer_id;
    }

    public function setPath ($path) {
        $this->path = $path;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }




    public function getId() {
        return $this->id;
    }

}
<?php
/**
 * @Entity
 * @Table(name="data_blocklist_ip_six")
 **/
class IpEntity
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
    protected $blackIP;

    public function setBlackIP($blackIP) {
        $this->blackIP = $blackIP;
    }

    public function getId() {
        return $this->id;
    }

    public function getBlackIP() {
        return $this->blackIP;
    }
}
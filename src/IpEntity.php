<?php
/**
 * @Entity
 * @Table(name="ds_ip")
 **/
class IpEntity
{
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
     * @Column(type="binary", length=16)
     */
    protected $ip;

    public function setName($name) {
        $this->name = $name;
    }

    public function setIp($ip) {
        $this->ip = "(UNHEX('".$ip."'))";
        $this->ip = $ip;
    }
}
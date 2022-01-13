<?php
/**
* @Entity @Table(name="books")
**/
class Book {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", name="title_book", length=32, unique=true, nullable=true)
     */
    protected $title;

    /**
     * @Column(type="decimal", precision=4, scale=2, nullable=true, options={"unsigned":true, "default":1.01, "comment":"цена книги"})
     */
    protected $price;

    /**
     * @Column(type="smallint", nullable=true)
     */
    protected $pages;

    /**
     * @Column(type="boolean", nullable=true)
     */
    protected $publish;

    /**
     * @Column(type="date", nullable=true)
     */
    protected $created_at;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $updated_at;

    /**
     * @Column(type="object", nullable=true)
     */
    protected $params;

    /**
     * @Column(type="array", nullable=true)
     */
    protected $params_a;

    /**
     * @Column(type="simple_array", nullable=true)
     */
    protected $params_s;

    /**
     * @Column(type="json_array", nullable=true)
     */
    protected $params_j;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function setPublish($publish) {
        $this->publish = $publish;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setParams($params) {
        $this->params = $params;
    }

    public function setParams_a($params_a) {
        $this->params_a = $params_a;
    }

    public function setParams_s($params_s) {
        $this->params_s = $params_s;
    }

    public function setParams_j($params_j) {
        $this->params_j = $params_j;
    }

}
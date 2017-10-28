<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 26.10.2017
 * Time: 22:32
 */

require($_SERVER["DOCUMENT_ROOT"] . '/app/api/dao/AdvertisementDAO.php');

class Advertisement
{
    private $db;
    private $table = 'advertisement';

    public function __construct()
    {
        $this->db = new AdvertisementDAO();
    }

    public function getAllAdvertisements() {
        $this->db->getTable($this->table);
    }
    public function getAdvertisementById($id) {
        $this->db->getAdvertisementByID($id);
    }
    public function deleteAdvertisementById($id) {
        $this->db->deleteAdvertisementById($id);
    }

    public function addAdvertisement($title, $description, $salary, $user_id, $category_id, $localization_id) {
        $this->db->addAdvertisement($title, $description, $salary, $user_id, $category_id, $localization_id);
    }
}
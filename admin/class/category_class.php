<?php
include "database.php";
?>


<?php
class Category
{
    private $db;
    public function __construct()
    {
        // Gọi class Database
        $this->db = new Database();
    }

    public function insert_category($category_name)
    {
        $query = "INSERT INTO table_category (category_name) VALUES ('$category_name')";
        $result = $this->db->insert($query);
        header("Location:category-list.php");
        return $result;
    }

    public function show_category()
    {
        $query = "SELECT * FROM table_category ORDER BY category_id";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_category($category_id)
    {
        $query = "SELECT * FROM table_category WHERE category_id = '$category_id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_category($category_name, $category_id)
    {
        $query = "UPDATE table_category SET category_name = '$category_name' WHERE category_id = '$category_id'";
        $result = $this->db->update($query);
        header("Location:category-list.php");
        return $result;
    }

    public function delete_category($category_id)
    {
        $query = "DELETE FROM table_category WHERE category_id = '$category_id'";
        $result = $this->db->delete($query);
        header("Location:category-list.php");
        return $result;
    }
}
?>
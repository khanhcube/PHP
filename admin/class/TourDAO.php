<?php
require_once 'database.php';

class TourDAO {
    private $conn;
    private $table_name = "tours";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Hiển thị tất cả các tours
    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Thêm một tour mới
    public function create($tour_name, $description, $start_date, $end_date, $price, $max_capacity, $destination_id, $guide_id, $category_id) {
        $query = "INSERT INTO " . $this->table_name . " SET tour_name=:tour_name, description=:description, start_date=:start_date, end_date=:end_date, price=:price, max_capacity=:max_capacity, destination_id=:destination_id, guide_id=:guide_id, category_id=:category_id";
        $stmt = $this->conn->prepare($query);

        // sanitize
        $tour_name=htmlspecialchars(strip_tags($tour_name));
        $description=htmlspecialchars(strip_tags($description));
        $start_date=htmlspecialchars(strip_tags($start_date));
        $end_date=htmlspecialchars(strip_tags($end_date));
        $price=htmlspecialchars(strip_tags($price));
        $max_capacity=htmlspecialchars(strip_tags($max_capacity));
        $destination_id=htmlspecialchars(strip_tags($destination_id));
        $guide_id=htmlspecialchars(strip_tags($guide_id));
        $category_id=htmlspecialchars(strip_tags($category_id));

        // bind values
        $stmt->bindParam(":tour_name", $tour_name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":start_date", $start_date);
        $stmt->bindParam(":end_date", $end_date);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":max_capacity", $max_capacity);
        $stmt->bindParam(":destination_id", $destination_id);
        $stmt->bindParam(":guide_id", $guide_id);
        $stmt->bindParam(":category_id", $category_id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Cập nhật thông tin tour
    public function update($tour_id, $tour_name, $description, $start_date, $end_date, $price, $max_capacity, $destination_id, $guide_id, $category_id) {
        $query = "UPDATE " . $this->table_name . " SET tour_name=:tour_name, description=:description, start_date=:start_date, end_date=:end_date, price=:price, max_capacity=:max_capacity, destination_id=:destination_id, guide_id=:guide_id, category_id=:category_id WHERE tour_id=:tour_id";
        //... (giống như phần thêm mới nhưng có thêm bindParam cho tour_id và sử dụng câu lệnh UPDATE)
    }

    // Xóa một tour
    public function delete($tour_id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE tour_id=:tour_id";
        $stmt = $this->conn->prepare($query);

        // sanitize
        $tour_id=htmlspecialchars(strip_tags($tour_id));

        // bind tour_id of record to delete
        $stmt->bindParam(":tour_id", $tour_id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
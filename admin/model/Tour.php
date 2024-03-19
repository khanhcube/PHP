<?php
class Tour {
    private $tour_id;
    private $tour_name;
    private $description;
    private $start_date;
    private $end_date;
    private $price;
    private $max_capacity;
    private $destination_id;
    private $guide_id;
    private $category_id;

    // Constructor, getters, setters, and any additional methods
    public function __construct($tour_name, $description, $start_date, $end_date, $price, $max_capacity, $destination_id, $guide_id, $category_id) {
        $this->tour_name = $tour_name;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->price = $price;
        $this->max_capacity = $max_capacity;
        $this->destination_id = $destination_id;
        $this->guide_id = $guide_id;
        $this->category_id = $category_id;
    }

    // Example getter
    public function getTourName() {
        return $this->tour_name;
    }

    // Example setter
    public function setTourName($tour_name) {
        $this->tour_name = $tour_name;
    }

    // More getters and setters as needed...
}
?>
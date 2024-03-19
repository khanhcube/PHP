<?php
require_once '../class/TourDAO.php';

// Logic xử lý khi form được submit đi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy data từ POST và gọi hàm create() của TourDAO
    // ...
}

include '../templates/header.php';
?>

<div class="container">
    <h2>Create New Tour</h2>
    <form action="create.php" method="post">
        <!-- Form fields for tour creation -->
        <div>
            <label for="tour_name">Tour Name:</label>
            <input type="text" id="tour_name" name="tour_name" required>
        </div>
        <!-- More fields... -->
        <input type="submit" value="Create">
    </form>
</div>

<?php include '../templates/footer.php'; ?>
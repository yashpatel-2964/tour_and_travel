<?php

$conn = mysqli_connect("localhost","root","","tour");



// Retrieve booking data for the current month

$sql = "SELECT * FROM booking_table WHERE MONTH(book_date)  AND YEAR(book_date) ";
$result = $conn->query($sql);

// Process the booking data and generate the report
$total_revenue = 0;
$num_bookings = 0;
$report_data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $total_revenue += $row['total_amount'];
        $num_bookings++;
        $report_data[] = $row;
    }
}

// Display the report
echo "<h2>Monthly Booking Report</h2>";
echo "<table>";
echo "<tr><th>Booking ID</th><th>Booking Date</th><th>total_Price</th></tr>";
foreach ($report_data as $booking) {
    echo "<tr>";
    echo "<td>".$booking['book_id']."</td>";
    echo "<td>".$booking['journey_date']."</td>";
    echo "<td>".$booking['total_amount']."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<p>Total Bookings: ".$num_bookings."</p>";
echo "<p>Total Revenue: ".$total_revenue."</p>";

// Close the database connection
$conn->close();
?>

<?php include 'includes/header.php'; ?>

<?php
$day = date("N"); 

if ($day <= 5):
    $deal = "Weekday Special: Buy one donut and get the second on us.";
elseif ($day == 6):
    $deal = "Saturday Treat: Enjoy our Bubble Tea Happy Hour all afternoon.";
else:
    $deal = "Sunday Surprise: Receive a complimentary macaron with any drink order.";
endif;

echo "<h2>Weekly Sweet Deals</h2>";
echo "<p style='margin-top:10px; font-size:18px;'>$deal</p>";
?>

<?php include 'includes/footer.php'; ?>

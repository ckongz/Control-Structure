<?php include 'includes/header.php'; ?>

<?php
$day = 'Wednesday';

$offer = match($day) {
    'Monday'   => 'Start the week with 20% off our rich chocolate selections.',
    'Tuesday'  => 'Enjoy 10% off all large candy packs—perfect for sharing.',
    'Wednesday'=> 'Midweek treat: 15% off all bubble tea flavors.',
    'Thursday' => 'A classic favorite: Buy one donut, get the next one free.',
    'Friday'   => 'Sweeten your Friday with 20% off our handcrafted macarons.',
    'Saturday', 
    'Sunday'   => 'Weekend perk: 20% off all mint varieties.',
    default    => 'Browse our counter for today’s special offers.'
};

echo "<h2>Today's Featured Offer</h2>";
echo "<p style='margin-top:10px; font-size:18px;'>$offer</p>";
?>

<?php include 'includes/footer.php'; ?>

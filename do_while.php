<?php include 'includes/header.php'; ?>

<?php
$count = 5;

echo "<h2 class='countdown-title'>Sweet Countdown!</h2>";

do {
    echo "<p class='countdown-text'>Hurry! Only <strong>$count</strong> cupcakes left before they're gone!</p>";
    $count--;
} while($count > 0);

echo "<p class='countdown-text'>Did you grab yours? Don’t let the bubbles win!</p>";
?>

<?php include 'includes/footer.php'; ?>

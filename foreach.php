<?php include 'includes/header.php'; ?>

<?php
$menu = ["Cake" => 50, "Bubble Tea" => 80, "Macaron" => 30, "Donut" => 25];

echo "<h2>Signature Menu & Prices</h2>";
echo "<ul>";

foreach ($menu as $item => $price):
    echo "<li><strong>{$item}</strong> — freshly made, priced at ₱{$price}</li>";
endforeach;

echo "</ul>";

echo "<p style='margin-top:15px;'>Quality treats crafted daily. Pick your favorite.</p>";
?>

<?php include 'includes/footer.php'; ?>

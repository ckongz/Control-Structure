<?php include 'includes/header.php'; ?>

<?php
$treats = ["Chocolate Cake", "Strawberry Milkshake", "Bubble Tea", "Macaron", "Donut"];

echo "<h2> Our Top 5 Must-Try Treats</h2>";
echo "<ul>";

for ($i = 0; $i < count($treats); $i++):
    echo "<li> #".($i+1)." — ".$treats[$i]."… a crowd favorite!</li>";
endfor;

echo "</ul>";

echo "<p style='margin-top:15px;'>Which one are you craving today?</p>";
?>

<?php include 'includes/footer.php'; ?>

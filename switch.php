<?php include 'includes/header.php'; ?>

<?php
$fav = "Cupcake";

switch($fav):
    case "Cupcake":
        $msg = "Cupcakes are delightful and colorful!";
        break;
    case "Macaron":
        $msg = "Macarons are fancy and sweet!";
        break;
    case "Bubble Tea":
        $msg = "Bubble Tea is fun with chewy pearls!";
        break;
    default:
        $msg = "Check our menu for more sweets!";
endswitch;

echo "<h2>Pick Your Sweet</h2>";
echo $msg;
?>

<?php include 'includes/footer.php'; ?>
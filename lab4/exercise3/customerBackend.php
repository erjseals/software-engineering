<?php

echo "<link rel='stylesheet' href='style1.css'>";

$myUsername       = $_POST['username'];
$myPassword       = $_POST['password'];

$PeugotNum      = $_POST['Peugot'];
$BianchiNum     = $_POST['Bianchi'];
$SchwinnNum     = $_POST['Schwinn'];

$PeugotCost     = $PeugotNum * 300;
$BianchiCost    = $BianchiNum * 350;
$SchwinnCost    = $SchwinnNum * 270;

$ShippingIn     = $_POST['shipping'];
$ShippingCost;

if($ShippingIn == "Free")
    $ShippingCost = 0;
elseif($ShippingIn == "Overnight")
    $ShippingCost = 50;
else
    $ShippingCost = 5;

$CustomerTotal  = $PeugotCost + $BianchiCost + $SchwinnCost + $ShippingCost;
echo "<html>";
echo "<body>";
echo "<p> Hi, $myUsername , here's the password you entered </p><br>";

echo "<p>Password: $myPassword</p>";

echo "<br><p>And here's your receipt</p>";

echo "  <table class='table' width = 100%>
            <tr>
                <th></th>
                <th>Quantity</th>
                <th>Cost Per Item</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <th>Peugot</th>
                <td>$PeugotNum</td>
                <td>$300.00</td>
                <td>$$PeugotCost</td>
            </tr>
            <tr>
                <th>Bianchi</th>
                <td>$BianchiNum</td>
                <td>$350.00</td>
                <td>$$BianchiCost</td>
            </tr>
            <tr>
                <th>Schwinn</th>
                <td>$SchwinnNum</td>
                <td>$270.00</td>
                <td>$$SchwinnCost</td>
            </tr>
            <tr>
                <th>Shipping</th>
                <td>Shipping</td>
                <td></td>
                <td>$$ShippingCost</td>
            </tr>
            <tr>
                <td></td>
                <th>Total Cost</th>
                <td></td>
                <th>$$CustomerTotal</th>
            </tr>
        </table>";
echo "</body>";
echo "</html>";
?>

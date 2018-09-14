<?php
if (isset($_POST['proses'])) {
$saran = nl2br($_POST['saran']);
echo "Kritik/saran Anda adalah : <br>";
echo "<font color=gold>$saran</font>";
}
?>
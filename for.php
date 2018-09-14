<?php
#contoh 1
for ($i = 1; $i <= 3; $i++) {
echo "$i ";
}
echo "<br><br>";
#contoh 2
for ($i = 1; ; $i++) {
if ($i > 5) {
break;
}
echo "$i ";
}
echo "<br><br>";
#contoh 3
$i = 1;
for (; ; ) {
if ($i > 7) {
break;
}
echo "$i ";
$i++;
} echo "<br><br>";
#contoh 4
for ($i = 1; $i <= 9; print "$i ", $i++);
?>
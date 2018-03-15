<?php
$kanto = ["東京都", "茨木県", "栃木県", "群馬県", "埼玉県", "千葉県", "神奈川県"];
echo "<select name='area'>\n";
foreach ($area as $kanto) {
    echo "<option>".$area."</option>\n";
}
echo "</select>";

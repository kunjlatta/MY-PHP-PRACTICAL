<?php
$size = 6;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;&nbsp;&nbsp";
    }
    for($k=1;$k<=$i;$k++){
                echo "$k&nbsp;&nbsp;";
    }
echo "<br />";
}
?>
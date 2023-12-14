<?php
function luasLingkaran($jariJari) {
    return 3.14 * $jariJari * $jariJari;
}

$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
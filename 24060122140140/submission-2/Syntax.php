<?php
function print_mhs($arr_mhs){
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Score 1</th><th>Score 2</th><th>Score 3</th><th>rata2</th></tr>";

    foreach ($arr_mhs as $nama_mhs => $nilai) {
        $rata2 = array_sum($nilai) / count($nilai);
        echo "<tr>";
        echo "<td>$nama_mhs</td>";
        echo "<td>$nilai[0]</td>";
        echo "<td>$nilai[1]</td>";
        echo "<td>$nilai[2]</td>";
        echo "<td>$rata2</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$arr_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(98, 65, 74),
    'Nina' => array(67, 56, 84),
    'Aly' => array(98, 85, 84),
    'Fyodor' => array(67, 56, 84),
    
);

print_mhs($arr_mhs);
?>
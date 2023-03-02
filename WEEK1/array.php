<?php
//array indexing 
$ar_buah = ['pisang','jambu','pepaya'];
//mencetak salah satu index array
echo $ar_buah[2];

//catak hitung jumlah data array
echo '<br/> jumlah buah :' .count($ar_buah);

//tambahkan data array
$ar_buah[] = "durian";

//hapus index ke-1
unset($ar_buah[1]);

//ubah index ke dua menjadi buah manggis
$ar_buah[2] = "manggis";

//cetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo"<li>$buah</li>";
}
echo "</ol>";




//array assosiatif
$buah = ["p"=>'pisang',"J"=>'jambu',"A"=>'pepaya'];




?>
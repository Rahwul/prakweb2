<?php
// buat data mahasiswa dan simpan ke dalam array assosiatif
$ns1 = ['id'=>1,'nim'=>"01101",'uts'=>80,'uas'=>90,'tugas'=>95];
$ns2 = ['id'=>2,'nim'=>"02202",'uts'=>85,'uas'=>93,'tugas'=>80];
$ns3 = ['id'=>3,'nim'=>"03303",'uts'=>87,'uas'=>95,'tugas'=>85];

// simpan varible data array asosiatif ke dalam array index
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<!-- buat table dengan element html -->
<center><h3>Daftar Nilai Mahasiswa</h3></center>
<table border="1" width="100%">
      <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>NILAI AKHIR</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>'.$nilai['nim'].'</td>';
            echo '<td>'.$nilai['uts'].'</td>';
            echo '<td>'.$nilai['uas'].'</td>';
            echo '<td>'.$nilai['tugas'].'</td>';
            //tuliskan perhitungan nilai akhir di sini
            $NilaiAkhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            echo '<td>'.number_format($NilaiAkhir,2,',',',').'</td>';
            echo '<tr>';
            $nomor++;
        }
        ?>
      </tbody>
</table>
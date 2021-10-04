<?php
    $kalimat="Saya belajar PHP";
    $kata=explode(" ",$kalimat);
    $jumlahArray=count($kata);
    for ($i=0;$i<$jumlahArray;$i++){
        print "\$kata[$i]=$kata[$i]<BR>";
    }
    $gabung=implode("-",$kata);
    print"<BR>";
    print "\$gabung=$gabung";
?>

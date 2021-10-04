<?
    function tampilAlert($pesan){
        print"<script>alert('Pesan : $pesan');window.history.go(-1);</script>";
    }
    function kuadrat($bilangan){
        $kuadrat=$bilangan*$bilangan;
        $hasil="<script> alert('hasil $bilangan kuadrat = $kuadrat'); window.history.go(-
        1); </script>";
        return $hasil;
    }
    switch($submit){
        case "Tampilkan" : tampilAlert($pesan);
        break;
        case "Kuadrat" : print (kuadrat($bilangan));
        break;
    }
?>

<HTML>
    <HEAD>
        <TITLE> Latihan kedua belas </TITLE>
    </HEAD>
    <BODY style="font-family:Verdana;font-size:10pt;font-weight:bold">
        <FORM METHOD=POST ACTION="latihan12.php">
            Tuliskan Pesan Anda <INPUT TYPE="text" NAME="pesan"> <INPUT TYPE="submit"
            name="submit" value="Tampilkan"><BR><HR>
            Tuliskan Bilangan <INPUT TYPE="text" NAME="bilangan" size=3> <INPUT
            TYPE="submit" name="submit" value="Kuadrat">
        </FORM>
    </BODY>
</HTML>
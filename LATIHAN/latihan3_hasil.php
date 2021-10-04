<HTML>
    <HEAD>
        <TITLE> Hasil Latihan ketiga </TITLE>
    </HEAD>
    <BODY>
        <?php
            $nama = @$_POST['nama'];
            $pesan = @$_POST['pesan'];
            print"<B>Data yang Anda masukkan
            :</B> <BR>"; print"Nama Anda :
            $nama <BR>";
            print"Pesan Anda : $pesan";
        ?>
    </BODY>
</HTML>
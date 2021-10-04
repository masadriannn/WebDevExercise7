<?php
    $nama=@$_POST['nama'];
    $email=@$_POST['email'];
    $submit=@$_POST['submit'];
    if ($submit=="Simpan ke File"){
        $data=fopen("data.txt","a");
        fputs($data,"Nama : $nama \n "); fputs($data,"Email : $email \n ");
        fputs($data," \n");
        fclose($data);
    }
?>

<HTML>
    <HEAD>
        <TITLE> Latihan kesebelas </TITLE>
    </HEAD>
    <BODY>
        <CENTER><H1>Menyimpan Data ke File</H1></CENTER>
        <FORM METHOD=POST ACTION="11.php">
            <TABLE align=center style="font-family:verdana;font-size:10pt">
                <TR>
                <TD>Nama</TD>
                <TD>: <INPUT TYPE="text" NAME="nama" size=40></TD>
                </TR>
                <TR>
                <TD>Email</TD>
                <TD>: <INPUT TYPE="text" NAME="email" size=50></TD>
                </TR>
                <TR>
                <TD colspan=2><INPUT TYPE="submit" name="submit"
                value="Simpan ke File"></TD>
                </TR>
            </TABLE>
        </FORM><BR><BR>
        <CENTER><H1>Hasil Simpanan</H1></CENTER>
        <?php
            $data=fopen("data.txt","r");
            $baca=fread($data,1024);
            $baca=str_replace("\n","<BR>",$baca); print $baca;
        ?>
    </BODY>
</HTML>
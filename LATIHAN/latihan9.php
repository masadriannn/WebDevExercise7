<?php
    $operator= @$_POST['operator'];
    $angka1=@$_POST['angka1'];
    $angka2=@$_POST['angka2'];
    $hasil=0;
    switch ($operator){
        case "+" : $hasil=$angka1+$angka2; break;
        case "-" : $hasil=$angka1-$angka2; break;
        case "*" : $hasil=$angka1*$angka2; break;
        case "/" : if ($angka2==0) $hasil="E"; else $hasil=$angka1/$angka2; break;
    }
?>
<HTML>
    <HEAD>
        <TITLE> Latihan kesembilan </TITLE>
    </HEAD>
    <BODY>
        <FORM METHOD=POST ACTION="9.php">
        <TABLE style="font-family:verdana;font-size:10pt" align=center border=5
        cellspacing=0>
            <TR bgcolor=f1f1f1>
                <TD colspan=4>Kalkulator Sederhana</TD>
            </TR>
            <TR>
                <TD colspan=4><INPUT TYPE="text" NAME="angka1"
                value="<?php print $angka1; ?>"></TD>
            </TR>
            <TR>
                <TD colspan=4><INPUT TYPE="text" NAME="angka2"
                value="<?php print $angka2 ?>"></TD>
            </TR>
            <TR align=center>
                <TD><INPUT TYPE="submit" name="operator" value="+"></TD>
                <TD><INPUT TYPE="submit" name="operator" value="-"></TD>
                <TD><INPUT TYPE="submit" name="operator" value="*"></TD>
                <TD><INPUT TYPE="submit" name="operator" value="/"></TD>
            </TR>
            <TR>
                <TD colspan=4><INPUT TYPE="text" NAME="hasil"
                value="<?php print $hasil?>"></TD>
            </TR>
        </TABLE>
        </FORM>
    </BODY>
</HTML>
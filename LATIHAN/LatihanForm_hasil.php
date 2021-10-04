<HTML>
    <HEAD>
        <TITLE> Hasil Latihan Form Email </TITLE>
    </HEAD>
    <BODY>
        <?php
            $email = @$_POST['email'];
            $situs = @$_POST['situs'];
            print"<B>Data yang Anda masukkan
            :</B> <BR>"; print"Email Anda : <a href='$email'>
            $email </a><BR>";
            print"Situs Anda : <a href='https://$situs'> $situs </a>";
        ?>
    </BODY>
</HTML>
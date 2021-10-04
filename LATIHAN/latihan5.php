<HTML>
    <HEAD>
        <TITLE> Latihan kelima </TITLE>
    </HEAD>
    <BODY>
        <?php
            $nama_hari=date("l");
            if ($nama_hari=="Sunday"){
            print"Hari ini hari Ahad";
            }
            else{
            print"Hari ini bukan hari Ahad";
            }
        ?>
    </BODY>
</HTML>

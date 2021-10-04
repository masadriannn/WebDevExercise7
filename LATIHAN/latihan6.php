<HTML>
    <HEAD>
        <TITLE> Latihan keenam </TITLE>
    </HEAD>
    <BODY>
        <?php
            $nama_hari=date("l");
            switch ($nama_hari){
                case "Sunday" :
                print"Hari ini hari Ahad";
                break;
                default :
                print"Hari ini bukan hari Ahad";
            }
        ?>
    </BODY>
</HTML>
<HTML>
    <HEAD>
        <TITLE> Latihan Switch Case </TITLE>
    </HEAD>
    <BODY>
        <?php
            $nama_hari=date("l");
            switch ($nama_hari){
                case "Sunday" :
                    print"Hari ini hari Ahad";
                break;
                case "Monday" :
                    print"Hari ini hari Senin";
                break;
                case "Tuesday" :
                    print"Hari ini hari Selasa";
                break;
                case "Wednesday" :
                    print"Hari ini hari Rabu";
                break;
                case "Thrusday" :
                    print"Hari ini hari Kamis";
                break;
                case "Friday" :
                    print"Hari ini hari Jum'at";
                break;
                case "Saturday" :
                    print"Hari ini hari Sabtu";
                break;
            }
        ?>
    </BODY>
</HTML>
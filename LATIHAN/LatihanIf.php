<HTML>
    <HEAD>
        <TITLE> Latihan If Else </TITLE>
    </HEAD>
    <BODY>
        <?php
            $nama_hari=date("l");

            if($nama_hari=="Sunday"){
                print"Hari ini hari Ahad";
            }
            else if($nama_hari=="Monday"){
                print"Hari ini hari Senin";
            }
            else if($nama_hari=="Tuesday"){
                print"Hari ini hari Selasa";
            }
            else if($nama_hari=="Wednesday"){
                print"Hari ini hari Rabu";
            }
            else if($nama_hari=="Thursday"){
                print"Hari ini hari Kamis";
            }
            else if($nama_hari=="Friday"){
                print"Hari ini hari Jum'at";
            }
            else{
                print"Hari ini hari Sabtu";
            }
        ?>
    </BODY>
</HTML>
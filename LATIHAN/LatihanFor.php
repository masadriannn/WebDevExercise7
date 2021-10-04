<HTML>
    <HEAD>
        <TITLE> Latihan For Loop </TITLE>
    </HEAD>
    <BODY>
        <?php
            for ($i=1; $i<5; $i++){
                for($j=0; $j<$i; $j++){
                    print'*';
                }
                print'<br>';
            }
        ?>

        <br><br>

        <?php
            for ($k=1; $k<5; $k++){
                for($l=5; $l>$k; $l--){
                    print'&nbsp;&nbsp;';
                }
                for($m=0; $m<$k; $m++){
                    print'*';
                }
                for($n=1; $n<$k; $n++){
                    print'*';
                }
                print'<br>';
            }
        ?>
    </BODY>
</HTML>
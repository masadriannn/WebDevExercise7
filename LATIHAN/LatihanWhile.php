<HTML>
    <HEAD>
        <TITLE> Latihan While Loop </TITLE>
    </HEAD>
    <BODY>
        <?php
        $i=1;
        $j=0;
            while($i<5){
                while($j<$i){
                    print'*';
                    $j++;
                }
                $j=0;
                print'<br>';
                $i++;
            }
        ?>

        <br><br>

        <?php
            $k=1;
            $l=5;
            $m=0;
            $n=1;
            while($k<5){
                while($l>$k){
                    print'&nbsp;&nbsp;';
                    $l--;
                }$l=5;

                while($m<$k){
                    print'*';
                    $m++;
                } $m=0;

                while($n<$k){
                    print'*';
                    $n++;
                }$n=1;
                print'<br>';
                $k++;
            }
        ?>
    </BODY>
</HTML>
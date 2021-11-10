<html>
    <head>
        <?php
            $tambah = $_POST['tambah'];

            if($tambah){
                ?><script>window.print();</script><?php
                echo "<meta http-equiv=refresh content=1;url=index.php>";
            }
            else{
                echo "<meta http-equiv=refresh content=1;url=index.php>";
            }
        ?>

        <script>
            window.print();
            echo "<meta>"
        </script>
        <title>Antrian Pasien</title>
        <?php 
            date_default_timezone_set("Asia/Jakarta");
            $wa = date("H:i");            

            $waktu_pengerjaan = $_POST['pengerjaan'];

            if($waktu_pengerjaan == 1){
                $wp = "30 Menit";
                $wpf = "30 Minutes";
            }
            if($waktu_pengerjaan == 2){
                $wp = "60 Menit";
                $wpf = "1 Hours";
            }
            if($waktu_pengerjaan == 3){
                $wp = "120 Menit";
                $wpf = "2 Hours";
            }
        ?>
    </head>
    <body style="">
            <table border="2px solid gray" style="font-size:15px; height:10%; font-weight:bold; font-family:sans-serif;">
                <tr style="text-align:center">
                    <br>
                    <td style="padding: 0 5px 0 5px">Penerimaan Resep</td>
                    <td style="padding: 0 10px 0 10px">Waktu Tunggu</td>
                    <td style="padding: 0 5px 0 5px">Perkiraan Selesai</td>
                </tr>
                <tr style="text-align:center">
                    <td><?php echo $wa?></td>
                    <td><?php echo $wp?></td>
                    <td>
                        <?php 
                            $date = date_create($wa);
                            date_add($date, date_interval_create_from_date_string($wpf));
                            echo date_format($date, 'H:i');
                        ?>
                    </td>
                </tr>
            </table>  
        <?php

        ?>
        <script>
            
        </script>
    </body>
</html>
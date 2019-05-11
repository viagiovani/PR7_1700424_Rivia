<html>
<head>
<title>Kereta Join</title>
</head>

<body>

<h4>Left Join Lokomotif dan Kursi</h4>
    <table border = 1>
        <tr>
            <th>kd_kereta</th>
            <th>nama</th>
            <th>kode_kursi</th>
            <th>kode_gerbong</th>
        </tr>
        <?php //var_dump($left); die;?>
        <?php foreach ($left as $key) { ?>
        <tr>
            <td><?= $key['kd_kereta']?></td>
            <td><?= $key['nama_kereta']?></td>
            <td><?= $key['kd_kursi']?></td>
            <td><?= $key['kd_gerbong']?></td>
        
        </tr>
    
        <?php }?>
    </table>

<h4>Right Join Kursi dan Gebong</h4>
    <table border = 1>
        <tr>
            <th>kd_kursi</th>
            <th>kd_gerbong</th>
            <th>kd_kereta</th>
            <th>nama</th>
        </tr>
        
        <?php foreach ($right as $key) { ?>
        <tr>
            <td><?= $key['kd_kursi']?></td>
            <td><?= $key['kd_gerbong']?></td>
            <td><?= $key['kd_kereta']?></td>
            <td><?= $key['nama_gerbong']?></td>
        
        </tr>
    
        <?php }?>
    </table>

<h4>Inner Join Lokomotif, Kursi, Gerbong</h4>
    <table border = 1>
        <tr>
            <th>kd_kereta</th>
            <th>nama_kereta</th>
            <th>kd_kursi</th>
            <th>kd_gerbong</th>
            <th>nama_gerbong</th>
        </tr>
        
        <?php foreach ($inner as $key) { ?>
        <tr>
            <td><?= $key['kd_kereta']?></td>
            <td><?= $key['nama_kereta']?></td>
            <td><?= $key['kd_kursi']?></td>
            <td><?= $key['kd_gerbong']?></td>
            <td><?= $key['nama_gerbong']?></td>
        
        </tr>
    
        <?php }
        ?>
    </table>

    
</body>


</html>
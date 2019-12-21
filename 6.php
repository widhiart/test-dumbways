<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "count";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Koneksi ke database Gagal: " . $conn->connect_error);
    }

    $id_caleg = @$_REQUEST['vote_caleg'];
    if ($id_caleg !== null) {
        $sqlVote = "UPDATE `tb_caleg` SET `earned_vote` = `earned_vote` + 1 WHERE `tb_caleg`.`id` = ".$id_caleg;
        $conn->query($sqlVote);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="card-deck mb-3 text-center">
    <div class="container">
        <?php 
            $sql = "SELECT * FROM tb_caleg";
            $jalankan = $conn->query($sql);
        ?>
        <?php while ($row = $jalankan->fetch_array()): ?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?= $row['name']; ?></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Perolehan Suara : <?= $row['earned_vote']; ?></li>
                    </ul>
                    <a href="index.php?vote_caleg=<?= $row['id']; ?>" class="btn btn-lg btn-block btn-primary">Tambah</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
  </div>
</body>
</html>
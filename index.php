<?php
    require_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Monitoring</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <section>
        <h4 class="title">Project Monitoring</h4>
        
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">PROJECT NAME</th>
                    <th scope="col">CLIENT</th>
                    <th scope="col">PROJECT LEADER</th>
                    <th scope="col">START DATE</th>
                    <th scope="col">END DATE</th>
                    <th scope="col">PROGRESS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query=mysqli_query($con,"SELECT * FROM monitoring");
                    while($record=mysqli_fetch_array($query)) {
                ?>
                
                <tr class="active">
                    <td>
                        <?php
                            echo $record['project_name'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $record['client'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $record['project_leader'];
                            echo "<br>";
                            echo $record['email'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $record['start_date'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $record['end_date'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $record['progress'] . "%";
                        ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $record["id"]; ?>" class="btn btn-success btn-sm" id="modal" onclick="return confirm('Yakin ingin mengedit data ini?');">Edit</a> 
                        <a href="hapus.php?id=<?= $record["id"]; ?>" class="btn btn-danger btn-sm" id="delete_link" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>       
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
        <form name="tambahdata"action="tambah_data.php" method="post">
            <input type="submit" class="btn btn-primary" value="Input Data" name="submit">
        </form>
    </section>
</body>
</html>
<?php
    mysqli_close($con);
?>

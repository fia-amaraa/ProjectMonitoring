<?php
    require_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Monitoring</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <section>
        <h4 class="title">Input Data</h4>
        
        <div class="container">
            <form class="form-horizontal" action="tambah_data.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="project_name">Project Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="project_name" placeholder="Enter Project Name" name="project_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="client">Client:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="client" placeholder="Enter Client" name="client" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="project_leader">Project Leader:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="project_leader" placeholder="Enter Project Leader" name="project_leader" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">          
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="start_date">Start Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="end_date">End Date:</label>
                    <div class="col-sm-10">          
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="Submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    
    <?php
    if(isset($_POST['Submit'])) {
        $project_name = $_POST['project_name'];
        $client = $_POST['client'];
        $project_leader = $_POST['project_leader'];
        $email = $_POST['email'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        
        include_once("koneksi.php");
                
        $result = mysqli_query($con, "INSERT INTO monitoring(project_name,client,project_leader,email,start_date,end_date) VALUES('$project_name','$client','$project_leader','$email','$start_date','$end_date')");
    ?>

        <script>
            alert("Data Sukses Ditambahkan");
            window.location='index.php';
        </script>

    <?php
        }
    ?>
    </section>
</body>
</section>
</html>

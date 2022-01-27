<?php
include_once("koneksi.php");
 
if(isset($_POST['Update']))
{
  $id = $_POST['id'];
    
  $project_name=$_POST['project_name'];
  $client=$_POST['client'];
  $project_leader=$_POST['project_leader'];
  $email=$_POST['email'];
  $start_date=$_POST['start_date'];
  $end_date=$_POST['end_date'];
        
  $result = mysqli_query($con, "UPDATE monitoring SET project_name='$project_name',client='$client',project_leader='$project_leader',email='$email',start_date='$start_date',end_date='$end_date' WHERE id=$id");
  ?>

  <script>
      alert("Data Sukses Diedit");
      window.location='index.php';
  </script>

<?php
  }
?>
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($con, "SELECT * FROM monitoring WHERE id=$id");
while($record=mysqli_fetch_array($result))
{
  $project_name = $record['project_name'];
  $client = $record['client'];
  $project_leader = $record['project_leader'];
  $email = $record['email'];
  $start_date = $record['start_date'];
  $end_date = $record['end_date'];
}
?>
<html>
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
    <h4 class="title">Edit Data</h4>
    <div class="container">
      <form class="form-horizontal" action="edit.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="project_name">Project Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="project_name" placeholder="Enter Project Name" name="project_name" value="<?php echo $project_name; ?>" required />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="client">Client:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="client" placeholder="Enter Client" name="client" value="<?php echo $client; ?>" required />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="project_leader">Project Leader:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="project_leader" placeholder="Enter Project Leader" name="project_leader" value="<?php echo $project_leader; ?>" required />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">          
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="start_date">Start Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date; ?>" required />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="end_date">End Date:</label>
          <div class="col-sm-10">          
            <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $end_date; ?>" required />
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" name="Update" class="btn btn-default">Update</button>
          </div>
        </div>
      </form>
    </div>        
  </section>
</body>
</html>
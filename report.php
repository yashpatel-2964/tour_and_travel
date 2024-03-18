<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>REPORT FOR MACHINE'S ORDER</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
								<?php 

 $conn = mysqli_connect("localhost","root","", "company");
    $qry ="SELECT * FROM machine";
    $result = $conn->query($qry);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Machine Name</label>
								<td><select name="machine_id">

  <option><strong>SELECT MACHINE NAME </strong></option>
  <?php 
  foreach ($options as $option) {
  ?>
  <option value="<?php echo $option['machine_id']; ?>"><?php echo $option['machine_name']; ?> </option>
  <?php 
    }
   ?>

</td>
</select>
</div>
</div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<center>
			<br>
			<?php
			
			echo "<strong>REPORTING DATE : </strong>".date('d-m-y');
			
			?>
			<br>
			<a href="#" onClick="window.print();"> <strong>PRINT REPORT</strong> </a>
			
			
			</center>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>ORDER ID</th>
                                    <th>CUSTOMER ID</th>
                                    <th>MACHINE ID</th>
									                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>MACHINE NAME</th>

                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $con = mysqli_connect("localhost","root","","company");

                                if(isset($_GET['from_date']) && isset($_GET['to_date'])  && isset($_GET['machine_id']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];
									$machine_id = $_GET['machine_id'];


                                    $query = "select o.order_detail_id,o.customer_id,o.machine_id,c.first_name,c.last_name,m.machine_name from order_detail o , customer c , machine m where m.machine_id=o.machine_id AND c.customer_id=o.customer_id  AND order_date BETWEEN '$from_date' AND '$to_date' AND o.machine_id =  '".$machine_id."' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['order_detail_id']; ?></td>
                                                <td><?= $row['customer_id']; ?></td>
                                                <td><?= $row['machine_id']; ?></td>
                                                <td><?= $row['first_name']; ?></td>

									             <td><?= $row['last_name']; ?></td>

                                                <td><?= $row['machine_name']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
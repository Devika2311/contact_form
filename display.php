<html>
    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
        

        <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <script defer src="script.js"></script>
        
        
        <title> contact_form</title>

    </head>
    <body>
        <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>

    <?php
    include 'connect.php';
  	$sql="Select * from contact_form_info";
  	$result=mysqli_query($con,$sql);
  	if($result)
  	{
  		while($row=mysqli_fetch_assoc($result))
  		{
  			$id=$row['id'];
  			$name=$row['name'];
  			$email=$row['email'];
  			$subject=$row['subject'];
            $message=$row['message'];
  			echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$subject.'</td>
      <td>'.$message.'</td>
    </tr>';
  		}
  	}
  	?>
  </tbody>
  <tfoot>
                <tr>
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </tfoot>
</table>
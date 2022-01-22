<!DOCTYPE html>
<html>

<head>

    <title>Employee Information</title>
    <!-- <style> -->
    <script src="jquery.min_.js"></script>
    <link rel="stylesheet" href="bootstrap.min_.css">
    <script src="bootstrap.min_.js"></script>

    <link rel="stylesheet" href="jquery.dataTables.min_.css">
    <!-- </style> -->
    <script type="text/javascript" src="jquery.dataTables.min_.js"></script>
    <script type="text/javascript" src="bootstrap-filestyle.min_.js"> </script>
    <link href="fonts.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#empTable').dataTable();
            $('.file-upload').file_upload();
        });
    </script>
</head>

<body style="margin:20px auto">
    <center>
        <h2><span style="font-size:45px; color: Red ">
                Employee Information</span>
        </h2>
    </center>

    <div class="container">
        <br /><br />
        <div class="row header col-sm-12" style="text-align:center;color:green">
            <span class="pull-left">
                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Add New Employee
                </a></span>

            <div style="height:50px;"></div>
            <table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
                <thead>
                    <!-- <th>
                        <center>Picture</center>
                    </th> -->
                    <th>
                        <center>Name</center>
                    </th>
                    <th>
                        <center>Email</center>
                    </th>
                    <th>
                        <center>Address</center>
                    </th>
                    <th>
                        <center>Phone</center>
                    </th>
                    <th>
                        <center>Join Date</center>
                    </th>
                    <th>
                        <center>Post</center>
                    </th>
                    <th>
                        <center>Salary</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </thead>
                <tbody>
                    <?php
                    include('database.php');
                    $result = $mysqli->query("select * from employee_basics");
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['join_date']; ?></td>
                            <td><?php echo $row['post']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td>

                                <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-edit">
                                    </span> Update </a>&nbsp;

                                <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-trash">
                                    </span> Delete </a>&nbsp;

                                <!-- include edit modal -->
                                <?php include('show_edit_modal.php'); ?>
                                <!-- End -->
                                <!-- include delete modal -->
                                <?php include('show_delete_modal.php'); ?>
                                <!-- End -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- include insert modal -->
        <?php include('show_add_modal.php'); ?>
        <!-- End -->
    </div>
</body>

</html>
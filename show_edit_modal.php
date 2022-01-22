<!-- Edit Model -->

<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Employee Info</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $edit = $mysqli->query("select * from employee_basics where id=" . $row['id']);
                $erow = $edit->fetch_assoc();
                ?>
                <div class="container-fluid">
                    <form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="name" class="form-control" value="<?php echo $erow['name']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
                            </div>
                        </div>

                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Address:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="address" class="form-control" value="<?php echo $erow['address']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Phone:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="phone" value="<?php echo $erow['phone']; ?>">
                            </div>
                        </div>

                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Join Date:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="joindate" value="<?php echo $erow['join_date']; ?>">
                            </div>
                        </div>

                        <div style="height:10px;"></div>


                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Post:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="post" value="<?php echo $erow['post']; ?>">
                            </div>
                        </div>

                        <div style="height:10px;"></div>

                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Salary:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="salary" value="<?php echo $erow['salary']; ?>">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-warning">
                    <span class="glyphicon glyphicon-check"></span> Save </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->
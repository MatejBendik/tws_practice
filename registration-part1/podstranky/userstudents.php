<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Projekt TWS - INSERT - SELECT - UPDATE - DELETE </title>
    <link rel="icon" href="icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">




</head>

<?php

include "connect.php";

if (isset($_SESSION['user'])) {


?>

    <body>


        <!-- Modal -->
        <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="insertcode.php" method="POST">

                        <div class="modal-body">
                            <div class="form-group">

                                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">

                                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
                            </div>

                            <div class="form-group">

                                <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
                            </div>

                            <div class="form-group">

                                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                            </div>

                            <div class="form-group">

                                <input type="number" name="phonenumber" class="form-control" placeholder="Enter Phone Number" required>
                            </div>

                            <div class="form-group">

                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                            <button type="submit" name="insertdata" class="btn btn-success"><i class="fas fa-database"></i> Save Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>




        <!-- ####################################################################################################################### -->

        <!-- EDIT POP UP FORM (Bootstrap MODAL) -->

        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="updatecode.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="update_id" id="update_id" value="<script>document.write(#delete_id)</script>">

                            <div class="form-group">

                                <input type="text" name="firstname" id="fname" class="form-control" placeholder="Enter First Name">
                            </div>

                            <div class="form-group">

                                <input type="text" name="lastname" id="lname" class="form-control" placeholder="Enter Last Name">
                            </div>

                            <div class="form-group">

                                <input type="text" name="email" id="course" class="form-control" placeholder="Enter Course">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phonenumber" id="contact" class="form-control" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                            <button type="submit" name="updatedata" class="btn btn-success"><i class="far fa-save"></i> Update Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- #################################################################################################### -->





        <!-- ####################################################################################################################### -->

        <!-- DELETE POP UP FORM (Bootstrap MODAL) -->

        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="deletecode.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="delete_id" id="delete_id" value="<script>document.write(#delete_id)</script>">

                            <h4> Do you want to Delete this Data ??</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i> NO </button>
                            <button type="submit" name="deletedata" class="btn btn-danger"><i class="fas fa-trash"></i> Yes !! Delete it. </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- #################################################################################################### -->


        <div class="container">
            <div class="jumbotron">
                <div class="card">
                    <h2> Insert - Select - Update - Delete Students </h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                            <i class="fas fa-database"></i>
                            ADD STUDENTS - Popup Window
                        </button>
                        <a href="registration.php" target="_blank" class="btn btn-danger" role="button"><i class="fas fa-database"></i> ADD STUDENTS - New Cart</a>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">


                        <div class="table-responsive" style="zoom:95%">
                            <table id="datatableid" class="table table-bordered table-dark table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Contact</th>
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php

                                        include "connect.php";
                                        $sql = "SELECT * FROM editusers";

                                        $result = $mysql->query($sql);
                                        $user = mysqli_fetch_assoc($result);

                                        while ($rows = $result->fetch_array()) {

                                        ?>
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['firstname']; ?></td>
                                            <td><?php echo $rows['lastname']; ?></td>
                                            <td><?php echo $rows['email']; ?></td>
                                            <td><?php echo $rows['contact']; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success editbtn"><i class="fas fa-edit"></i> EDIT </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger deletebtn" name="deletebtn"><i class="fas fa-trash"></i> DELETE </button>
                                            </td>
                                    </tr>
                                <?php
                                        }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!--table responsive -->
                    </div>
                </div>


            </div>
        </div>

    <?php

} else {
    echo "<br><div class='alert alert-danger' role='alert'>
            <strong>Danger!</strong> Musíte byť prihlásený!
        </div>";
}
    ?>


    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>-->

    <!--<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>-->
    <!--<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>-->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 100, -1],
                    [10, 25, 100, "All"]
                ],
                responsive: true,
                "order": [
                    [0, "desc"]
                ],

                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Student :-)",
                }

            });

        });
    </script>








    <script>
        $(document).ready(function() {

            $('body').on('click', '.deletebtn', function() {

                $('#deletemodal').modal('show', {
                    backdrop: 'true'
                });

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $('body').on('click', '.editbtn', function() {

                $('#editmodal').modal('show', {
                    backdrop: 'true'
                });


                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();


                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#course').val(data[3]);
                $('#contact').val(data[4]);
            });
        });
    </script>


    </body>

</html>
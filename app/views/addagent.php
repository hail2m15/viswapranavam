<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                ADD AGENTS&nbsp;/
            </li>

        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">

        </div>
    </div>

    <!-- register form -->
    <div class="container">
        <div class="card card-register mx-4 ">
            <div class="card-header">Register new agent</div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-7">
                                <label for="exampleInputName"> Name</label>
                                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="name" required="">
                            </div>
                            <div class="col-md-7">
                                <label for="exampleInputLastName">Address</label>
                                <textarea  class="form-control" id="exampleInputAddress"  aria-describedby="nameHelp" placeholder="Enter Address"  rows="3" cols="50" name="address"></textarea>
                            </div>

                            <div class= "col-md-7">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input class="form-control" id="exampleInputPhonenumber" type="text" aria-describedby="mobileHelp" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" placeholder="Enter Mobile Number" name="mobile" required="">
                            </div>
                        </div>  
                    </div>


                    <div class="form-group">
                        <div class="form-row">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block col-md-7" name="save">Register</button>
                </form>
                <?php

                use Core\Error;

if ($data['success']) {
                    echo '<br><div class="alert alert-success">' . $data['success'] . '</div>';
                } else if ($error) {
                    echo Error::display("Registration failed!");
                }
                ?>
            </div>
        </div>
    </div>
    <br>
    <!--table-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>&nbspAGENT LIST</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>    
                        <tr>
                            <th>Username</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data['details'] as $dat) {
                            echo '<tr>';
                            echo '<td>' . $dat->name . '<input type="text" class="name" value="' . $dat->name . '" hidden ></td>';
                            echo '<td>' . $dat->mobile . '<input type="text" class="mobile" value="' . $dat->mobile . '" hidden ></td>';
                            echo '<td>' . $dat->address . '<input type="text" class="address" value="' . $dat->address . '" hidden ></td>';
                            echo '<td><button class="btn btn-info edit" data-toggle="modal" data-target="#editModal">edit</button></td>';
                            echo '<td><button class="btn btn-danger delete">remove</button></td>';
                            echo '</tr>';
                        }
                        ?>        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">UPDATE AGENT DETAILS</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-7">
                                <label for="exampleInputName"> Name</label>
                                <input class="form-control" id="uname" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="uname" required="">
                            </div>
                            <div class="col-md-7">
                                <label for="exampleInputLastName">Address</label>
                                <textarea  class="form-control" id="uaddress"  aria-describedby="nameHelp" placeholder="Enter Address"  rows="3" cols="50" name="uaddress"></textarea>
                            </div>

                            <div class= "col-md-7">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input class="form-control" id="umobile" type="text" aria-describedby="mobileHelp" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" placeholder="Enter Mobile Number" name="umobile" readonly="">
                            </div>
                        </div>  
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-block col-md-4" name="update">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.delete').click(function() {
            var tr = $(this).parent().parent();
            console.log(tr.find('input').val());
            if (confirm('Are you sure ?')) {
                $.post('deleteagent', {'mobile': tr.find('.mobile').val()}, function(data) {
                    tr.remove();

                });
            }
        });
    });

    $('.edit').click(function() {
        var tr = $(this).parent().parent();
        $('#uname').val(tr.find('.name').val());
        $('#umobile').val(tr.find('.mobile').val());
        $('#uaddress').val(tr.find('.address').val());
             
    });

</script>
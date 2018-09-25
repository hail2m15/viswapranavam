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

    <!--table-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>&nbspUSER LIST</div>
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
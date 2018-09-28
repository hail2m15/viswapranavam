
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                HOME
            </li>
            <li class="breadcrumb-item active"></li>
        </ol>

        <div class="row">
            <!--div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-envelope faa-shake animated c"></i>
                        </div>
                        Todays heaing requests!
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="today">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>

            </div>


       
            <div class="col-xl-3 col-sm-6 mb-3">

                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-bell faa-ring animated c"></i>
                        </div>
                       Pending healing requests!
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="reminder">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>


            </div-->

        </div>

    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
        </div>
    </div>

    <div class="card mb-3">

        <div class="card-header">
            <i class="fa fa-table"></i>&nbsp;Current Healing Requests Status</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>    
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Reason</th>       
                            <th>Time Zone</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data['requests'] as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->name . '<input type="text" class="id" value="' . $dat->id . '" hidden > </td>';
                            echo '<td>' . $dat->address . '</td>';
                            echo '<td>' . $dat->age . '</td>';
                            echo '<td>' . $dat->reason . '</td>';
                            echo '<td>' . $dat->timezone . '</td>';
                            $status = $dat->status;
                            $print = '';
                            if ($status == 'R') {
                                $print = 'Requested for healing';
                            } else if ($status == 'A') {
                                $print = 'Approved healing request';
                            } else if ($status == 'H') {
                                $print = 'Healer assigned for healing';
                            } else if ($status == 'S') {
                                $print = 'Scheduled healing';
                            } else if ($status == 'W') {
                                $print = 'Waiting for healing notes';
                            } else if ($status == 'C') {
                                $print = 'Healing done';
                            } else if ($status == 'X') {
                                $print = 'Cancelled';
                            }
                            echo '<td>' . $print . '</td>';
                            echo '<td>'
                            ?> 
                        <a href="detail?id=<?php echo $dat->id ?>"><button type="button" class="btn btn-xs btn-info">view</button></a></td>
                        </form>
                        <?php if ($status == 'R') { ?>
                            <td>   <button class="btn btn-success edit" data-toggle="modal" data-target="#editModal">Assign Healer</button></td>
                        <?php } ?>




                        </tr>
                    <?php }
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
                <h5 class="modal-title" id="ModalLabel">SELECT HEALER</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-7">
                                <input name="id" id="id" hidden="">
                                <label for="exampleInputName">Healer </label>
                                <select class="form-control" name="hid">
                                    <?php
                                    foreach ($data['healers'] as $dat) {
                                        echo '<option value="'.$dat->id.'">'.$dat->name.'</option>';
                                    }
                                    ?>     
                                </select>
                            </div>

                        </div>  
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-block col-md-4" name="assign">Assign</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.delete').click(function () {
            var tr = $(this).parent().parent();
            console.log(tr.find('input').val());
            if (confirm('Are you sure ?')) {
                $.post('deleteagent', {'mobile': tr.find('.mobile').val()}, function (data) {
                    tr.remove();

                });
            }
        });
    });

    $('.edit').click(function () {
        var tr = $(this).parent().parent();
        $('#id').val(tr.find('.id').val());
//        $('#umobile').val(tr.find('.mobile').val());
//        $('#uaddress').val(tr.find('.address').val());

    });

</script>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                Home
            </li>
            <li class="breadcrumb-item active"></li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">

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
            <i class="fa fa-table"></i>&nbsp;Healing Requests</div>
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
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->name . ' </td>';
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
                            } else if ($status == 'D') {
                                $print = 'Healing done';
                            } else if ($status == 'C') {
                                $print = 'Payment Done';
                            }else if ($status == 'X') {
                                $print = 'New session sceduled';
                            }
                            echo '<td>' . $print . '</td>';
                            ?>
                    <td><a href="detail?id=<?php echo $dat->id ?>"><button type="button" class="btn btn-xs btn-info">view</button></a></td>
                </form></tr>
                
                    <?php }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


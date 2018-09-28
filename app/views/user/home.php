
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
    <div class="col-xl-3 col-sm-6 mb-3">

        <div class="card text-white bg-success o-hidden">

            <a class="card-footer text-white clearfix small z-1" href="requestHeal" style="text-decoration: none;">
                <b>Request Healing</b>
                <span class="float-right">
                    <i class="fa fa-medkit"></i>
                </span>
            </a>
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
                        foreach ($data as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->name . ' </td>';
                            echo '<td>' . $dat->address . '</td>';
                            echo '<td>' . $dat->age . '</td>';
                            echo '<td>' . $dat->reason . '</td>';
                            echo '<td>' . $dat->timezone . '</td>';
                            echo '<td>' . $dat->status . '</td>';
                            echo '<td>'
                            ?> <a href="detail?id=<?php echo $dat->id ?>"><button type="button" class="btn btn-xs btn-info">view</button></a></td>



                        </form></tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


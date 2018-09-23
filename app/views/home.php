
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                HOME
            </li>
            <li class="breadcrumb-item active"></li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-envelope faa-shake animated c"></i>
                        </div>
                        <?php
                        $no = 0;
                        foreach ($data['data'] as $dat) {
                            $no = $no + $dat->no;
                        }
                        echo '<div class="mr-5">' . $no . ' New Entries!</div>';
                        ?>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="todays">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>

            </div>


            <!--second-->
            <div class="col-xl-3 col-sm-6 mb-3">

                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-bell faa-ring animated c"></i>
                        </div>
                        <?php
                        echo '<div class="mr-5">' . $data['reminder']->rem . ' Reminder For Today!</div>';
                        ?>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="reminder">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>


            </div>

            <!--end-->
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
            <i class="fa fa-table"></i>&nbsp;TODAYS ENTRY </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>    
                        <tr>
                            <th>Agent name</th>
                            <th>No of entries</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data['data'] as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->name . '<input name="mobile" value="' . $dat->mobile . '" hidden></td>';
                            echo '<td>' . $dat->no . '</td>';
                            echo '<td><button type = "submit" class = "btn btn-info" name="view">View</button> </td>';
                            echo '</form></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home">HOME</a>&nbsp;/&nbsp;ENTRIES
            </li>
        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">
        </div>
    </div>


    <!--table-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>&nbspEntry List</div>
        <div class="card-body">
            <form class="form-inline" method="post" >
                <div class="col-md-4">
                    From
                    <?php
                    if ($data['from']) {
                        echo '<input class="form-control" type="date" name="from" value="' . $data['from'] . '" required>';
                    } else {
                        echo '<input class="form-control" type="date" name="from" required>';
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    To
                    <?php
                    if ($data['to']) {
                        echo '<input class="form-control" type="date" name="to" value="' . $data['to'] . '" required>';
                    } else {
                        echo '<input class="form-control" type="date" name="to" required>';
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    <button type = "submit" class = "btn btn-danger" name="go">Go</button>
                </div>
            </form>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>    
                        <tr>
                            <th>Date and Time</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Reminder</th>
                            <th>Prospect Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>




                    <tbody>
                        <?php
                        foreach ($data['data'] as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->date .' '.$dat->time. '</td>';
                            echo '<td>' . $dat->name . '<input name="id" value="' . $dat->id . '" hidden></td>';
                            echo '<td>' . $dat->address . '</td>';
                            echo '<td>' . $dat->remainder . '</td>';
                            echo '<td>' . $dat->type . '</td>';
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
<div class="content-wrapper">
    <div class="container-fluid">


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
            <i class="fa fa-table"></i>&nbsp;Pending Payment List</div>
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
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data['requests'] as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->name . '<input type="text" name="id" value="' . $dat->id . '" hidden > </td>';
                            echo '<td>' . $dat->address . '</td>';
                            echo '<td>' . $dat->age . '</td>';
                            echo '<td>' . $dat->reason . '</td>';
                            echo '<td>' . $dat->timezone . '</td>';

                            echo '<td>'
                            ?> 

                        <button type="submit" name="paid"value="1" class="btn btn-xs btn-info">Payment done</button></td>
                        </form>
                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="alert alert-primary">
    Admin - Accountant View
</div>
<div class="table-responsive">
        <table class="table table-bordered table2excel" id="dataTable" width="100%" cellspacing="0">

            <thead>    
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cars as $dat) {
                    echo '<tr><form method="post">';
                    echo '<td>' . $dat->name . ' </td>';
                    echo '<td>' . $dat->branch . '</td>';
                    echo '<td>' . $dat->phone1 . '</td>';
                    echo '<td>' . $dat->email . '</td>';
                    echo '<td>'
                    ?> 
                <a href="detail?id=<?php echo $dat->id ?>"><button type="button" class="btn btn-sm btn-xs btn-info">view</button></a>
                <a href="update?id=<?php echo $dat->id ?>"><button type="button" class="btn btn-sm btn-xs btn-warning">update</button></a>
                <a data-toggle="modal" data-target="#delete"><button type="button" class="btn btn-sm btn-xs btn-danger">delete</button></a>
               
        </td>


                </form></tr>
            <?php }
            ?>
            </tbody>
        </table>
    </div>
    </div>

</div>
</div>


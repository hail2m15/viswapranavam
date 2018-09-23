<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home">HOME</a>&nbsp;/&nbsp;BY AGENTS
            </li>

        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">


        </div>
    </div>

    <!--table-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>&nbspAGENT LIST</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>    
                        <tr>
                            <th>Agent Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        foreach ($data as $dat) {
                        echo '<tr><form method="post">';
                        echo '<td>'.$dat->name .'<input name="mobile" value="'.$dat->mobile.'" hidden></td>';
                        echo '<td>'.$dat->mobile.'</td>';
                        echo '<td>'.$dat->address.'</td>';
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
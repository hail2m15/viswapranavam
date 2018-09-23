<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home">HOME</a>&nbsp;/&nbsp;REPORT BY AGENT
            </li>

        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">


        </div>
    </div>

    <!--table-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>&nbsp List</div>
        <div class="card-body">
            <button class = "btn btn-danger btn-block pull-right col-md-1" id="export">Export</button>
            <form class="form-text" method="post" >
                <div class="col-md-3">
                    Agent Name 
                   <?php
                    if ($data['agent']) {
                        echo '<input class="form-control" type="text" name="agent" id="agent" value="'.$data['agent'].'" required>';
                    } else {
                        echo '<input class="form-control" type="text" name="agent" id="agent" required>';
                    }
                    ?>
                </div>
                <div class="col-md-3">
                      
                    From
                    <?php
                    if ($data['from']) {
                        echo '<input class="form-control" type="date" name="from" value="'.$data['from'].'">';
                    } else {
                        echo '<input class="form-control" type="date" name="from">';
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    To
                    <?php
                    if ($data['to']) {
                        echo '<input class="form-control" type="date" name="to" value="'.$data['to'].'" >';
                    } else {
                        echo '<input class="form-control" type="date" name="to" >';
                    }
                    ?>
                </div>
              
                <br>
                
                <div class="col-md-3">
                    <button type = "submit" class = "btn btn-primary btn-block col-md-12" name="go">Go</button>
                </div>
            </form>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table2excel" id="dataTable" width="100%" cellspacing="0">

                    <thead>    
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Area</th>
                            <th>Mobile</th>
                            <th>Present ISP</th>
                            <th>Mode of Service</th>
                            <th>Prospect Type</th>
                            <th>TV connection</th>
 
                        </tr>
                    </thead>




                    <tbody>
                        <?php
                        foreach ($data['data'] as $dat) {
                            echo '<tr><form method="post">';
                            echo '<td>' . $dat->date .' </td>';
                            echo '<td>' . $dat->name .' </td>';
                            echo '<td>' . $dat->address .' ,'.$dat->street.'</td>';
                            echo '<td>' . $dat->area . '</td>';
                            echo '<td>' . $dat->mobile1 . '</td>';
                            echo '<td>' . $dat->isp . '</td>';
                            echo '<td>' . $dat->modeofservice . '</td>';
                            echo '<td>' . $dat->type . '</td>';
                            echo '<td>' . $dat->tv . '</td>';
                            
                            echo '</form></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
   var agent =<?php echo $data['agentnames']; ?>;
    $(document).ready(function() {
        $('#agent').autocomplete({
            source: agent
        });
    });
    
     $('#export').click(function(){
        var date= new Date();
        $(".table2excel").table2excel({
            exclude: ".noExl",
            name: "Report",
            filename: "Report By Agent- "+date,
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true
        });
    });
</script>
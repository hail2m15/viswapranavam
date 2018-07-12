<div class="container">
    <div class="card mb-3 p-2 mt-3">

        <div class="card-block">
            <h4> &nbsp;Accountant - User Payment Details</h4>
        </div>

    </div>
    <div class="card">

        <div class="card-block">
            <div class="hr-theme-slash-2">
                <div class="hr-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                <div class="hr-line"></div>
            </div>
            <br>
            <div class="info-box">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card-info">
                            <div class="card-head">
                              <h6 >User Details</h6>
                            </div>
                            <div class="card-body card-body1">
                                <div class="row">
                                    <div class="col-md-8">
                                            <p>Edward Elric</P>
                                    </div>
                                    <div class="col-md-4">
                                            <h2 class="mb-0" style="color:#7cc456">25</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="card-info">
                            <div class="card-head">
                              <h6>Total Payments Done</h6>
                            </div>
                            <div class="card-body card-body2">
                                <div class="row">
                                    <div class="col-md-8">
                                    <i class="fa fa-check"></i> 
                                    </div>
                                    <div class="col-md-4">
                                            <h2 class="mb-0" style="color:#56afc4">15</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-info">
                            <div class="card-head">
                              <h6>Pending Payments</h6>
                            </div>
                            <div class="card-body card-body3">
                                <div class="row">
                                    <div class="col-md-8">
                                     <i class="fa fa-money"></i> 
                                    </div>
                                    <div class="col-md-4">
                                            <h2 class="mb-0" style="color:#dc5a5a">5</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <h5 class="mb-5">Edward Elric Pending payments</h5>
            <div class="table-responsive">
        <table class="table table-bordered table2excel" id="dataTable" width="100%" cellspacing="0" class="cell-border compact stripe">

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
               
                <!-- foreach ($cars as $dat) {
                    echo '<tr><form method="post">';
                    echo '<td>' . $dat->name . ' </td>';
                    echo '<td>' . $dat->branch . '</td>';
                    echo '<td>' . $dat->phone1 . '</td>';
                    echo '<td>' . $dat->email . '</td>';
                    echo '<td>' -->
                        <!-- <td></td>
                        <td></td>

                        <td></td>

                        <td></td>

                    <td>
                <button type="button" class="btn btn-sm btn-xs btn-info">view</button>
               <button type="button" class="btn btn-sm btn-xs btn-warning">update</button>
                <button type="button" class="btn btn-sm btn-xs btn-danger">delete</button>
                </td> -->

               
        </td>


                </form></tr> 
            </tbody>
        </table>
    </div>
    </div>

</div>
        </div>
    </div>
</div>
<script>
    function Employee ( name, position, salary, office ) {
    this.Name = name;
    this.Email = position;
    this.Phone = salary;
    this.Address = office;
 
};



$(document).ready( function () {



    $('#dataTable').DataTable({
        data: [
        new Employee( "Tiger Nixon", "System Architect", "31231231", "Edinburgh" ),
        new Employee( "Tiger Nixon", "System Architect", "31231231", "Edinburgh" ),
        new Employee( "Tiger Nixon", "System Architect", "31231231", "Edinburgh" ),
        new Employee( "Tiger Nixon", "System Architect", "31231231", "Edinburgh" ),
        new Employee( "Tiger Nixon", "System Architect", "31231231", "Edinburgh" ),
    ],
    columns: [
        { data: 'Name' },
        { data: 'Email' },
        { data: 'Phone' },
        { data: 'Address' }
    ]
    });

} );
</script>
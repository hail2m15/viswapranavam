<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home">HOME</a>&nbsp;/&nbsp;ENTRY DETAILS
            </li>

        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">


        </div>
    </div>


    <section class="content">

        <div class="row ">
            <div class="col-md-12 ">
                <div class="nav-tabs-custom ">



                    <div class="tab-content ">

                        <!-- Tab content 1 -->
                        <div class="wrapper row-offcanvas row-offcanvas-left " >
                            <!-- Left side column. contains the logo and sidebar -->
                            <aside class="left-side sidebar-offcanvas "></aside>
                            <!-- sidebar: style can be found in sidebar.less -->


                            <div class="row margin mx-4 ">
                                <div class="col-md-12 ">
                                    <div class="row ">
                                        <div class="col-sm-12 ">
                                            <div class="box box-primary  ">

                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-4 ">


                                                            <div class="form-group">
                                                                <label>Name:</label>
                                                                <p><?php echo $data->name; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address:</label>
                                                                <p><?php echo $data->address; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Street:</label>
                                                                <p><?php echo $data->street; ?></p>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Area:</label>
                                                                <p><?php echo $data->area; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mobile 1:</label>
                                                                <p><?php echo $data->mobile1; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mobile 2:</label>
                                                                <p><?php echo $data->mobile2; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Landline:</label>
                                                                <p><?php echo $data->landline; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email:</label>
                                                                <p><?php echo $data->email; ?></p>
                                                            </div>
</div>
                                                        <div class="col-sm-4">

                                                            <div class="form-group">
                                                                <label>Present ISP:</label>
                                                                <p><?php echo $data->isp; ?></p>
                                                            </div>  
                                                            <div class="form-group">
                                                                <label>Mode of Service:</label>
                                                                <p><?php echo $data->modeofservice; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Subscription Type:</label>
                                                                <p><?php echo $data->payment; ?></p>
                                                            </div>
                                                              <div class="form-group">
                                                                <label>Expense:</label>
                                                                <p><?php echo $data->expense; ?></p>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label>TV Connection:</label>
                                                                <p><?php echo $data->tv; ?></p>
                                                            </div> 


                                                        
                                                            <div class="form-group">
                                                                <label>Number of Users:</label>
                                                                <p><?php echo $data->users; ?></p>
                                                            </div>
                                                          

                                                            <div class="form-group">
                                                                <label>Satisfaction Level:</label>
                                                                <p><?php echo $data->satisfied; ?></p>
                                                            </div> </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Prospect Type:</label>
                                                                <p><?php echo $data->type; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Created date:</label>
                                                                <p><?php echo $data->date; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Created time:</label>
                                                                <p><?php echo $data->time; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Agent Name:</label>
                                                                <p><?php echo $data->agent; ?></p>
                                                            </div>  
                                                            <div class="form-group">
                                                                <label>Agent Mobile:</label>
                                                                <p><?php echo $data->agentmobile; ?></p>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Reminder:</label>
                                                                <p><?php echo $data->remainder; ?></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Comment:</label>
                                                                <p><?php echo $data->comment; ?></p>
                                                            </div> 


                                                        </div>

                                                        <div>&nbsp;&nbsp;</div>
                                                        <div>

                                                            <div id="map" style="width:1050px;height:200px;background:#ccc"></div>

                                                            <script>
                                                                var longitude = <?php echo $data->longitude; ?>;
                                                                var latitude = <?php echo $data->latitude; ?>;
                                                                function initMap() {
                                                                    var uluru = {lat: latitude, lng: longitude};
                                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                                        zoom: 15,
                                                                        center: uluru
                                                                    });
                                                                    var marker = new google.maps.Marker({
                                                                        position: uluru,
                                                                        map: map
                                                                    });
                                                                }
                                                            </script>
                                                            <script async defer
                                                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnKD2cBL3_hS4Kx-Lr2u0NmsW3aL3ZYzE&callback=initMap">
                                                            </script>                                   
                                                        </div>




                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <style type="text/css">
                            label{ font-weight: bold; }

                        </style>
                        <style type="text/css">

                            .x{ box-shadow: 10px 10px 5px grey;}
                        </style>
                    </div>
                </div>
            </div> 
        </div>

    </section><!-- /.content -->



</div>
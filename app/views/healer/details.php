
<?php
if($data['details']->status == 'X'){
    \Helpers\Url::redirect('healer/completeDetails?id='.$data['details']->id);
} else if($data['details']->status == 'D'){
    \Helpers\Url::redirect('healer/healingComplete?id='.$data['details']->id);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home">HOME</a>&nbsp;/&nbsp;DETAILS
            </li>

        </ol>

    </div>

    <div class="card p-3">

        <div class="tab-content ">
            <div class="tab-pane active p-5" id="home">
                <div class="row cus-detail-card">
                    <div class="col-md-8">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body cus-personalDet">
                                            <h4 class="card-title">
                                                <p> Personal Details
                                                    <i class="fa fa-user pull-right"></i>
                                                </p>
                                            </h4>
                                            <div class="">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" required value="<?php echo $data['details']->name ?>">
                                            </div>
                                            <div class="pt-3">
                                                <label>Age</label>
                                                <input type="text" class="form-control" name="age" value="<?php echo $data['details']->age ?>" required>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body cus-personalDet">
                                            <h4 class="card-title">
                                                <p> Contact Information
                                                    <i class="fa fa-phone pull-right"></i>
                                                </p>
                                            </h4>
                                            <h5 class="card-title"></h5>
                                            <div class="pt-3">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" id="name" name="phone" minlength="10" value="<?php echo $data['details']->ccode . ' ' . $data['user']->phone ?>">
                                            </div>
                                            <div class="pt-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="name" name="email" placeholder="Enter your Email Address" value="<?php echo $data['user']->email ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <p> Schedule Healing
                                                    <i class="fa fa-calendar pull-right"></i>
                                                </p>
                                            </h4>
                                            <form method="post">
                                                <input name="id" value="<?php echo $data['details']->id ?>" hidden="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date :</label>
                                                            <input class="form-control" type="date" name="date" id="date" value="<?php echo $data['details']->sdate ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Time(HH:mm) :</label>
                                                            <input class="form-control" name="time" id="time" placeholder="HH:mm" value="<?php echo $data['details']->time ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block btn-sm col-md-3 pull-right" name="updateS">Schedule</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <p> Address Details
                                                    <i class="fa fa-home pull-right"></i>
                                                </p>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Residential Address:</label>
                                                        <textarea class="form-control" rows="3" id="comment" name="residential"><?php echo $data['details']->address ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Time Zone:</label>
                                                        <input class="form-control" name="" value="<?php echo $data['details']->timezone ?>">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>



                    </div>
                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <p> Status
                                        <i class="fa fa-star pull-right"></i>
                                    </p>
                                </h4>
                                <div class="row mt-2">
                                    <?php
                                    $status = $data['details']->status;
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
                                    }  else if ($status == 'X') {
                                        $print = 'New session sceduled';
                                    }
                                    echo '<input class="form-control" name="" value="' . $print . '">';
                                    ?>
                                </div>   
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <p> Healing Details
                                        <i class="fa fa-medkit pull-right"></i>
                                    </p>
                                </h4>
                                <div class="row mt-2">

                                    <div class="col-md-12">
                                        <form method="post">
                                            <input name="id" value="<?php echo $data['details']->id ?>" hidden="">
                                            <div class="form-group">
                                                <label>Reason for healing:</label>
                                                <textarea class="form-control" name=""> <?php echo $data['details']->reason ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Comments:</label>
                                                <textarea class="form-control" name="advise" id="advise" rows="6"> <?php echo $data['details']->advise ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block btn-sm col-md-7 pull-right" name="updateC">Add Comment</button>
                                        </form>
                                    </div>  
                                </div>   

                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <div class="card-body">

                                <form method="post" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <form method="post">
                                            <input name="id" value="<?php echo $data['details']->id ?>" hidden="">
                                            <div class="form-group">
                                                <label>Please enter your observation in the comment box click 'complete' to finish this healing session</label>

                                            </div><a class="nav-link"  data-toggle="modal" data-target="#completeModal">
                                                <button type="submit" class="btn btn-success btn-block col-md-7 pull-right" name="complete">Complete</button></a>
                                        </form>
                                    </div>     
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- Complete confirmation Modal-->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"completeModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click "complete" if the session is complete else click "cancel".</div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Cancel</button>
                <form method="post">
                    <input name="id" value="<?php echo $data['details']->id ?>" hidden="">
                    <input class="btn btn-success" type="submit" name="complete" value="complete">
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $('input').prop('readonly', true);
    $('textarea').prop('readonly', true);
    $('#advise').prop('readonly', false);
    $('#date').prop('readonly', false);
    $('#time').prop('readonly', false);
</script>


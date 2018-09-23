<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                CHANGE PASSWORD&nbsp;/
            </li>

        </ol>
        <!-- Icon Cards-->

        <div class="col-sm-1 col-sm-1 mb-3">

        </div>
    </div>

    <!-- register form -->
    <div class="container">

        <div class="container">

            <div class="card card-register mx-4 ">
                <div class="card-header">Set New Password</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <div class="form-row">

                                <div class="col-md-7">
                                    <label for="exampleInputLastName">Username</label>
                                    <input class="form-control"  type="text" name="name" aria-describedby="nameHelp" placeholder="Username"  required="required">
                                </div>
                                <div class="col-md-7">
                                    <label for="exampleInputLastName">Old Password</label>
                                    <input class="form-control"  type="password" name="old" aria-describedby="passwordHelp" placeholder="Old Password"  required="required">
                                </div>
                                <div class="col-md-7">
                                    <label for="exampleInputLastName">New Password</label>
                                    <input class="form-control"  type="password" name="new" aria-describedby="passwordHelp" placeholder="New Password" required="required">
                                </div>

                                <div class= "col-md-7">
                                    <label for="exampleInputEmail1">Conform New Password</label>
                                    <input class="form-control"  type="password" name="cnew" aria-describedby="passwordHelp" placeholder="Confirm New Password" required="required">
                                </div>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="form-row">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block col-md-7" name="submit">submit</button>
                    </form>
                    <?php

                    use Core\Error;

if ($error) {
                        echo '<br>' . Error::display($error);
                    } else if ($data) {
                        echo '<br><div class="alert alert-success">' . $data . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>

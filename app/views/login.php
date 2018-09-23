
<div class="container">
    <div class="card card-login mx-auto mt-5 bg-dark transperency">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="post">
                <div class="form-group transperency">
                    <label >Username</label>
                    <input class="form-control" name="username" type="text" aria-describedby="emailHelp" placeholder="Username" required>
                </div>
                <div class="form-group transperency">
                    <label >Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button><br>


            </form>

        </div>
    </div>
    <center>
        <div class="col-md-4 transperency">
            <?php

            use Core\Error;

if ($error) {
                echo Error::display($error);
            }
            ?>
        </div>
    </center>
</div>

<style>
    body{
        background-image: url(images/loginbg.jpg);
    }
</style>
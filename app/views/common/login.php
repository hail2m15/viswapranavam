<div class="background"></div>
<div class="form admin-login">
    <form method="post" class="login-form">
  <h2>Viswapranavam</h2>
  <br>  
  <input type="text" name="username" placeholder="username" required=""/>
  <input type="password" name="password" placeholder="password" required=""/>
    <button type="submit" name="submit">login</button>
  </form>
</div>

    <center>
        <div class="col-md-4">
            <?php

            use Core\Error;

if ($error) {
                echo Error::display($error);
            }
            ?>
        </div>
    </center>

<style>
    .body{
        margin:0px!important;
    }
    .background{
background: url(images/adminbg.jpeg); 
 background-size: cover;
  display: block;
  filter: blur(5px);
  -webkit-filter: blur(3px);
  height: 100vh;
  left: -1px;
  position: fixed;
  right: 0;
  z-index: 1;
  top:0;
    }
.loginform{
    background: rgba(255, 255, 255, 0.35);
  border-radius: 3px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  top: 19vh;
  /* left: 0; */
  position: fixed;
  margin-left: 20px;
  margin-right: 20px;
  right: 18%;
  z-index: 2;
  padding: 0 10px;
  width:30%;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-0 pt-0 navbar-stick navshadow">
  <a class="navbar-brand mr-5 navsplitter" href="#">Viswapranavam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Healer</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Healer</a>
          <a class="dropdown-item" href="#">User</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <span class="navbar-nav">
        <div class="nav-item dropdown pr-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-user"></i> username
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Logout</a>
            <a class="dropdown-item" href="#">Change Password</a>
            </div>
        </div>
    </span>
  </div>
</nav>
<style>

            .navbar{background:#222222;}
.nav-item::after{content:'';display:block;width:0px;height:3px;background:#7bd4b3;transition: 0.2s;}
.nav-item:hover::after{width:100%;}
.navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link,.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover{color:#7bd4b3;}
.nav-link{padding:15px 5px;transition:0.2s;}
.dropdown-item.active, .dropdown-item:active{color:#7bd4b3;}
.dropdown-item:focus, .dropdown-item:hover{background:#7bd4b3;} 
.navbar-dark .navbar-text a{color:#000;}

.bg-cus{
    background: rgba(0,0,0,1);
background: -moz-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 16%, rgba(6,68,45,1) 29%, rgba(0,12,8,1) 42%, rgba(1,14,9,1) 91%, rgba(0,0,0,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,0,0,1)), color-stop(16%, rgba(0,0,0,1)), color-stop(29%, rgba(6,68,45,1)), color-stop(42%, rgba(0,12,8,1)), color-stop(91%, rgba(1,14,9,1)), color-stop(100%, rgba(0,0,0,1)));
background: -webkit-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 16%, rgba(6,68,45,1) 29%, rgba(0,12,8,1) 42%, rgba(1,14,9,1) 91%, rgba(0,0,0,1) 100%);
background: -o-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 16%, rgba(6,68,45,1) 29%, rgba(0,12,8,1) 42%, rgba(1,14,9,1) 91%, rgba(0,0,0,1) 100%);
background: -ms-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 16%, rgba(6,68,45,1) 29%, rgba(0,12,8,1) 42%, rgba(1,14,9,1) 91%, rgba(0,0,0,1) 100%);
background: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 16%, rgba(6,68,45,1) 29%, rgba(0,12,8,1) 42%, rgba(1,14,9,1) 91%, rgba(0,0,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=1 );
}


.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.82);
}

.dropdown-menu{
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    /* padding: .5rem 0; */
    /* margin: .125rem 0 0; */
    font-size: .9rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #36423de0;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius:0px;
}
.dropdown-menu a{
    color:#fff;
}
.nav-link {
    padding: 10px 5px;
    transition: 0.2s;
}

.navbar-stick{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1071;
}
.navsplitter{
    border-right: 1px solid #ffffff5c;
    padding-right: 20px;
}

.navshadow{
    box-shadow: 8px 4px 7px 0px #696969;
}
.bg-dark{
    background-color: #000000!important;
}
</style>
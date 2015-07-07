
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap: Dropdown on Hover Plugin Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="A demo for my simple plugin that enables Bootstrap dropdowns to activate on hover and provide a nice user experience.">
  <meta name="author" content="Cameron Spear">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { padding-top: 70px; min-height: 410px;}
    /*.tab-content p { padding: 10px 0; }*/
    .dropdown{
      font-family: "proxima-nova",Helvetica,sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #333;
      background-color: #fff;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<!-- 
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>     


    </div>
  </div>
</div> -->



  <!-- <header class="navbar navbar-fixed-top navbar-inverse"> -->
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="//cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/">Plugin Demo</a>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav" id="small">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdown header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">I Have a Submenu <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Menu Item</a></li>
              <li><a tabindex="-1" href="#">Bootstrap 3 Does Not Support Submenus</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">My Account</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Change Email</a></li>
              <li><a tabindex="-1" href="#">Change Password</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Logout</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Contact <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Contact</a></li>
              <li><a tabindex="-1" href="#">Contact My Mom</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Contact Your Mom</a></li>
              <li><a tabindex="-1" href="#">Contact the President</a></li>
            </ul>
          </li>

        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  <!-- </header> --> 

 
  </div> <!-- .container -->

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="jquery/jquery-2.1.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="jquery/bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

  

</body>
</html>
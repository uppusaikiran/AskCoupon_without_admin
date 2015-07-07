<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap: Dropdown on Hover Plugin Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="A demo for my simple plugin that enables Bootstrap dropdowns to activate on hover and provide a nice user experience.">
  <meta name="author" content="Cameron Spear">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="css/testing.css">
  
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-static">
    <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Large Dropdown Menu</a>
  </div>
  
  
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown dropdown-large">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <!-- <b class="caret"></b> --></a>
        
        <ul class="dropdown-menu dropdown-menu-large row">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Glyphicons</li>
              <li><a href="#">Available glyphs</a></li>
              <li class="disabled"><a href="#">How to use</a></li>
              <li><a href="#">Examples</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdowns</li>
              <li><a href="#">Example</a></li>
              <li><a href="#">Aligninment options</a></li>
              <li><a href="#">Headers</a></li>
              <li><a href="#">Disabled menu items</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Button groups</li>
              <li><a href="#">Basic example</a></li>
              <li><a href="#">Button toolbar</a></li>
              <li><a href="#">Sizing</a></li>
              <li><a href="#">Nesting</a></li>
              <li><a href="#">Vertical variation</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Button dropdowns</li>
              <li><a href="#">Single button dropdowns</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Input groups</li>
              <li><a href="#">Basic example</a></li>
              <li><a href="#">Sizing</a></li>
              <li><a href="#">Checkboxes and radio addons</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Navs</li>
              <li><a href="#">Tabs</a></li>
              <li><a href="#">Pills</a></li>
              <li><a href="#">Justified</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Navbar</li>
              <li><a href="#">Default navbar</a></li>
              <li><a href="#">Buttons</a></li>
              <li><a href="#">Text</a></li>
              <li><a href="#">Non-nav links</a></li>
              <li><a href="#">Component alignment</a></li>
              <li><a href="#">Fixed to top</a></li>
              <li><a href="#">Fixed to bottom</a></li>
              <li><a href="#">Static top</a></li>
              <li><a href="#">Inverted navbar</a></li>
            </ul>
          </li>
        </ul>
        
      </li>
    </ul>
    
  </div><!-- /.nav-collapse -->
</nav>


  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="jquery/jquery-2.1.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="jquery/bootstrap-hover-dropdown.js"></script> -->

  <!-- <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script> -->

  

</body>
</html>

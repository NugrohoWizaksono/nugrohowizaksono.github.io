<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Nugroho Wizaksono</title>
</head>
<body>
    <!--sidebar-->
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
                <div class="background">
                    <img src="image/47078378-flat-wallpaper.jpg">
                </div>
                <div class="row valign-wrapper" style="margin-bottom: 0;">
                    <div class="col-4">
                        <a href="#!user"><img class="circle responsive-img" src="image/me.jpg"></a>
                    </div>
                    <div class="col-8">
                        <a href="#!name"><span class="white-text name">Nugroho Wizaksono</span></a>
                        <a href="#!email"><span class="white-text email">WEB DEVELOPER</span></a>
                    </div>
                </div>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header"><i class="material-icons right">arrow_drop_down</i>Dropdown</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#!">First</a></li>
                    <li><a href="#!">Second</a></li>
                    <li><a href="#!">Third</a></li>
                    <li><a href="#!">Fourth</a></li>
                  </ul>
                </div>
              </li>
            </ul>
        </li>
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    
    <nav style="background-color: transparent;">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">NUGROHO WIZAKSONO</a>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
            </div>            
        </div>
    </nav>
    <!--page1-->
    <img src="image/E1zNNaX.jpg" alt=""  class="responsive-img" style="margin-top: -64px;"/>
    <div class="white">
        aabr <br />
        aabr <br />
        aabr <br />
        aabr <br />
        aabr <br />
        aabr <br />
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function (){
        $('.button-collapse').sideNav({
            menuWidth: 400, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        }
  );
    });
    </script>
</body>
</html>
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
    <!--    sidenav-->
    <ul class="side-nav" id="slide-out">
        <li><a href="#apaomb" style="font-size: 20px; padding-left: 30px;">ABOUT</a></li>
        <li><a href="#goals" style="font-size: 20px; padding-left: 30px;">GOALS</a></li>
        <li><a href="#steps" style="font-size: 20px; padding-left: 30px;">STEPS</a></li>
        <li><a href="#luck" style="font-size: 20px; padding-left: 30px;">LUCKY PRIZES</a></li>
        <li><a href="#tips" style="font-size: 20px; padding-left: 30px;">TIPS</a></li>
        <li><a href="#apps" style="font-size: 20px; padding-left: 30px;">APP</a></li>        
        <li><a href="#TS" style="font-size: 20px; padding-left: 30px;">Talent Seeker</a></li>
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
    <img src="image/E1zNNaX.jpg" alt=""  class="responsive-img" style="margin-top: -70px;"/>
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
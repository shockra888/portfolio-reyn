<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-5.0.2/dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="source/jquery-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="source/fullcalendar-3.10.2/fullcalendar.min.css">
    <link rel="stylesheet" href="source/jquery.terminal/css/jquery.terminal.min.css">
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata&effect=anaglyph">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata&effect=shadow-multiple">
    <link rel="stylesheet" type="text/css" href="css/adminHome.css">
    <link rel="stylesheet" type="text/css" href="css/analogclock.css">
    <link rel="stylesheet" type="text/css" href="css/icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log In</title>
</head>
<body>
    <div id="Locktain">
        <div class="analog-lock">
            <div class="outer-clock-face-lock">
                <div class="marking-lock marking-one-lock"></div>
                    <div class="marking-lock marking-two-lock"></div>
                    <div class="marking-lock marking-three-lock"></div>
                    <div class="marking-lock marking-four-lock"></div>
                    <div class="inner-clock-face-lock">
                        <div class="hand-lock hour-hand-lock"></div>
                        <div class="hand-lock min-hand-lock"></div>
                        <div class="hand-lock second-hand-lock"></div>
                    </div>
                </div>
            </div>
        <div id="digital-clock-lock"></div>
        <div id="date-lock"></div>
        <img src="images/lock.jpg" alt="Lock" class="Locklogo">
    </div>
        <script>
            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            const d = new Date();
            let month = months[d.getMonth()];

            document.getElementById("date-lock").innerText = month+' '+d.getDate()+' '+d.getFullYear();
        </script>
    </div>
    <div id="overlay">
        <img src="images/loading.gif" class="loading">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="icons/menu.png" class="topLogo" alt="sys Logo"></a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">...........</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item about" href="#">About</a></li>
                        </ul>
                    </li>
                </ul>  
            </div>
            <ul class="nav d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link clock" href="#" id="digital-clock"></a>
                    </li>
                </ul> 
            <ul class="nav d-flex justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-outline-info profile-btn" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile"><i class="far fa-user-circle"></i></a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item">
                    <a class="btn btn-outline-warning lock-screen" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lock"><i class="fas fa-lock"></i></a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item">
                    <a class="btn btn-outline-danger" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out"><span class="fa fa-sign-out"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row rowIco">
            <div class="col">
                <img src="icons/terminal.png" alt="Terminal" class="Terminal">
                <h6 class="icon-text">Executioner</h6>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="icons/folder.png" alt="Folder" class="Folder">
                <h6 class="icon-text">Files</h6>
            </div>
        </div>
    </div>
    <div class="container windowCont">
        <div class="card shadow crdTer" id="dragTer">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col">
                        <h5 class="font-effect-anaglyph aboutTxt">Executioner</h5>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-sm btnT" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="far fa-times-circle"></i></span></button>
                    </div>
                </div>
            </div>
            <div class="card-body bg-dark">
                <div id="terminal-exec"></div>
            </div>
        </div>
        <div class="card crdbout shadow" id="draggable">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col">
                        <h5 class="font-effect-anaglyph aboutTxt">NETFOLIO About</h5>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-sm btnX" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body crdbody">
                <div class="row">
                    <div class="col-md-7">
                        <h5 class="font-effect-shadow-multiple">UserName: Reyneil</h5>
                        <h5 class="font-effect-shadow-multiple laraver">Laravel Version: <?php echo $app::VERSION; ?></h5>
                        <h5 class="font-effect-shadow-multiple phpver">PHP Version: <?php echo phpversion(); ?></h5>
                        <h5 class="font-effect-shadow-multiple">Bootstrap Version: 5.0.2</h5>
                        <h5 class="font-effect-shadow-multiple" id="jqV"></h5>
                        <h5 class="font-effect-shadow-multiple" id="jquV"></h5>
                    </div>
                    <div class="col-md-4">
                        <img src="images/boot-logo.png" class="sysLogo" alt="sys Logo">
                        <hr>
                        <h6>Netfolio V 1.0 | 2022.20</h6>
                    </div>
                </div>
            </div>
        </div>


      <div class="card crdclock shadow" id="dragclock">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col">
                        <h5 class="font-effect-anaglyph aboutTxt">Clock</h5>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-sm btnC" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="analog">
                            <div class="outer-clock-face">
                                <div class="marking marking-one"></div>
                                <div class="marking marking-two"></div>
                                <div class="marking marking-three"></div>
                                <div class="marking marking-four"></div>
                                <div class="inner-clock-face">
                                <div class="hand hour-hand"></div>
                                    <div class="hand min-hand"></div>
                                    <div class="hand second-hand"></div>
                                </div>
                            </div>
                        </div>
                        <div id="digital-clock-show"></div>
                    </div>
                    <div class="col">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow crdFile" id="dragFileM">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col">
                        <h5 class="font-effect-anaglyph aboutTxt">Netfiles</h5>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-sm btnFM" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div id="fm"></div>
                </div>
            </div>
        </div>

        <div class="card shadow crdProfile" id="dragProfile">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col">
                        <h5 class="font-effect-anaglyph aboutTxt">User Profile</h5>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-sm btnPr" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="Close"><i class="far fa-times-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img src="user-img/12.jpg" alt="Profile image" class="profile-thumbnail">
                        <br>
                        <h5 class="Uname">Reyneil Puda</h5>
                    </div>
                    <div class="col-8">
                        <h4><strong>Job: </strong>Full-stack web developer</h4>
                        <h4><strong>Address: </strong>Bani Pangasinan</h4>
                        <h4><strong>Phone Number: </strong>+63912345678</h4>
                        <h4><strong>Age: </strong>23</h4>
                        <h4><strong>Civil Status: </strong>Single</h4>
                        <h4><strong>Nationality: </strong>Filipino</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="source/jquery-3.6.0/cdn-jquery.js"></script>
<script src="source/jquery-1.12.1/jquery-ui.js"></script>
<script src="source/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="source/bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
<script src="source/fullcalendar-3.10.2/lib/moment.min.js"></script>
<script src="source/fullcalendar-3.10.2/fullcalendar.min.js"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="source/jquery.terminal/js/jquery.terminal.min.js"></script>
<script src="js/calendar.js"></script>
<script src="js/time.js"></script>
<script src="js/analogclock.js"></script>
<script src="js/terminal-code.js"></script>
<script src="js/windowcontroller.js"></script>
<script>
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
  
        fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
          window.opener.fmSetLink(fileUrl);
          window.close();
        });
      });
</script>
</html>
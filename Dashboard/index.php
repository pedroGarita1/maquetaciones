<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "class/dependencias.php";?>
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="hamburger">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>

        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <span><img src="img/logoLetras.png" style="width:90px;"></span>
        </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/notification.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/sms.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/user.png" alt=""></a>
            </li>
        </ul>
    </nav>


    <section class="side-bar-warp">
        <div class="sidebar-menu small-side-bar flowHide">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/dashboard.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/create-quest.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Creat a Quest</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/manage-quests.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Manage Quests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/leaderboards.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Leaderboards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/one-on-one.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">One On Ones</span>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/give-kudos.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Give Kudos</span>
                       </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/settings.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Nation Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/feedback.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Help/Feedback</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/log-out.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </section>
</body>
</html>
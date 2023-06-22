<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> Portfolio Website </title>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="sidebar__content">
            <div class="sidebar__image__box">
                <img class="sidebar__image" src="{{asset('img/profile.png')}}" alt="">
            </div>
            <div class="sidebar__title"> Enes Doğan</div>
            <div class="sidebar__description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit . Est expedita
                nulla
                quis . Corporis eligendi esse, in iure provident suscipit veniam .
            </div>
            <div class="sidebar__links__box">
                <div class="sidebar__links-item"><a href="index.php" class="sidebar__link"> About</a></div>
                <div class="sidebar__links-item"><a href="projects.php" class="sidebar__link"> Projects</a></div>
                <div class="sidebar__links-item"><a href="contact.php" class="sidebar__link"> Contact</a></div>
            </div>
            <div class="sidebar__social__box">
                <div class="sidebar__social-icons">
                    <a class="social__icons__link link-linkedin" href="https://www.linkedin.com/in/doganenes/" target="_blank">
                        <i class="fa-brands fa-linkedin"></i
                        ><span class="icons-title"> Linkedin</span></a>
                </div>
                <div class="sidebar__social-icons">
                    <a class="social__icons__link link-github" href="https://github.com/doganenes" target="_blank">
                        <i class="fa-brands fa-github"></i
                        ><span class="icons-title"> GitHub</span></a>
                </div>
                <div class="sidebar__social-icons">
                    <a class="social__icons__link link-stackoverflow"
                       href="https://stackoverflow.com/users/16469814/enes-dogan"
                       target="_blank"
                    >
                        <i class="fa-brands fa-stack-overflow"></i
                        ><span class="icons-title"> Stack Overflow </span></a>
                </div>
                <div class="sidebar__social-icons">
                    <a class="social__icons__link link-hackerrank"
                       href="https://www.hackerrank.com/enesdgn?hr_r=1"
                       target="_blank"
                    >
                        <i class="fa-brands fa-hackerrank"></i
                        ><span class="icons-title"> Hackerrank</span></a>
                </div>
                <div class="sidebar__social-icons">
                    <a class="social__icons__link link-medium" href="https://enesdogan99.medium.com/" target="_blank"
                    ><i class="fa-brands fa-medium"></i
                        ><span class="icons-title"> Medium</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

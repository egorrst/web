<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'glow' => '<img class="glow" src="Photos\glow.png" alt="glow">',
        'author' => '',
        // другие свойства этого поста
    ],
    [
        // свойства второго поста
    ],
];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-wrapper">
            <img class="canyon" alt="canyon" src="/Photos/canyon.png">
            <div class="header__head">
                <img class="header__logo" alt="Escape" src="/Photos/escape-footer.svg">
                <nav class="header__navigation-menu">
                    <ul type="none" class="header__list">
                        <li>
                            <a href="#" class="header__navigation-element">home</a>
                        </li>
                        <li>
                            <a href="#" class="header__navigation-element">categories</a>
                        </li>
                        <li>
                            <a href="#" class="header__navigation-element">about</a>
                        </li>
                        <li>
                            <a href="#" class="header__navigation-element">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__container">
                <h1 class="header__title">
                    Let's do it together.
                </h1>
                <h2 class="header__subtitle">
                    We travel the world in search of stories. Come along for the ride.
                </h2>
                <div class="header__button">
                    <p class="header__button-text">View Latest Posts</p>
                </div>
            </div>
            <div class="theme-menu">
                <nav class="theme-menu__body">
                    <ul type="none" class="header__list">
                        <li>
                            <a href="#" class="theme-menu__element">Nature</a>
                        </li>
                        <li>
                            <a href="#" class="theme-menu__element">Photography</a>
                        </li>
                        <li>
                            <a href="#" class="theme-menu__element">Relaxation</a>
                        </li>
                        <li>
                            <a href="#" class="theme-menu__element">Vacation</a>
                        </li>
                        <li>
                            <a href="#" class="theme-menu__element">Travel</a>
                        </li>
                        <li>
                            <a href="#" class="theme-menu__element">Adventure</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="main-wrapper">
                <div class="featured-posts">

                    <?php
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                    ?>

                    <h3 class="featured-posts__header">Featured Posts</h3>
                    <div class="featured-posts__decor"></div>
                    <div class="featured-posts__container">
                        <div class="featured-posts__the-road-ahead">
                            <img class="the-road-ahead" alt="the-road-ahead" src="/Photos/the-road-ahead.png">
                            <h4 class="featured-posts__title">The Road Ahead</h4>
                            <h5 class="featured-posts__subtitle">
                                The road ahead might be paved - it might not be.
                            </h5>
                            <div class="featured-posts__autor-info">
                                <img alt="logo1" src="/Photos/logo1.svg">
                                <div class="featured-posts__box">
                                    <div class="featured-posts__autor-name">Mat Vogels</div>
                                    <div class="featured-posts__date">September 25, 2015</div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-posts__from-top-down">
                            <img class="from-top-down" alt="from-top-down" src="/Photos/from-top-down.png">
                            <h4 class="featured-posts__title">From Top Down</h4>
                            <h5 class="featured-posts__subtitle">
                                Once a year, go someplace you’ve never been before.
                            </h5>
                            <div class="featured-posts__autor-info">
                                <img alt="logo2" src="/Photos/logo2.svg">
                                <div class="featured-posts__box">
                                    <div class="featured-posts__autor-name">William Wong</div>
                                    <div class="featured-posts__date">September 25, 2015</div>
                                </div>
                            </div>/Photos
                        </div>
                    </div>
                </div>
                <div class="most-recent">
                    <h3 class="featured-posts__header">Most Recent</h3>
                    <div class="featured-posts__decor"></div>
                    <div class="most-recent__container">
                        <div class="most-recent__post">
                            <!--post1-->
                            <img class="most-recent__wallpaper" alt="balloons" src="/Photos/wallpaper1.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Still Standing Tall</h4>
                                <h5 class="most-recent__subtitle">
                                    Life begins at the end of your comfort zone.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo2" src="/Photos/logo2.svg">
                                <div class="most-recent__autor-name">William Wong</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                        <div class="most-recent__post">
                            <!--post2-->
                            <img class="most-recent__wallpaper" alt="bridge" src="/Photos/wallpaper2.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Sunny Side Up</h4>
                                <h5 class="most-recent__subtitle">
                                    No place is ever as bad as they tell you it’s going to be.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo1" src="/Photos/logo1.svg">
                                <div class="most-recent__autor-name">Mat Vogels</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                        <div class="most-recent__post">
                            <!--post3-->
                            <img class="most-recent__wallpaper" alt="sunset" src="/Photos/wallpaper3.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Water Falls</h4>
                                <h5 class="most-recent__subtitle">
                                    We travel not to escape life, but for life not to escape us.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo1" src="/Photos/logo1.svg">
                                <div class="most-recent__autor-name">Mat Vogels</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                        <div class="most-recent__post">
                            <!--post4-->
                            <img class="most-recent__wallpaper" alt="water" src="/Photos/wallpaper4.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Through the Mist</h4>
                                <h5 class="most-recent__subtitle">
                                    Travel makes you see what a tiny place you occupy in the world.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo2" src="/Photos/logo2.svg">
                                <div class="most-recent__autor-name">William Wong</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                        <div class="most-recent__post">
                            <!--post5-->
                            <img class="most-recent__wallpaper" alt="fog" src="/Photos/wallpaper5.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Awaken Early</h4>
                                <h5 class="most-recent__subtitle">
                                    Not all those who wander are lost.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo1" src="/Photos/logo1.svg">
                                <div class="most-recent__autor-name">Mat Vogels</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                        <div class="most-recent__post">
                            <!--post6-->
                            <img class="most-recent__wallpaper" alt="waterfall" src="/Photos/wallpaper6.png">
                            <div class="most-recent__content">
                                <h4 class="most-recent__title">Try it Always</h4>
                                <h5 class="most-recent__subtitle">
                                    The world is a book, and those who do not travel read only one page.
                                </h5>
                            </div>
                            <div class="most-recent__decor"></div>
                            <div class="most-recent__autor-info">
                                <img alt="logo1" src="/Photos/logo1.svg">
                                <div class="most-recent__autor-name">Mat Vogels</div>
                                <div class="most-recent__date">9/25/2015</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer__wrapper">
            <div class="footer__background">
                <img class="footer__logo" alt="Escape" src="/Photos/escape-footer.svg">
                <nav class="footer__navigation-menu">
                    <ul type="none" class="footer__list">
                        <li>
                            <a href="#" class="footer__navigation-element">home</a>
                        </li>
                        <li>
                            <a href="#" class="footer__navigation-element">categories</a>
                        </li>
                        <li>
                            <a href="#" class="footer__navigation-element">about</a>
                        </li>
                        <li>
                            <a href="#" class="footer__navigation-element">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>
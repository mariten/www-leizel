<!DOCTYPE HTML>
<html>
<head>
    <title>Leizel Jackson Case</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Aspiring Information Professional" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Nav -->
        <nav id="nav">
            <a href="#me" class="icon fa-home active"><span>Home</span></a>
            <a href="#work" class="icon fa-folder"><span>Work</span></a>
            <a href="#aboutme" class="icon fa-user"><span>About Me</span></a>
            <a href="#contact" class="icon fa-globe"><span>Contact</span></a>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Me -->
            <article id="me" class="panel">
                <header>
                    <h1>Leizel Jackson Case</h1>
                    <p>
                        University of Washington iSchool<br />
                        MLIS 2015
                    </p>
                </header>
                <a href="#work" class="jumplink pic">
                    <span class="arrow icon fa-chevron-right"><span>See my work</span></span>
                    <img src="images/leizel.jpg" alt="Me" />
                </a>
            </article>


            <!-- Work -->
            <article id="work" class="panel">

                <header>
                    <h2>My Work</h2>
                </header>

                <p>I am a motivated and enthusiastic MLIS candidate (June 2015) with an interest in special libraries, archives, information behavior and cataloging. I have experience in archives, teaching, writing, public speaking, working with geographically dispersed teammates and intercultural communication.  Please see below for examples of some of my work.</p>

                <h3><a href="https://circulationmag.wordpress.com/current-issue/">Boundless Love, Endless Possibilities</a></h3>
                <p>A paper I wrote for a class about why online dating is an information problem.  It was published in the academic edition of <i>Circulation</i>, the iSchool's student magazine.</p>

                <h3><a href="https://ischool.uw.edu/feature-stories/san-francisco-zen-center-project-turns-five">Archiving at the San Francisco Zen Center</a></h3>
                <p>I spent a month during Summer 2014 working as an archives intern at the San Francisco Zen Center with nine other UW students.  Our goal was to archive and digitize the Zen Center's historical documents.  We worked with the Bancroft Library at UC Berkeley where the Zen Center Collection will be housed.  To gain a better understanding of the organization, we lived and worked with the Zen Center community and followed Zen Buddhist practices.</p>
                <p>Further writing describing this program can be found on the <a href="http://blogs.sfzc.org/blog/2014/08/12/warm-present-history-archivists-tribute/">San Francisco Zen Center blog</a></p>

                <h3>More Information</h3>
                <p>For further details about my career and history, please see my <a href="{$personal_web_links.linkedin.url}">LinkedIn profile</a>.</p>

            </article>


            <!-- About Me-->
            <article id="aboutme" class="panel">

                <header>
                    <h2>About Me</h2>
                </header>

                <p>A native of Northeast Ohio, I graduated cum laude from Kent State University with a BA in International Relations.  After graduation, I headed to Japan on the JET Program and started working as an English teacher in Suzuka, Japan at a high school with a multinational student body. It was an invaluable experience, and I loved working with students and living in another culture.  However, my lifelong love of knowledge and books led me to embark on the path to library and information science.  With my MLIS, I hope to find a career that will combine my love of research, learning and sharing information.</p>

                <p>Currently, I live in Tokyo working part-time as an English teacher in junior high schools around the city while pursuing my MLIS through the University of Washington.  In my free time,  I enjoy traveling and exploring new places, cooking, watching movies, and relaxing in cafés.  I'm a voracious reader, but especially love sci-fi, fantasy and young adult fiction.  True to the librarian stereotype, I love cats and sometimes wear my hair in a bun.</p>

                <section>
                    <div class="row">
                        <div class="4u">
                            <a class="image fit" target="_blank" href="https://www.flickr.com/photos/mariten/15574928173"><img src="https://farm8.staticflickr.com/7567/15574928173_4047e8455e.jpg" alt="Towpath Trail in Clinton, Ohio" title="Towpath Trail in Clinton, Ohio"></a>
                        </div>
                        <div class="4u">
                            <a class="image fit" target="_blank" href="https://www.flickr.com/photos/mariten/14240565138"><img src="https://farm4.staticflickr.com/3866/14240565138_5bb08fcd46.jpg" alt="Rikugien, a Japanese garden in central Tokyo" title="Rikugien, a Japanese garden in central Tokyo"></a>
                        </div>
                        <div class="4u">
                            <a class="image fit" target="_blank" href="https://www.flickr.com/photos/mariten/5209485886"><img src="https://farm5.staticflickr.com/4090/5209485886_a06d0efe89.jpg" alt="My neighborhood cat friend" title="My neighborhood cat friend"></a>
                        </div>
                    </div>
                </section>

            </article>


            <!-- Contact -->
            <article id="contact" class="panel">

                <header>
                    <h2>Contact Me</h2>
                </header>
                <p>Please feel free to contact me at <a href="mailto:leizel.case@gmail.com">leizel.case@gmail.com</a>


                <header>
                    <h2>Around the Web</h2>
                </header>
                <p>I can also be found at the below web services</p>
                <ul class="web-icons">
{foreach from=$personal_web_links item=web_link}
                    <li class="icon {$web_link.glyph}"><a href="{$web_link.url}">{$web_link.display}</a></li>
{/foreach}
                </ul>

            </article>

        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>&copy; Leizel Jackson Case</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>

    </div>

</body>
</html>

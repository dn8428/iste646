<?php

$_SESSION['rootPath'] = '../../../';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- style pertaining to the general information page -->
    <link rel="stylesheet" href="./style/style.css"/>
    <!-- style pertaining to the homePage -->
    <link rel="stylesheet" href="../../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./script/myScript.js" defer></script>
    <script src="<?php echo $_SESSION['rootPath']; ?>assets/js/main.js"></script>

    <title>General information</title>
</head>

<body>
<div class="body-container">
    <div class="header-container">
        <!--  Navbar  -->
        <div class="nav_container">
            <div class="navbar">
                <div class="logo_container">
                    <a href="<?php echo $_SESSION['rootPath'] ?>"><img
                                src="<?php echo $_SESSION['rootPath'] ?>assets/img/mastermind_logo_3.png"
                                alt="logo"></a>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li>
                            <a href="<?php echo $_SESSION['rootPath'] ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <div class="dropWrap">
                                <a href="<?php echo $_SESSION['rootPath'] ?>">General Info</a>
                                <ul>
                                    <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">All-stars</a>
                                    </li>
                                    <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Events</a></li>
                                    <li><a class="dropItem" href="<?php echo $_SESSION['rootPath'] ?>">Alumni Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo $_SESSION['rootPath'] ?>assets/pages/general-info/index.html">Program
                                Info</a>
                        </li>
                        <li class="dropdown">
                            <div class="dropWrap">
                                <a href="<?php echo $_SESSION['rootPath'] ?>">Leagues Info</a>
                                <!--                        <ul>-->
                                <!--                            <li><a class="dropItem" href="-->
                                <?php //echo $_SESSION['rootPath'] ?><!--">Results</a></li>-->
                                <!--                        </ul>-->
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/relatedlink.php">Related Links</a>
                        </li>
                    </ul>
                </nav>
                <div class="hamburger-nav">
                    <div id="hamburger-wrap" class="hamburger-wrap" onclick="handleMenuClick()">
                        <div class="hamburger-menu">
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                        </div>
                    </div>

                    <div id="burger-menu" class="menu">
                        <ul>
                            <li>
                                <a href="<?php echo $_SESSION['rootPath'] ?>">Home</a>
                            </li>
                            <li class="dropdown">
                                <div class="dropWrap">
                                    <a href="<?php echo $_SESSION['rootPath'] ?>">General Info</a>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo $_SESSION['rootPath'] ?>assets/pages/general-info/index.html">Program
                                    Info</a>
                            </li>
                            <li class="dropdown">
                                <div class="dropWrap">
                                    <a href="<?php echo $_SESSION['rootPath'] ?>">Leagues Info</a>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo $_SESSION['rootPath'] ?>assets/script/relatedlink.php">Related
                                    Links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-section-container">
        <div class="general">
            <div class="general-container">
                <div class="testimonials-container">
                    <h1>Testimonials</h1>
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <q>
                                MasterMinds stretches young minds and encourages students to
                                explore.MasterMinds stretches young minds and encourages
                                students to explore.</q>
                            <p class="author">
                                - Marilyn Dominick, Superintendent Jordan-Elbridge CSD(Admin)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>
                                MasterMinds stretches young minds and encourages students to
                                explore.MasterMinds stretches young minds and encourages
                                students to explore.</q>
                            <p class="author">
                                - Marilyn Dominick, Superintendent Jordan-Elbridge CSD(Admin)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>
                                My students love MasterMinds. I rarely get through the first
                                day of school without a returning student asking “When do we
                                start practice?” The kids like the program because it is fun
                                and they enjoy competing against other schools. The questions
                                are balanced so the different students can shine in different
                                topics. It encourages teamwork and sportsmanship. I like the
                                program because it celebrates academics and encourages
                                students to be proud of their knowledge. The other reason I
                                like it is over the years I have had many students get
                                involved in MasterMinds that were not in any other club or
                                activity at the school. It gives them someplace to fit in and
                                find new friends. It has been great to watch these kids
                                blossom in this environment. Win or lose they always have
                                fun.</q>
                            <p class="author">- Carrie Earnst, Grand Island(Teacher)</p>
                        </div>
                        <div class="mySlides">
                            <q>My ten years of coaching the MasterMinds teams at
                                Williamsville South were highlights of my teaching career. It
                                is an activity that serves students who may not be drawn to
                                many other clubs. MasterMinds fosters a sense of camaraderie,
                                fair play and inclusion. Over the years I have seen many
                                instances of kids with special needs gaining acceptance as a
                                result of the team spirit of the Club. The socialization and
                                teamwork that grow over time are inspirational!</q>
                            <p class="author">- Tom Johnson, Williamsville South(Coach)</p>
                        </div>
                        <div class="mySlides">
                            <q>I graduated from Nardin Academy in 2005 as the VP of our Quiz
                                Bowl club. Jeopardy! happened to jog my memory/curiosity last
                                night, so I went looking for the MasterMinds site. I was
                                thrilled to find it still alive and well-updated...complete
                                with archives! I got to relive our crushing playoff defeat
                                from my senior year, haha. Truly though, I thoroughly enjoyed
                                all of my time in MasterMinds, and it prepared me well for
                                NAQT competitions in college. Since high school, I've come
                                across a fair number of former MasterMinds participants from
                                various regions. Upon discovering the MasterMinds connection,
                                the conversation unfailingly goes the same way: people get all
                                excited to meet a fellow trivia nerd. I just loved MasterMinds
                                completely, and it's terrific to see all the teams of kids
                                across the state still loving it the same way I did.</q>
                            <p class="author">
                                - Kristin Cameron, Nardin Academy Class of 2005(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>Becoming a part of MasterMinds was the best decision I made
                                throughout my four years of high school. As a freshman, I
                                didn't know anybody in the club and I was anxious to join. I
                                felt welcomed as soon as I stepped through the door. I was not
                                only welcomed during practices at my school, but at matches at
                                other schools and by everybody involved with running
                                MasterMinds. I started paying attention to seemingly
                                "meaningless" details in class, trying to absorb as much as I
                                could for MasterMinds. When I had a practice or match to look
                                forward to, I dragged myself out of bed quicker, rushed to get
                                ready for school, and was more cheerful throughout the day.
                                Most importantly, I met one of my favorite teachers and some
                                of my closest friends as a result of MasterMinds. I will
                                always cherish the memories we made playing Trivial Pursuit
                                and thinking up random solutions to bonus question.
                                MasterMinds was easily my favorite part of high school.</q>
                            <p class="author">
                                - Jessica Chellino, Depew HS Class of 2016(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds was a great way for me to get into trivia in a
                                competitive setting and was one of the most fun I've had in
                                clubs in high school. When you and your three teammates are up
                                on the buzzers, you just feel the camaraderie and the team
                                aspect is really what makes the game more fun. If you love
                                trivia, you will love MasterMinds. It's also a great place to
                                not only strengthen friendships but also make new ones by
                                meeting players from all around your region. Also getting the
                                question right off the bat for a fresh 15 points is possibly
                                one of the best feelings in the world.</q>
                            <p class="author">
                                - Cameron Priest, Wayne HS Class of 2015(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds is an enriching experience that expands your
                                horizons by introducing you to experiences, people, and
                                knowledge you never would have otherwise thought to encounter.
                                I absolutely recommend MasterMinds to anyone who loves the
                                pursuit of trivia (or Trivial Pursuit.)</q>
                            <p class="author">
                                - Sheldon Lewis III, Olmsted Class of 2016(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>The MasterMinds program was a bit of a life changer for me.
                                At 16 I had heard quite a bit about this “Jeopardy for teams”
                                through other members of my cross country team, and loathe for
                                the season to end I jumped at the chance to join. The friends
                                I made within the program, both within my own school and from
                                those we played against, undeniably became my closest for the
                                remainder of my high school years. I am still in contact with
                                a few, and would not give up the experience I had for any
                                reason. It is a worthy experience for any skill level, and
                                does well to prepare you for various college bowl and adult
                                trivia leagues going forward.</q>
                            <p class="author">
                                - Elizabeth Marvin, Geneva DeSales HS Class of 2006(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I remember when I first joined MasterMinds, I was too shy to
                                buzz in even during after-school practice. When I finally
                                mustered up the courage to buzz in during a match against
                                another school, I literally tasted adrenaline. It may seem odd
                                to think of MasterMinds as intense or exhilarating, but that's
                                how it was for me, and I became hooked. While I grew
                                accustomed to the "spotlight" of the buzzer, it was always a
                                rush for me to nail an early powermark or carry a bonus
                                question for my team. Eventually I became one of the strongest
                                players in my league, and I still feel pride when I consider
                                how much I grew over my 4 years in MasterMinds.</q>
                            <p class="author">
                                - Christian Baker, Williamson HS Class of 2012(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>Joining the MasterMinds team in my sophomore year was one of
                                the best decisions I made in high school. I have been a fan of
                                trivia from a young age and MasterMinds finally provided me
                                with a place where I could demonstrate my knowledge in a
                                competitive setting. MasterMinds not only improved my
                                academics, but my leadership and organizational skills from
                                being the president and captain of our team for two years.
                                Additionally, MasterMinds introduced me to some of my closest
                                friends from other schools that participated in MasterMinds in
                                both the Rochester and Albany regions. MasterMinds is an
                                excellent program that I would recommend to anyone looking to
                                learn more, make new friends, be competitive, and have fun.</q>
                            <p class="author">
                                - Reagan Patrowicz, Canandaigua HS Class of 2018(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>Becoming more involved with MasterMinds in my Sophomore year
                                was one of the best decisions I made in High School. That
                                year, I formed close relationships with those on the "JV" team
                                and we began to learn each other's strengths and weaknesses.
                                By the time we were upperclassmen, MasterMinds had taught us
                                how to balance everyone's best traits to hide our worst and
                                create the greatest benefit for the team as a whole. This type
                                of team-building has served me time and time again, both in
                                college courses and in the workplace. Outside of skills gained
                                is just how purely enjoyable it is to play a match; I always
                                looked forward to the third Thursday of every month.
                                MasterMinds will always be one of my most cherished memories
                                of High School.</q>
                            <p class="author">
                                - Kyle Thaine, Albion HS Class of 2016(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds gives students a relatively unique opportunity to
                                participate in team competition based on knowledge. It covers
                                an extremely broad range of categories so students who are
                                experts in sports, history, pop culture, or a number of other
                                topics have a chance to shine as well as students who are
                                generally interested in a number of subject areas. I value
                                this as a teacher and education professor. When I look back on
                                my experience playing MasterMinds, however, what first comes
                                to mind is how much fun I had! It is a great program that I
                                would recommend to everyone.</q>
                            <p class="author">
                                - Sarah Marchitelli, Gates Chili HS Class of 2005(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I joined MasterMinds by teacher suggestion in my Sophomore
                                year. And I am so glad that I did! MasterMinds not only
                                introduced me to academic competition, but connected me with
                                individuals equally as passionate about academia as myself.
                                The friendships and mentorships I developed through the
                                program were extremely influential on my high school
                                experience. MasterMinds is a great opportunity to learn, be
                                part of a team, and have fun!</q>
                            <p class="author">
                                - Isabelle Steiner, Lewiston-Porter HS Class of 2019(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I have nothing but fond memories of MasterMinds. Such a
                                well-run program and a wonderful introduction to the world of
                                trivia competition. My team won the regional championship my
                                Senior year, and I still look back on those tense playoff
                                matches as some of the highlights of my youth! As team
                                captain, and it was a great way to build leadership skills and
                                confidence in my ability to perform under pressure—valuable
                                skills for many future pursuits in college and beyond.
                            </q>
                            <p class="author">
                                - Aviva Geiger Schwarz, Brighton HS Class of 1997(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I liked my time in MasterMinds a lot, for a number of
                                reasons: the sense of camaraderie between my teammates and
                                myself when prepping for a meet, the ability to flex some
                                obscure knowledge that otherwise may not have been useful, and
                                the ability to learn new things if we got a question
                                incorrect- everything about it is a learning experience, and
                                it's also the ability to teach others as well.</q>
                            <p class="author">
                                - Victoria Marcario, Catholic Central HS Class of
                                2014(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds gave me a fun, competitive outlet for everything
                                I learned in and out of school. It gave me motivation to learn
                                as much as I could in class in the hopes that I could apply
                                that knowledge in a tournament. It brought our team closer
                                together as we learned to rely on each other's strengths. I
                                had a wonderful experience with MasterMinds.</q>
                            <p class="author">
                                - Cameron Ziegler, Canandaigua Academy Class of 2014(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds was easily one of my favorite activities I
                                participated in through my entire time at Gates Chili. I will
                                always remember how much fun my team and I had at meets and
                                how we would look forward to competing. MasterMinds was such
                                an important part of my life that it was a no-brainer to
                                continue on to play Quiz Bowl when I attended RIT. I made
                                lasting friends through both of these programs and would
                                encourage any student to join their school’s MasterMinds club
                                and become a part of the fast-paced, knowledge-testing
                                competitions.</q>
                            <p class="author">
                                - Brian Bullis, Gates Chili HS Class of 2017(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>“Nerd culture” has become almost totally mainstream, but at
                                the time when I was in MasterMinds, being branded a nerd was
                                like a scarlet letter. MasterMinds provided you an opportunity
                                to geek out and be nerdy. I also always loved Jeopardy!, so
                                for me it was like being on the show.</q>
                            <p class="author">
                                - Saul Maneiro, Wilson Magnet Class of 1994(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds was an important part of my high school career.
                                It helped me build critical thinking and quick thinking skills
                                as well as teamwork. I look fondly on my experience over 20
                                years later. Anyone with a love of knowledge and facts will
                                love MasterMinds.</q>
                            <p class="author">
                                - Jason Marsherall, Williamsville South HS Class of
                                1999(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I joined MasterMinds my sophomore year of high school, with
                                many of my friends. To be honest, we did not really know what
                                MasterMinds was but we’d hear announcements for it at school
                                and people would joke to us that we belonged there—since we
                                were the nerdier/brainier kids in school. Our geometry teacher
                                had us play a game in class to recruit more players and we
                                were hooked. MasterMinds was one of the only activities I did
                                in school, being not so athletically inclined, and was some of
                                the best times in high school. Being able to learn with my
                                team to find each other's strengths and weaknesses, that
                                feeling when you absolutely are going to nail a question (my
                                friend and I were ecstatic when there was an entire bonus in
                                competition about a TV show we watched together), and even
                                being able to play cards with my friends between matches. It
                                taught us competition and camaraderie, and gave me a life long
                                love of trivia.</q>
                            <p class="author">
                                - Kathy (Amendolara) Breithaupt, Berlin HS Class of
                                2012(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I was very excited to be involved with MasterMinds for many
                                years. It was a great time to focus on an academically focused
                                competition, instead of just the athletic ones. Pushing the
                                limits on memorizing or applying our knowledge from school
                                lessons really helped me retain a lot more than, if I was just
                                doing the homework and taking the tests. Our team had a
                                diverse group of players and it was interesting to bring such
                                different backgrounds together, to start inside jokes, and
                                hang out in the holding rooms together. We all learned how to
                                identify our own and each other’s strengths and weaknesses and
                                the best ways to work together. My experience was so great I
                                encouraged my younger sister to join as well! More than
                                anything, participating in MasterMinds was fun and a bright
                                spot in my memories of high school.</q>
                            <p class="author">
                                - Katey Sackett, Honeoye Central HS Class of 2013(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>Participating in MasterMinds allowed me to meet many students
                                from different school districts and create lasting
                                friendships. MasterMinds also gave me a platform to expand my
                                confidence in an academic setting, as well as an opportunity
                                to gain knowledge from peers, moderators, and coaches.</q>
                            <p class="author">
                                - Jeanette Jayne, Dundee HS Class of 2016(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I have been a huge trivia buff my whole life, but outside
                                watching Jeopardy, I never had a chance to use my useless
                                knowledge anywhere else. That is why loved finding out about
                                MasterMinds in high school. It gave me that avenue. Plus,
                                MasterMinds gave me a sense of self-confidence due to my
                                personal success at it.</q>
                            <p class="author">
                                - Brendan Chella, Orchard Park HS Class of 2006(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>MasterMinds was one of the highlights of my time in high
                                school. Not only was it a great outlet for all the
                                “impractical” knowledge cluttering up my brain, but it also
                                taught me the value of teamwork and the always important
                                lesson that real learning occurs in a community. It is a great
                                balance of competition and camaraderie, and it gives you a
                                better appreciation of the diverse and fascinating range of
                                interests and expertise other people can have. I wouldd
                                encourage anyone to give it a try-you will always be surprised
                                with how much you know, and how much you have yet to learn!</q>
                            <p class="author">
                                - Jonathan Price, Kendall HS Class of 2015(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>My time playing on the school’s MasterMinds team was a
                                wonderful experience. Games were always exciting and tested
                                our knowledge across a wide variety of subjects. The mixture
                                of individual toss ups and team bonus questions fostered
                                cooperation and coordination under pressure: skills that are
                                still very applicable for me today. The tournament format also
                                allowed us to travel to new parts of the state, match up
                                against other schools throughout the region, and work together
                                toward our goal of making the playoffs. Overall, MasterMinds
                                was an excellent opportunity to learn, compete, and have
                                fun!</q>
                            <p class="author">
                                - Chris Plunkett, Broadalbin-Perth HS Class of 2012(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I started MasterMinds when I was in 8th grade. The Academic
                                Challenge Bowl was my favorite thing to do after school. I was
                                constantly learning new facts which helped with my testing
                                scores. I stayed in the program until my graduation in 2020.
                                The last day of MasterMinds was so bittersweet. I have had so
                                many memories in the bus rides and meeting the other
                                competitors. They were so friendly! MasterMinds also helped me
                                define who I was. There is not a lot of things that I stay
                                doing. My likes and dislikes change all the time. MasterMinds
                                was one thing that never changed. It was a constant in my
                                life. I believe that when people think of me, they think of
                                MasterMinds. It will always be a part of how I define myself
                                and I am proud of it. I want to thank everyone who has helped
                                throughout the years. Being a part of something special like
                                MasterMinds makes you special.</q>
                            <p class="author">
                                - Susel Linares, Rochester School of the Arts HS Class of
                                2020(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I joined MasterMinds during my freshman year of high school,
                                but I only became really active during my sophomore year.
                                MasterMinds was a great social activity, and I made and
                                improved many friendships during my time in MasterMinds. My
                                high school career was punctuated by events relating to
                                MasterMinds, and it became a significant part of my high
                                school experience. MasterMinds encourages students to expand
                                and deepen their knowledge through learning in order to
                                compete at a higher level with other bright students. As
                                captain of my school's MasterMinds team during my senior year,
                                I developed leadership skills in trying to recruit classmates
                                who had particular academic strengths, and helped expose them
                                to the MasterMinds program. I truly believe that MasterMinds
                                is a great program that every high school should participate
                                in because MasterMinds helps strengthen a school's academic
                                excellence, helps its students make friends, and enables its
                                students to learn how to work as a team.</q>
                            <p class="author">
                                - Michael Connolly, Bethlehem HS Class of 2018(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>I was part of our middle school’s Quiz Bowl team and despite
                                not scoring very many points, I decided to try out our high
                                school MasterMinds team. It was an amazing decision. I would
                                attend team practices and work at getting better each week. I
                                would then start scoring more and more, even applying concepts
                                we learned in class. Although, acquiring points under your
                                name may have been fun, the best memories I had were with my
                                friends at each meet. Whether it was the exhilaration of a
                                close match or just chilling and eating pizza with together,
                                each meet was an awesome experience. My friends and I worked
                                up to be co-captains and we led our team to new heights, happy
                                to leave our mark. MasterMinds was an amazing experience that
                                I wish I could relive. We had the best teammates, coaches and
                                most importantly: friends.</q>
                            <p class="author">
                                - Aaron Anandarajah, Pittsford Mendon Class of 2020(Student)
                            </p>
                        </div>
                        <div class="mySlides">
                            <q>As a player, I appreciated the camaraderie and sense of
                                accomplishment I got participating in MasterMinds. Both
                                Academic Challenge Bowl and MasterMinds allowed me to flex my
                                existing knowledge, but as an adult I can see that the biggest
                                rewards go beyond the intellectual. MasterMinds competitions
                                taught me dedication and teamwork. My teammates and I
                                acknowledged each other's areas of expertise in order to build
                                a balanced roster and committed to practices after school to
                                try to build our knowledge. MasterMinds taught me tenacity.
                                Buzzing in and getting a question right gives a sense of
                                elation and accomplishment, but buzzing in and getting a
                                question wrong still teaches that the world will not end and
                                that putting yourself out there before you are completely sure
                                can be rewarding. MasterMinds taught me grace and
                                professionalism. Both the grace of winning and the grace of
                                losing has helped me immensely in how I conduct myself in my
                                adult life. I wouldn't trade my experience for anything, and
                                to this day I remember my experiences fondly.</q>
                            <p class="author">
                                - Ariella Prosch Newman, Canandaigua Academy Class of
                                2014(Student)
                            </p>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>

                    <div class="dot-container">
                        <p>Click left or right Arrow for testimonials</p>
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <h1>General information</h1>
                <div class="program-info-Logistic-container">
                    <div class="history-container">
                        <h2>History:</h2>
                        <p>
                            MasterMinds began with twenty five schools in Rochester in 1993,
                            expanding into the Buffalo area in 1995. A junior varsity
                            component was added in 1997. MasterMinds was first offered in the
                            Albany/ Capital District and Syracuse regions in 1999 and 2004
                            respectively.
                        </p>
                        <p>
                            CYPRAS started MasterMinds in the fall of 1993 in the Rochester
                            area with 25 schools. In the fall of 1995, MasterMinds became a
                            BOCES offering and the program expanded into the Buffalo region.
                            Forty-eight schools participated in 1995-96. Fifty-two schools
                            participated in the 1996-97 season. A junior varsity option was
                            made available in 1997-98 with 13 of the 61 schools fielding both
                            varsJVity and teams. In 1999-2000, MasterMinds expanded into the
                            Albany/Capital Distict area and participation topped 70 schools.
                            In 2003-2004, MasterMinds was introduced into the Syracuse area
                            and total participation crested 100 schools for the first time.
                        </p>
                    </div>
                    <div class="overview-container">
                        <h2>Overview:</h2>
                        <p>
                            MasterMinds is a fast-paced question-and-answer academic
                            competition that tests the depth and breadth of students'
                            knowledge in subjects such as history, literature, science,
                            politics, art, geography, religion, sports & current events.
                        </p>
                        <p>
                            With more than a hundred participating schools there are over one
                            thousand students involved, and those numbers continue to grow
                            each year throughout New York State.
                        </p>
                        <p>
                            MasterMinds gives students, particularly those who do not play
                            sports, the chance to showcase their talents and represent their
                            school in a interscholastic setting. MasterMinds provides a
                            competitive academic opportunity for those students.
                        </p>
                    </div>

                    <div class="what-master-mind-is-container">
                        <h2>What is MasterMinds</h2>
                        <ul>MasterMinds:
                            <li> is an extra-curricular academic competition, using the NAQT format</li>
                            <li>has over a hundred participating schools across the state</li>
                            <li>features a 12 game regular season during the school year</li>
                            <li>has no additional costs after initial participation fee (excluding transportation)</li>
                        </ul>
                    </div>

                    <div class="organization-container">
                        <h2>Organization</h2>
                        <p>
                            The organization of MasterMinds is fairly unique. In some areas,
                            MasterMinds is a BOCES service available to public schools through
                            a BOCES center. Private schools, depending on the region, sign up
                            through BOCES or CYPRAS. CYPRAS, a non-profit company which
                            established the MasterMinds program, organizes and administers the
                            program.
                        </p>
                        <p>
                            In each region, a preseason scheduling meeting is held to organize
                            schools into leagues, and the dates and sites of the meets are
                            established. Normally, the twelve game regular season is divided
                            into six meets held during the school year from mid October -
                            April. Customization of the schedule is also available.
                        </p>
                        <p>
                            The top teams in each league advance to regional playoffs in late
                            April with state playoffs in late May/early June.
                        </p>

                        <h2>How is itplayed?</h2>
                        <p>
                            MasterMinds uses a form of the NAQT™ Quiz Bowl format for match
                            play. Matches are played in eight-minute halves with each school
                            playing four students at a time. Students must ring-in and be
                            recognized before answering. Correct answers earn that player’s
                            team ten or 15 points and the opportunity for the team for answer
                            a 30 pointy bonus question.
                        </p>

                        <ol>
                            <li>
                                <p>Meets are scheduled roughly
                                    once a month with the host
                                    site rotating among league
                                    schools. Meets are held after
                                    school, starting at 3:30 and
                                    ending around 6:30.</p>
                            </li>
                            <li>
                                <p>Each meet has between five
                                    and seven games with each
                                    school usually playing twice.</p>
                            </li>
                            <li>
                                <p>Two four-person teams face
                                    off in games that are run in
                                    eight minute halves with
                                    teams able to substitute at
                                    the half. Including JV
                                    players, schools average
                                    over a dozen players. </p>
                            </li>
                            <li><p>Students buzz in and must
                                    be recognized before
                                    answering. Correct answers
                                    earn that player's team
                                    points and the chance for
                                    the team to work together on
                                    bonus questions.</p></li>
                        </ol>
                    </div>

                    <div class="rules-container">
                        <h2>Master minds Rules</h2>
                        <p>
                            In each region, schools are arranged into different leagues at the
                            start of the school year, playing a 12 game regular season with
                            the top schools advancing to double elimination playoffs.
                            MasterMinds has divided the state into eight regions: Buffalo
                            (Section VI), Rochester/Genesee Valley (Section V),
                            Syracuse/Watertown/Utica/Rome (Section III), Binghamton/Southern
                            Tier (Section IV), Albany/Capital District (Section II),
                            Adirondacks/North Country (Section VII and X),
                            Catskills/Westchester (Sections 1 and IX), and Long Island
                            (Sections VIII and XI). State tournament play began with the
                            2005-2006 season.
                        </p>
                        <h2>Who can play?</h2>
                        <p>
                            All public, private, charter and parochial high schools are
                            eligible. Any student from those schools may play. Seventh and
                            eighth graders may be allowed to participate in leagues upon
                            approval of a majority of coaches within that league. There are no
                            scholastic requirements other than those established by individual
                            districts for their own students.
                        </p>
                        <h2>When & Where to play?</h2>
                        <p>
                            Meets are held after school with each league gathering once every
                            few weeks. Meets are held over the course of the school year with
                            the regular season running from approximately mid- to late October
                            through to early April, followed by playoffs. Each meet is
                            normally designed so that each school plays two matches. Meets are
                            held in the high schools with the location rotating among the
                            participants with the actual days, starting times and places
                            scheduled at the start of the year. Each meet consists of four to
                            eight matches, generally beginning between 3:15 and 3:30 with the
                            final match ending between 5:30 and 6:30, possibly later on select
                            occasions. If all participants agree, meets can be held in neutral
                            locations and scheduled at other times.
                        </p>
                        <h2>Topics covered</h2>
                        <p>
                            The questions cover a broad range: art, biology, chemistry,
                            current events, geography, history, literature, music, political
                            science, pop culture, religion and sports. Sample questions can be
                            viewed
                            <a href="www.naqt.com/samples/introductory-invitational-series.pdf">Here</a>
                        </p>
                        <h2>How many student make up a team?</h2>
                        <p>
                            A team plays four students at a time and has the opportunity to
                            substitute as many as all four at the half, so eight different
                            students could play in a single game. Schools have generally
                            averaged 9 students per team if they have a junior varsity
                            program. Schools without a JV program tend to average a bit more.
                        </p>
                        <h2>How time-consuming is MasterMinds for the advisor/coach?</h2>
                        <p>
                            It’s difficult to say since the only true coaching requirement is
                            to chaperone the team during meets. This chaperone does not have
                            to be the same person and the duty can rotate among several
                            people. It is, however, important to have a single contact person
                            for communications, arranging transportation and getting students
                            practice questions. Even if one person handles those duties,
                            MasterMinds is not very time-consuming. Many coaches hold weekly
                            practices or hold practices the week immediately prior to a
                            scheduled meet.
                        </p>
                        <h2>How time-consuming is MasterMinds for students?</h2>
                        <p>
                            Since meets are held roughly once every three weeks, even a varsity
                            athlete can participate as long as MasterMinds meets do not
                            conflict with athletic games and the athletic coach is agreeable.
                        </p>
                        <h2>Player recruitement players.</h2>
                        <p>
                            Coaches ask teachers from the various disciplines who some of
                            their better students are and then supplement that group with
                            anyone who responds to a morning announcement recruiting people
                            who enjoy Trivial Pursuit and Jeopardy. Word of mouth will do the
                            rest.
                        </p>
                        <h2>How do schools practice and how often?</h2>
                        <p>
                            Schools are given practice questions at the start of the year.
                            Some coaches do set aside some practice questions and run a ‘real’
                            game complete with recognizing, ringing-in and the like. Others
                            have students read the questions to each other to improve their
                            listening skills while freeing the coach/advisor to do other
                            things. The students can practice the listening drills whenever.
                            Coaches should also make sure they do their homework and read the
                            newspaper.
                        </p>
                        <h2>Why should schools participate?</h2>
                        <p>
                            It is fun for students and adults. It is an activity that is more
                            educational and intellectual than sports. It provides students,
                            particularly the non-athletically inclined, with a meaningful
                            opportunity to represent their school in an interscholastic
                            setting. There is not enough attention paid to academic
                            extra-curriculars, especially compared to athletics. MasterMinds
                            attempts to fill an extracurricular void on the academic side of
                            school.
                        </p>
                    </div>
                    <div class="partnership-info-container">
                        <h2>Partnership</h2>

                        <div class="partner-1">
                            <h2>Rochester Chess Center</h2>
                            <p>
                                In the fall of 1998, the MasterMinds program and Rochester
                                Interscholastic Chess League program, sponsored by the Rochester
                                Chess Center embarked on a new cooperative venture: coordinating
                                the scheduling of meets so that both Chess and MasterMinds were
                                scheduled on the same dates, in the same places. This coordination
                                allows schools the option of combining the transportation budgets
                                for both teams, reducing a significant program cost for many
                                schools. Schools that determine that there is significant student
                                participation overlap between the two teams do have the option of
                                scheduling their teams in separate leagues and traveling
                                separately. Though designed primarily for rural schools with
                                longer transportation runs, both rural, suburban and urban/city
                                schools have all taken advantage of this new opportunity.
                                Participation in the Interscholastic Chess League almost tripled
                                in just two years and some schools that only played Chess have
                                added MasterMinds for their students. In the 2003-2004 season,
                                this same format of coordinated scheduling began for schools in
                                the Buffalo region. Plans for continued expansion into other
                                regions are underway. For more information about MasterMinds and
                                Chess, you can call Ron Lohrman, director of the Interscholastic
                                Chess Leagues, at (585) 442-2430, or MasterMinds Commissioner
                                Scott Kroner at (585) 473-0864.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="side-panel">
            <div class="side-panel-container">
                <div class="headline-title"><h2>Resources</h2></div>
                <div class="deadlines-container">
                    <h3>Deadlines</h3>
                    <div class="deadline-items-container">
                        <div class="items">
                            <h4>Albany:</h4>
                            <p>Friday, September 23, 2022</p>
                        </div>
                        <div class="items">
                            <h4>Buffalo:</h4>
                            <p>Friday, September 23, 2022</p>
                        </div>
                        <div class="items">
                            <h4>Rochester:</h4>
                            <p>Friday, September 23, 2022</p>
                        </div>
                        <div class="items">
                            <h4>Syracuse:</h4>
                            <p>Friday, October 7, 2022</p>
                        </div>
                        <div class="items">
                            <h4>Binghamton:</h4>
                            <p>Friday, November 4, 2022</p>
                        </div>
                        <div class="items">
                            <h4>Plattsburg:</h4>
                            <p>Thursday, November 10, 2022</p>
                        </div>
                    </div>
                </div>
                <div class="forms-container">
                    <h3>Forms</h3>
                    <div class="form-items-container">
                        <div class="form-item">
                            <h4><a href="https://www.nymasterminds.com/general/downloads/MasterMindsbrochure1.pdf"
                                   target="_blank">Brochure</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="https://www.nymasterminds.com/general/downloads/No%20cheating%20pledge.pdf"
                                   target="_blank">No cheating Pledge</a></h4>
                        </div>

                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Pre-season</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Program Info</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">End-of-season-form-container</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Prescheduling-specials-initial</a>
                            </h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Playoffs</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Miscellaneous</a></h4>
                        </div>
                        <div class="form-item">
                            <h4><a href="./Pages/pre-season.html" target="_blank">Contact us</a></h4>
                        </div>
                    </div>
                </div>
                <div class="contact-container"></div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class=nav-container>
                <a href="../../../index.php" target="_blank">Home</a>
                <a href="#" target="_blank">Program</a>
                <a href="#" target="_blank">General</a>
                <a href="#" target="_blank">League</a>
                <a href="#" target="_blank">Teams</a>
                <a href="#" target="_blank">Contact</a>
                <a href="#" target="_blank">related links</a>
                <a href="#" target="_blank">store</a>
            </div>
            <div class="social-icons-container">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
    </footer>
</div>
</body>

</html>
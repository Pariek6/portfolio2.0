<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Portfolio | Patrick Frumau</title>
  <meta name="google-site-verification" content="E_3M8Jo7VfF4a5z7PboXrAR5sG6zT3sIKdJa-ZkQMaY" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dit is de portfolio van Patrick Frumau,
  een mediadeveloper die met het front-end en back-end gebied overweg kan">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Patrick Frumau">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" href="afb/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/smoothScroll-ES5.js"></script>
  <script src="js/hamburger.js"></script>

  <script src="https://use.fontawesome.com/37333d138f.js"></script>


</head>


<body>
  <div class="container">
    <header>
      <ul>

        <li class="nav_list_item"><a title="Contact" href="#contact" class="scrollOnClick"><i class="fa fa-address-book" aria-hidden="true"></i> Contact</a></li>
        <li class="nav_list_item"><a title="Mijn werk" href="#work" class="scrollOnClick"><i class="fa fa-laptop" aria-hidden="true"></i> Mijn werk</a></li>
        <li class="nav_list_item"><a title="Over mij" href="#about" class="scrollOnClick"> <i class="fa fa-user" aria-hidden="true"></i> Over mij</a></li>
        <li class="nav_list_item active"><a title="Home" href="#top" class="scrollOnClick"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <a href="#top" class="scrollOnClick"><img title="Logo" src="afb/logo.png" alt="Credit to Rowin Schmidt"  id="logo"></a>
      </ul>



    </header>
    <!--   RESPONSIVE NAVIGATION   -->

    <div id="mySidenav" class="sidenav">
<a title="Close of navigation" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a title="Home"      href="#top" class="scrollOnClick">Home</a>
<a title="Over mij"  href="#about" class="scrollOnClick">Over mij</a>
<a title="Mijn werk" href="#work" class="scrollOnClick">Mijn werk</a>
<a title="Contact"   href="#contact" class="scrollOnClick">Contact</a>
</div>


<span id="sidebarOpen"
 onclick="openNav()">&#9776; </span>


    <div id="top">
      <div class="top__text">
      <h1>Patrick Frumau</h1>
      <h2>Media - Developer</h2>
    </div>
    </div>


    <!--  DIT IS DE HTML VAN ABOUT  -->


    <div class="about__container">
      <div id="about">
        <h1>Over mij</h1>
        <div class="about__avatar"><img title="Avatar" alt="Kan afbeelding niet weergeven" src="afb/profielfoto.jpg"></div>

        <p class="about__text">Ik ben <strong>Patrick Frumau</strong>,<br> ik ben een fullstack developer bij wie de
          focus vooral ligt op de back-end.
          <br>Ik studeer media|web development aan het Mediacollege in Amsterdam</p>

        <hr><br>
        <p class="about__text2">Ik studeer media | web development aan het Mediacollege in Amsterdam en heb ervaring opgedaan in
          vele verschillende programmeer talen. Zo heb ik veel met HTML5, CSS3 en PHP gedaan.
          Ook heb ik met regelmaat javascript en java gebruikt. Bij veel van deze projecten heb
          ik moeten samenwerken met andere programmeurs of mediavormgevers.
          <br><br> Ik laat u later een aantal voorbeelden zien,
          als u dat direct wilt zien klik dan op de navigatiebalk op mijn werk of klik
          <a title="link to work" href="#work" class="scrollOnClick"><span>hier</span></a><br><br> Verder.. <strong>Wie ben ik zelf?</strong>
          Ik zie mezelf als een vriendelijk persoon die mensen zo goed mogelijk probeerd te helpen als dat wordt gevraagt.

          <br><br><strong>Hobby's:</strong> Ik ben een erg actief persoon. Ik sport veel, minimaal 3 keer per week.
          De sport die ik beoefen is voetbal en dat doe ik met veel plezier, in een ver verleden zat ik ook nog op tennis.


        </p>

      </div>
    </div>

    <!--  DIT IS DE HTML VAN WERK  -->

    <div id="work">

      <h1 class="work__title">Werk</h1>
      <div class="work__container">


        <!-- PROJECT REDACTIEADMIRAAL -->

        <div class="projecten">
          <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/redactieadmiraal.png" class="work__image">
          <div class="foreground">

            <div class="plus__button"><a title="More info"
              class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
          </div>
          <div  class="modal myModal">
            <div class="modal-content">
              <span class="close"><div class="outer">
                  <div class="inner">
                    <label>Terug</label>
                  </div>
                </div></span>
                <div class="modal__header">
                  <p>Project <a title="Link to project Redactieadmiraal"
                  href="http://www.redactieadmiraal.nl/home" target="_blank">
                  <span id="redactieadmiraal">Redactieadmiraal</span></a></p>
                </div>
                  <div class="project__text"><br>
                    <p>Dit is het project Redactieadmiraal. Ik deed deze opdracht samen met een groep studenten op school.
                    We moesten de website van mevrouw Admiraal helemaal opnieuw maken want ze was niet tevreden over haar website.
                    De site moest functioneel en simpel zijn voor haar. Ze moest zelf artikelen kunnen plaatsen over haar boeken. We hebben
                    in dit project gewerkt met de cms Graph. <br><br>
                    Je kunt de site zien als je op de link klikt in de titel.<br>
                    Dit project is afgerond op 3 juli 2017
                  </p><br>

                      <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                    <hr><br>
                      <div class="skills__images">
                        <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                        <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                        <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                        <img title="PHP"alt="Kan afbeelding niet weergeven" src="afb/php.png"></div>

                   </div>
            </div>
          </div>

        </div>


        <!-- PROJECT PICSHARE -->

        <div class="projecten">

          <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/picShare.jpg" class="work__image">
                <div class="foreground">

                  <div class="plus__button"><a title="More info"
                    class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
                </div>
                <div class="modal myModal">
                  <div class="modal-content">

                    <span class="close"><div class="outer">
                        <div class="inner">
                          <label>Terug</label>
                        </div>
                      </div></span>

                      <div class="modal__header">
                    <p>Project <a title="Link to project"
                      href="http://24011.hosts.ma-cloud.nl/school/bewijzenmap/p1.3/bap_mitj/opdracht_1/index.php"
                      target="_blank"><span id="picShare">PicShare</span></a></p>
                      </div>
                      <div class="project__text"><br>
                        <p>Dit is het project PicShare. Het doel was om jezelf te kunnen registreren via een bevestigings e-mail. Daarna kun je
                        op de site inloggen en foto's uploaden. Dit gebeurd allemaal via de back-end, via PHP. Daar zit het voornaamste werk in.<br><br>
                        Je kunt de site zien als je op de link klikt in de titel.<br>
                        Dit project is afgerond op 8 mei 2017
                        <br><br>
                        <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                      <hr><br>
                      <div class="skills__images">
                        <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                        <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                        <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                        <img title="PHP"alt="Kan afbeelding niet weergeven" src="afb/php.png"></div>
                      </div>
                    <br><br>
                  </div>
                </div>
            </div>

            <!-- THE WALL -->

            <div class="projecten">

              <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/thewall.png" class="work__image"></a>
              <div class="foreground">
                <div class="plus__button"><a title="More info"
                  class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
              </div>
              <div class="modal myModal">
                <div class="modal-content">
                  <span class="close"><div class="outer">
                      <div class="inner">
                        <label>Terug</label>
                      </div>
                    </div></span>
                    <div class="modal__header">
                  <p>Project <a title="Link to project"
                    href="http://21960.hosts.ma-cloud.nl/wall/"
                    target="_blank"><span id="theWall">The Wall</span></a></p>
                    </div>
                    <div class="project__text"><br>
                      <p>Dit is het project TheWall. Ik heb dit project samen gemaakt met een andere Developer: Maurice de Jong.
                      Het doel was om jezelf te kunnen registreren via een bevestigings e-mail. Daarna kun je
                      op de site inloggen en foto's uploaden. Dit gebeurd allemaal via de back-end, via PHP. Daar zit het voornaamste werk in.<br><br>
                      Je kunt de site zien als je op de link klikt in de titel.<br>
                      Dit project is afgerond op 3 juli 2017
                    </p><br>
                      <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                    <hr><br>
                        <div class="skills__images">
                          <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                          <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                          <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                          <img title="PHP"alt="Kan afbeelding niet weergeven" src="afb/php.png"></div>
                     </div>
                </div>
              </div>
            </div>

            <!-- PROJECT MYBAND -->

            <div class="projecten">
              <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/myBand.jpg" class="work__image">
              <div class="foreground">

                <div class="plus__button"><a title="More info"
                   class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
              </div>
              <div  class="modal myModal">
                <div class="modal-content">
                  <span class="close"><div class="outer">
                      <div class="inner">
                        <label>Terug</label>
                      </div>
                    </div></span>
                    <div class="modal__header">
                      <p>Project <a title="Link to project"
                      href="http://24011.hosts.ma-cloud.nl/school/bewijzenmap/p1.4/MyBand/?page=articles" target="_blank">
                      <span id="myBand">myBand</span></a></p>
                    </div>
                      <div class="project__text"><br>
                        <p>Dit is het project myBand. Het doel was om eigenlijk alle plaatjes en alle tekst die je gebruikt
                          via een database op te halen. Dus dat je het niet via html doet. Dit gebeurd allemaal via de back-end, via PHP.
                        Je moest dan artikelen gaan ophalen uit de database en die dan plaatsen op je website.<br><br>
                        Je kunt de site zien als je op de link klikt in de titel.<br>
                        Dit project is afgerond op 3 juli 2017
                      </p><br>

                          <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                        <hr><br>
                        <div class="skills__images">
                          <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                          <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                          <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                          <img title="PHP"alt="Kan afbeelding niet weergeven" src="afb/php.png"></div>

                       </div>
                </div>
              </div>

            </div>
          </div>

            <!-- VOLGENDE PROJECT -->




          <!-- KLEINERE OPDRACHTEN -->

          <div class="work__container2">

            <h1 class="work__title">Kleinere projecten</h1>

            <!-- PROJECT RANDOMZIN -->

            <div class="projecten">
              <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/randomzin.jpg" class="work__image">
              <div class="foreground">

                <div class="plus__button"><a title="More info"
                   class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
              </div>
              <div id="myModal" class="modal myModal">
                <div class="modal-content">
                  <span class="close"><div class="outer">
                      <div class="inner">
                        <label>Terug</label>
                      </div>
                    </div></span>
                    <div class="modal__header">
                      <p>Project <a title="Link to project"
                      href="http://24011.hosts.ma-cloud.nl/school/bewijzenmap/p1.2/fro/opdracht_7/7c/index.html" target="_blank">
                      <span>Random zin</span></a></p>
                    </div>
                      <div class="project__text"><br>
                        <p>Dit is het project myBand. Dit was een klein opdrachtje voor school waarin je met array's moest werken.
                          Je moest een aantal arrays aanmaken en die moesten in een random volgorde worden geplaatst. De zin moet Daarna
                          nog wel een beetje in de goede volgorde worden gezet.<br><br> Je kunt de site zien als je op de link klikt in de titel.
                          <br>
                          Dit project is afgerond op 19 december 2016</p><br>

                          <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                        <hr><br>
                        <div class="skills__images">
                          <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                          <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                          <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                          </div>
                        </div>
                </div>
              </div>

            </div>

            <!-- PROJECT OURHOUSE -->

            <div class="projecten">
              <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/ourhouse.png" class="work__image">
              <div class="foreground">

                <div class="plus__button"><a title="More info" class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
              </div>
              <div id="myModal" class="modal myModal">
                <div class="modal-content">
                  <span class="close"><div class="outer">
                      <div class="inner">
                        <label>Terug</label>
                      </div>
                    </div></span>
                    <div class="modal__header">
                      <p>Project <a title="Link to project"
                      href="http://24011.hosts.ma-cloud.nl/school/bewijzenmap/p1.3/Fro/OpdrachtHouse/" target="_blank">
                      <span>my House</span></a></p>
                    </div>
                      <div class="project__text"><br>
                        <p>Dit is een klein project genaamd my House. Ik heb hierbij in een canvas het huis getekent dat je ziet
                          als je op de link hierboven klikt. Ik heb het gehele huis gemaakt door middel van getContext'2d' <br><br>
                          Dit project is afgerond op 10 april 2017</p>

                        <br>
                        <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                      <hr><br>
                      <div class="skills__images">
                        <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                        <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                        <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                      </div>
                    </div>
                </div>
              </div>

            </div>

            <!-- BMI CALCULATOR -->

            <div class="projecten">
              <img title="Project" alt="Kan afbeelding niet weergeven" src="afb/bmicalc.png" class="work__image">
              <div class="foreground">

                <div class="plus__button"><a title="More info"
                   class="fa fa-plus  fa-5x toggleModalButton" aria-hidden="true"></a></div>
              </div>
              <div id="myModal" class="modal myModal">
                <div class="modal-content">
                  <span class="close"><div class="outer">
                      <div class="inner">
                        <label>Terug</label>
                      </div>
                    </div></span>
                    <div class="modal__header">
                      <p>Project <a title="Link to project"
                      href="http://24011.hosts.ma-cloud.nl/school/bewijzenmap/p1.4/fro/bmi/" target="_blank">
                      <span>BMI Calculator</span></a></p>
                    </div>
                      <div class="project__text"><br>
                        <p>Dit is een klein project genaamd BMI Calculater. De naam zegt eigenlijk alles, het berekent of je een goede
                          lengte / gewicht verhouding hebt. <br><br>Je kunt de site zien als je op de link klikt in de titel.
                          <br>
                          Dit project is afgerond op 26 juni 2017</p>

                          <br>
                          <div class="skills">Deze programmeertalen heb ik gebruikt:</div><br>
                        <hr><br>
                        <div class="skills__images">
                          <img title="HTML5" alt="Kan afbeelding niet weergeven" src="afb/html5.png">
                          <img title="CSS" alt="Kan afbeelding niet weergeven" src="afb/css.png">
                          <img title="Javascript" alt="Kan afbeelding niet weergeven" src="afb/javascript.png">
                          <img title="PHP"alt="Kan afbeelding niet weergeven" src="afb/php.png"></div>
                        </div>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- CONTACT  -->

        <div id="contact">
          <h1>Contact</h1>
          <div class="contact__container">


            <div class="contact__block1">
              <p>Contacteer mij op dit mailadres: <a title="Mailadres" href="mailto:24011@ma-web.nl?Subject=Hello%20again"
                 target="_top"><br><br>24011@ma-web.nl</a></p><br><br>
              <p>Contact opnemen kan ook <br>via de mobiele telefoon:<br><br> 06123456789</p>
            </div>

            <div class="contact__block1">
              <p>U kunt mij ook benaderen op deze social media adressen:</p><br>
              <a title="Link | Facebook" href="https://www.facebook.com/patrick.frumau" class="fa fa-facebook"></a>
              <a title="Link | Twitter" href="https://twitter.com/PatrickFrumau" class="fa fa-twitter"></a>
              <a title="Link | Google +" href="https://plus.google.com/u/0/114010166916106078073" class="fa fa-google-plus"></a>

              <br><br>
              <p>Ik gebruik linkedin voor zakelijke contacten;</p><br>
              <a title="Link | Linkedin" href="https://www.linkedin.com/in/patrick-frumau-2a692214b/" class="fa fa-linkedin"></a>

              <p>Github voor code:</p> <br>
              <a title="Link | Github" href="https://github.com/Pariek6" class="fa fa-github"></a>

            </div>

          </div>

        </div>






        <div class="footer">
          <div id="button"></div>
          <div id="container">
            <div id="cont">
              <div class="footer_center">
                <h3>&copy; 2017 - Patrick Frumau | Portfolio</h3>
              </div>
            </div>
          </div>
        </div>


      </div>
      <script src="js/modaalstart.js"></script>
</body>

</html>

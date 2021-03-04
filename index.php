<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <title>Portfolio</title>
  </head>
  <body>
    <div class="scroll-up-btn">
      <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
      <div class="max-width">
        <div class="logo">
          <a href="#home">Rash<span>ed.</span></a>
        </div>
        <ul class="menu">
          <li><a href="#home" class="menu-btn">Home</a></li>
          <li><a href="#about" class="menu-btn">About</a></li>
          <li><a href="#Services" class="menu-btn">Services</a></li>
          <li><a href="#skills" class="menu-btn">Skills</a></li>
          <li><a href="#teams" class="menu-btn">Teams</a></li>
          <li><a href="#contact" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
    <!--Home section start-->
    <section class="home" id="home">
      <div class="max-width">
        <div class="home-content">
          <div class="text-1">Hello, my name is</div>
          <div class="text-2">Rashed</div>
          <div class="text-3">And I'm a <span class="typing"></span></div>
          <a href="#">Hire me</a>
        </div>
      </div>
    </section>

    <!--About section-->
    <section class="about" id="about">
      <div class="max-wi">
        <h3 class="title">About me</h3>
        <div class="about-content">
          <div class="column left">
            <img src="Images/3.jpg" alt="" />
          </div>
          <div class="column right">
            <div class="text">
              I'm Rashed and I'm a <span class="typing-2">Developer</span>
            </div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book.
            </p>
            <a href="#">Download CV</a>
          </div>
        </div>
      </div>
    </section>

    <!--Service section-->
    <section class="Services" id="Services">
      <div class="max-width">
        <h3 class="title">My Services</h3>
        <div class="serv-content">
          <div class="card">
            <div class="box">
              <i class="fas fa-chart-line"></i>
              <div class="text">Advartiging</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <i class="fas fa-code"></i>
              <div class="text">Apps Design</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <i class="fas fa-code"></i>
              <div class="text">Web Design</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--skills section-->
    <section class="skills" id="skills">
      <div class="max-width">
        <h3 class="title">My Skills</h3>
        <div class="skills-content">
          <div class="column left">
            <div class="text">My creative skills $ expriences</div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book.
            </p>
            <a href="#">Read More...</a>
          </div>
          <div class="column right">
            <div class="bars">
              <div class="info">
                <span>HTML</span>
                <span>90%</span>
              </div>
              <div class="line html"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>CSS</span>
                <span>70%</span>
              </div>
              <div class="line css"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>JavaSceipt</span>
                <span>60%</span>
              </div>
              <div class="line javascript"></div>
            </div>
            <div class="bars">
              <div class="info">
                <span>MySql</span>
                <span>60%</span>
              </div>
              <div class="line mysql"></div>
            </div>

            <div class="bars">
              <div class="info">
                <span>Bootstrap</span>
                <span>70%</span>
              </div>
              <div class="line bootstrap"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--team section-->

    <section class="teams" id="teams">
      <div class="max-width">
        <h2 class="title">My Teams</h2>
        <div class="carousel owl-carousel">
          <div class="card">
            <div class="box">
              <img src="Images/1.jpg" alt="" />
              <div class="text">Someone name</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/2.jpg" alt="" />
              <div class="text">Someone name</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/3.jpg" alt="" />
              <div class="text">Someone name</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/teams.jpg" alt="" />
              <div class="text">Someone name</div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--contact with me-->
    <section class="contact" id="contact">
      <div class="max-width">
        <h2 class="title">Contact Us</h2>
        <div class="contact-content">
          <div class="column left">
            <div class="text">Get in Touch</div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
            <div class="icons">
              <div class="row">
                <i class="fas fa-user"></i>
                <div class="info">
                  <div class="head">Name</div>
                  <div class="sub-title">Rasheh Patowary</div>
                </div>
              </div>
              <div class="row">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                  <div class="head">Address</div>
                  <div class="sub-title">Dhaka, Bangladesh</div>
                </div>
              </div>
              <div class="row">
                <i class="fas fa-envelope"></i>
                <div class="info">
                  <div class="head">Email</div>
                  <div class="sub-title">mkrashed757@gamil.com</div>
                </div>
              </div>
            </div>
          </div>
          <div class="column right">
            <div class="text">Message</div>
            <form action="server.php" method="POST">
              <div class="fields">
                <div class="field name">
                  <input type="text" placeholder="Name" name="name" required />
                </div>
                <div class="field email">
                  <input
                    type="email"
                    placeholder="Email"
                    name="email"
                    required
                  />
                </div>
              </div>
              <div class="field">
                <input type="text" placeholder="Subject" name="sub" required />
              </div>
              <div class="field textarea">
                <textarea
                  cols="30"
                  rows="10"
                  placeholder="Description project..."
                  name="msg"
                  required
                ></textarea>
              </div>
              <div class="button">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--footer section-->
    <footer>
      <span
        >Created By <a href="#">CodingBangaldesh</a> |
        <span class="fas fa-copyright"> </span>2021 all right reserved</span
      >
    </footer>
    <script src="Javascript/app.js"></script>
  </body>
</html>

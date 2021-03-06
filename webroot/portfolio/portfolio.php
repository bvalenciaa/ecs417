<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blanca Valencia</title>
  <link rel="stylesheet" href="portfolio.css"> <!-- CSS Stylesheet -->
  <link rel="reset" href="resetStyling.css" type="text/css"/> <!-- Reset Styling -->

  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic" rel="stylesheet" type="text/css">

  <?php require_once('../server/connection.php') ?>
  <?php require_once('../getPosts.php') ?>
  <?php $latest = getLatest(); ?>

</head>

<body>
  <div id="page-wrapper">
    <header class="newheader">
      <div class="headerstyle">
        <h1>blanca valencia</h1>
        <nav>
          <a href="portfolio.php">Portfolio</a>
          <a href="../index.php">Blog</a>
          <a href="../contact.php">Contact</a>
          <a href="../dashboard.php">Dashboard</a>
        </nav>
      </div>
    </header>

    <!-- Header -->

    <div id="headimage">
      <h1>my portfolio</h1>
      <img src="https://pm1.narvii.com/7455/387193363db35e83cbfcc12462230ee6bf2051bfr1-640-640v2_00.jpg">
    </div>

      <div class="row">
        <div class="column">
          <!-- About Section-->
    			<div id="about">
            <div class="pager">
              <p>Hi! I'm a 1st year CS with Management Student at QMUL.</p><br><br><br>

              <div class="browser">
                <!-- Key Facts -->
                <div class="tags">
                  <a href="/" title="ME"><img src="https://developer.apple.com/design/human-interface-guidelines/macos/images/icons/SystemIcons/Control/Control_StopProgress_2x.png"></a>
                </div>
                <div class="tags">
                  <a href="/" title="ME"><img src="https://developer.apple.com/design/human-interface-guidelines/macos/images/icons/SystemIcons/Control/Control_Action_2x.png"></a>
                </div>
                <div class="tags">
                  <a href="/" title="ME"><img src="https://developer.apple.com/design/human-interface-guidelines/macos/images/icons/SystemIcons/Control/Control_Share_2x.png"></a>
                </div>
                <div class="keyfacts">
                  [age] = 19 yrs;<br><br>
                  [origin] = Madrid, Spain;<br><br>
                  [education] = Queen Mary University, London;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saint Cecilia's C of E School;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CEIP San Juan Bautista, Madrid;<br><br>
                  [degree] = Computer Science with Management (ITMB);<br><br>
                  [graduation_year] = 2023;<br><br>
                  [qualifications] = A Levels - A*ABC;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GCSEs &nbsp;&nbsp;&nbsp;- 8 A*-C;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 3 9-7; <br><br>
                  [contact] = "<a target="_blank" href="mailto:b.valencia@se19.qmul.ac.uk">b.valencia@se19.qmul.ac.uk</a>";<br><br>
                  [cv] = "<a target="_blank" href="blancavalencia.pdf">blancavalencia.pdf</a>"; <br><br>
                  [interests] = Creative Computing, Web Design, Business Computing; <br><br>
                  [work_experience] = - everis Consultancy;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Summer 2018;<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Human Resource Department;<br><br>
                  [languages] = spanish (native), english (bilingual), french (intermediate);<br>
                </div> <!-- END of KEYFACTS -->
              </div> <!-- END of BROWSER -->
            </div> <!-- END of PAGER -->
          </div><br> <!-- END of ABOUT -->

          <!-- Project Section-->
          <div id="projects">
            <div class="pager">
              <h2>My Projects</h2>
              <div class="newproject">
                <a class="image" href="https://i.pinimg.com/564x/f9/89/c0/f989c0b709d617621841ee16aef23e65.jpg"><img src="https://i.pinimg.com/564x/f9/89/c0/f989c0b709d617621841ee16aef23e65.jpg"></a>
                <p class="description"><b>A Level</b>&nbsp;&nbsp;For my A-Level CS project I created an interactive website which featured a database, and which was aimed to facilitate the user to narrow down their options when cooking by simply inputting the ingredients they had at home. The program then would output a series of recipes based on those keywords, sorting from most to least relevant.</p>
              </div>

              <div class="newproject">
                <a class="images" href="https://i.pinimg.com/564x/e0/68/aa/e068aac00e5ac428957d8a2eaaf596e1.jpg"><img src="https://i.pinimg.com/564x/e0/68/aa/e068aac00e5ac428957d8a2eaaf596e1.jpg"></a>
                <p class="description"><b>Procedural Programming</b>&nbsp;&nbsp; Using Java, I created a chatbot program that would use various trigger words and iterative blocks of code to talk to the user and respond to questions, prompt the user to talk about themselves and customise their response based on the user's input.</p>
              </div>

              <div class="newproject">
                <a class="image" href="https://i.pinimg.com/564x/c3/19/9a/c3199a33c91c8e9154269c0db7e78858.jpg"><img src="https://i.pinimg.com/564x/c3/19/9a/c3199a33c91c8e9154269c0db7e78858.jpg"></a>
                <p class="description"><b>Object-Oriented Programming</b>&nbsp;&nbsp; For my coursework, I created an RP adventure game which implemented the main object-oriented programming concepts, including polymorphim, inheritance, dynamic binding, etc.</p>
              </div>

              <div class="newproject">
                <a class="image" href="https://i.pinimg.com/564x/3c/e9/ef/3ce9ef34163441192765b527d9c251e5.jpg"><img src="https://i.pinimg.com/564x/3c/e9/ef/3ce9ef34163441192765b527d9c251e5.jpg"></a>
                <p class="description"><b>Professional Research and Practice</b>&nbsp;&nbsp; As part of one of my modules in term 1, I devised a solution for elderly patients at home and people in need of constant medical monitoring. The solution included a breakdown of how this system would be implemented, supported and developed; as well as its various advantages and disadvantages.</p>
              </div>
            </div> <!-- END of PAGER -->
          </div><br> <!-- END of PROJECTS -->
        </div> <!-- END of COLUMN -->

        <div class="column">
          <div id="postarea">
            <div class="pager">
              <h3>This is what I've been up to...</h3><br><br>
              <article>
                <div class="articleContent">
                  <h4><?php echo $latest['title'] ?></h4><br>
                  <span><?php echo date("F j, Y "); ?></span><br>
                  <p><?php echo $latest['body'] ?></p>
                </div>
          		</article>
              <h3>Read More Posts in <a href="../index.php">My Blog!</a></h3>
            </div> <!-- END of PAGER -->
          </div><br> <!-- END of POSTAREA -->

          <div id="myskills">
            <div class="pager">
              <h3>These are my skills!</h3><br><br>

              <div class="box">
                <div class="left"><img src="cw_images\html.jpg"></div>
                <div class="sectionheader">
                  <span class="title">HTML / CSS</span>
                  <div class="line"></div>
                </div> <!-- END of SECTIONHEADER -->
                <div class="text">
                  <p>I've been interested in html/css for a long time, creating my own designs on platforms such as blogger or tumblr</p>
                </div>
              </div><br> <!-- END of BOX -->

              <div class="box">
                <div class="left"><img src="cw_images\java.jpg"></div>
                <div class="sectionheader">
                  <span class="title">JAVA</span>
                  <div class="line"></div>
                </div> <!-- END of SECTIONHEADER -->
                <div class="text">
                  <p>I learnt java in my first semester at university, I enjoyed it a lot and feel very confident employing it for devised solutions</p>
                </div>
              </div><br> <!-- END of BOX -->

              <div class="box">
                <div class="left"><img src="cw_images\python.png"></div>
                <div class="sectionheader">
                  <span class="title">PYTHON</span>
                  <div class="line"></div>
                </div> <!-- END of SECTIONHEADER -->
                <div class="text">
                  <p>Python was the first programming language I learnt, I used it primarily for my GCSE and A Level projects</p>
                </div>
              </div><br><br> <!-- END of BOX -->

              <div class="statRow">
                <img class="statRowImage" src="cw_images\photoshop.png" alt="Photoshop">
                <div class="statRowText">60%</div>
                <div class="statRowBar">
                  <div class="statRowBarFill" style="width:60%;"></div></div>
              </div>

              <div class="statRow">
                <img class="statRowImage" src="cw_images\mysql.png" alt="MySQL">
                <div class="statRowText">30%</div>
                <div class="statRowBar">
                  <div class="statRowBarFill" style="width:30%;"></div></div>
              </div>

              <div class="statRow">
                <img class="statRowImage" src="cw_images\sonyvegas.png" alt="Sony Vegas">
                <div class="statRowText">70%</div>
                <div class="statRowBar">
                  <div class="statRowBarFill" style="width:70%;"></div></div>
              </div>

              <div class="statRow">
                <img class="statRowImage" src="cw_images\dotnet.png" alt="Microsoft .NET">
                <div class="statRowText">30%</div>
                <div class="statRowBar">
                  <div class="statRowBarFill" style="width:30%;"></div></div>
              </div>

              <div class="statRow">
                <img class="statRowImage" src="cw_images\micoffice.jpg" alt="Microsoft Office">
                <div class="statRowText">80%</div>
                <div class="statRowBar">
                  <div class="statRowBarFill" style="width:80%;"></div></div>
              </div>
            </div> <!-- END of PAGER -->
          </div><br> <!-- END of MYSKILLS -->

          <div id="myinterests">
            <div class="pager">
              <h3>these are my Interests</h3><br><br><br>

              <div class="hobbyRow">
                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo1.jpg" alt="Photography" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Photography</h1>
                      <p>I've always enjoyed photography, most notably that of buildings and architecture. It is a great passion of mine.</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->

                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo2.jpg" alt="Travelling" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Travelling</h1>
                      <p>I enjoy travelling and have visited different destinations. I am motivated to travel around the world to experience different cultures.</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->
              </div>

              <div class="hobbyRow">
                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo3.jpg" alt="Korean" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Korean Culture</h1>
                      <p>I'm a big fan of South Korean media and entertainment, and have been learning Korean for a few years now. I believe their culture has inspired a lot of my design preferences.</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->

                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo4.png" alt="Graphic Design" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Graphic Design</h1>
                      <p>From a very young age I've shown interest in art and design - I formed part of art clubs at my primary school and took Art as a GCSE. Today, I keep practicing and enjoy visiting galleries.</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->
              </div>

              <div class="hobbyRow">
                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo5.jpg" alt="Cooking" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Cooking</h1>
                      <p>For a few years I've been trying to improve my cooking skills and I now enjoy cooking and trying different recipes. My mum, having a cake business, has also inspired me to do so.</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->

                <div class="hobby">
                  <div class="hobbyText">
                    <div class="hobbyFront"><img src="cw_images\photo6.jpg" alt="Avatar" style="width:250px;height:250px;"></div>
                    <div class="hobbyBack">
                      <h1>Interior Design</h1>
                      <p>From a very young age, I've always been very passionate about architecture and interior design. I love designing houses and decorating them on software programs like SketchUp & Sims</p>
                    </div>
                  </div> <!-- END of HOBBYTEXT -->
                </div> <!-- END of HOBBY -->
              </div> <!-- END of HOBBYROW -->
            </div> <!-- END of PAGER -->
          </div><br> <!-- END of MYINTERESTS -->

          <!-- Contact Section-->
          <div id="contactarea">
            <div class="pager">
              <div class="formdesign">
                <form class="contact" action="../contact.php" method="post">
                  <fieldset>
                    <legend>Get In Touch!</legend>
                    <p>
                      <label>Title</label>
                      <select name="Title" required>
                        <option>Choose one</option>
                        <option>Mr</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                        <option>Miss</option>
                      </select>
                    </p>

                    <p>
                      <label>Full Name</label>
                      <input type="text" name="name" placeholder="Full Name" required>
            		    </p>

                    <p>
                      <label>Email Address</label>
                      <input type="text" name="mail" placeholder="Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> Example name@domain.com>
                    </p>

                    <p>
                      <label>Subject</label>
                      <input type="text" name="subject" placeholder="Subject">
                    </p>

                    <label>Message</label><br>
                    <textarea name="message" placeholder="Message" rows="4" cols="50" required></textarea><br>

                    <button type="submit" name="submit">SEND</button>
                  </fieldset>
                </form>
              </div> <!-- END of FORMDESIGN-->
            </div> <!-- END of PAGER -->
          </div> <!-- END of CONTACTAREA -->
        </div> <!-- END of COLUMN -->
      </div> <!-- END of ROW -->

      <div id="footer">
        <div class="pager">
          LAST UPDATED: <span id="date"></span>
          <span style="float:right">
            <a target="_blank" href="mailto:b.valencia@se19.qmul.ac.uk">Email</a>&nbsp;//&nbsp;
            <a target="_blank" href="https://www.linkedin.com/in/blanca-valencia-4792bb194/">LinkedIn</a>&nbsp;//&nbsp;
            <a target="_blank" href="https://www.qmul.ac.uk/">QMUL</a>
          </span>
        </div> <!-- END of PAGER -->
      </div> <!-- END of FOOTER -->
    </div> <!-- END of PAGE-WRAPPER -->

    <script>
      document.getElementById("date").innerHTML = document.lastModified;
    </script>
</body>
</html>

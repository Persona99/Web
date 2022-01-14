<head>
  <link href="../css/1.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php
  $file = fopen('../log.txt', 'a');
  fwrite($file, date('l jS \of F Y h:i:s A')." Загрузка главной страницы".PHP_EOL);
  fclose($file);
  ?>

  <p class="sidebar">
    <a class="active" href="#main">MAIN</a>
    <a href="#about">ABOUT</a>
    <a href="#function">FUNCTION</a>
    <a href="#menu">MENU</a>
    <a href="#contact">CONTACT</a>
    <a href="#order">ORDER</a>
  </p>

  <p><img id="main" src="../img/title.jpg" width="100%" height="auto" alt=""></p>

  <?php if($_COOKIE['user'] == ''):
                ?><p style="text-align: right"><a href="register.html">REGISTER</a></p>
                  <p style="text-align: right"><a href="login.html" >LOGIN</a></p>
 <?php else: ?>
                  <p style="text-align: right"><a href="../php/logout.php" >LOGOUT</a></p>
 <?php endif;?>

  <h1 id="about">Shizuku Modern Japanese Ramen & Craft Beer</h1>
  <br><br>
  <h2 class="h2-handle">Shizuku is not your average Japanese restaurant. That’s partly because  we serve the best ramen in Melbourne, and partly because our menu  has a creative flair. Unlike other Japanese venues we also offer a  serious selection of craft beer. And while we could go on about how  ramen and beer is the perfect pair, there’s only one way to discover it  for yourself.</h2>

  <p class="text-right"><img src="../img/1.jpg" width="450" align="left" style="border-right: 70px solid #ffffff">Flavour comes first, whether we’re talking about our  traditional ramen stock that takes a whole day to make or  the unique brews we import from all over Asia. Not sure  which beer, sake or umeshu matches your food? Just ask.</p>
  <p class="text-right">Shizuku offers a unique and contemporary setting to  cater for events and functions of up to 65 guests. It is  perfect for birthday celebrations, corporate events, private  business lunches and dinners, product launches, conferencing  and holiday parties. Please download our events info pack and  fill out our enquiry form and we'll be in touch soon.</p>
  <p class="text-right">And if you’re wondering what’s in a name, Shizuku is Japanese  for ‘droplets’. It’s because we care about every drop of  ramen and each drop of craft beer that hits your  belly. So next time you’re in Victoria Street, Melbourne’s  Vietnamese precinct, don’t settle for anything less than the best  Japanese in town.</p>
  <br><br><br>
  <p class="text-right"><img src="../img/2.jpg" width="350" align="right"></p>

  <h2 id="function" class="text-right">Functions</h2>
  <p class="text-right">Shizuku offers a unique and contemporary setting to cater for events and functions of up to 65 guests. It is perfect for birthday celebrations, corporate events, private business lunches and dinners, product launches, conferencing and holiday parties. Please download our events info pack and fill out our enquiry form and we'll be in touch soon.<p>
  <p class="text-right">And if you’re wondering what’s in a name, Shizuku is Japanese  for ‘droplets’. It’s because we care about every drop of  ramen and each drop of craft beer that hits your  belly. So next time you’re in Victoria Street, Melbourne’s  Vietnamese precinct, don’t settle for anything less than the best  Japanese in town.</p>
  <p class="text-right">Shizuku offers a unique and contemporary setting to  cater for events and functions of up to 65 guests. It is  perfect for birthday celebrations, corporate events, private  business lunches and dinners, product launches, conferencing  and holiday parties. Please download our events info pack and  fill out our enquiry form and we'll be in touch soon.</p>
  <br><br><br>
  <p class="text-right"><img src="../img/ramen.gif" width="400" align="left"></p>
  <p class="text-right"><img src="../img/4.jpg" width="400" align="right" style="border: 30px solid #ffffff" ></p>
  <p class="text-right"><img src="../img/5.jpg" width="400" align="left" style="border: 30px solid #ffffff" </p>
  <p class="text-right"><img src="../img/6.jpg" width="400" align="right" style="border: 30px solid #ffffff" </p>

  <h2 id="menu" class="text-center">MENU</h2>
  <p class="text-center">FOOD</p>
  <p class="text-center">DRINKS</p>
  <br><br><br>

  <h2><center>OUR TEAM</h2>
  <div class="section">
    <p><img src="../img/chef-1.jpg" width="400"></p>
    <p><img src="../img/chef-2.jpg" width="400"></p>
    <p><img src="../img/chef-3.jpg" width="400"></p>
  </div>

  <div id="google-map" align="center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.157714411588!2d144.99293041531863!3d-37.809774679753126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642fb5bcdbfdb%3A0xa67200ec7f1da124!2zMzA5IFZpY3RvcmlhIFN0LCBBYmJvdHNmb3JkIFZJQyAzMDY3LCDQkNCy0YHRgtGA0LDQu9C40Y8!5e0!3m2!1sru!2sru!4v1642069095900!5m2!1sru!2sru" width="600" height="500" style="border:0;"></iframe>
  </div>

  <h2 id="order"><center>EMAIL US</center></h2>
  <form method="POST" action="../php/mail.php"><center>
    <input name="name" type="text" class="type-1" placeholder="NAME">
    <input name="email" type="text" class="type-1" placeholder="EMAIL">
    <input name="phone" type="text" class="type-1" placeholder="PHONE">
    <textarea name="message">MESSAGE</textarea>
    <br>
    <button>SUBMITT</button>
  </center></form>

  <center><table>
    <td>
      <h2 id="contact">STAY IN TOUCH</h2>
      <p><a href="https://www.facebook.com/shizukujapanese">FACEBOOK</a></p>
      <p><a href="https://twitter.com/shizukujapanese">TWITTER</a></p>
      <p><a href="http://instagram.com/shizukuramen">INSTAGRAM</a></p>
    </td>
    <td>
      <h2>VISIT US</h2>
      <p>309 VICTORIA STREET</p>
      <p>ABBTSFORD, VICTORIA</p>
      <p>AUSTRALIA 3067</p>
    </td>
    <td>
      <h2>OPENING HOURS</h2>
      <p>MON - SUN</p>
      <p>11.30AM - 2.30PM</p>
      <p>5.30PM - 10PM</p>
    </td>
  </table></center>
  <?php
  $file = fopen('../log.txt', 'a');
  fwrite($file, date('l jS \of F Y h:i:s A')." Успешно".PHP_EOL);
  fclose($file);
  ?>
</body>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group work</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
      <?php include "./dynamic.php" ?>
    <header>
      <div class="header-container container">
        <div class="header-logo">
          <img src="./assets/header-lux-ventus.svg" alt="Logo" />
        </div>
        <nav class="header-navigation">
          <ul class="header-list">
          <?php
                foreach($categories as $category) {
                  echo '<li class="category">
                          <a class="link" href="' . $category['link'] . '">' . $category['name'] . '</a>
                            <ul class="subcategory">';
                              
                            foreach (($category['subList']) as $subcategory) {
                              echo '<li>
                                  <a class="link" href="' . $subcategory['link'] . '">' . $subcategory['name'] . '</a>
                              </li>';
                            }

                    echo '</ul>
                       </li>';
                     }
            ?>
            <li>
              <a class="header-contact" href="#">Contact Us</a>
            </li>
          </ul>
          <div class="search-bar">
            <img src="./assets/search-logo.svg" alt="Search-bar" />
          </div>
        </nav>
      </div>
    </header>
    <main class="container">
      <section class="section-1">
        <div class="main-section-info">
          <p>LUX VENTUS MAGAZINE</p>
          <h1>We Are the <span>Ventus Fashion</span></h1>
          <p>
            We like to gossip about everything, but we will never forget the
            daily fashion dose.
          </p>
        </div>
      </section>
      <section class="section-2">
        <div class="section-2-header">
          <h1>Topics</h1>
        </div>
        <div class="all-card">
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/Lingerie.svg" alt="Image" />
            </div>
            <h2>Lingerie</h2>
            <button class="topic-button">View More</button>
          </div>
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/Spring.svg" alt="Image" />
            </div>
            <h2>Spring</h2>
            <button class="topic-button">View More</button>
          </div>
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/Yoga.svg" alt="Image" />
            </div>
            <h2>Yoga</h2>
            <button class="topic-button">View More</button>
          </div>
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/glow.svg" alt="Image" />
            </div>
            <h2>Glow</h2>
            <button class="topic-button">View More</button>
          </div>
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/Ensembles.svg" alt="Image" />
            </div>
            <h2>Ensembles</h2>
            <button class="topic-button">View More</button>
          </div>
          <div class="card-info">
            <div class="card-img">
              <img src="./assets/skin-care.svg" alt="Image" />
            </div>
            <h2>Skin Care</h2>
            <button class="topic-button">View More</button>
          </div>
        </div>
      </section>
      <section class="small-container">
        <div class="section_3">
          <div class="section-3-topic">FASHION</div>
        </div>
      </section>
      <section class="small-container">
        <div class="section-4">
          <div class="section-4-info">
            <div class="section-4-content">
              <div class="section-4-descr">
                <div class="author-image">
                  <img src="./assets/author-image.svg" alt="image" />
                </div>
                <div class="author">
                  <p>Mallory Reyn</p>
                </div>
                <div class="date">
                  <p>April 14th, 2023</p>
                </div>
              </div>
              <div class="coming-soon">
                <p>COMING IN HOT!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="small-container">
        <div class="section-5">
          <div class="section-5-h2">
            <h2>The Latest Trends from the Moon Fashion Week.</h2>
          </div>
          <div class="section-5-p">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et
              massa mi. Aliquam in hendrerit urna.<br />

              Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
              ultrices mauris. Maecenas vitae<br />

              mattis tellus. Nullam quis imperdiet augue. Vestibulum.
            </p>
          </div>
          <div class="section-5-readmore">
            <div class="section-5-readmor-img">
              <img src="./assets/pointer-right.svg" alt="pointer" />
            </div>
            <p>READ MORE</p>
          </div>
        </div>
      </section>
      <section class="small-container">
        <div class="trending-header">
          <h1>Trending</h1>
        </div>
        <div class="section-6">
          <div class="card">
            <?php
              foreach($trendingCards as $cards) {
                echo ' <div class="card_img">
                <h2>"' . $cards["h2"] . '"</h2>
              </div>
              <div class="card_content">
                <div class="card_user_info">
                  <div class="card_user_photo">
                    <img src="' . $cards["img"] . '" alt="author" />
                    <p>"' . $cards["author"] . '"</p>
                  </div>
                  <p>"' . $cards["date"] .'"</p>
                </div>
                <h2>"' . $cards["h2-1"] . '".</h2>
                <p>"' . $cards["smlText"] .'"</p>
                <a href="#"
                  ><img src="' . $cards["pointer"] .'" alt="" /> READ MORE</a>
              </div>
            </div>
            ';
            };
            ?>
          </div>
        </div>
      </section>
      <section class="section-7 small-container">
        <div class="section-7-cards">
        <?php 

for($i = 0; $i <sizeof($trendingBlogs); $i++){
    echo '
    <div class="blog">
    <div class="block-left">
      <img src="' . $trendingBlogs[$i]["img"] .'" alt="img" />
      <p>"' . $trendingBlogs[$i]["smlText"] .'"</p>
    </div>
    <div class="block-right">
      <div class="block-right-author">
        <img src="' . $trendingBlogs[$i]["authorImg"] .'" alt="image" />
        <div class="author">
          <p>"' . $trendingBlogs[$i]["author"] . '"</p>
        </div>
        <div class="date">
          <p>"' . $trendingBlogs[$i]["date"] . '"</p>
        </div>
      </div>
      <div class="section-7-topics">
        <h2>"' . $trendingBlogs[$i]["h2"] . '"</h2>
        <p>"' . $trendingBlogs[$i]["lrgText"] .'"</p>
        <div class="section-7-readmore">
          <div class="section-7-readmor-img">
            <img src="' . $trendingBlogs[$i]["pointer"] . '" alt="pointer" />
          </div>
          <p>"' . $trendingBlogs[$i]["rMore"] . '"</p>
        </div>
      </div>
    </div>
  </div>
    ';
};
 ?>  
        </div>
      </section>
    </main>
    <footer>
      <div class="footerSection container">
        <div class="footerLogo">
          <img src="./assets/header-lux-ventus.svg" alt="img" />
        </div>
        <div class="social-Media">
          <h2>Let’s Hang Out</h2>
          <img src="./assets/facebook.svg" alt="facebooklogo" />
          <img src="./assets/twitter.svg" alt="twitterlogo" />
          <img src="./assets/linkedin.svg" alt="linkdinlogo" />
          <img src="./assets/youtube.svg" alt="youtubelogo" />
          <img src="./assets/instagram.svg" alt="instagramlogo" />
        </div>
      </div>
      <div class="container">
        <div class="footerAutor">
          <p>© 2023 - Lux Ventus by Zine.E.Falouti</p>
        </div>
      </div>
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365-Entertain-home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="main">
      <!--NAVBAR-->
        <nav class="navbar navbar-expand-xl navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><span class="logo"> 365-</span><span class="logo2">Entertain</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="#"><button type="button" class="btn btn-primary bstn">Home</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#newsa"><span class="bar">UpCommings</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#newsa"><span class="bar">News</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"><span class="bar">Contact</span></a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2 srch" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success srch" type="submit" id="bbtn">Search</button>
                </form>
                <form action="" class="acc">
                    <li class="nav-item dropdown">
                     
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="funo()">
                        Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#"><i class="fa fa-user-circle fa-2x" aria-hidden="true" style="color:black;"></i></a></li>
                          <li><a class="dropdown-item" href="#" id="shows">Welcome User</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="login.php">LOG OUT</a></li>
                        </ul>
                    </li>
                </form>
               
              </div>
            </div>
          </nav>
          <br>

          <!--COURASEL-->
          <div class="content">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/slider 4.PNG" class="d-block w-100" alt="image1">
                   
                  </div>
                  <div class="carousel-item">
                    <img src="images/slider 1.PNG" class="d-block w-100" alt="image2">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="images/slider 5.PNG" class="d-block w-100" alt="image3">
                    
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
      </div> 
    </div>
    <div class="b"></div>
                           <!--content section-->
    <div class="things">
              
      
      <div class="vid">
        <br>
        <h5>Favourite Comics:</h5>
      <section class="sec">
        <img src="images/disney.PNG" alt="img" id="st" onclick="funk(this.id)">
        <img src="images/pixar.PNG" alt="img" id="nd" onclick="funk(this.id)">
        <img src="images/marvel.PNG" alt="img" id="rd" onclick="funk(this.id)">
        <img src="images/geographic.PNG" alt="img" id="ndl" onclick="funk(this.id)">
        <img src="images/star-wars.PNG" alt="img" id="lst"onclick="funk(this.id)">
      </section> 
      </div>
                              <!--LATEST-->
       
          <div class="b"></div>
      <div class="latest">
        <a class="lat">Latest Movies</a>
        <a class="see" id="see1" onclick="funx(this)">See All</a>
      <div class="mov">  
      
       <div class="movie">
         <img src="images/movie1.jpg"alt="img"class="inner" id="o1">
         <img src="images/hover.png" alt="img" class="hovr" id="oness"onclick="fung(this)">
         <div class="det">
          <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
          <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
         </div>
       </div>
       
       <div class="movie">
        <img src="images/movie2.jpg"alt="img"class="inner" id="o2">
        <img src="images/hover.png" alt="img" class="hovr" id="twoes"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie3.jpg"alt="img"class="inner" id="o3">
        <img src="images/hover.png" alt="img" class="hovr" id="thress"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie4.jpg"alt="img"class="inner" id="o4">
        <img src="images/hover.png" alt="img" class="hovr" id="foursss"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie5.jpg"alt="img"class="inner" id="o5">
        <img src="images/hover.png" alt="img" class="hovr" id="onesghs"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie6.jpg"alt="img"class="inner" id="o6">
        <img src="images/hover.png" alt="img" class="hovr" id="sixess"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie hide" id="one">
        <img src="images/movie7.jpg"alt="img"class="inner" id="o7">
        <img src="images/hover.png" alt="img" class="hovr" id="oneza"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie hide" id="two">
        <img src="images/movie8.jpg"alt="img"class="inner" id="o8">
        <img src="images/hover.png" alt="img" class="hovr" id="eights"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>
      </div>
      </div>

      <!--top rated-->

      <div class="b"></div>
      <div class="latest">
        <a class="lat">Top Rated</a>
        <a class="see" id="see2" onclick="funx(this)">See All</a>
      <div class="mov">  
      
       <div class="movie">
         <img src="images/movie9.jpg"alt="img"class="inner" id="o9">
         <img src="images/hover.png" alt="img" class="hovr" id="niness"onclick="fung(this)">
         <div class="det">
          <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
          <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
         </div>
       </div>
       
       <div class="movie">
        <img src="images/movie10.jpg"alt="img"class="inner" id="o10">
        <img src="images/hover.png" alt="img" class="hovr" id="tenns"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie12.jpg"alt="img"class="inner" id="o11">
        <img src="images/hover.png" alt="img" class="hovr" id="elevenss"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie13.jpg"alt="img"class="inner" id="o13">
        <img src="images/hover.png" alt="img" class="hovr" id="onesmnbvs"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie14.jpg"alt="img"class="inner" id="o14">
        <img src="images/hover.png" alt="img" class="hovr" id="ftween"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie">
        <img src="images/movie11.jpg"alt="img"class="inner" id="o12">
        <img src="images/hover.png" alt="img" class="hovr" id="twelvwks"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>


      <div class="movie hide" id="three">
        <img src="images/movie15.jpg"alt="img"class="inner" id="o15">
        <img src="images/hover.png" alt="img" class="hovr" id="onesspoi"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>

      <div class="movie hide" id="four">
        <img src="images/movie16.jpg"alt="img"class="inner" id="o16">
        <img src="images/hover.png" alt="img" class="hovr" id="youyou"onclick="fung(this)">
        <div class="det">
         <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
         <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
        </div>
      </div>
      </div>
      </div>

        <!--365-Entertain Special-->

        <div class="b"></div>
        <div class="latest">
          <a class="lat">365-Entertain Special</a>
          <a class="see" id="see3" onclick="funx(this)">See All</a>
        <div class="mov">  
        
         <div class="movie">
           <img src="images/movie15.jpg"alt="img"class="inner" id="o17">
           <img src="images/hover.png" alt="img" class="hovr" id="steen"onclick="fung(this)">
           <div class="det">
            <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
            <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
           </div>
         </div>
         
         <div class="movie">
          <img src="images/movie3.jpg"alt="img"class="inner" id="o18">
          <img src="images/hover.png" alt="img" class="hovr" id="onesqazxs"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie">
          <img src="images/movie17.jpg"alt="img"class="inner" id="o19">
          <img src="images/hover.png" alt="img" class="hovr" id="bgvcd"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie">
          <img src="images/movie7.jpg"alt="img"class="inner" id="o20">
          <img src="images/hover.png" alt="img" class="hovr" id="tywentyds"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie">
          <img src="images/movie18.jpg"alt="img"class="inner" id="o21">
          <img src="images/hover.png" alt="img" class="hovr" id="onessuytre"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie">
          <img src="images/movie10.jpg"alt="img"class="inner" id="o22">
          <img src="images/hover.png" alt="img" class="hovr" id="onesstwo"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie hide" id="five">
          <img src="images/movie4.jpg"alt="img"class="inner" id="o23">
          <img src="images/hover.png" alt="img" class="hovr" id="onessthree"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
  
        <div class="movie hide" id="six">
          <img src="images/movie12.jpg"alt="img"class="inner" id="o24">
          <img src="images/hover.png" alt="img" class="hovr" id="onessfoursa"onclick="fung(this)">
          <div class="det">
           <span class="lt">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
           <span class="rt"><img src="images/comments.gif" alt=""> 125</span>
          </div>
        </div>
        </div>
        </div>
                         <!--comming soon and footer-->
            
                         <div class="b"></div>
      <div class="box">
        <div class="left">
            <h3><a href="#"name="newsa"> NEWS:</a></h3>
        <div class="cntx">
          <p class="date">12.04.22</p>
          <h4>Disney's A Christmas Carol</h4>
          <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning filmmaker Robert Zemeckis, captures...<span id="no"></span>  
          <a  class="anc" id="anc1" onclick="funy(this)">Read more</a></p></div>
        <div class="cntx">
          <p class="date">11.04.22</p>
          <h4>Where the Wild Things Are</h4>
          <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...<span id="nt"></span> 
          <a class="anc" id="anc2" onclick="funy(this)">Read more</a></p></div>
        <div class="cntx">
          <p class="date">10.04.22</p>
          <h4>The Box</h4>
          <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing fatal and irrevocable consequences...<span id="nth"></span>
          <a class="anc" id="anc3" onclick="funy(this)">Read more</a></p></div>
        </div>
        <div class="right">
          
            <h3>Up Commings...</h3>
            <marquee behavior="" direction="up">
            <div class="cntx">
                <h4>The Princess and the Frog </h4>
                <a href="#"><img src="images/coming-soon1.jpg" alt="" /></a>
                <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...<span id="fo"></span> 
                <!-- <a class="anc" id="anc4" onclick="funy(this)">Read more</a></p></div> -->
              <div class="cl">&nbsp;</div>
              <div class="cntx">
                <h4>Fantastic Mr.Fox </h4>
                <a href="#"><img src="images/coming-soon2.jpg" alt="" /></a>
                <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...<span id="fi"></span>
                <!-- <a class="anc" id="anc5" onclick="funy(this)">Read more</a></p></div> -->
                </marquee>
            </div>
        </div>
        <div class="b"></div>
        <footer>
          <p>Copyright &copy; 365-Entertain - All Rights Reserved</p>
          FOLLOW US ON:
          <div class="follow">
            <img src="images/fb.png" alt="img1" height="50px">
            <img src="images/inst.png" alt="img2"height="50px">
            <img src="images/tweet.png" alt="img3"height="50px">
            <img src="images/web.png" alt="img4"height="50px">
          </div>
        </footer>
      </div>
     </div>

    <script src="js.js">

    </script>
</body>
</html>
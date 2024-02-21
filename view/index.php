<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>YK</title>
  </head>
  <body>
    <div class="menu">
 
      <div class="circle-container">
        <div class="circle">
          <button id="close">
            <i class="fas fa-times"></i>
          </button>
          <button id="open">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
    
      <section class="">
        <img src="img/logo.jpg" alt="" class="section-homeimg">
      </section>

      <div class="content">
        <p class="title-home">WEB DEVELOPER</p>
        <h1>Hakkımda</h1>
          <p class="about-beginning">
              Merhaba , yazılım ile tanışmam Gaziosmanpaşa Üniversitesine ilk adımımla başladı.
              Her ne kadar kolay gibi görünse de zorlu bir sürecin başladığının farkına vardım.
              Temel konular ile giriş yaptıktan sonra benim çalışma alanımın web tarafında olduğunu düşündüm.
              Html kodları yazarken bile bu tatmin edici ama yetersiz kalıyordu.Ta ki ilk stajıma kadar...
          </p>
          <p>
           İlk yaz stajımla beraber DDA web dizayn'da front-end alanında güzel bir ilerleme katettim.
           Bionluk serüvenim de tam olarak burada başladı ve freelance iş almaya tecrübe kazanmaya başladım.
           Sektöre bu sayede bir adım daha atmış oldum. PHP dilini az da olsa tanıdım ama sanırım alanım front-end diyerek 
           pek üstüne düşmedim :D.
          </p>
          <p>
            Aldığım işler ile biraz daha PHP'ye bakmış olsam da tam olarak PHP ile tanışmam son staj yerim olan Cepsoft firmasında
            oldu. Ve şu an web alanında her geçen güne yeni bilgiler sığdırmaya çalışan web developer olarak karşınızdayım...
          </p>
        <h2 class="mb-5 mt-5 fw-bold">Yetenekler</h2>

        <!-- <div class="ability-div">
            <p class="ability-p">HTML</p>
            <p class="ability-p">CSS</p>
            <p class="ability-p">BOOTSTRAP</p>
            <p class="ability-p">JAVASCRİPT</p>
            <p class="ability-p">JQUERY</p>
            <p class="ability-p">PHP</p>
            <p class="ability-p">MYSQL</p>
            <p class="ability-p">FİGMA</p>
            <p class="ability-p">ADOBE PHOTOSHOP</p>
          </div>  -->
        
          <div class="cards">
            <div class="panel active" style="background-image: url('../view/img/html.png');">
            </div>
            <div class="panel" style="background-image: url('../view/img/css.png');">
            </div>
            <div class="panel" style="background-image: url('../view/img/js.png');">
            </div>
            <div class="panel" style="background-image: url('../view/img/php.jpg');">
            </div>
            <div class="panel" style="background-image: url('../view/img/mysql.png');">
            </div>
            <div class="panel" style="background-image: url('../view/img/ps.jpg');">
            </div>
            <div class="panel" style="background-image: url('../view/img/figma.jpg');">
            </div>
          
        </div>
        <h2 class="mb-5 mt-5 fw-bold">Projeler</h2>
        
            <div class="row project-div"> 
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project.jpg" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project2.png" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project3.jpg" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project4.png" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project2.png" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/project4.png" class="card-img-top" alt="...">
                      <div class="card-body p-3">
                        <h5 class="card-title">Proje </h5>
                        <p class="card-text">Proje hakkında mini açıklama</p>
                        <a href="view/project-detail.php" class="btn detail-btn">İncele</a>
                      </div>
                  </div>
                </div>
            </div>
      </div>

      <footer class="footer-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4 class="footer-text">Hakkımda</h4>
              <p class="footer-text"><i>Yusuf KINA web developer</i></p>
            </div>
            <div class="col-md-4">
              <h4 class="footer-text">Hızlı Linkler</h4>
              <ul class="list-unstyled">
                <li class="mt-1"><a href="#" class="footerlink">Anasayfa</a></li>
                <li class="mt-1"><a href="#" class="footerlink">Hakkımda</a></li>
                <li class="mt-1"><a href="#" class="footerlink">Projeler</a></li>
                <li class="mt-1"><a href="#" class="footerlink">İletişim</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4 class="footer-text">İletişim</h4>
              <a href="mailto:yusufkina61@gmail.com" class="footer-contact">Mail : yusufkina61@gmail.com</a>
              <a href="" class="footer-contact">Linkedin : yusuf kına</a>
              <a href="" class="footer-contact">Bionluk : pusulavt</a>
            </div>
          </div>

        </div>
      </footer>

    </div>
        
      
   

    <nav>
      <ul>
        <li><a href="index.php" class="nav-a"><i class="fas fa-home"></i> Anasayfa</a></li>
        <li><a href="iletisim.php" class="nav-a"><i class="fas fa-envelope"></i> İletişim</a></li>
        <li><a href="hakkimda.php" class="nav-a"><i class="fas fa-user-alt"></i> Hakkımda</a></li>
      </ul>
    </nav>
    <script src="../view/js/card.js"></script>
    <script src="../view/js/app.js"></script>
    <script src="js/https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
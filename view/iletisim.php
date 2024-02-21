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
        <img src="img/contact.png" alt="" class="section-bg">
        <div class="title-contact">
            <span class="d-block">İletişim</span>
            
        </div>
      </section>

      <div class="content">
        
        <form class="row form-div"> 
          <div class="col-md-12 mb-3">
            <label for="email" class="form-label">Mail Adresi</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="col-md-6 mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="col-md-6 mb-3">
            <label for="surname" class="form-label">Soyisim</label>
            <input type="text" class="form-control" id="surname">
          </div>
          <div class="col-md-12 mb-3">
            <label for="message" class="form-label">Mesajınız</label>
            <textarea id="message" class="form-control"></textarea>
          </div>
          <div class="col-md-4 offset-4">
              <button type="submit" class="btn btn-sub">Gönder</button>
          </div>
         
        </form>
       
       
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
    <script src="../view/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
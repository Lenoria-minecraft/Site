<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../icon.ico">
        <title>Lenoria | Connexion</title>
        <link rel="stylesheet" href="../css/login.css">
        
    </head>
  <body>
      <div class="menu">
          <div class="back">
              <div class="mobile">
                  <span></span>
              </div>
              <div class="items">
                  <a href="index.html" class="item">Accueil</a>
                  <a href="news.html" class="item">News</a>
                  <a href="reseaux.html" class="item">Réseaux</a>
                  <a href="boutique.html" class="item">Boutique</a>
                  <a href="wiki.html" class="item">Wiki</a>
              </div>
          </div>
      </div>
      <div class="RRC-header-bg"></div>
      <div class="RRC-header">
          <div class="header-nav">
              <div class="header-inner container">
                  <div class="RRC-nav-items">
                      <div class="logo--1">
                          <img class="logo" src="../icon.ico" alt="logo" width="50">
                      </div>
                      <div class="item--1">
                          <a href="index.html" class="item active">Accueil</a>
                          <a href="news.html" class="item">News</a>
                          <a href="reseaux.html" class="item">Réseaux</a>
                          <a href="boutique.html" class="item">Boutique</a>
                          <a href="wiki.html" class="item">Wiki</a>
                      </div>
                      <div class="item--2">
                          <a href="login.html" class="item-connexion"><button>Connexion / Inscription</button></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>>
      <section>
        <div class="sec-container">
          <div class="form-wrapper">
            <div class="card">
              <div class="card-header">
                <div id="forLogin" class="form-header active">Se connecter</div>
                <div id="forRegister" class="form-header">S'inscrire</div>
              </div>
              <div class="card-body" id="formContainer">
                <form id="loginForm" class="toggleForm">
                  <input type="text" class="form-control" placeholder="Pseudo" />
                  <input type="password" class="form-control" placeholder="Mot de passe" />
                  <button class="formButton">Connexion</button>
                </form>
                <form id="registerForm" class="toggleForm">
                  <input type="text" class="form-control" placeholder="Pseudo" />
                  <input type="password" class="form-control" placeholder="Mot de passe" />
                  <input type="password" class="form-control" placeholder="Confirmer mot de passe" />
                  <button class="formButton">S'inscrire</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script>
      const displayform = _('displayForm');
      const forlogin = _('forLogin');
      const loginForm =  _('loginForm');
      const forRegister = _('forRegister');
      const registerForm = _('registerForm');
      const formContainer = _('formContainer');
      displayform.addEventListener('click', showForm);
      forlogin.addEventListener('click', () => {
        forlogin.classList.add('active');
        forRegister.classList.remove('active');
        if(loginForm.classList.contains('toggleForm')) {
          formContainer.style.transform = 'translate(0%)';
          formContainer.style.transition = 'transform .5s';
          registerForm.classList.add('toggleForm');
          loginForm.classList.remove('toggleForm');
        }
      })
      forRegister.addEventListener('click', () => {
        forlogin.classList.remove('active');
        forRegister.classList.add('active');
        if(registerForm.classList.contains('toggleForm')) {
          formContainer.style.transform = 'translate(-100%)';
          formContainer.style.transition = 'transform .5s';
          registerForm.classList.remove('toggleForm');
          loginForm.classList.add('toggleForm');
        }
      })
      function _(e) {
        return document.getElementById(e);
      }
      function showForm() {
        document.querySelector('.form-wrapper .card').classList.toggle('show')
      }
    </script>

    <footer>
      <h5>Des questions ? Allez sur le Discord et ouvrez un ticket</h5>
      <div class="colonnes">
          <div class="colonne">
              <p><a class="text_footer">À propos</a></p>
              <p>Lenoria est un serveur<br>OneBlock crée en 2021<br>avec un gameplay farm2win<br>et divertissant.</p>
          </div>
        
          <div class="colonne">
              <p><a class="text_footer">Nous contacter</a</p>
              <p><a href="https://instagram.com" target="_blanck" class="lien_footer">Instagram</a></p>
              <p><a href="https://discord.gg/yqTafhC6nP" target="_blanck" class="lien_footer">Discord</a></p>
              <p><a href="https://www.youtube.com/channel/UCrpAL7vPtljXq3TASe3gfAQ" target="_blanck" class="lien_footer">YouTube</a></p>
          </div>
        
          <div class="colonne">
              <div class="logo-footer">
                  <img class="logo" src="../icon.ico">
              </div>
          </div>
      </div>
      <p>Lenoria 2022 Tous Droits Réservés ©</p>
    </footer>    
  </body>
</html>
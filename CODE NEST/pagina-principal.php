<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO CN</title>
    <link rel="stylesheet" href="style1pag3erp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
    <header>
      <a href="#" class="brand">CODE NEST</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="pagina-principal.php">Inicio</a>
          <div class="courses">
            <a href="#">Cursos</a>
            <ul class="submenu">
              <li><a href="html6666.html">HTML</a></li>
              <li><a href="html7777.html">CSS</a></li>
              <li><a href="html8888.html">JavaScript</a></li>
              <li><a href="html9999.html">MySQL</a></li>
              <li><a href="html1010.html">Python</a></li>
            </ul>
          </div>
          <div class="resources">
            <a href="#">Recursos Web</a>
            <ul class="submenu">
              <li class="has-sub">
                <a href="#">YouTube</a>
                <ul class="submenu-lvl2">
                  <li><a href="https://www.youtube.com/watch?v=rbuYtrNUxg4" target="_blank">html</a></li>
                  <li><a href="https://www.youtube.com/watch?v=OWKXEJN67FE" target="_blank">css</a></li>
                  <li><a href="https://www.youtube.com/watch?v=ivdTnPl1ND0" target="_blank">js</a></li>
                  <li><a href="https://www.youtube.com/watch?v=_8MjEhfKRbI" target="_blank">mysql</a></li>
                  <li><a href="https://www.youtube.com/watch?v=Kp4Mvapo5kc" target="_blank">Python</a></li>
                </ul>
              </li>
              <li class="has-sub">
                <a href="#">PDF</a>
                <ul class="submenu-lvl2">
                  <li><a href="http://profesores.fi-b.unam.mx/cintia/Manualhtml.pdf" target="_blank">html</a></li>
                  <li><a href="https://aapp.wordpress.com/wp-content/uploads/2010/07/manual-de-html-css.pdf" target="_blank">css</a></li>
                  <li><a href="https://www.um.es/docencia/barzana/DAWEB/Lenguaje-de-programacion-JavaScript-1.pdf" target="_blank">js</a></li>
                  <li><a href="https://persefone20.wordpress.com/wp-content/uploads/2011/09/la-biblia-de-mysql.pdf" target="_blank">mysql</a></li>
                  <li><a href="https://persoal.citius.usc.es/eva.cernadas/informaticaparacientificos/material/libros/Python%20para%20todos.pdf" target="_blank">python</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <a href="html5555.html" target="_blank">Contacto</a>
          <a href="http://localhost/php-login/profile.php">Perfil</a>
        </div>
      </div>
    </header>
    <section class="home">
      <video class="video-slide active" src="video33.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video22.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video11.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video44.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video55.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>Bienvenido a<br><span>Code nest</span></h1>
        <p>Un espacio creador por estudiantes para estudiantes. Aquí encontrarás recursos confiables, prácticos y claros para entender mejor nuestra materia.</p>
        <a href="html1111.html">Leer más</a>
      </div>
      <div class="content">
        <h1>¿Por qué<br><span>code nest?</span></h1>
        <p>Porque aprender no debería de ser complicado. Creamos esta plataforma para reunir lo mejor de internet y ayudarte a estudiar sin perder tiempo buscando.</p>
        <a href="html2222.html">¿Qué pudedes encontrar?</a>
      </div>
      <div class="content">
        <h1>videos, pdfs<br><span>y más</span></h1>
        <p>Accede a videos explicativos, documentos descargables y enlaces a paginas clave. Todo organizado por temas, desde lo básico hasta lo avanzado.</p>
        <a href="html3333.html">Ver recursos web</a>
      </div>
      <div class="content">
        <h1>temas de<br><span>clase</span></h1>
        <p>Consulta temas como HTML, CSS, JavaScript, bases de datos y más. Explicaciones claras, ejemlos útiles y acceso rápido a lo que necesitas.</p>
        <a href="html4444.html">índice de temas</a>
      </div>
      <div class="content">
        <h1>¡úsala, compártela, <br><span>apruebalá</span></h1>
        <p>Esta página es tu aliada en el salón. Estudia mejor, presenta tus tareas con más seguridad y ayuda a tus compañeros compartiéndola.</p>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="html1313.html"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>
    <script type="text/javascript">
    
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });

    const courseMenu = document.querySelector('.courses');
const courseLink = courseMenu.querySelector('a');

courseLink.addEventListener('click', (e) => {
  if (window.innerWidth <= 1040) {
    e.preventDefault();
    courseMenu.classList.toggle('active');
  }
});

const resourceMenu = document.querySelector('.resources');
const resourceLink = resourceMenu.querySelector('a');

resourceLink.addEventListener('click', (e) => {
  if (window.innerWidth <= 1040) {
    e.preventDefault();
    resourceMenu.classList.toggle('active');
  }
});
    </script>
  </body>
</html>
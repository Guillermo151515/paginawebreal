<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mejorando el Mundo</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans&display=swap" rel="stylesheet" />
  <style>
    /* Reset */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      background: linear-gradient(135deg, #d0f0fd, #a0e7a0);
      color: #1f3c4d;
      display: flex;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Sidebar menú */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background: #2a7f62;
      color: #daf3e5;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px 20px;
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
      font-family: 'Montserrat', sans-serif;
      z-index: 100;
    }

    .logo {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 40px;
      text-align: center;
      user-select: none;
    }

    nav ul.menu {
      list-style: none;
      padding: 0;
      width: 100%;
    }
    nav ul.menu li {
      margin-bottom: 20px;
    }
    nav ul.menu li a {
      color: #daf3e5;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.1rem;
      display: block;
      padding: 10px 15px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }
    nav ul.menu li a:hover,
    nav ul.menu li a:focus {
      background: #71c9a9;
      color: #134e4a;
      outline: none;
    }

    /* Main contenido */
    main {
      margin-left: 250px;
      padding: 40px 50px;
      flex-grow: 1;
      background: rgba(255 255 255 / 0.85);
      box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.05);
      min-height: 100vh;
      overflow-y: auto;
    }

    /* Títulos */
    h1, h2, h3 {
      font-family: 'Montserrat', sans-serif;
      color: #2a7f62;
      margin-bottom: 15px;
    }
    h1 {
      font-size: 3.8rem;
      margin-bottom: 25px;
      font-weight: 700;
      letter-spacing: 1.5px;
    }
    h2 {
      font-size: 2.8rem;
      margin-top: 50px;
      margin-bottom: 30px;
      border-bottom: 3px solid #71c9a9;
      padding-bottom: 8px;
      max-width: 400px;
    }
    h3 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #3a7261;
    }

    /* Hero */
    .hero p {
      font-weight: 600;
      font-size: 1.4rem;
      margin-bottom: 30px;
      max-width: 700px;
      color: #1f3c4ddd;
    }

    /* Botones */
    .btn-cta {
      display: inline-block;
      background: #2a7f62;
      color: #daf3e5;
      padding: 14px 38px;
      border-radius: 40px;
      font-weight: 700;
      font-size: 1.15rem;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 5px 15px rgba(42,127,98,0.5);
      user-select: none;
    }
    .btn-cta:hover,
    .btn-cta:focus {
      background: #71c9a9;
      color: #134e4a;
      box-shadow: 0 8px 25px rgba(113,201,169,0.7);
      outline: none;
    }

    /* Eventos */
    .lista-eventos .evento {
      background: #d6f2e4;
      padding: 20px 25px;
      border-radius: 12px;
      margin-bottom: 20px;
      box-shadow: 0 2px 10px rgba(42,127,98,0.15);
      transition: box-shadow 0.3s ease;
    }
    .lista-eventos .evento:hover {
      box-shadow: 0 6px 20px rgba(42,127,98,0.4);
    }

    /* Proyectos en grid */
    .grid-proyectos {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
      gap: 30px;
    }
    .grid-proyectos .proyecto {
      background: #d6f2e4;
      border-radius: 14px;
      padding: 25px;
      box-shadow: 0 2px 12px rgba(42,127,98,0.15);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .grid-proyectos .proyecto:hover {
      box-shadow: 0 8px 25px rgba(42,127,98,0.35);
      transform: translateY(-6px);
    }

    /* Voluntariado */
    .voluntariado p {
      font-weight: 600;
      font-size: 1.3rem;
      text-align: center;
      max-width: 650px;
      margin: 0 auto 30px;
      color: #1f3c4ddd;
    }
    .voluntariado .btn-cta {
      display: block;
      margin: 0 auto;
      width: fit-content;
    }

    /* Donadores */
    .logos-donadores {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      padding-bottom: 10px;
    }
    .logos-donadores img {
      max-height: 70px;
      filter: grayscale(40%) brightness(1.1);
      transition: filter 0.3s ease, transform 0.3s ease;
      cursor: default;
      user-select: none;
    }
    .logos-donadores img:hover {
      filter: none;
      transform: scale(1.15);
      cursor: pointer;
    }

    /* Formulario Contacto */
    .contacto form {
      max-width: 480px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .contacto input,
    .contacto textarea {
      padding: 14px 16px;
      font-size: 1.1rem;
      border: 2px solid #71c9a9;
      border-radius: 10px;
      resize: vertical;
      font-weight: 600;
      color: #1f3c4d;
      transition: border-color 0.3s ease;
      font-family: 'Open Sans', sans-serif;
    }
    .contacto input:focus,
    .contacto textarea:focus {
      border-color: #2a7f62;
      outline: none;
      box-shadow: 0 0 8px #71c9a9;
    }
    .contacto button {
      background: #2a7f62;
      color: #daf3e5;
      border: none;
      padding: 16px;
      font-size: 1.2rem;
      font-weight: 700;
      border-radius: 40px;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(42,127,98,0.5);
      user-select: none;
    }
    .contacto button:hover,
    .contacto button:focus {
      background: #71c9a9;
      color: #134e4a;
      box-shadow: 0 6px 25px rgba(113,201,169,0.7);
      outline: none;
    }

    /* Footer */
    footer.footer {
      margin-left: 250px;
      background: #2a7f62;
      color: #daf3e5;
      text-align: center;
      padding: 20px 30px;
      font-family: 'Montserrat', sans-serif;
      user-select: none;
      font-size: 1rem;
      box-shadow: inset 0 1px 10px rgba(0,0,0,0.15);
      position: relative;
      z-index: 5;
    }

    footer.footer .redes {
      margin-top: 12px;
      display: flex;
      justify-content: center;
      gap: 25px;
    }
    footer.footer .redes a img {
      width: 30px;
      height: 30px;
      filter: brightness(0.9) saturate(1.2);
      transition: transform 0.3s ease;
      cursor: pointer;
      user-select: none;
    }
    footer.footer .redes a:hover img,
    footer.footer .redes a:focus img {
      transform: scale(1.3);
      filter: brightness(1.2) saturate(1.5);
      outline: none;
    }

    /* Fondo burbujas suaves */
    .burbujas {
      position: fixed;
      top: 0; left: 250px;
      width: calc(100% - 250px);
      height: 100vh;
      pointer-events: none;
      overflow: hidden;
      z-index: 0;
    }
    .burbuja {
      position: absolute;
      bottom: -120px;
      background: rgba(42,127,98, 0.15);
      border-radius: 50%;
      box-shadow: 0 0 15px #71c9a9;
      animation-name: flotar;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
    }
    @keyframes flotar {
      0% {
        transform: translateY(0) scale(1);
        opacity: 0.7;
      }
      50% {
        opacity: 0.3;
        transform: translateY(-100vh) scale(1.2);
      }
      100% {
        transform: translateY(0) scale(1);
        opacity: 0.7;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      Mejorando<br>el Mundo
    </div>
    <nav>
      <ul class="menu" role="navigation" aria-label="Menú principal">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#nosotros">Nosotros</a></li>
        <li><a href="#eventos">Eventos</a></li>
        <li><a href="#proyectos">Proyectos</a></li>
        <li><a href="#voluntariado">Voluntariado</a></li>
        <li><a href="#donadores">Donadores</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <div class="burbujas" aria-hidden="true">
    <div class="burbuja" style="left: 10%; width: 60px; height: 60px; animation-duration: 16s; animation-delay: 0s;"></div>
    <div class="burbuja" style="left: 25%; width: 50px; height: 50px; animation-duration: 14s; animation-delay: 2s;"></div>
    <div class="burbuja" style="left: 40%; width: 80px; height: 80px; animation-duration: 18s; animation-delay: 4s;"></div>
    <div class="burbuja" style="left: 55%; width: 45px; height: 45px; animation-duration: 20s; animation-delay: 1s;"></div>
    <div class="burbuja" style="left: 70%; width: 75px; height: 75px; animation-duration: 17s; animation-delay: 3s;"></div>
    <div class="burbuja" style="left: 85%; width: 55px; height: 55px; animation-duration: 13s; animation-delay: 5s;"></div>
  </div>

  <main id="inicio">
    <section class="hero">
      <h1>Unidos para transformar el mundo</h1>
      <p>Creemos en el poder de la colaboración y la acción colectiva para lograr un cambio positivo.</p>
      <a href="#contacto" class="btn-cta">Contáctanos</a>
    </section>

    <section id="nosotros">
      <h2>Sobre Nosotros</h2>
      <p>Somos una organización dedicada a crear impacto social, ambiental y cultural en comunidades de todo el mundo.</p>
    </section>

    <section id="eventos" class="lista-eventos">
      <h2>Eventos</h2>
      <article class="evento" tabindex="0">
        <h3>Campaña de limpieza comunitaria</h3>
        <p><strong>Fecha:</strong> 15 de Agosto 2025</p>
        <p>Únete a nosotros para limpiar parques y espacios públicos en tu ciudad.</p>
      </article>
      <article class="evento" tabindex="0">
        <h3>Campaña de limpieza comunitaria</h3>
        <p><strong>Fecha:</strong> 15 de Agosto 2025</p>
        <p>Únete a nosotros para limpiar parques y espacios públicos en tu ciudad.</p>
      </article>
      <article class="evento" tabindex="0">
        <h3>Reforestación urbana</h3>
        <p><strong>Fecha:</strong> 10 de Septiembre 2025</p>
        <p>Plantemos juntos árboles para mejorar el aire y embellecer las calles.</p>
      </article>
    </section>

    <section id="proyectos" class="grid-proyectos">
      <h2>Proyectos</h2>
      <div class="proyecto" tabindex="0">
        <h3>Educación para todos</h3>
        <p>Programas educativos para niños en zonas rurales y urbanas vulnerables.</p>
      </div>
      <div class="proyecto" tabindex="0">
        <h3>Agua limpia</h3>
        <p>Instalación de sistemas de purificación y acceso a agua potable.</p>
      </div>
      <div class="proyecto" tabindex="0">
        <h3>Salud comunitaria</h3>
        <p>Clínicas móviles y campañas de salud preventiva.</p>
      </div>
    </section>

    <section id="voluntariado" class="voluntariado">
      <h2>Voluntariado</h2>
      <p>Si quieres ser parte del cambio, únete a nuestro equipo de voluntarios.</p>
      <a href="#contacto" class="btn-cta">Quiero ser voluntario</a>
      <img src="uploads\img_6887d94f2e234.jpg" alt="ayudante" />
    </section>

    <section id="donadores">
      <h2>Donadores</h2>
      <div class="logos-donadores" aria-label="Logos de donadores">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Google-flutter-logo.svg" alt="Logo de Google" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Logo de Facebook" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Logo de Netflix" />
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Logo de Amazon" />
      </div>
    </section>

    <section id="contacto" class="contacto" aria-label="Formulario de contacto">
      <h2>Contacto</h2>
      <form>
        <input type="text" name="nombre" placeholder="Tu nombre" required aria-required="true" />
        <input type="email" name="email" placeholder="Tu correo electrónico" required aria-required="true" />
        <textarea name="mensaje" rows="5" placeholder="Tu mensaje" required aria-required="true"></textarea>
        <button type="submit">Enviar mensaje</button>
      </form>
    </section>
  </main>

  <footer class="footer" role="contentinfo">
    <p>© 2025 Mejorando el Mundo. Todos los derechos reservados.</p>
    <div class="redes" aria-label="Redes sociales">
      <a href="#" aria-label="Facebook"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Icono Facebook" /></a>
      <a href="#" aria-label="Twitter"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Icono Twitter" /></a>
      <a href="#" aria-label="Instagram"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Icono Instagram" /></a>
    </div>
  </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Portafolio de Desarrollo Web</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <header class="bg-dark text-light py-3">
      <div class="container">
        <div
          class="d-flex flex-wrap align-items-center justify-content-between"
        >
          <h1 class="fs-3">Nelson González Badilla</h1>
          <nav>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link " href="#sobre-mi">Sobre Mí</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#proyectos">Proyectos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="#RedesSociales">Redes Sociales</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="#contacto">Contacto</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="container py-5">

      

      <!-- Sobre Mí-->
      <section id="sobre-mi" class="py-5">
        <div class="row">
          <div class="col-md-4" style="
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
      ">
            <div class="imgperfil">
              <img src="./assets/Img/linkedin.jpg" alt="perfil">
            </div>
          </div>
          <div class="col-md-8">
            <h2 class="fw-bold">Sobre Mí</h2>
            <p class="lead m-4" style="text-align: justify;" >
              Desarrollador Front End independiente con experiencia en
              desarrollo de soluciones informática, elaboración de aplicaciones
              Web, soporte a usuarios y mantención de sistemas para clientes del
              sector privado de la educación y del sector inmobiliario. Durante
              mi trayectoria profesional he destacado por mis habilidades para
              coordinar equipos, gestionar el tiempo y para adquirir nuevos
              conocimientos tecnológicos, así como también por mi
              responsabilidad, motivación y orientación al logro de metas. Mi
              objetivo actual es poder sumarme a nuevos desafíos que me permitan
              trabajar en creación de páginas y aplicaciones web que faciliten
              la vida de los usuarios y ofrezcan una innovación tecnológica a
              los productos de la empresa.
            </p>
          </div>
        </div>
      </section>
      <!-- Tecnologias -->
      <div class="tec">
        <div class="tecnologia">
          <img src="./assets/Img/html.png" alt="html"  class="img-fluid m-3"/>
          <p><strong>html</strong></p> 
        </div>
        <div class="tecnologia">
          <img src="./assets/Img/css.png" alt="css"  class="img-fluid m-3"/>
          <p><strong>css</strong></p>
        </div>
        <div class="tecnologia">
          <img src="./assets/Img/js.png" alt="js"  class="img-fluid m-3"/>
          <p><strong>javascripts</strong></p>
        </div>
        <div class="tecnologia">
          <img src="./assets/Img/bootstrap.png" alt="bootstrap"  class="img-fluid m-3"/>
          <p><strong>bootstrap</strong></p>
        </div>  
        <div class="tecnologia">
          <img src="./assets/Img/react.png" alt="React"  class="img-fluid m-3"/>
          <p><strong>React</strong></p>
        </div>
        <div class="tecnologia">
          <img src="./assets/Img/git50x50.png" alt="gitHub"  class="img-fluid m-3"/>
          <p><strong>GitHub</strong></p>
        </div>

      </div>
      <div id="modals" class="recuadroModal">
        <div class="frase">
          <h2>Muchas gracias por contactarme, me comunicare contigo a la brevedad. Saludos</h2>
        </div>
        <button type="button" id="btnCerrar" class="btn btn-outline-warning" onclick="cerrarModal()">cerrar</button>
      </div>

      <!-- Proyectos -->

      <section id="proyectos" class="py-5">
        <h2 class="fw-bold mb-4">Proyectos en los que he participado</h2>
        <div class="row">
          <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="./assets/Img/allzone.png" alt="Proyecto 1" class="card-img-top" />
                    <div class="card-body">
                        <div class="tituloCard">
                            <h3 class="card-title fw-bold">Marketplace AllZone</h3><p>Abril 2023</p>
                        </div>
                        <p class="card-text" style="text-align: justify;">
                        Se crea un MarketPlace utilizando React. </br></br>
                        Realizar las interacciones, vistas y componentes de la app. </br>
                        Para este proyecto se utilizó la libreria de React, en conjunto con HTML, CSS, Javascripts y bootstrap, utilizando tambien GitHub como tecnologia de versionamiento. 
                        Los logros obtenidos en este proyecto fueron el trabajo en equipo y el poder poner en practica los conocimientos de React.  
                        </p>
                    </div>
                    <div class="boton">
                        <a href="https://all-zone.vercel.app/" class="btn btn-outline-warning"  role="button" target="_blank">Ir al Proyecto</a>
                    </div>
                </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card">
                <img src="./assets/Img/MiradorLaguna.png" alt="Proyecto 2" class="card-img-top" />
                <div class="card-body">
                    <div class="tituloCard">
                        <h3 class="card-title fw-bold">Proyecto Mirador Laguna </h3><p>Febrero 2023</p>
                    </div>
                    <p class="card-text"style="text-align: justify;">
                        Proyecto para Inmobiliaria GDI. </br></br>
                        Realizar la plantilla del proyecto utilizando html y css, ademas de GitHub para versionamiento.
                        Los logros obtenidos en este proyecto fueron el trabajo en equipo y el cumplimiento de los requisitos del cliente.
                    </p>
                </div>
                <div class="boton">
                    <a href="https://miradorlaguna.cl/" class="btn btn-outline-warning" role="button" target="_blank">Ir al Proyecto</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card">
                <img src="./assets/Img/snAntonio.png" alt="Proyecto 3" class="card-img-top" />
                <div class="card-body">
                    <div class="tituloCard">
                        <h3 class="card-title fw-bold">Proyecto San Antonio Ambiental </h3><p>Septiembre 2022</p>
                    </div>
                    <p class="card-text"style="text-align: justify;">
                        Proyecto desarrollado de forma independiente para el movimiento San Antonio Ambiental. </br></br>
                        Desarrollar y mantener el sitio web del movimiento, así como las
                        actualizaciones que se presentan del mismo
                    </p>
                </div>
                <div class="boton">
                    <a href="https://sanantonioambiental.cl" class="btn btn-outline-warning" role="button" target="_blank">Ir al Proyecto</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card">
                <img src="./assets/Img/juego.png" alt="Proyecto 4" class="card-img-top" />
                <div class="card-body">
                    <div class="tituloCard">
                        <h3 class="card-title fw-bold">Proyecto BrainXCode </h3><p>Noviembre 2019</p>
                    </div>
                    <p class="card-text"style="text-align: justify;">
                      Proyecto creado de forma independiente.
                      Desarrollo, diseño e integración de la plataforma web.
                    </p>
                </div>
                <div class="boton">
                    <a href="https://brainxcode.cl/thegame" class="btn btn-outline-warning" role="button" target="_blank">Ir al Proyecto</a>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Redes Sociales-->
      <section id="RedesSociales">
        <div class="icon">      
          <a href="https://www.linkedin.com/in/nelson-gonzalez-badilla/" target="_blank">
            <img src="./assets/Img/iconsLinkedin.png" alt="linkedin"/>
          </a>
          <a href="https://github.com/filipgonzo?tab=repositories" target="_blank">
            <img src="./assets/Img/iconGithub.png" alt="GitHub"/>
          </a>
            
        </div>
      </section>

      <!-- formulario -->
      <section id="contacto">
        <h2 style="padding: 20px;">Contactame</h2> <br>
        <form id="contact-form" method="post" action="enviar2.php">
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="nombre" required="required">
          </div>
        
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required="required">
          </div>
        
          <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea class="form-control" id="message" name="mensaje" rows="5" required="required"></textarea>
          </div>
          <div class="boton">
            <button type="submit" class="btn btn-outline-warning">Enviar</button>
          </div>
        </form>
      </section>
    </main>








    <footer>
      <div class="pie">
        <p>Región Metropolitana, Santiago, Chile.</p>
        <p>Politica de Privacidad</p>
        <p>Desarrollado y protegido por GonzalezBadilla</p>
        <a href="mailto:nelsonfelipe@gonzalezbadilla.cl">nelsonfelipe@gonzalezbadilla.cl</a>
      </div>
    </footer>




    
    <script src="/assets/Js/index.js"></script>

    <?php
      if(isset($_GET["enviook"])){
        ?>
          <script>
            const mod = document.getElementById("modals");
            mod.style.display="flex";
            mod.style.flexDirection="colum";
            mod.style.justifyContent="space-evenly"; 

          </script>
        <?php
      }
    ?>

  </body>
</html>

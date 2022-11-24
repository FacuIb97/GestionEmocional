<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CALENDAR</title>
    <link rel="stylesheet" href="../Styles/main.css">
    <link rel="stylesheet" href="../font.css">
    <link rel="stylesheet" href="../Styles/style.css">
    <script src="../script.js" defer></script>
  </head>
  <body>
    <header>
        <div class="Logo">
            <a href=""><img src="../Imagens/Logo1.png" alt="Logo Gestion Emocional"></a>
        </div>
        <nav>
            <ul class="menu-horizontal">
                <li><a class="inicio" href="https://gestionemocional.com.ar/#">INICIO</a></li>
                <li><a href="">CANALES</a>
                    <ul class="menu-vertical">
                        <li><a href="https://gestionemocional.com.ar/que-es-la-bio/">Que es la bio</a></li>
                        <li><a href="https://gestionemocional.com.ar/emociones/">Emociones</a></li>
                        <li><a href="https://gestionemocional.com.ar/enfermedades/">Enfermedades</a></li>
                        <li><a href="https://gestionemocional.com.ar/enfermedades-ninos/">Enfermedades niños</a></li>
                        <li><a href="https://gestionemocional.com.ar/dinamicas-familiares/">Dinamicas familiares</a></li>
                        <li><a href="https://gestionemocional.com.ar/webinares/">Webinares</a></li>
                    </ul>
                </li>   
                <li><a href="">ACTIVIDADES</a>
                    <ul class="menu-vertical">
                        <li><a href="https://gestionemocional.com.ar/actividades-online/">Actividades Online</a></li>
                        <li><a href="https://gestionemocional.com.ar/actividades-presenciales/">Actividades Presenciales/Online Vivo</a></li>
                    </ul>
                </li>  
                <li><a href="https://gestionemocional.com.ar/testimonios/">TESTIMONIOS</a></li>
                <li><a href="https://gestionemocional.com.ar/contacto/">CONTACTO</a></li>
                <li><a class="login" href="https://actividades.gestionemocional.com.ar/init/default/user/login">LOGIN</a></li>
            </ul>
        </nav>
        <section class="blanco"></section>
        <section class="turnos">
          <h1>TURNOS DISPONIBLES</h1>
        </section>
        <section class="calendario">
          <div class="contianer">
            <div class="calendar">
              <div class="calendar-header">
                <span class="month-picker" id="month-picker"> Mayo </span>
                <div class="year-picker" id="year-picker">
                  <span class="year-change" id="pre-year">
                    <pre><</pre>
                  </span>
                  <span id="year">2020 </span>
                  <span class="year-change" id="next-year">
                    <pre>></pre>
                  </span>
                </div>
              </div>
              <div class="calendar-body">
                <div class="calendar-week-days">
                  <div>Lunes</div>
                  <div>Martes</div>
                  <div>Miércoles</div>
                  <div>Jueves</div>
                  <div>Viernes</div>
                  <div>Sábado</div>
                  <div>Domingo</div>
                </div>
                <div class="calendar-days">
                </div>
              </div>
              <div class="calendar-footer">
                <div class="horarios">
                  <section class="sectionHorarios">
                    <span class="textoHorarios"><p>Horarios disponibles:</p></span>
                  </section>
                  <div class="cuadrito">
                    <form action="" class="form__input">
                      <label for="horarios"></label>
                      <select name="horarios" id="">
                        <option value="horarios"></option>
                      </select>
                    </form>
                  </div>
                </div>
              </div>
              <div class="date-time-formate">
                <div class="day-text-formate">HOY</div>
                <div class="date-time-value">
                  <div class="time-formate">02:51:20</div>
                  <div class="date-formate">23 - julio - 2022</div>
                </div>
              </div>
              <div class="month-list"></div>
            </div>
          </div>
        </section>
    </header>
    <div class="social-bar">
      <a href="" class="icon icon-facebook" target="_blank"></a>
      <a href="" class="icon icon-instagram" target="_blank"></a>
      <a href="" class="icon icon-youtube" target="_blank"></a>
  </div>
  </body>
</html>

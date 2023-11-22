<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="media/favicon.png" type="image/x-icon">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <title>RIOT FESTIVAL</title>
    </head>

    <body>

        <!-- Para escribir PHP, deberias de cambiar el index a .php y de ahi
        se procesa todos los comandos sacado de la base de datos. -->

        <!-- Instalando XAMPP y dentro APACHE al abrirlo con localhost, crea este
        mini servidor -->
        <?php
            echo "<p>hello world!11</p>";
        ?>

        <nav id="menu">
            <figure>
                <a href="#"><img src="media/riot-games-LOGO.svg" alt="riot logo"></a>
            </figure>
            <ul>
                <li><a href="#who" onclick="closeMenu()">WHO?</a></li>
                <li><a href="#whereandwhen" onclick="closeMenu()">WHERE AND WHEN?</a></li>
                <li><a href="#buy" onclick="closeMenu()">BUY.</a></li>
            </ul>
            <i class="fa-solid fa-bars-staggered" onclick="openMenu()"></i>
        </nav>
        <a id="buy-button" href="#buy">BUY A TICKET</a>
        <header>
            <video src="media/header-video.mp4" autoplay muted loop></video>
        </header>
        <main>
            <section id="who">
                <h2 data-aos="fade-up">WHO?</h2>
                <a class="vidclick" href="#target-content-kda"><div id="kda">
                    <div>
                        <img src="media/KDA.webp" alt="kda">
                        <h3>KDA</h3>
                    </div>
                    <p>
                        K/DA es un grupo femenino virtual que consta de cuatro personajes del juego League of Legends: Ahri, Akali, Evelynn y Kai'Sa. Evelynn y Kai'Sa fueron interpretadas por las cantantes estadounidenses Madison Beer y Jaira Burns respectivamente, hasta el anuncio de un nuevo miniálbum en agosto de 2020, para el que prestaron su voz Bea Miller y Wolftyla en el sencillo «The Baddest». Ahri y Akali fueron interpretadas por Miyeon y Soyeon del grupo surcoreano (G)I-dle durante todos los lanzamientos de K/DA. El grupo fue desarrollado por Riot Games, la compañía detrás de League of Legends, y se presentó por primera vez en el 2018 League of Legends World Championship con una presentación en realidad aumentada, donde K/DA interpretó su canción debut «Pop/Stars».
                    </p>
                </div></a>
                <div id="target-content-kda">
                    <a href="#who" class="close"></a>
                    <div class="target-inner">
                        <iframe src="https://www.youtube-nocookie.com/embed/UOxkGD8qRB4?si=P4w_D0CiHyXVpaAK" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="duoitem">
                    <a class="vidclick" href="#target-content-td"><div id="truedamage">
                        <div>
                            <img src="media/True_Damage.webp" alt="true damage">
                            <h3>TRUE DAMAGE</h3> 
                        </div>
                        <p>
                            True Damage es una serie de máscaras de futuro / universo alternativas en League of Legends. Ambientada en una Tierra alternativa donde la industria de la música pop se ha vuelto muy popular, cada campeón es una sensación de música pop.
                        </p>
                    </div></a>
                    <div id="target-content-td">
                        <a href="#who" class="close"></a>
                        <div class="target-inner">
                            <iframe src="https://www.youtube-nocookie.com/embed/sVZpHFXcFJw?si=TYd1JtReZvGclzGU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <a class="vidclick" href="#target-content-hs"><div id="heartsteel">
                        <div>
                            <img src="media/heartsteel.jpg" alt="heartsteel">
                            <h3>HEARTSTEEL</h3>
                        </div>
                        <p>
                            HEARTSTEEL es una nueva banda musical de League of Legends integrada en exclusiva por 6 personajes masculinos del videojuego, algo que gran parte de la comunidad de jugadores ansiaba desde hace tiempo. El grupo lo forman Ezreal, Sett, K'Sante, Kayn, Yone y Aphelios, de los cuales ya se sabe que Ezreal será el principal vocalista, mientras que los otros co-líderes de la banda serán Sett y K'Sante, quienes también cantarán.
                        </p>
                    </div></a>
                    <div id="target-content-hs">
                        <a href="#who" class="close"></a>
                        <div class="target-inner">
                            <iframe src="https://www.youtube-nocookie.com/embed/MDErQ1KTzaI?si=SkJAImJznxhrGEME" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section id="whereandwhen">
                <div class="where">
                    <h2 data-aos="fade-up">WHERE?</h2>
                    <div>
                        <div>
                            <img src="media/logo_ifema.png" alt="IFEMA">
                            <p>Av. del Partenón, 5, 28042 Madrid</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.3358488735953!2d-3.6198814234275414!3d40.46783445252653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422e50d152df37%3A0x801ce4be7e7a5eec!2sIFEMA%20Madrid!5e0!3m2!1ses!2ses!4v1699199906972!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="when">
                    <h2 data-aos="fade-down">WHEN</h2>
                    <p>20 OF JANUARY.
                        2024.</p>
                </div>
            </section>

            <section id="buy">
                <div>
                    <h2 data-aos="fade-up">BUY</h2>
                    <h3>JOIN THE WAITLIST</h3>
                    <input type="text" placeholder="NAME">
                    <input type="email" placeholder="EMAIL">
                    <button>REGISTER</button>
                </div>
            </section>
        </main>

        <footer>
            <div id="top-footer">
                <div>
                    <h3>PRESENTED BY</h3>
                    <figure>
                        <img src="media/riot-games-LOGO.svg" alt="riot logo">
                    </figure>
                </div>
                <div>
                    <h3>SPONSORS</h3>
                    <div>
                        <a href="https://www.ifema.es/" target="_blank" rel="noopener noreferrer"><img src="media/logo_ifema.png" alt="IFEMA"></a>
                        <a href="https://www.mastercard.com/" target="_blank" rel="noopener noreferrer"><img src="media/Mastercard.png" alt="MASTERCARD"></a>
                        <a href="https://www.visa.com/" target="_blank" rel="noopener noreferrer"><img src="media/Visa.webp" alt="VISA"></a>
                    </div>
                </div>
                <div>
                    <h3>SOCIAL MEDIA</h3>
                    <div>
                        <a href="https://www.facebook.com/RiotGames" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/riotgames" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-x-twitter"></i></a>
                        <a href="https://www.instagram.com/riotgames/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div id="bottom-footer">
                <h3>@2024 RIOT GAMES</h3>
                <a href="https://www.riotgames.com/en/terms-of-service" target="_blank" rel="noopener noreferrer"><p>Terms of service</p></a>
                <a href="https://www.riotgames.com/en/privacy-notice" target="_blank" rel="noopener noreferrer"><p>Privacy Notice</p></a>
                <a href="https://www.riotgames.com/en/accessibility" target="_blank" rel="noopener noreferrer"><p>Accessibility</p></a>
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Karla & Ana | Nuestra Boda - 18 de Octubre 2024</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Lora:wght@400;500;600&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/background.css?v=2">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">K & A</div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#cuenta">Contador</a></li>
                <li><a href="#detalles">Detalles</a></li>
                <li><a href="#confirmacion">RSVP</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <div class="decorativo izq"></div>
            <div class="hero-main">
                <p class="subtitulo">Dos almas, un corazón</p>
                <h1 class="titulo-principal">Karla & Ana</h1>
                <p class="fecha-grande">18 de Octubre 2024</p>
                <p class="descripcion-hero">Lo tenemos todo: el vestido, la música, el pastel y las flores.<br><span class="highlight">Pero nos falta lo más importante... ¡contar contigo!</span></p>
                <button class="btn-scroll">Conoce más <i class="bi bi-arrow-down"></i></button>
            </div>
            <div class="decorativo der"></div>
        </div>
        <div class="scroll-indicator">
            <span></span>
        </div>
    </section>

    <!-- COUNTDOWN SECTION -->
    <section class="countdown-section" id="cuenta">
        <div class="container">
            <h2 class="seccion-titulo">El gran momento se acerca...</h2>
            <div class="countdown-wrapper">
                <div id="cuenta-regresiva" class="countdown"></div>
            </div>
        </div>
    </section>

    <!-- DETALLES SECTION -->
    <section class="detalles-section" id="detalles">
        <div class="container">
            <h2 class="seccion-titulo">Nuestros Detalles</h2>
            <div class="detalles-grid">
                <!-- CEREMONIA -->
                <div class="detalle-card">
                    <div class="card-icon">
                        <i class="bi bi-church"></i>
                    </div>
                    <h3>Ceremonia Religiosa</h3>
                    <p class="detalle-desc">Una bendición especial para comenzar nuestro camino juntos</p>
                    <div class="detalle-info">
                        <p><i class="bi bi-geo-alt-fill"></i> Parroquia de Nuestra Señora</p>
                        <p><i class="bi bi-clock-fill"></i> 18:00 hrs</p>
                    </div>
                    <a href="https://maps.google.com" target="_blank" class="btn-outline">Ver ubicación</a>
                </div>

                <!-- RECEPCIÓN -->
                <div class="detalle-card">
                    <div class="card-icon">
                        <i class="bi bi-cup-hot"></i>
                    </div>
                    <h3>Recepción y Celebración</h3>
                    <p class="detalle-desc">Música, baile y muchas sorpresas para celebrar con ustedes</p>
                    <div class="detalle-info">
                        <p><i class="bi bi-geo-alt-fill"></i> Quinta Jardín Real</p>
                        <p><i class="bi bi-clock-fill"></i> 20:30 hrs</p>
                    </div>
                    <a href="https://maps.google.com" target="_blank" class="btn-outline">Ver ubicación</a>
                </div>

                <!-- ESPECIAL -->
                <div class="detalle-card">
                    <div class="card-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3>Lo que traemos</h3>
                    <p class="detalle-desc">Amor, felicidad y los mejores momentos para compartir</p>
                    <ul class="items-list">
                        <li>🎂 Delicioso pastel</li>
                        <li>🎵 Música en vivo</li>
                        <li>💐 Flores hermosas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CONFIRMACIÓN -->
    <section class="confirmation-section" id="confirmacion">
        <div class="container">
            <div class="confirm-card">
                <h2>¿Nos acompañas?</h2>
                <p class="confirm-desc">Tu presencia es el mejor regalo que podemos recibir. Por favor, confirma tu asistencia.</p>
                <form class="form-confirmacion" method="POST" action="./enviar-confirmacion.php">
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Tu nombre completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="correo" placeholder="Tu correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <select name="asistencia" required>
                            <option value="" disabled selected>¿Confirmas tu asistencia?</option>
                            <option value="si">✓ Confirmo mi asistencia</option>
                            <option value="no">✗ Lo siento, no podré asistir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-enviar">Enviar Confirmación</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; 2024 Karla & Ana | Con amor para todos ustedes ❤️</p>
    </footer>

    <script>
        // Countdown Timer
        const fechaEvento = new Date("Oct 18, 2024 18:00:00").getTime();
        setInterval(() => {
            const ahora = new Date().getTime();
            const diferencia = fechaEvento - ahora;
            
            if (diferencia > 0) {
                const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
                const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);
                
                document.getElementById('cuenta-regresiva').innerHTML = `
                    <div class="countdown-item">
                        <div class="countdown-number">${dias}</div>
                        <div class="countdown-label">Días</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">${horas}</div>
                        <div class="countdown-label">Horas</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">${minutos}</div>
                        <div class="countdown-label">Min</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">${segundos}</div>
                        <div class="countdown-label">Seg</div>
                    </div>
                `;
            } else {
                document.getElementById('cuenta-regresiva').innerHTML = '<h3>¡El día ha llegado! 🎉</h3>';
            }
        }, 1000);

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target?.scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Scroll button
        document.querySelector('.btn-scroll')?.addEventListener('click', () => {
            document.querySelector('.countdown-section').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>
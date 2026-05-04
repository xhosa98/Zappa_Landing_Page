<?php
$album_destacado = [
    'titulo' => 'Hot Rats',
    'anio' => 1969,
    'descripcion' => 'Una obra maestra instrumental que redefinió los límites del rock y el jazz-fusion.'
];

$discografia = [
    ['titulo' => 'Freak Out!', 'anio' => 1966, 'genero' => 'Avant-garde rock'],
    ['titulo' => 'Absolutely Free', 'anio' => 1967, 'genero' => 'Experimental'],
    ['titulo' => 'We\'re Only in It for the Money', 'anio' => 1968, 'genero' => 'Sátira'],
    ['titulo' => 'Hot Rats', 'anio' => 1969, 'genero' => 'Jazz-fusion'],
    ['titulo' => 'Apostrophe (\')', 'anio' => 1974, 'genero' => 'Rock progresivo'],
    ['titulo' => 'Joe\'s Garage', 'anio' => 1979, 'genero' => 'Ópera rock'],
    ['titulo' => 'Jazz from Hell', 'anio' => 1986, 'genero' => 'Contemporary classical'],
    ['titulo' => 'Broadway the Hard Way', 'anio' => 1988, 'genero' => 'Sátira política'],
];

$citas = [
    "Sin desviarte de la norma, el progreso es imposible.",
    "La mente es como un paracaídas. Solo funciona cuando está abierta.",
    "Habla con descaro; articulando con cuidado y diciendo solo las cosas más absurdas.",
    "El rock en periodismo es: las personas que no saben escribir, entrevistando a personas que no pueden hablar."
];

$cita_random = $citas[array_rand($citas)];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frank Zappa — El Genio Iconoclasta</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=IBM+Plex+Mono:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
<!-- ── HERO ── -->
<section class="hero">
  <div class="hero-izquierda">
    <h1 class="hero-titulo">
      Frank
      <span>Zappa</span>
    </h1>
    <p class="hero-subtitulo">
      Compositor, guitarrista, director de orquesta y provocador cultural.
      Un genio que se negó a pertenecer a ningún género, porque él mismo era un género.
    </p>
    <p class="hero-fechas">21.12.1940 — 04.12.1993 &nbsp;·&nbsp; Baltimore, Maryland</p>
  </div>
  <div class="hero-derecha">
    <div class="hero-nota">The Mothers of Invention</div>
    <div class="retrato">
      <img src="https://cdn.britannica.com/64/23364-004-AE83E8A7/Frank-Zappa.jpg" alt="Frank Zappa" class="retrato-img">
    </div>
  </div>
  <div class="scroll-hint">↓ &nbsp; DESCUBRIR</div>
</section>

<!-- ── CITA ── -->
<section class="seccion-cita">
  <blockquote>
    <p class="cita-texto"><?= htmlspecialchars($cita_random) ?></p>
    <p class="cita-fuente">— Frank Zappa</p>
  </blockquote>
</section>

<!-- ── ÁLBUM DESTACADO ── -->
<section class="seccion-album">
  <div class="album-visual">
    <img src="https://upload.wikimedia.org/wikipedia/en/9/9b/Hot_Rats_%28Frank_Zappa_album_-_cover_art%29.jpg" alt="Hot Rats" class="album-portada">
  </div>
  <div class="album-info">
    <p class="album-etiqueta">// Álbum esencial</p>
    <h2 class="album-titulo"><?= htmlspecialchars($album_destacado['titulo']) ?></h2>
    <p class="album-anio"><?= $album_destacado['anio'] ?></p>
    <p class="album-desc"><?= htmlspecialchars($album_destacado['descripcion']) ?></p>
  </div>
</section>

<!-- ── DISCOGRAFÍA ── -->
<section class="seccion-disco">
  <h2 class="seccion-titulo">Disco<span>grafía</span></h2>
  <div class="disco-grid">
    <?php foreach ($discografia as $i => $album): ?>
    <div class="disco-item">
      <p class="disco-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></p>
      <p class="disco-titulo"><?= htmlspecialchars($album['titulo']) ?></p>
      <p class="disco-meta">
        <span class="disco-anio"><?= $album['anio'] ?></span>
        &nbsp;·&nbsp; <?= htmlspecialchars($album['genero']) ?>
      </p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ── BIOGRAFÍA + DATOS ── -->
<section class="seccion-bio">
  <div class="bio-texto">
    <h2 class="seccion-titulo" style="margin-bottom:2rem;">El <span>Icono</span></h2>
    <p>
      Frank Vincent Zappa nació en Baltimore y desde temprana edad mostró una curiosidad musical sin límites.
      A los doce años ya escuchaba a Varèse y a Stravinsky mientras sus compañeros seguían el rock and roll convencional.
      Esa tensión —entre lo popular y lo culto— definiría toda su carrera.
    </p>
    <p>
      Con The Mothers of Invention lanzó <em>Freak Out!</em> en 1966, uno de los primeros álbumes dobles de rock en la historia.
      Era sátira, era protesta, era música de vanguardia disfrazada de canción pop. El establishment no supo qué hacer con él —y eso le encantaba.
    </p>
    <p>
      Compuso más de sesenta álbumes en vida, abarcando rock, jazz, música contemporánea, ópera y sátira política.
      En 1985 testificó ante el Congreso de EE. UU. contra la censura en la música, convirtiéndose en defensor irónicamente serio de la libertad de expresión.
    </p>
  </div>
  <div class="bio-datos">
    <?php
    $datos = [
      'Nombre completo' => 'Frank Vincent Zappa',
      'Nacimiento' => '21 de diciembre, 1940',
      'Lugar' => 'Baltimore, Maryland',
      'Fallecimiento' => '4 de diciembre, 1993',
      'Instrumentos' => 'Guitarra, teclado, batería',
      'Álbumes' => '62 de estudio',
      'Sello' => 'Straight, Bizarre, Zappa Records',
      'Legado' => 'Rock & Roll Hall of Fame, 1995',
    ];
    foreach ($datos as $label => $valor): ?>
    <div class="dato-fila">
      <p class="dato-label"><?= $label ?></p>
      <p class="dato-valor"><?= htmlspecialchars($valor) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ── FOOTER ── -->
<footer>
  <p class="footer-nombre">Frank Zappa</p>
  <p class="footer-copy">
    <?= date('Y') ?> &nbsp;·&nbsp; GENERADO CON PHP
    &nbsp;·&nbsp; "WITHOUT DEVIATION FROM THE NORM, PROGRESS IS NOT POSSIBLE"
  </p>
</footer>

</body>
</html>
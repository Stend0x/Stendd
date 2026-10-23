<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta
    name="description"
    content="North Is Invisible adalah komunitas untuk para leader dan ketua team yang ingin naik level."
  >
  <title>North Is Invisible — Community</title>

  <style>
    :root {
      --bg: #080b10;
      --surface: #101720;
      --text: #f2f6f8;
      --muted: #9aa8b5;
      --accent: #63f5b2;
      --border: rgba(255, 255, 255, 0.1);
      --max-width: 1100px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      min-height: 100vh;
      background:
        radial-gradient(ellipse at 75% 0%, rgba(32, 91, 73, 0.16), transparent 35%),
        var(--bg);
      color: var(--text);
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .container {
      width: min(var(--max-width), calc(100% - 40px));
      margin-inline: auto;
    }

    .site-header {
      position: sticky;
      top: 0;
      z-index: 10;
      border-bottom: 1px solid var(--border);
      background: rgba(8, 11, 16, 0.88);
      backdrop-filter: blur(14px);
    }

    .nav {
      min-height: 72px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .brand {
      display: inline-flex;
      align-items: center;
      gap: 11px;
      font-weight: 800;
      letter-spacing: 0.02em;
    }

    .brand-mark {
      width: 34px;
      height: 34px;
      display: grid;
      place-items: center;
      border-radius: 10px;
      background: var(--accent);
      color: #07110c;
      font-family: monospace;
      font-size: 18px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 24px;
      color: var(--muted);
      font-size: 14px;
    }

    .nav-links a {
      transition: color 0.2s ease;
    }

    .nav-links a:hover {
      color: var(--accent);
    }

    .hero {
      min-height: 580px;
      display: grid;
      align-items: center;
      padding: 90px 0;
    }

    .hero-content {
      max-width: 850px;
    }

    .eyebrow,
    .section-label {
      color: var(--accent);
      font-family: monospace;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
    }

    .hero h1 {
      max-width: 850px;
      margin: 20px 0;
      font-size: clamp(42px, 8vw, 80px);
      line-height: 1.02;
      letter-spacing: -0.055em;
    }

    .hero h1 span {
      color: var(--accent);
    }

    .hero-description {
      max-width: 690px;
      color: var(--muted);
      font-size: 18px;
    }

    .hero-description strong {
      color: var(--text);
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 30px;
    }

    .button {
      min-height: 46px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0 19px;
      border: 1px solid var(--border);
      border-radius: 10px;
      font-size: 14px;
      font-weight: 700;
      transition: 0.2s ease;
    }

    .button-primary {
      border-color: var(--accent);
      background: var(--accent);
      color: #07110c;
    }

    .button-primary:hover {
      background: #a0ffd1;
    }

    .button-secondary:hover {
      border-color: var(--accent);
      color: var(--accent);
    }

    section {
      padding: 78px 0;
      border-top: 1px solid var(--border);
    }

    .section-heading {
      max-width: 720px;
      margin-bottom: 32px;
    }

    .section-heading h2 {
      margin: 10px 0;
      font-size: clamp(30px, 5vw, 46px);
      line-height: 1.1;
      letter-spacing: -0.04em;
    }

    .section-description {
      color: var(--muted);
    }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 22px;
      align-items: stretch;
    }

    .team-photo-card {
      position: relative;
      min-height: 360px;
      overflow: hidden;
      border: 1px solid var(--border);
      border-radius: 18px;
      background: var(--surface);
    }

    .team-photo-card img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .team-photo-card::after {
      position: absolute;
      inset: 0;
      background: linear-gradient(transparent 45%, rgba(8, 11, 16, 0.88));
      content: "";
    }

    .photo-caption {
      position: absolute;
      z-index: 1;
      right: 20px;
      bottom: 18px;
      left: 20px;
      color: #fff;
      font-family: monospace;
      font-size: 13px;
      letter-spacing: 0.08em;
    }

    .about-copy {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 30px;
      border: 1px solid var(--border);
      border-radius: 18px;
      background: var(--surface);
    }

    .about-copy h3 {
      margin-bottom: 12px;
      font-size: 23px;
    }

    .about-copy p {
      color: var(--muted);
    }

    .about-copy p + p {
      margin-top: 14px;
    }

    /* Skill cards */
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }

    .skill-card {
      min-height: 210px;
      padding: 24px;
      border: 1px solid var(--border);
      border-radius: 16px;
      background: var(--surface);
      transition: transform 0.2s ease, border-color 0.2s ease;
    }

    .skill-card:hover {
      transform: translateY(-4px);
      border-color: rgba(99, 245, 178, 0.45);
    }

    .skill-number {
      display: inline-block;
      margin-bottom: 18px;
      color: var(--accent);
      font-family: monospace;
      font-size: 13px;
      letter-spacing: 0.12em;
    }

    .skill-card h3 {
      margin-bottom: 8px;
      font-size: 18px;
    }

    .skill-card p {
      color: var(--muted);
      font-size: 14px;
    }

    .community-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 18px;
    }

    .community-card {
      display: flex;
      align-items: flex-start;
      gap: 18px;
      padding: 26px;
      border: 1px solid var(--border);
      border-radius: 18px;
      background: var(--surface);
      transition: transform 0.2s ease, border-color 0.2s ease;
    }

    .community-card:hover {
      transform: translateY(-4px);
      border-color: rgba(99, 245, 178, 0.45);
    }

    .community-icon {
      width: 48px;
      height: 48px;
      flex: 0 0 48px;
      display: grid;
      place-items: center;
      border-radius: 14px;
      background: rgba(99, 245, 178, 0.1);
      color: var(--accent);
      font-size: 24px;
    }

    .community-card h3 {
      margin-bottom: 6px;
      font-size: 18px;
    }

    .community-card p {
      margin-bottom: 16px;
      color: var(--muted);
      font-size: 14px;
    }

    .community-card a {
      color: var(--accent);
      font-size: 14px;
      font-weight: 700;
    }

    .community-card a:hover {
      color: #a0ffd1;
    }

    .footer {
      padding: 25px 0;
      border-top: 1px solid var(--border);
      color: var(--muted);
      font-size: 13px;
    }

    .footer-inner {
      display: flex;
      justify-content: space-between;
      gap: 16px;
    }

    @media (max-width: 800px) {
      .skills-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 700px) {
      .nav {
        min-height: 64px;
      }

      .nav-links {
        gap: 14px;
        font-size: 13px;
      }

      .hero {
        min-height: 500px;
        padding: 70px 0;
      }

      section {
        padding: 60px 0;
      }

      .about-grid,
      .community-grid {
        grid-template-columns: 1fr;
      }

      .team-photo-card {
        min-height: 290px;
      }

      .about-copy {
        padding: 24px;
      }

      .community-card {
        padding: 22px;
      }

      .footer-inner {
        flex-direction: column;
      }
    }

    @media (max-width: 520px) {
      .container {
        width: min(100% - 28px, var(--max-width));
      }

      .brand {
        font-size: 13px;
      }

      .nav-links {
        gap: 10px;
        font-size: 12px;
      }

      .skills-grid {
        grid-template-columns: 1fr;
      }

      .skill-card {
        min-height: auto;
      }
    }
  </style>
</head>

<body>
  <header class="site-header">
    <div class="container nav">
      <a class="brand" href="#home" aria-label="North Is Invisible, beranda">
        <span class="brand-mark">N</span>
        <span>North Is Invisible</span>
      </a>

      <nav class="nav-links" aria-label="Navigasi utama">
        <a href="#about">Tentang</a>
        <a href="#skills">Skill</a>
        <a href="#community">Community</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container">
        <div class="hero-content">
          <div class="eyebrow">Leadership · Growth · Community</div>

          <h1>
            North Is<br>
            <span>Invisible.</span>
          </h1>

          <p class="hero-description">
            <strong>Kami bukan sekadar team, kami adalah community.</strong>
            Sebuah wadah yang kami bangun untuk para leader dan ketua team
            yang ingin naik level, berkembang, serta membawa timnya melangkah
            lebih jauh.
          </p>

          <div class="hero-actions">
            <a class="button button-primary" href="#community">Jelajahi komunitas</a>
            <a class="button button-secondary" href="#skills">Lihat skill kami</a>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="section-heading">
          <div class="section-label">Tentang kami</div>
          <h2>Tempat para leader<br>bertumbuh bersama.</h2>
          <p class="section-description">
            North Is Invisible hadir sebagai ruang untuk para pemimpin yang
            ingin mengembangkan diri, memperkuat tim, dan saling berbagi
            pengalaman.
          </p>
        </div>

        <div class="about-grid">
          <div class="team-photo-card">
            <img
              src="https://i.ibb.co.com/rRJMS0NQ/Chat-GPT-Image-23-Okt-2026-20-45-28.png"
              alt="Anggota North Is Invisible"
              loading="lazy"
            >
            <div class="photo-caption">SATU COMMUNITY · TUMBUH BERSAMA</div>
          </div>

          <div class="about-copy">
            <h3>Naik level bukan perjalanan sendirian.</h3>
            <p>
              Menjadi leader bukan hanya tentang memimpin. Ini tentang terus
              belajar, mengambil keputusan, membangun kepercayaan, dan membantu
              orang lain berkembang.
            </p>
            <p>
              Di North Is Invisible, para leader dan ketua team dapat bertukar
              wawasan, menemukan perspektif baru, serta saling mendukung untuk
              menjadi lebih baik.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="skills">
      <div class="container">
        <div class="section-heading">
          <div class="section-label">Skill yang kami kembangkan</div>
          <h2>Bekal untuk memimpin<br>dan berkembang.</h2>
          <p class="section-description">
            Kami belajar bersama untuk membangun kemampuan yang berguna bagi
            diri sendiri, tim, dan komunitas.
          </p>
        </div>

        <div class="skills-grid">
          <article class="skill-card">
            <span class="skill-number">01 / LEADERSHIP</span>
            <h3>Kepemimpinan</h3>
            <p>
              Belajar memimpin dengan tanggung jawab, memberi arah, dan menjadi
              contoh yang baik bagi tim.
            </p>
          </article>

          <article class="skill-card">
            <span class="skill-number">02 / COMMUNICATION</span>
            <h3>Komunikasi</h3>
            <p>
              Menyampaikan ide dengan jelas, mendengarkan secara aktif, dan
              membangun hubungan yang sehat.
            </p>
          </article>

          <article class="skill-card">
            <span class="skill-number">03 / TEAMWORK</span>
            <h3>Kerja Sama Tim</h3>
            <p>
              Membangun kekompakan, saling mendukung, dan bekerja bersama untuk
              mencapai tujuan.
            </p>
          </article>

          <article class="skill-card">
            <span class="skill-number">04 / STRATEGY</span>
            <h3>Perencanaan & Strategi</h3>
            <p>
              Menentukan prioritas, menyusun langkah, dan mengarahkan tim agar
              bergerak lebih teratur.
            </p>
          </article>

          <article class="skill-card">
            <span class="skill-number">05 / PROBLEM SOLVING</span>
            <h3>Pemecahan Masalah</h3>
            <p>
              Menghadapi tantangan dengan pikiran terbuka, mencari solusi, dan
              mengambil keputusan dengan bijak.
            </p>
          </article>

          <article class="skill-card">
            <span class="skill-number">06 / PERSONAL GROWTH</span>
            <h3>Pengembangan Diri</h3>
            <p>
              Membangun disiplin, kepercayaan diri, dan kebiasaan belajar agar
              terus berkembang.
            </p>
          </article>
        </div>
      </div>
    </section>

    <section id="community">
      <div class="container">
        <div class="section-heading">
          <div class="section-label">Bergabung bersama kami</div>
          <h2>Temukan ruangmu<br>di dalam community.</h2>
          <p class="section-description">
            Terhubung dengan anggota, ikuti kabar terbaru, dan mulai perjalanan
            berkembang bersama North Is Invisible.
          </p>
        </div>

        <div class="community-grid">
          <article class="community-card">
            <div class="community-icon" aria-hidden="true">◉</div>
            <div>
              <h3>Ikuti kabar terbaru</h3>
              <p>
                Pengumuman, informasi, dan berbagai hal menarik dari North Is
                Invisible tersedia di Telegram Channel.
              </p>
              <a
                href="https://t.me/h3llo_W0rld0"
                target="_blank"
                rel="noopener noreferrer"
              >
                Kunjungi channel <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <article class="community-card">
            <div class="community-icon" aria-hidden="true">⌁</div>
            <div>
              <h3>Terhubung dengan community</h3>
              <p>
                Mulai percakapan, berbagi pengalaman, dan bertumbuh bersama
                para leader serta ketua team lainnya.
              </p>
              <a
                href="https://t.me/OfficialKantin"
                target="_blank"
                rel="noopener noreferrer"
              >
                Masuk ke grup <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-inner">
      <span>© <span id="year"></span> North Is Invisible.</span>
      <span>Kami bukan sekadar team, kami adalah community.</span>
    </div>
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
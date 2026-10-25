<?php get_header(); ?>

<main class="profile-page">
    <section class="profile-hero">
        <div class="container profile-layout">
            <div class="profile-photo-wrap">
                <img
                    class="profile-photo"
                    src="<?php echo esc_url(get_theme_file_uri('/assets/images/achmad-dani.png')); ?>"
                    alt="Foto profil Achmad Dani"
                >
                <span class="profile-photo-accent" aria-hidden="true"></span>
            </div>

            <div class="profile-intro">
                <p class="eyebrow">Kenalan lebih dekat</p>
                <h1>Halo, saya <span>Achmad Dani.</span></h1>
                <p class="profile-lead">
                    Saya adalah mahasiswa Pendidikan Informatika di Universitas Trunojoyo Madura.
                    Saya senang belajar, mengeksplorasi teknologi, dan mengembangkan karya digital.
                </p>
                <a class="btn" href="<?php echo esc_url(dani_custom_page_url('kontak')); ?>">Hubungi saya <span aria-hidden="true">&nbsp;→</span></a>
            </div>
        </div>
    </section>

    <section class="profile-details">
        <div class="container profile-details-layout">
            <div>
                <p class="eyebrow">Tentang saya</p>
                <h2 class="section-heading">Kreatif, terus belajar, dan siap berkarya.</h2>
            </div>
            <p>
                Saya sedang menempuh studi Pendidikan Informatika di Universitas Trunojoyo Madura.
                Portofolio ini menjadi ruang untuk mendokumentasikan perjalanan belajar, proyek,
                dan karya saya. Silakan sapa saya melalui halaman kontak.
            </p>
        </div>
    </section>

    <?php while (have_posts()) : the_post(); ?>
        <?php if (trim(get_the_content()) !== '') : ?>
            <section class="profile-details profile-editor-content">
                <div class="container narrow-content entry-content">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<main>
<section id="home">
    <div class="video-background">
        <video autoplay muted loop class="background-video">
            <source src="<?php echo get_template_directory_uri(); ?>/main-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="home-container">
            <div class="home-content">
                <h1 class="jost-font home-text-1">Welcome to PatioTime</h1>
                <p class="cormorant-font home-text-2">Delicious Food & Wonderful Eating Experience</p>
                <p class="jost-font home-text-3">We Serve Food, Harmony, & Laughter Since 1998</p>
                <div class="button-control">
                    <div class="jost-font home-button">VIEW FULL MENUS</div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section id="menu">
        <h1>Our Menu</h1>
        <p>Explore our delicious offerings!</p>
    </section>

    <section id="contact">
        <h1>Contact Us</h1>
        <p>Get in touch with us through this section.</p>
    </section>

    <section id="service">
        <h1>Our Services</h1>
        <p>Learn more about the services we offer.</p>
    </section>
</main>

<?php get_footer(); ?>

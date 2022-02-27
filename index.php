<?php $page = 'home'; include('shared/header.php');?>
<!-- header -->
<header>
    <article>
        <h1>Photo studio</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit placet!</p>
        <button><a href="contact.php">Contact us</a></button>
    </article>
</header>
<!-- services -->
<section class="services container">
    <article>
        <img src="img/services1.jpg" alt="shooting services image">
        <div>
            <h3>Shooting</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quae exercitationem iure dolores
                ipsam mollitia deserunt esse rem nihil a.</p>
        </div>
    </article>
    <article>
        <img src="img/services2.jpg" alt="videos services image">
        <div>
            <h3>Videos</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quae exercitationem iure dolores
                ipsam mollitia deserunt esse rem nihil a.</p>
        </div>
    </article>
    <article>
        <img src="img/services3.jpg" alt="editing services image">
        <div>
            <h3>Editing</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quae exercitationem iure dolores
                ipsam mollitia deserunt esse rem nihil a.</p>
        </div>
    </article>
</section>
<!-- works -->
<section class="works" id="gallery">
    <h2>Latest works</h2>
    <article class="gallery">
        <article>
            <div>
                <img src="img/works1.jpg" alt="image">
            </div>
            <div>
                <img src="img/works2.jpg" alt="image">
            </div>
        </article>
        <article>
            <img src="img/works3.jpg" alt="image">
        </article>
        <article>
            <div>
                <img src="img/works4.jpg" alt="image">
            </div>
            <div class="div-container">
                <div>
                    <img src="img/works5.jpg" alt="image">
                </div>
                <div>
                    <img src="img/works6.jpg" alt="image">
                </div>
            </div>
        </article>
    </article>
    <article class="gallery2">
        <article>
            <div>
                <img src="img/works7.jpg" alt="image">
            </div>
            <div>
                <img src="img/works8.jpg" alt="image">
            </div>
        </article>
        <article>
            <img src="img/works9.jpg" alt="image">
        </article>
        <article>
            <div>
                <img src="img/works10.jpg" alt="image">
            </div>
            <div class="div-container">
                <div>
                    <img src="img/works11.jpg" alt="image">
                </div>
                <div>
                    <img src="img/works12.jpg" alt="image">
                </div>
            </div>
        </article>
    </article>
    <button class="load-more-btn">More...</button>
</section>
<?php include('shared/footer.php');?>

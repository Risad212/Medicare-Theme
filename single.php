<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medicare
 */

get_header();
?>


<!--========== BreadCamb Section ==========-->
<div class="breadcrumb">
        <div class="container">
            <div class="col-xs-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-text-wrapper">
                        <h2 class="page-name">Blog</h2>
                        <ul class="breadcrumb-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div><!--/.breadcrumb-text-wrapper-->
                </div><!--/.breadcrumb-content-->
            </div><!--/.col-xs-12-->
        </div>
    </div>


<!--========== Blog Details Section ==========-->
<section class="blog-details">
          <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-left">
                        <div class="blog-img">
                            <img class="img-fluid" src="media/blog/blog-details.jpg" alt="">
                        </div>
                        <div class="blog-meta-info">
                            <ul class="meta-list">
                                <li class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0"
                                        viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M414.08 204.373 222.187 12.48C214.4 4.8 203.733 0 192 0H42.667C19.093 0 0 19.093 0 42.667V192c0 11.84 4.8 22.507 12.587 30.187l192 192c7.68 7.68 18.347 12.48 30.08 12.48s22.507-4.8 30.187-12.48l149.333-149.333c7.68-7.787 12.48-18.453 12.48-30.187 0-11.84-4.8-22.507-12.587-30.294zM74.667 106.667c-17.707 0-32-14.293-32-32s14.293-32 32-32 32 14.293 32 32-14.294 32-32 32z"
                                                fill="#05d3b0" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    Antibiotic
                                </li>
                                <li class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0"
                                        viewBox="0 0 34 34" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M29.6 2h-3v3c0 .6-.5 1-1 1s-1-.4-1-1V2h-16v3c0 .6-.5 1-1 1s-1-.4-1-1V2h-3C2.1 2 1 3.3 1 5v3.6h32V5c0-1.7-1.8-3-3.4-3zM1 10.7V29c0 1.8 1.1 3 2.7 3h26c1.6 0 3.4-1.3 3.4-3V10.7zm8.9 16.8H7.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8H10c.4 0 .8.3.8.8v2.5c-.1.5-.4.8-.9.8zm0-9H7.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8H10c.4 0 .8.3.8.8v2.5c-.1.5-.4.8-.9.8zm8 9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm0-9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm8 9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm0-9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8z"
                                                fill="#05d3b0" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    July 25, 2023
                                </li>
                                <li class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z" fill="#05d3b0" opacity="1" data-original="#000000" class=""></path></g></svg>
                                    John Anderson
                                </li>
                            </ul>
                        </div>
                        <div class="blog-title-info">
                            <h2 class="blog-title">What Can I Do To Prevent Myself & prevent Disease</h2>
                            <p class="blog-discription">Not only is traveling by train a great way to see more of your
                                destination, it also scores points for sustainability. And Europe has some of the most
                                scenic
                                train routes in the world.
                                Discover five of the best train trips for exploring the continent – from tracks that
                                wind around
                                the snow-capped Alps to journeys through the Norwegian mountains along vast, blue fjords
                                <br><br>

                                Discover the untamed grandeur of Norway’s nature on the trip from Oslo to
                                Bergen

                                High up on Norway’s Hardangervidda plateau rests one of the world’s most impressive
                                railways – Oslo
                                to Bergen. It travels from the Norwegian capital through a wilderness of mountains,
                                tumbling
                                waterfalls, and navy blue fjords so still they appear like mirrors. Enjoy a cultural
                                evening in
                                Oslo’s grandiose waterfront glass and marble Opera House.

                                Or disembark for a few days of wild swimming in clear mountain springs and hiking
                                through green
                                forest-cloaked valleys. There’s also the option to stop and cross-country ski on the
                                way, plus the
                                chance to visit a fish market founded in the 13th century. Book yourself a stylish suite
                                at Clarion
                                Hotel The Hub while in Oslo.
                            </p>
                        </div>
                        <div class="blog-social">
                            <ul class="social-list">
                                <li class="social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"x="0" y="0" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z" data-original="#010002" class=""></path></g></svg>
                                </li>
                                <li class="social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths"><g><path d="M404.831 94.739c-6.853 0-12.43 5.577-12.43 12.43s5.577 12.43 12.43 12.43c6.854 0 12.43-5.576 12.43-12.43s-5.576-12.43-12.43-12.43zM256 145.804c-60.762 0-110.196 49.434-110.196 110.196S195.238 366.197 256 366.197c60.763 0 110.197-49.434 110.197-110.196S316.763 145.804 256 145.804z" opacity="1" data-original="#000000" class="hovered-path"></path><path d="M371.643 0H140.357C62.964 0 0 62.964 0 140.358v231.285C0 449.037 62.964 512 140.357 512h231.286C449.037 512 512 449.036 512 371.643V140.358C512 62.964 449.037 0 371.643 0zM256 396.432c-77.435 0-140.431-62.997-140.431-140.432S178.566 115.57 256 115.57 396.432 178.566 396.432 256 333.434 396.432 256 396.432zm148.831-246.596c-23.526 0-42.666-19.14-42.666-42.666 0-23.526 19.14-42.667 42.666-42.667 23.526 0 42.666 19.14 42.666 42.666s-19.14 42.667-42.666 42.667z" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                                </li>
                                <li class="social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"opacity="1" data-original="#000000" class=""></path></g></svg>
                                </li>
                                <li class="social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 100 100" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M90 90V60.7c0-14.4-3.1-25.4-19.9-25.4-8.1 0-13.5 4.4-15.7 8.6h-.2v-7.3H38.3V90h16.6V63.5c0-7 1.3-13.7 9.9-13.7 8.5 0 8.6 7.9 8.6 14.1v26H90zM11.3 36.6h16.6V90H11.3zM19.6 10c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.7 9.6 9.7 9.6-4.4 9.6-9.7-4.3-9.6-9.6-9.6z" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </li>
                            </ul>
                        </div>
                        <hr class="mt-5">
                        <div class="comment-section">
                            <div class="comment-title">3 Comments</div>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="media/blog/user.png" alt="">
                                </div>
                                <div class="comments">
                                    <h5 class="comment-author">Ammee Burtton</h5>
                                    <span class="comment-date">July 21, 2023</span>
                                    <p>Id vim facilis ceteros percipit, altera phaedrum sea at, te alia novum praesent
                                        sit. Ne
                                        justo mazim delenit eam, pri ex brute interpretaris, invenire.</p>
                                    <button class="reply-btn">Reply <i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                            <!--- single comment -->
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="media/blog/user.png" alt="">
                                </div>
                                <div class="comments">
                                    <h5 class="comment-author">Ashton Porter</h5>
                                    <span class="comment-date">July 21, 2023</span>
                                    <p>Id vim facilis ceteros percipit, altera phaedrum sea at, te alia novum praesent
                                        sit. Ne
                                        justo mazim delenit eam, pri ex brute interpretaris, invenire.</p>
                                    <button class="reply-btn">Reply <i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                            <!--- single comment -->
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="media/blog/user.png" alt="">
                                </div>
                                <div class="comments">
                                    <h5 class="comment-author">Sheri Flores</h5>
                                    <span class="comment-date">July 21, 2023</span>
                                    <p>Id vim facilis ceteros percipit, altera phaedrum sea at, te alia novum praesent
                                        sit. Ne
                                        justo mazim delenit eam, pri ex brute interpretaris, invenire.</p>
                                    <button class="reply-btn">Reply <i class="fa-solid fa-reply"></i></button>
                                </div>
                            </div>
                            <!--- comment form --->
                            <div class="comment-form-wrap">
                                <h4 class="title">Leave A Reply</h4>
                                <p class="mt-3">Your email address will not be published. Required fields are marked *
                                </p>
                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="email" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <textarea placeholder="Leave a comment here" id="comment"
                                                        style="height: 150px"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="section-button">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-right">
                        <div class="widget_search">
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search …" value=""
                                        name="search">
                                </label>
                                <button type="submit" class="search-submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 118.783 118.783" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z" fill="#fff" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </button>
                            </form>
                        </div>
                        <div class="recent-post">
                            <h4 class="title">Recent Posts</h4>
                            <div class="single-post">
                                <div class="post-thumnail">
                                    <a href="#">
                                        <img src="media/blog/post-1.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="recent-posts-info">
                                    <h4 class="post-title">
                                        <a href="#">250+ Medical Tips We just had to share</a>
                                    </h4>
                                    <span class="post-date">July 21, 2023</span>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="post-thumnail">
                                    <a href="#">
                                        <img src="media/blog/post-2.webp" alt="">
                                    </a>
                                </div>
                                <div class="recent-posts-info">
                                    <h4 class="post-title">
                                        <a href="#">What Can I Do To Prevent Myself & prevent Disease</a>
                                    </h4>
                                    <span class="post-date">July 21, 2023</span>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="post-thumnail">
                                    <a href="#">
                                        <img src="media/blog/post-3.webp" alt="">
                                    </a>
                                </div>
                                <div class="recent-posts-info">
                                    <h4 class="post-title">
                                        <a href="#">CCU For Emergency Services & Medical support</a>
                                    </h4>
                                    <span class="post-date">July 21, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-category">
                            <h4 class="category-title">Blog Categories</h4>
                            <ul class="category-list">
                                <li class="item"><a href="#">Antibiotic(4)</a></li>
                                <li class="item"><a href="#">Diseases(4)</a></li>
                                <li class="item"><a href="#">Health Care(1)</a></li>
                                <li class="item"><a href="#">Heart Rate(3)</a></li>
                                <li class="item"><a href="#">Hospital(4)</a></li>
                                <li class="item"><a href="#">Infectious (4)</a></li>
                            </ul>
                        </div>
                        <div class="populate-tag">
                            <h4 class="tag-title">Popular Tags</h4>
                            <ul class="tag-list">
                                <li class="tag-item"><a href="#">Antibiotic</a></li>
                                <li class="tag-item"><a href="#">Diseases</a></li>
                                <li class="tag-item"><a href="#">Health Care</a></li>
                                <li class="tag-item"><a href="#">Heart Rate</a></li>
                                <li class="tag-item"><a href="#">Hospital</a></li>
                                <li class="tag-item"><a href="#">Infectious</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();

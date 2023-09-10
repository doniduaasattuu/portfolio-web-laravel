<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- google font -->
    <!-- INTER -->
    <link rel="icon" href="../img.php?name=logo&format=png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/storage/dist/style.css" />
    <!-- google font -->
    <title>{{$title}}</title>
</head>

<body>
    <!-- NAVBAR SECTION START -->
    <nav>
        <div class="blur">
        </div>
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo"><a href="/">Doni Darmawan</a></div>
                <span class="hamburger"><img src="storage/dist/img/hamburger.png" alt="Menu"></span>

                <ul class="menu none">
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- NAVBAR SECTION END-->

    <!-- HERO SECTION START -->
    <section id="home">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <h1>Hello Everyone 👋🏻, I'm <span>Doni Darmawan</span></h1>
                    <h3>
                        <span>Electrical Engineer <span>&</span></span> Junior Fullstack
                        Developer
                    </h3>
                    <p>
                        Strength and growth come only through continuous effort and struggle.
                    </p>
                    <a class="contact-button" href="#contact">Contact Me! </a>
                </div>
                <div class="hero-img">
                    <div class="img-wrapper">
                        <img src="storage/dist/img/doni.png" alt="Doni Darmawan" />
                        <span>
                            <svg fill="currentColor" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.4,-59.9C61.5,-46.6,70.2,-30.3,72.2,-13.6C74.1,3.1,69.3,20.2,59.3,31.1C49.3,42,34,46.8,19.8,49.9C5.7,53.1,-7.4,54.6,-20.8,51.9C-34.1,49.3,-47.8,42.4,-54,31.4C-60.1,20.3,-58.6,5.1,-55.9,-9.7C-53.1,-24.6,-49,-39.1,-39.5,-53C-30,-66.9,-15,-80.3,1.3,-81.9C17.6,-83.5,35.2,-73.2,48.4,-59.9Z" transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- ABOUT SECTION START -->
    <section id="about">
        <div class="container">
            <div class="about-wrapper">
                <h1>About</h1>
                <div class="about-left">
                    <h3>Glimpse of me</h3>
                    <p>
                        Experienced more than 8 years as an electrical engineer, mastered wiring diagrams, good at problem analysis, fast learner, disciplined and detail oriented, likes programming and things related to logic. You can see some of the projects I've worked on below.
                    </p>
                </div>
                <div class="about-right">
                    <h3>Get in touch</h3>
                    <p>Follow my social media to find it more.</p>
                    <div class="social-media">
                        <!-- LinkedIn -->
                        <a target="_blank" href="https://www.linkedin.com/in/doni-darmawan-645654180/">
                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" viewBox="0 0 512 512" xml:space="preserve">
                                <g id="7935ec95c421cee6d86eb22ecd125aef">
                                    <path style="
                        display: inline;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                      " d="M116.504,500.219V170.654H6.975v329.564H116.504
                        L116.504,500.219z M61.751,125.674c38.183,0,61.968-25.328,61.968-56.953c-0.722-32.328-23.785-56.941-61.252-56.941
                        C24.994,11.781,0.5,36.394,0.5,68.722c0,31.625,23.772,56.953,60.53,56.953H61.751L61.751,125.674z M177.124,500.219
                        c0,0,1.437-298.643,0-329.564H286.67v47.794h-0.727c14.404-22.49,40.354-55.533,99.44-55.533
                        c72.085,0,126.116,47.103,126.116,148.333v188.971H401.971V323.912c0-44.301-15.848-74.531-55.497-74.531
                        c-30.254,0-48.284,20.38-56.202,40.08c-2.897,7.012-3.602,16.861-3.602,26.711v184.047H177.124L177.124,500.219z"></path>
                                </g>
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a target="_blank" href="https://www.instagram.com/don_id/"><svg fill="currentColor" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100079709837857">
                            <svg fill="currentColor" width="22" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>facebook [#176]</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="currentColor">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>

                        <!-- Twitter -->
                        <a target="_blank" href="https://twitter.com/duaasattuu"><svg fill="currentColor" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Twitter</title>
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->

    <!-- PORTFOLIO SECTION START -->
    <section id="portfolio">
        <div class="container">
            <div class="portfolio-wrapper">
                <h3>Portfolio</h3>
                <h2>Latest Project</h2>
                <h4>Some projects I've worked on.</h4>
                <div class="portfolio-content">
                    <div>
                        <img src="storage/dist/img/daily.png" alt="Daily Check & Finding Web Base" />
                        <h2>Web Based Daily Inspection and Finding Reports</h2>
                        <p>
                            Web-based application to facilitate MCC daily inspections and findings reports. The data stored into database and generate findings report automatically.
                        </p>
                        <!-- <span><a disabled href="#scooter">Read more -></a></span> -->
                    </div>

                    <div>
                        <img src="storage/dist/img/portfolio.png" alt="Portfolio Web" />
                        <h2>Web Portfolio</h2>
                        <p>
                            A web portfolio I created myself from scratch to let people know what I'm working on and also for looking a new job.
                        </p>
                        <!-- <span><a disabled href="#scooter">Read more -></a></span> -->
                    </div>

                    <div>
                        <img src="storage/dist/img/hvac-1.jpg" alt="Panel HVAC" />
                        <h2>HVAC Starter Panel</h2>
                        <p>
                            Motor starter for HVAC panel, have DOL and VSD starting method.
                        </p>
                        <!-- <span><a disabled href="#scooter">Read more -></a></span> -->
                    </div>

                    <div>
                        <img src="storage/dist/img/hvac-2.jpg" alt="Panel HVAC" />
                        <h2>HVAC Controller Panel</h2>
                        <p>
                            Controller for HVAC panel using PLC and temperature sensors, to be installed in a hospitals.
                        </p>
                        <!-- <span><a disabled href="#scooter">Read more -></a></span> -->
                    </div>

                    <!-- <div>
            <img src="storage/dist/img/sicily.jpg" alt="Sicily" />
            <h2>Project Name</h2>
            <p>
              Lorem ipsum dolor,
            </p>
            <span><a href="#scooter">Read more -></a></span>
          </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO SECTION END -->

    <!-- CLIENTS SECTION START -->
    <section id="clients">
        <div class="container">
            <div class="clients-wrapper">
                <h3>Clients</h3>
                <h2>Our Clients</h2>
                <h4>Clients who worked with me.</h4>
                <div class="logo-wrapper">
                    <a target="_blank" href="http://www.fajarpaper.com">
                        <img src="storage/dist/img/fajarpaper.png" alt="Fajarpaper">
                    </a>
                    <a target="_blank" href="https://chilicond.com/">
                        <img src="storage/dist/img/chilicond.png" alt="Chilicond">
                    </a>
                    <!-- <a href="#">
            <img src="svg.php?name=tokopedia&format=svg" alt="Tokopedia">
          </a>
          <a href="#">
            <img src="svg.php?name=google&format=svg" alt="Google">
          </a>
          <a href="#">
            <img src="svg.php?name=bukalapak&format=svg" alt="Bukalapak">
          </a> -->
                </div>
            </div>

        </div>
    </section>
    <!-- CLIENTS SECTION END -->

    <!-- CONTACT ME SECTION START -->
    <section id="contact">
        <div class="comtainer">
            <!-- <form action="mailto:doni.duaasattuu@gmail.com"> -->
            <form action="/form" method="post">
                @csrf
                <div class="contact-wrapper">
                    <h3>Contact</h3>
                    <h2>Contact Me</h2>
                    <h4>Contact me for a new project or hire me via email below.</h4>
                </div>
                <div class="form-wrapper">
                    <div>
                        <label for="name">Name
                        </label>
                        <input type="text" name="name" id="name" />
                        <label for="email">Email
                        </label>
                        <input type="email" name="email" id="email" />
                        <label for="message">Message
                        </label>
                        <textarea type="text" name="message" id="message"></textarea>
                        <button type="submit" name="send">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT ME SECTION END -->


    <section id="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-left">
                    <h1>Doni Darmawan</h1>
                    <h2>Contact Me</h2>
                    <p>doni.duaasattuu@gmail.com <span>Jl.Fatahilah Desa Kalijaya, Kecamatan Cikarang Barat, Kabupaten Bekasi</span></p>
                </div>
                <div class="footer-right">
                    <h2>Link</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="creator">
                <div class="social-media">
                    <!-- LinkedIn -->
                    <a target="_blank" href="https://www.linkedin.com/in/doni-darmawan-645654180/">
                        <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" viewBox="0 0 512 512" xml:space="preserve">
                            <g id="7935ec95c421cee6d86eb22ecd125aef">
                                <path style="
                        display: inline;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                      " d="M116.504,500.219V170.654H6.975v329.564H116.504
              L116.504,500.219z M61.751,125.674c38.183,0,61.968-25.328,61.968-56.953c-0.722-32.328-23.785-56.941-61.252-56.941
              C24.994,11.781,0.5,36.394,0.5,68.722c0,31.625,23.772,56.953,60.53,56.953H61.751L61.751,125.674z M177.124,500.219
              c0,0,1.437-298.643,0-329.564H286.67v47.794h-0.727c14.404-22.49,40.354-55.533,99.44-55.533
              c72.085,0,126.116,47.103,126.116,148.333v188.971H401.971V323.912c0-44.301-15.848-74.531-55.497-74.531
              c-30.254,0-48.284,20.38-56.202,40.08c-2.897,7.012-3.602,16.861-3.602,26.711v184.047H177.124L177.124,500.219z"></path>
                            </g>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a target="_blank" href="https://www.instagram.com/don_id/"><svg fill="currentColor" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100079709837857">
                        <svg fill="currentColor" width="22" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>facebook [#176]</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="currentColor">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a target="_blank" href="https://twitter.com/duaasattuu"><svg fill="currentColor" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
                <p class="footer-creator">Made with ❤️ by Doni Darmawan | &copy;2023</p>
            </div>
        </div>
    </section>
    <script>
        const nav = document.getElementsByTagName("nav")[0]
        document.addEventListener("scroll", (event) => {
            // console.info(document.documentElement.scrollTop)
            if (document.documentElement.scrollTop > 0) {
                nav.style.borderBottom = "1px solid var(--slate300)";
            } else {
                nav.style.borderBottom = "none";
            }
        })

        const hamburger = document.getElementsByClassName("hamburger")[0];
        const menu = document.getElementsByClassName("menu")[0];

        // HAMBURGER ICON
        const ajax = new XMLHttpRequest()
        const cross = ajax.open("GET", "../img.php?name=cross&format=png");
        ajax.send();

        hamburger.onclick = () => {
            menu.classList.toggle("none");
            if (hamburger.firstElementChild.getAttribute("src") == "../img.php?name=hamburger&format=png") {

                hamburger.firstElementChild.setAttribute("src", "../img.php?name=cross&format=png");

            } else {
                hamburger.firstElementChild.setAttribute("src", "../img.php?name=hamburger&format=png");
            }
        }

        // class active
        const menulist = document.getElementsByClassName("menu")[0].children
        for (let i = 0; i < menulist.length; i++) {

            menulist[i].onclick = () => {
                for (let i = 0; i < menulist.length; i++) {
                    // menulist[i].firstElementChild.classList.remove("active");
                    menulist[i].firstElementChild.style.color = "var(--dark)";
                    // menulist[i].classList.remove("active");
                }

                // menulist[i].firstElementChild.classList.add("active");
                menulist[i].firstElementChild.style.color = "var(--primary)";
            }
        }
    </script>
    @isset($success)
    <script>
        alert("Your'e message successfully sent")
    </script>
    @endisset
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Hann..</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="sweetalert.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <header>
        <div class="brand">
            <!-- <img src="image/warmasan-logo2.png" alt="brandlogo" width="150px"> -->
            <a href=""><img src="image/Nabihan-logo.png" alt="brandlogo"></a>
        </div>
        <div class="menu-content">
            <a href="#about-me"> ABOUT </a>
            <a href="#my-seps"> S-E-P-S </a>
            <a href="#my-contact"> CONTACT </a>
            <!-- <a href="#"> ADMIN</a> -->
        </div>
        </button>
    </header>

    <div class="background">

        <section class="hero">
            <div class="container0">
                <div class="pembukaan">
                    <h1>Hello Gaes! ini
                        <br />
                        Nabihan Uthman Raziq
                        <br />
                        Salken yak 👋
                    </h1>
                </div>
                <div class="foto-hero">
                    <img src="image/fotohero.png" alt="">
                </div>
            </div>
        </section>

        <section class="about" id="about-me">
            <div class="container1">
                <div class="about-box">
                    <div class="foto-about">
                        <img src="image/Foto2.jpg" alt="">
                    </div>
                    <div class="about-text">
                        <div class="about-title">
                            <h1>About Me</h1>
                        </div>
                        <div class="text-about">
                            <p>
                                I live in South Kalimantan province, Banjarbaru city. <br>I was born in Tangerang on
                                June 6, 2009.
                                <br>Now I am
                                studying software developer. <br>I am interested in studying this because this job
                                <br />is really needed
                                now and
                                in the future. <br>By studying this, I hope I can make my parents proud <br />and can
                                create websites and
                                applications <br />that are useful for society.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-school">
            <div class="title">
                <h1>ABOUT MY SCHOOL</h1>
            </div>
            <div class="container2">
                <div class="school-box">
                    <div class="tk">
                        <div class="school-img">
                            <a href="javascript:void(0)" onclick="showAlert()"> <img src="image/1-TK.jpg"> </a>
                        </div>
                        <div class="school-detail">
                            <h5>Kindergarten (TK)</h5>
                            <span>TK Angkasa 1 Landasan Ulin</span>
                        </div>
                    </div>
                </div>
                <div class="school-box">
                    <div class="sd">
                        <div class="school-img">
                            <a href="https://www.instagram.com/alazhar.banjarbaru/"><img src="image/2-SD.jpg"
                                    alt=""></a>
                        </div>
                        <div class="school-detail">
                            <h5>Elementary School (SD)</h5>
                            <span>SDI Al Azhar 37 Banjarbaru</span>
                        </div>
                    </div>
                </div>
                <div class="school-box">
                    <div class="smp">
                        <div class="school-img">
                            <a href="https://www.instagram.com/smhputrabalikpapan/"><img src="image/3-SMP.jpg"
                                    alt=""></a>
                        </div>
                        <div class="school-detail">
                            <h5>Junior High School (SMP)</h5>
                            <span>Ponpes Hidayatullah Ummulqura Balikpapan</span>
                        </div>
                    </div>
                </div>
                <div class="school-box">
                    <div class="smk">
                        <div class="school-img">
                            <a href="https://www.instagram.com/idnboardingschoolsentul/"><img src="image/4-SMK.jpg"
                                    alt=""></a>
                        </div>
                        <div class="school-detail">
                            <h5>Vocational High School (SMK)</h5>
                            <span>IDN Backpaker School Sentul</span>
                        </div>
                    </div>
                </div>
                <div class="school-box">
                    <div class="kuliah">
                        <div class="school-img">
                            <a href="javascript:void(0)" onclick="Alertshow()"> <img src="image/5-Kuliah.jpg "> </a>
                        </div>
                        <div class="school-detail">
                            <h5>University (Kuliah)</h5>
                            <span>Not yet</span>
                        </div>
                    </div>
                </div>

                <script>
                    function showAlert() {
                        Swal.fire("Website Sekolah Tidak Ditemukan 🙏");
                    }

                    function Alertshow() {
                        Swal.fire("Belum Kuliah Gaes 😅");
                    }
                </script>
            </div>
        </section>

        <section class="s-e-p" id="my-seps">
            <div class="sep-title">
                <h1>MY <span>S-E-P-S</span>
                    <br> (<span>S</span>kills, <span>E</span>xperience, <span>P</span>rojects,
                    <span>S</span>ertification)
                </h1>
            </div>
        </section>

        <section class="my-skills">
            <div class="title">
                <h1>MY SKILLS</h1>
            </div>
            <div class="container3">
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-HTML.png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>HTML</p>
                    </div>
                </div>
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-CSS.png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>CSS</p>
                    </div>
                </div>
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-JS..png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>Java Script</p>
                    </div>
                </div>
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-BCAMERA.png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>Photo Grapher</p>
                    </div>
                </div>
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-MP4.png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>Video Grapher</p>
                    </div>
                </div>
                <div class="skill-box">
                    <div class="skill-img">
                        <img src="image/3D-LAPTOP.png" alt="">
                    </div>
                    <div class="skill-name">
                        <p>Video Editor</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience">
            <div class="title">
                <h1>My Experience</h1>
            </div>
            <div class="container4">
                <div class="expe-box">
                    <div class="expe-row1">
                        <img src="image/multim.JPG" alt="">
                        <p>
                            when I was still in junior high school, I joined the multimedia extracurricular. I learned a
                            lot
                            of
                            expensive knowledge for free, and Alhamdulillah when i was a media SMH team, I was favored
                            in
                            Videographer
                            and Video editor.
                        </p>
                        <div class="expe-title">
                            <h2>Multi Media SMH</h2>
                            <span>For 2 Years</span>
                        </div>
                    </div>
                    <div class="expe-row2">
                        <div class="expe-title">
                            <h2>Media SILATNAS 2023</h2>
                            <span>23 - 26 November 2023</span>
                        </div>
                        <p>
                            SILATNAS Hidayatullah 2023 is an event that carries the theme <b>"50 Years Together with
                                the
                                People Building
                                a Civilized Republic of Indonesia"</b>, this event was attended by 20,000
                            Hidayatullah
                            da'i and da'iyah
                            from all over Indonesia.
                            <br> During the event I was involved in the media committee, my job was to document the
                            activities during
                            the event, especially during the opening ceremony.
                        </p>
                        <img src="image/logo-silatnas.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="project">
            <div class="title">
                <h1>My Projects</h1>
            </div>
            <div class="container5">
                <div class="project-list">
                    <a href="https://nabihann06.github.io/warmasan-company-profile/" class="project-box1">
                        <div class="project-detail">
                            <h2>WARMASAN WEBSITE</h2>
                            <p>Projectku dalam belajar untuk membuat website company profile. Bertemakan sebuah restaurant bernamakan WARMASAN (Warung Makan Santai).</p>
                        </div>
                    </a>
                    <a href="" class="project-box">
                        <div class="project-detail">
                            <h2>Blank</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <a href="" class="project-box">
                        <div class="project-detail">
                            <h2>Blank</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </a>
                    <a href="" class="project-box">
                        <div class="project-detail">
                            <h2>Blank</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="sertificate">
            <div class="title">
                <h1>My Sertification</h1>
            </div>
            <div class="container6">
                <div class="serti-box">
                    <div class="serti-row1">
                        <img src="image/serti-5.png" alt="">
                        <p>
                            <b>ID Camp Dicoding Sertification</b><br />Pembelajaran Dasar Pemograman Web
                        </p>
                    </div>
                    <div class="serti-row2">
                        <p>
                            <b>ID Camp Dicoding Sertification</b><br />Pembelajaran Dasar AI
                        </p>
                        <img src="image/serti-6.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="my-contact" id="my-contact">
            <div class="title">
                <h1>CONTACT ME!</h1>
            </div>
            <div class="container7">
                <div class="isi-form">
                    <form action="submit_contact.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                        <textarea name="message" id="message" placeholder="How I can help you?"></textarea>
                        <div class="contact-buttons">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
                <div class="komen-info">
                    <h2>Let's talk for
                        <br> something special!
                    </h2>
                    <p>
                        tell me what you need from me,
                        <br> hopefully i can help you.
                        <br> let's chat 😁
                    </p>
                    <div class="button-box">
                        <a href="https://github.com/NabihanN06" target="_blank" class="hero-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_1513_742)">
                                    <path
                                        d="M0 1.146C0 0.513 0.526 0 1.175 0H14.825C15.474 0 16 0.513 16 1.146V14.854C16 15.487 15.474 16 14.825 16H1.175C0.526 16 0 15.487 0 14.854V1.146ZM4.943 13.394V6.169H2.542V13.394H4.943ZM3.743 5.182C4.58 5.182 5.101 4.628 5.101 3.934C5.086 3.225 4.581 2.686 3.759 2.686C2.937 2.686 2.4 3.226 2.4 3.934C2.4 4.628 2.921 5.182 3.727 5.182H3.743ZM8.651 13.394V9.359C8.651 9.143 8.667 8.927 8.731 8.773C8.904 8.342 9.299 7.895 9.963 7.895C10.832 7.895 11.179 8.557 11.179 9.529V13.394H13.58V9.25C13.58 7.03 12.396 5.998 10.816 5.998C9.542 5.998 8.971 6.698 8.651 7.191V7.216H8.635L8.651 7.191V6.169H6.251C6.281 6.847 6.251 13.394 6.251 13.394H8.651Z"
                                        fill="currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1513_742">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="https://github.com/NabihanN06" target="_blank" class="hero-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_1513_744)">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C12.1384 15.0543 13.5187 14.0337 14.4964 12.672C15.4741 11.3104 16 9.67631 16 8C16 3.58 12.42 0 8 0Z"
                                        fill="currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1513_744">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="https://github.com/NabihanN06" target="_blank" class="hero-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_1513_746)">
                                    <path
                                        d="M13.601 2.32606C12.8676 1.58555 11.9941 0.998501 11.0314 0.599149C10.0688 0.199797 9.03621 -0.00386082 7.994 5.54251e-05C3.627 5.54251e-05 0.068 3.55806 0.064 7.92606C0.064 9.32506 0.43 10.6861 1.121 11.8911L0 16.0001L4.204 14.8981C5.36649 15.5323 6.66975 15.8641 7.994 15.8631H7.998C12.366 15.8631 15.924 12.3051 15.928 7.93306C15.9289 6.89112 15.7237 5.85929 15.3241 4.897C14.9246 3.9347 14.3396 3.06095 13.601 2.32606ZM7.994 14.5211C6.81318 14.5201 5.65422 14.2024 4.638 13.6011L4.398 13.4571L1.904 14.1111L2.57 11.6781L2.414 11.4271C1.75381 10.3774 1.40465 9.16208 1.407 7.92206C1.407 4.29606 4.364 1.33806 7.998 1.33806C8.86374 1.3365 9.72123 1.50633 10.521 1.83775C11.3208 2.16916 12.0471 2.65562 12.658 3.26906C13.2709 3.8802 13.7568 4.6066 14.0877 5.40638C14.4186 6.20617 14.5879 7.06352 14.586 7.92906C14.582 11.5681 11.625 14.5211 7.994 14.5211ZM11.609 9.58706C11.412 9.48806 10.439 9.00906 10.256 8.94106C10.074 8.87606 9.941 8.84206 9.811 9.04006C9.678 9.23705 9.298 9.68606 9.184 9.81505C9.07 9.94806 8.952 9.96305 8.754 9.86506C8.557 9.76505 7.918 9.55706 7.162 8.88006C6.572 8.35506 6.177 7.70506 6.059 7.50806C5.945 7.31006 6.048 7.20406 6.147 7.10506C6.234 7.01706 6.344 6.87305 6.443 6.75906C6.543 6.64506 6.576 6.56106 6.641 6.42906C6.706 6.29506 6.675 6.18106 6.626 6.08206C6.576 5.98306 6.181 5.00606 6.014 4.61206C5.854 4.22306 5.691 4.27706 5.569 4.27206C5.455 4.26506 5.322 4.26506 5.189 4.26506C5.08857 4.26761 4.98976 4.29087 4.89873 4.33337C4.80771 4.37587 4.72643 4.4367 4.66 4.51206C4.478 4.71006 3.969 5.18906 3.969 6.16606C3.969 7.14305 4.679 8.08206 4.779 8.21506C4.877 8.34806 6.173 10.3471 8.162 11.2071C8.632 11.4121 9.002 11.5331 9.291 11.6251C9.766 11.7771 10.195 11.7541 10.537 11.7051C10.917 11.6471 11.708 11.2251 11.875 10.7621C12.039 10.2981 12.039 9.90206 11.989 9.81906C11.94 9.73506 11.807 9.68606 11.609 9.58706Z"
                                        fill="currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1513_746">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="https://github.com/NabihanN06" target="_blank" class="hero-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_1513_754)">
                                    <path
                                        d="M8 0C5.829 0 5.556 0.01 4.703 0.048C3.85 0.088 3.269 0.222 2.76 0.42C2.22584 0.620326 1.74214 0.935398 1.343 1.343C0.935398 1.74214 0.620326 2.22584 0.42 2.76C0.222 3.268 0.087 3.85 0.048 4.7C0.01 5.555 0 5.827 0 8.001C0 10.173 0.01 10.445 0.048 11.298C0.088 12.15 0.222 12.731 0.42 13.24C0.625 13.766 0.898 14.212 1.343 14.657C1.787 15.102 2.233 15.376 2.759 15.58C3.269 15.778 3.849 15.913 4.701 15.952C5.555 15.99 5.827 16 8 16C10.173 16 10.444 15.99 11.298 15.952C12.149 15.912 12.732 15.778 13.241 15.58C13.7748 15.3795 14.2581 15.0645 14.657 14.657C15.102 14.212 15.375 13.766 15.58 13.24C15.777 12.731 15.912 12.15 15.952 11.298C15.99 10.445 16 10.173 16 8C16 5.827 15.99 5.555 15.952 4.701C15.912 3.85 15.777 3.268 15.58 2.76C15.3797 2.22584 15.0646 1.74214 14.657 1.343C14.2579 0.935398 13.7742 0.620326 13.24 0.42C12.73 0.222 12.148 0.087 11.297 0.048C10.443 0.01 10.172 0 7.998 0H8ZM7.283 1.442H8.001C10.137 1.442 10.39 1.449 11.233 1.488C12.013 1.523 12.437 1.654 12.719 1.763C13.092 1.908 13.359 2.082 13.639 2.362C13.919 2.642 14.092 2.908 14.237 3.282C14.347 3.563 14.477 3.987 14.512 4.767C14.551 5.61 14.559 5.863 14.559 7.998C14.559 10.133 14.551 10.387 14.512 11.23C14.477 12.01 14.346 12.433 14.237 12.715C14.1078 13.0619 13.9032 13.3758 13.638 13.634C13.358 13.914 13.092 14.087 12.718 14.232C12.438 14.342 12.014 14.472 11.233 14.508C10.39 14.546 10.137 14.555 8.001 14.555C5.865 14.555 5.611 14.546 4.768 14.508C3.988 14.472 3.565 14.342 3.283 14.232C2.93583 14.1033 2.6216 13.899 2.363 13.634C2.09727 13.3756 1.89233 13.0614 1.763 12.714C1.654 12.433 1.523 12.009 1.488 11.229C1.45 10.386 1.442 10.133 1.442 7.996C1.442 5.859 1.45 5.608 1.488 4.765C1.524 3.985 1.654 3.561 1.764 3.279C1.909 2.906 2.083 2.639 2.363 2.359C2.643 2.079 2.909 1.906 3.283 1.761C3.565 1.651 3.988 1.521 4.768 1.485C5.506 1.451 5.792 1.441 7.283 1.44V1.442ZM12.271 2.77C12.1449 2.77 12.0201 2.79483 11.9036 2.84308C11.7872 2.89132 11.6813 2.96203 11.5922 3.05118C11.503 3.14032 11.4323 3.24615 11.3841 3.36262C11.3358 3.4791 11.311 3.60393 11.311 3.73C11.311 3.85607 11.3358 3.9809 11.3841 4.09738C11.4323 4.21385 11.503 4.31968 11.5922 4.40882C11.6813 4.49797 11.7872 4.56868 11.9036 4.61692C12.0201 4.66517 12.1449 4.69 12.271 4.69C12.5256 4.69 12.7698 4.58886 12.9498 4.40882C13.1299 4.22879 13.231 3.98461 13.231 3.73C13.231 3.47539 13.1299 3.23121 12.9498 3.05118C12.7698 2.87114 12.5256 2.77 12.271 2.77ZM8.001 3.892C7.45607 3.8835 6.91489 3.98349 6.40898 4.18614C5.90306 4.3888 5.44251 4.69007 5.05415 5.07242C4.66579 5.45478 4.35736 5.91057 4.14684 6.41326C3.93632 6.91595 3.8279 7.4555 3.8279 8.0005C3.8279 8.5455 3.93632 9.08505 4.14684 9.58774C4.35736 10.0904 4.66579 10.5462 5.05415 10.9286C5.44251 11.3109 5.90306 11.6122 6.40898 11.8149C6.91489 12.0175 7.45607 12.1175 8.001 12.109C9.07954 12.0922 10.1082 11.6519 10.865 10.8833C11.6217 10.1146 12.0459 9.07917 12.0459 8.0005C12.0459 6.92183 11.6217 5.88641 10.865 5.11775C10.1082 4.34909 9.07954 3.90883 8.001 3.892ZM8.001 5.333C8.35124 5.333 8.69804 5.40198 9.02162 5.53601C9.34519 5.67004 9.6392 5.86649 9.88685 6.11415C10.1345 6.3618 10.331 6.65581 10.465 6.97938C10.599 7.30296 10.668 7.64976 10.668 8C10.668 8.35023 10.599 8.69704 10.465 9.02062C10.331 9.34419 10.1345 9.6382 9.88685 9.88585C9.6392 10.1335 9.34519 10.33 9.02162 10.464C8.69804 10.598 8.35124 10.667 8.001 10.667C7.29367 10.667 6.61531 10.386 6.11515 9.88585C5.61499 9.38569 5.334 8.70733 5.334 8C5.334 7.29267 5.61499 6.61431 6.11515 6.11415C6.61531 5.61399 7.29367 5.333 8.001 5.333Z"
                                        fill="currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1513_754">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <!-- <a href="#">Admin</a> -->
                    </div>
                    <div class="contact-buttons">
                            <a href="admin.php">Admin Page</a>
                        </div>
                </div>
            </div>
        </section>

        <section class="foto-foto">
            <div class="hiasan">
                <div class="container8">
                    <img src="image/Foto1.jpg" alt="">
                    <img src="image/Foto8.jpg" alt="">
                    <img src="image/Foto3.jpg" alt="">
                    <img src="image/Foto14.jpg" alt="">
                    <img src="image/Foto11.jpg" alt="">
                    <img src="image/Foto5.jpg" alt="">
                    <img src="image/Foto16.jpg" alt="">
                    <img src="image/Foto13.jpg" alt="">
                    <img src="image/Foto6.jpg" alt="">
                    <img src="image/Foto9.jpg" alt="">
                    <img src="image/Foto4.jpg" alt="">
                    <img src="image/Foto15.jpg" alt="">
                    <img src="image/Foto10.jpg" alt="">
                    <img src="image/Foto12.jpg" alt="">
                    <img src="image/Foto7.jpg" alt="">
                </div>
            </div>
        </section>

        <footer>
            <div class="brand2">
                <img src="image/Nabihan-logo.png" alt="footerlogo">
            </div>
            <div class="copy">
                <p>&copy;2024, All Rights Reserved</p>
                <span>Nabihan Uthman Raziq</span>
            </div>
        </footer>

    </div>
</body>

</html>
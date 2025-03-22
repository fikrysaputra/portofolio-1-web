<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }
        
        header {
            background-color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .logo {
            float: left;
            font-size: 24px;
            font-weight: bold;
        }
        
        nav {
            float: right;
            margin-top: 5px;
        }
        
        nav ul {
            list-style: none;
        }
        
        nav ul li {
            display: inline;
            margin-left: 20px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: #0088cc;
        }
        
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
            background-color: #f9f9f9;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #333;
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
            color: #666;
        }
        
        .btn {
            display: inline-block;
            background: #0088cc;
            color: #fff;
            padding: 10px 30px;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #006699;
        }
        
        .section-title {
            text-align: center;
            margin: 60px 0 40px;
            font-size: 32px;
            color: #333;
        }
        
        .about {
            padding: 60px 0;
            background: #fff;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .about-text {
            flex: 1;
            padding: 0 20px;
        }
        
        .about-img {
            flex: 1;
            padding: 0 20px;
            text-align: center;
        }
        
        .about-img img {
            max-width: 100%;
            border-radius: 10px;
        }
        
        .projects {
            padding: 60px 0;
            background: #f9f9f9;
        }
        
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .project-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
        }
        
        .project-img {
            height: 200px;
            width: 100%;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #666;
        }
        
        .project-info {
            padding: 20px;
        }
        
        .project-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .skills {
            padding: 60px 0;
            background: #fff;
        }
        
        .skill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .skill-card {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: background 0.3s;
        }
        
        .skill-card:hover {
            background: #e9e9e9;
        }
        
        .skill-icon {
            font-size: 40px;
            margin-bottom: 15px;
            color: #0088cc;
        }
        
        .contact {
            padding: 60px 0;
            background: #f9f9f9;
        }
        
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        textarea.form-control {
            height: 150px;
            resize: vertical;
        }
        
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
        }
        
        .social-links {
            margin: 20px 0;
        }
        
        .social-links a {
            display: inline-block;
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #0088cc;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            .logo {
                float: none;
                text-align: center;
                margin-bottom: 10px;
            }
            
            nav {
                float: none;
                text-align: center;
            }
            
            nav ul li {
                margin: 0 10px;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-text, .about-img {
                flex: 100%;
                padding: 20px;
            }
        }
        .contact {
            text-align: center;
        }

        .contact-card {
            background-color: #eeeeee; /* Warna background card */
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0px 4px 8px rgba(255, 255, 255, 0.2);
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-list li {
            margin: 15px 0;
            font-size: 22px;
        }

        .contact-list a {
            text-decoration: none;
            color:rgb(7, 26, 46);
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center; /* Pusatkan teks dan ikon */
            gap: 15px;
        }

        .contact-list a:hover {
            text-decoration: underline;
        }

        .contact-list i {
            font-size: 32px; /* Perbesar ikon */
        }


    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">Portfolio</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">kontak Saya</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Selamat Datang di Portofolio<br>
                <span class="highlight" style="font-weight: normal;">
                    Muhamad Fikry Saputra
                </span>
            </h1>
            <p>Developer Web dan Data Scientist</p>
            <a href="#contact" class="btn">kontak Saya</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Tentang Saya</h2>
            <div class="about-content">
                <div class="about-img">
                    <img src="{{ asset('images/DSCF9003_copy.jpg') }}" alt="Foto Muhamad Fikry Saputra" width="300">
                </div>
                <div class="about-text">
                    <h3>Tentang Saya</h3>
                    Saya sedang menempuh studi Magister Informatika di Telkom University dengan minat dalam data science. Saya
                    pernah magang sebagai Web Master di RC AdCNet, di mana saya mengoptimalkan arsitektur web untuk
                    meningkatkan user experience. Saya memiliki basic bahsa pemrograman Python, Dart, dan JavaScript, serta
                    memiliki pengalaman menggunakan framework deep learning seperti TensorFlow untuk pengolahan data dan model
                    prediktif. Saat ini, saya ingin terus berkembang dalam dunia teknologi dan berkontribusi dalam proyek-proyek
                    inovatif di bidang pengembangan web, mobile, dan data science, serta bergabung dalam dunia industri dan karir
                    profesional yang aktif berinovasi.
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{ asset('images/Screenshot_8.png') }}" alt="LockDown99" width="500">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">lockDown00</h3>
                        <p>Dengan basis Blogger, LockDown99 adalah website yang menyediakan film, musik dan artikel menarik dengan tema teknologi. Namun ada juga artikel menarik mengenai tema selain teknologi.</p>
                        <a href="http://lockdown99.blogspot.com/" class="btn">Kunjungi Website</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{ asset('images/kopi.jpg') }}" alt="KopiAnalisis" width="400">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Coffe Shop Sales</h3>
                        <p>Proyek ini merupakan proyek data analisis untuk eksplorasi penjualan kopi dari waktu ke waktu. Proyek ini dijalankan dalam Jupyter lab dengan penggunaan kebutuhan untuk analisis.</p>
                        <a href="https://github.com/fikrysaputra/CoffeeShopSales_Data_Analitycs?tab=readme-ov-file" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://img.jba.co.id/news/20240919140521coverxHB26en9.webp" alt="Mobil" width="400">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Car Selling Price Prediction</h3>
                        <p>Proyek ini memuat sistem prediksi harga mobil dengan pendekatan model BiLSTM dan tambahan attention layer untuk menandai data penting agar prediksi lebih akurat</p>
                        <a href="https://github.com/fikrysaputra/Car_selling_price_prediction_BiLSTM-attention" class="btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skill-grid">
                <div class="skill-card">
                    <div class="skill-icon">HTML</div>
                    <h3>HTML5</h3>
                    <p>Pembuatan dengan HTML</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">CSS</div>
                    <h3>CSS3</h3>
                    <p>Desain responsif</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">JS</div>
                    <h3>JavaScript</h3>
                    <p>JavaScript frameworks</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">Python</div>
                    <h3>Python</h3>
                    <p>Python untuk machine learning</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">Visualisasi Data</div>
                    <h3>Visual Data</h3>
                    <p>Penggunaan python untuk visualisasi data</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container text-center">
            <h2 class="section-title">Kontak Saya</h2>
            <div class="card contact-card">
                <div class="card-body">
                    <ul class="contact-list">
                        <li>
                            <a href="https://wa.me/6282117493675" target="_blank">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ffikrys" target="_blank">
                                <i class="bi bi-instagram"></i> @ffikrys
                            </a>
                        </li>
                        <li>
                            <a href="mailto:email@example.com">
                                <i class="bi bi-envelope"></i> fikrysaputran28@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="https://github.com/fikrysaputra">GitHub</a>
                <a href="https://www.linkedin.com/in/muhamad-fikry-saputra-004953200/">LinkedIn</a>
                <a href="https://www.instagram.com/ffikrys/">Instagram</a>
            </div>
            <p>&copy; 2025 Muhamad Fikry Saputra</p>
        </div>
    </footer>
</html>



  @include('pages.layouts.link')



<body>

@include('pages.layouts.header')

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a class="img-bg d-flex align-items-end" style="background-image: url('pages/images/image1-banner.jpg');">
                    <div class="img-bg-inner">
                      <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a class="img-bg d-flex align-items-end" style="background-image: url('pages/images/image2-banner.jpg');">
                    <div class="img-bg-inner">
                      <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a class="img-bg d-flex align-items-end" style="background-image: url('pages/images/image3-banner.jpg');">
                    <div class="img-bg-inner">
                      <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('pages/images/image4-banner.jpg');"">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="mb-5  py-5">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center align-items-lg-center">
            <div class="col-md-8 mb-4 mb-lg-0">
              <h4 class="text-center">
                Le service Accueil Plus sera offert à l’Aéroport international Montréal-Trudeau, en zone règlementée, dans les bureaux d’Immigration Québec et via des séances d’information virtuelles (kiosque virtuel – webinaires), pour la rentrée d’automne 2023. Pour plus d’information sur le contexte entourant la COVID-19, veuillez vous référer à la FAQ.
              </h4>
            </div>
          </div>
          <div class="row justify-content-center align-items-lg-center">
                <div class="col-6 mt-4">
                  <img src="pages/img/img.png" alt="" class="img-fluid mb-4">
                </div>
          </div>
        </div>
    </section>

    <div class="container" >
        <div class="row justify-content-center align-items-lg-center">
          <div class="col-lg mb-4 mb-lg-0">
            {{-- <h2 class="display-4 mb-4 text-center">Latest News</h2> --}}
            <h4 class="text-center">
              Accueil Plus s’adresse aux étudiantes et étudiants internationaux arrivant à l’aéroport international Montréal-Trudeau en vue d’étudier dans un établissement d’enseignement universitaire, un établissement collégial québécois ou au sein d’une école de formation professionnelle. Les services proposés sont gratuits et vous permettent d’arriver en toute tranquillité !
            </h4>
            <h4 class="text-center"><a href="#" class="more">Inscription</a></h4>
          </div>
        </div>
    </div>


    <section class="mb-5 bg-light py-5">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-between align-items-lg-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="pages/img/Icone1.png" alt="" class="img-fluid mb-4" style="height: 150ps; width: 150px;">
                  <h4>Ce service permet de réduire le temps d’attente des étudiantes et étudiants internationaux au moment de récupérer leurs permis d’études.</h4>
              <h5><a href="#" class="more text-info">En Savoir Plus</a></h5>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="pages/img/Icone2.png" alt="" class="img-fluid mb-4" style="height: 99ps; width: 99px;">
                  <h4>Ce service permet de réduire le temps d’attente des étudiantes et étudiants internationaux au moment de récupérer leurs permis d’études.</h4>
              <p><a href="#" class="more text-info"></a></p>
            </div>
          </div>
        </div>
    </section>

    
    <section class="  py-5" style=" background-color: #8ed1fc;">
        <div class="container">
          <div class="row justify-content-between align-items-lg-center">
            <div class="col-lg-10 mb-4 mb-lg-0">
              <h2 class="display-3 mb-4" style="color: #fff;">Inscription et conditions d’admission</h2>
              <h4 style="color: #fff;">
                Le service Accueil Plus est coordonné par le Bureau de coopération interuniversitaire avec l’appui de l’ensemble des établissements universitaires québécois, du Regroupement des cégeps de Montréal, de la Fédération des cégeps, de Québec métiers d’avenir et du ministère de l’Enseignement Supérieur du Québec. L’Agence des services frontaliers du Canada, le ministère de l’Immigration, de la Francisation et de l’Intégration du Québec et Aéroports de Montréal collaborent également au projet.
              </h4>
            </div>
            {{-- <div class="col-lg-2">
                  <img src="pages/img/Icone2.png" alt="" class="img-fluid mb-4" style="height: 200px; width:auto;">
            </div> --}}
          </div>
        </div>
    </section>

    <section class="  py-5" style=" background-color: #0693e3;">
        <div class="container">
          <div class="row justify-content-between align-items-lg-center">
            <div class="col-lg-9 mb-4 mb-lg-0">
              <h2 class="display-9 mb-4" style="color: #fff;">ACCUEIL PLUS, RÉCOMPENSÉ À L’ÉCHELLE CANADIENNE COMME PROJET EXCEPTIONNEL! </h2>
              <p class="mb-4" style="color: #fff;">
                Le service Accueil Plus s’est vu décerner en 2013, le Prix Panorama pour un programme extraordinaire d’éducation internationale.
              </p>

              <p style="text-align: left; color: #fff;">Offert par le <span style="text-decoration: underline; color:aquamarine;"><a href="http://www.cbie.ca/fr/" target="_blank" rel="noopener noreferrer" style="color:aquamarine;">Bureau canadien de l’éducation internationale (BCEI)</a></span>, le Prix Panorama récompense les organismes qui contribuent à l’innovation et l’excellence dans la conception, la planification, la mise en œuvre et la gestion de réalisations de grande qualité en éducation internationale.</p>
              <p><a href="#" style="color: #fff;" class="more">En savoir plus >>></a></p>

            </div>
            <div class="col-lg-3">
                  <img src="pages/img/Remise_prix_Panoraman_2013_Accueil_Plus.jpg" alt="" class="img-fluid mb-4" style="height: 200px; width:auto;">
            </div>
          </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <span class="et_pb_image_wrap ">
              <img src="pages/img/img.png" alt="" class="img-fluid mb-4">
            </span>
          </div>
        </div>
    </section>

  </main>
  <!-- End #main -->

   @include('pages.layouts.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('pages.layouts.scrypt')

</body>

</html>
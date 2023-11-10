<?php
if (function_exists('elementor_theme_do_location')) {
    elementor_theme_do_location('home');
} else {
    get_header();
    
?>

    <!-- Currency Section -->
    <div class="stockSection py-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Bitcoin.png" alt="bitcoin" />
            <h2 class="currency_name">Bitcoin 28327</h2>
            <p class="difference">-1 <span>(-0.00%)</span></p>
          </div>
          <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/flags.png" alt="bitcoin" />
            <h2 class="currency_name">EUR/USD 1.05342</h2>
            <p class="difference_positive">+0.07<span>(+0.01%)</span></p>
          </div>
          <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Etherium.png" alt="bitcoin" />
            <h2 class="currency_name">Ethereum 28322</h2>
            <p class="difference">-1 <span>(-0.00%)</span></p>
          </div>
          <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/usd.png" alt="bitcoin" />
            <h2 class="currency_name">US 100 14887.5</h2>
            <p class="difference">-57.8 <span>(-0.39%)</span></p>
          </div>
          <div class="col-lg col-md-6 col-sm-6 text-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Etherium.png" alt="bitcoin" />
            <h2 class="currency_name">Ethereum 28322</h2>
            <p class="difference">-8 <span>(-0.03%)</span></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Section -->

    <div class="videSection">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="title_video mt-5">
              This person is an avatar created using Artificial Intelligence
            </p>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/down_gray.png" /></a>
          </div>
          <div class="col-12">
            <!-- 16:9 -->
            <div class="embed-responsive embed-responsive-16by9 mt-2 rounded">
              <iframe
                class="embed-responsive-item w-100 video"
                src="//www.youtube.com/embed/zB4I68XVPzQ"
              ></iframe>
            </div>
          </div>
          <div class="col-12 text-center">
            <button class="btn btn_theme px-5 mt-2">
              Message Us To Get Started
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--- Found Section -->

    <div class="founSection">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="mt-5">How Prop Fund Pros Works</h1>
          </div>
          <div class="col-lg-3 text-center mt-5">
            <div class="contai_div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ion_cart.png" alt="" />
              <h2 class="counter ms-2">01</h2>
              <p class="desc_counter">
                1- Purchase your challenge with the Prop Firm of your
                choice.(FTMO, MyForexFunds or others).
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
            <div class="contain_div mt-5">
              <img src="<?php echo get_template_directory_uri(); ?>/images/tabler_award-filled.png" alt="" />
              <h2 class="counter ms-2">02</h2>
              <p class="desc_counter">
                1- Purchase your challenge with the Prop Firm of your
                choice.(FTMO, MyForexFunds or others).
              </p>
            </div>
          </div>
          <div class="col-lg-6 text-center mt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_left.png" class="mt-4 d-lg-inline d-none" alt="arrow" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" class="mt-5" alt="mobile" />
            <img src="<?php echo get_template_directory_uri(); ?>/images//arrow_right.png" class="mt-4 d-lg-inline d-none" alt="" />
          </div>
          <div class="col-lg-3 text-center mt-5">
            <div class="contai_div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ion_card.png" alt="" />
              <h2 class="counter ms-2">03</h2>
              <p class="desc_counter">
                1- Purchase your challenge with the Prop Firm of your
                choice.(FTMO, MyForexFunds or others).
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png" class="my-4" alt="" />
            <div class="contain_div mt-5">
              <img src="<?php echo get_template_directory_uri(); ?>/images/la_money-bill-alt.png" alt="" />
              <h2 class="counter ms-2">04</h2>
              <p class="desc_counter">
                1- Purchase your challenge with the Prop Firm of your
                choice.(FTMO, MyForexFunds or others).
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Core Values -->

    <div class="coreValue pt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Line.png" alt="Line" />
          </div>
          <div class="col-lg-3 text-center mt-5">
            <div class="contai_div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/team.png" alt="" />
              <h2 class="values_title ms-2">Traders Team</h2>
              <p class="desc_counter">
                A team of highly experienced and skilled traders. All with more
                than 10 years in the financial market.
              </p>
            </div>
          </div>
          <div class="offset-lg-cutom col-lg-3 text-center mt-5">
            <div class="contai_div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/risk.png" alt="" />
              <h2 class="values_title ms-2">Traders Team</h2>
              <p class="desc_counter">
                A team of highly experienced and skilled traders. All with more
                than 10 years in the financial market.
              </p>
            </div>
          </div>
          <div class="offset-lg-cutom col-lg-3 text-center mt-5">
            <div class="contai_div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/money.png" alt="" />
              <h2 class="values_title ms-2">Traders Team</h2>
              <p class="desc_counter">
                A team of highly experienced and skilled traders. All with more
                than 10 years in the financial market.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Why Work With Prop -->

    <div class="why_us_single_section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="why_choose_title mt-5">Why Work with Prop Fund Pros?</h2>
            <a href="javascript:void(0);">
              <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
            </a>
          </div>
          <div class="col-12">
            <p class="why_choose_description mt-3">
              If you want to achieve the best returns possible in a prop firm
              challenge, you need two things: Excellent trading skills and
              substantial funding. At Prop Fund Pros, we can offer you both.
            </p>
            <p class="why_choose_description mt-4">
              Even if your trading skills are good enough to blow the
              competition out of the water, limited access to capital will hold
              you back. The fees involved in joining a challenge and executing
              trades eat into profits, and a lower initial investment means
              lower earning potential. We solve this problem and help you bring
              in fantastic profits without taking excessive risks.
            </p>
            <p class="why_choose_description mt-4">
              Our team of manual traders have a near-perfect success rate to
              boost your chances of winning your challenge. Or, if you want to
              take your trading to the next level, we also offer an Expert
              Advisor (EA) option to automate your trades with sophisticated
              algorithms.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="why_us_single_section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="why_choose_title mt-5">
              How Verification Works in Prop Firm Challenges
            </h2>
            <a href="javascript:void(0);">
              <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
            </a>
          </div>
          <div class="col-12">
            <p class="why_choose_description mt-3">
              Before you can receive a funded account from a prop firm, you need
              to prove you’re skilled in navigating financial markets. This is
              known as the verification process, and there are two different
              phases. The first phase lasts around 30 days, while the second
              phase lasts 60 days.
            </p>
            <p class="why_choose_description mt-4">
              During this evaluation period, your aim is to stick to the rules
              regarding daily loss and maximum loss and reach while meeting the
              total profit target. If you’re successful, you’ll receive funding
              and be able to start earning from your trades (though you’ll split
              your profits with the prop firm).
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Our Offers -->
    <div class="why_us_single_section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="why_choose_title mt-5">Our Offerings</h2>

            <p class="why_choose_description mt-3">
              We offer two different strategies to help you beat your next prop
              firm challenge.
            </p>
            <a href="javascript:void(0);">
              <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-3" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="why_us_single_section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="why_choose_heading mt-2">Headlines</h2>
          </div>
          <div class="col-12">
            <p class="why_choose_description mt-3">
              High Frequency Trading or simply HFT is a strategy of
              automatically executing trades that last milliseconds, in which
              traders make profits from small price disparities.
            </p>
            <p class="why_choose_description mt-4">
              HFT has important characteristics such as high speed, short time
              frame, and large numbers of trades.The trades must be done on
              high-speed computers, using certain algorithms, popularly known as
              Expert Advisors.Not just anyone (trader) has the knowledge to work
              with this type of strategy. It demands experience about latency,
              spread, risk management.
            </p>
            <p class="why_choose_description mt-3">
              The lack of experience makes you lose your account very quickly.In
              our company we have a highly experienced team with more than 10
              years on the Forex market.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="success_rate">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="succes_rate d-inline">Average success rate:</p>
            <span class="succes_percent ms-2">100%</span>
          </div>
          <div class="col-12 text-center mt-3">
            <p class="succes_rate d-inline">Average time for completion:</p>
            <span class="succes_percent ms-2"> 1-5 days (per phase)</span>
          </div>
          <div class="col-12 text-center mt-4">
            <button class="btn btn_theme">Get Started Today</button>
          </div>
        </div>
      </div>
    </div>
    <div class="our_partners py-3 mt-5 mb-3 justify-content-space-between">
      <div class="container">
        <div class="row">
          <!-- <div class="col-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (1).png" alt="" />
            </div>
            <div class="col-2"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (2).png" alt="" />
            <div class="col-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (3).png" alt="" />
            </div> -->
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (2).png" class="mt-4" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (1).png" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (5).png" class="mt-4" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (4).png" class="mt-4 ms-4" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner1 (3).png" class="mt-4 ms-4" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="why_us_single_section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" alt="" />
          </div>
          <div class="col-12 text-center">
            <h2 class="why_choose_heading mt-2">Headlines</h2>
          </div>
          <div class="col-12 text-center">
            <p class="why_choose_description mt-3">
              We can also carry out manual trades for you. This strategy is
              compatible with all prop firm challenges and requires less
              experience than a high-frequency trading approach. Thanks to our
              careful risk management protocols, experienced team, and expert
              market analysis, most of our manual trading clients achieve
              fantastic results.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="success_rate">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="succes_rate d-inline">Average success rate:</p>
            <span class="succes_percent ms-2">75%</span>
          </div>
          <div class="col-12 text-center mt-3">
            <p class="succes_rate d-inline">Average time for completion:</p>
            <span class="succes_percent ms-2"> 21 Days</span>
          </div>
          <div class="col-12 text-center mt-4">
            <button class="btn btn_theme">Get Started Today</button>
          </div>
        </div>
      </div>
    </div>
    <div class="our_partners py-4 mt-5 mb-0 justify-content-space-between">
      <div class="container">
        <div class="row">
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner2.png" class="mt-2" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner3.png" alt="" class="mt-2" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partnernew.png" class="" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/partnernew2.png" class="" alt="" />
          </div>
          <div class="col-lg col-sm-12 col-md-12 text-center justify-content-center my-lg-0 my-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/parternew3.png" class="" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- Certificates Section -->

    <div class="certificatesSection">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h1 class="certificate_title mt-5">
              Over 2,000 Approved Certificates
            </h1>
            <p class="certificate_desc mt-4">
              Click on the buttons below and see the results
            </p>
            <img src="images/down_white.png" alt="" />
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">Challenge 200K</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">Challenge 100K</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">Challenge 10K</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">MFF - Jacob</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">MFF - Kevin</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">MFF - Steven</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">Metrix FTMO</button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">
              First Class PFP Funds
            </button>
          </div>
          <div class="col-lg-4 mb-5">
            <button class="btn btn_theme_dark w-100">MFF - Steven</button>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card1.png" class="w-100" alt="" />
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card2.png" class="w-100" alt="" />
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card3.png" class="w-100" alt="" />
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card4.png" class="w-100" alt="" />
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card5.png" class="w-100" alt="" />
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="img-card p-0">
              <img src="images/img-card6.png" class="w-100" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- testimonials Section -->

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div
              class="embed-responsive embed-responsive-16by9 mt-2 rounded w-lg-75 w-100 mx-auto"
            >
              <iframe
                class="embed-responsive-item w-100 video_2"
                src="//www.youtube.com/embed/zB4I68XVPzQ"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="video_slider">
          <div
            id="myCarousel"
            class="carousel slide container"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner w-100">
              <div class="carousel-item active">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe
                      class="embed-responsive-item w-100 video_3"
                      src="//www.youtube.com/embed/zB4I68XVPzQ"
                    ></iframe>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe
                      class="embed-responsive-item w-100 video_3"
                      src="//www.youtube.com/embed/zB4I68XVPzQ"
                    ></iframe>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe
                      class="embed-responsive-item w-100 video_3"
                      src="//www.youtube.com/embed/zB4I68XVPzQ"
                    ></iframe>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe
                      class="embed-responsive-item w-100 video_3"
                      src="//www.youtube.com/embed/zB4I68XVPzQ"
                    ></iframe>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-4 col-12">
                  <div class="card card-body video_card">
                    <iframe
                      class="embed-responsive-item w-100 video_3"
                      src="//www.youtube.com/embed/zB4I68XVPzQ"
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="prev"
            >
              <span aria-hidden="true">
                <img src="images/slider-prev.png" alt=""
              /></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="next"
            >
              <span aria-hidden="true">
                <img src="images/slider-next.png" alt=""
              /></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--- Start today Section -->

    <div class="startToday">
      <div class="container">
        <div class="nav_today">
          <div class="row">
            <div class="col-12 text-center">
              <h1>Start Today</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Section -->

    <div class="container mt-5">
      <div class="row">
        <div class="offset-lg-2 col-lg-4 mt-lg-0 mt-5">
          <div class="price_Card position-relative">
            <img src="images/label.png" class="label_img" alt="">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-1 me-lg-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-1 me-lg-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-1 me-lg-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 ms-lg-4 ms-0 mt-lg-0 mt-5">
          <div class="price_Card position-relative">
            <img src="images/label.png" class="label_img" alt="">

            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme">Get Started</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="offset-lg-2 col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
        <div class="col-lg-4 mt-5">
          <div class="price_Card_2">
            <span class="heading text-center"> Specail Offer </span>
            <h3 class="price_title text-center">$1250</h3>
            <span class="service text-center">Free Service</span>
            <img src="images/Line 45.png" />
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Choose between
              manual trades or HFT
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Customer service
            </p>
            <p class="description text-start">
              <img src="images/check.png" class="me-2" alt="" />Includes passing
              challenge and verification
            </p>
            <button class="btn btn_theme_dark">Get Started</button>
          </div>
        </div>
      </div>
    </div>

    <!--- Contact Section -->

    <div class="contactSection">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="contact_title mt-5">Contact Us</h2>
            <p class="contact_description">
              For any questions or concerns or if you prefer to speak with one
              of our sales representative please contact our support team bellow
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" alt="" /><br />
            <button class="btn btn_theme mt-3">
              Message us to get started
            </button>
          </div>
          <div class="col-12 text-center">
            <h2 class="contact_title mt-5">About Us</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/down_white.png" class="my-2" alt="" />

            <p class="contact_description">
              Our company is based in the USA helping clients all over the world
              with an unique solution in place to assist with the technical,
              fundamental, and psychological growth in any trader. "Our team of
              traders have more than 10 years of live experience within the
              largest financial market in the world".
            </p>
            <p class="contact_description">
                And since 2019 our company is on a mission to help you complete your Challenge and get your Account Funded.
              </p>
              <p class="contact_description">
                Keep in mind unfortunately nothing is 100% guaranteed in real trading. In a rare occasion we don’t pass we will try again at no extra cost to you. You only pay us once
              </p>
              <p class="contact_description">For more information please send us a message and one of our team members will walk you through the entire process and make sure you understand everything before starting.</p>
          </div>
        </div>
      </div>
    </div>

<?php

    get_footer();
}
?>

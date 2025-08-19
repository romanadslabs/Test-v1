<!DOCTYPE html>
<html lang="de" class="desktop portrait">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Oil Profit</title>
   <script
           src="https://code.jquery.com/jquery-3.7.1.js"
           integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
           crossorigin="anonymous"
   ></script>

   <link rel="stylesheet" href="styleForm.css"/>
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/static/css/main.c084b51a.css"
   />
   <link rel="stylesheet" href="./build/css/main.css"/>
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/video-js.min.css"
   />
   <link rel="canonical" href="https://industrynxt.net"/>
   <meta name="msapplication-TileColor" content="#d3c06c"/>
   <meta name="theme-color" content="#d3c06c"/>

   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/index_files/style.css"
   />
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/index_files/checkbox-svg.css"
   />
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/index_files/form.css"
   />
   <style>
       #phone {
           padding-left: 95px !important;
       }

       .form2 {
           background: #fff;
           border-radius: 5px;
       }

       @keyframes marqueeAnimation-8890537 {
           100% {
               transform: translateX(-4961px);
           }
       }

       @keyframes marqueeAnimation-88905370 {
           100% {
               transform: translateX(-4961px);
           }
       }
   </style>
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/index_files/custom.css"
   />
   <link
           rel="stylesheet"
           href="lander/oilprofit_1699897434/index_files/form_new.css"
   />
   <style type="text/css">
       .video {
           max-width: 100%;
           position: relative;
           overflow: hidden;
           background: #000;
           border: none;
           cursor: pointer;
       }

       .video::before {
           content: '';
           width: 100%;
           display: block;
           padding-bottom: 56%;
       }

       .video__up_sound {
           position: absolute;
           color: #fff;
           display: flex;
           flex-direction: column;
           max-width: 150px;
           top: 50%;
           left: 50%;
           z-index: 5;
           transform: translate(-50%, -50%);
           opacity: 0;
           transition: opacity 0.5s;
       }

       .video__up_sound .up_sound {
           text-align: center;
           z-index: 5;
           color: #fff;
           background-color: #000000ad;
           font-size: 14px;
           cursor: pointer;
       }

       .video__mute_sound {
           position: absolute;
           color: #fff;
           display: flex;
           flex-direction: column;
           width: 25px;
           height: 25px;
           bottom: 10px;
           right: 10px;
           z-index: 999999;
           opacity: 0;
       }

       .video__mute_sound img {
           width: 25px;
           height: 25px;
           z-index: 999999;
           cursor: pointer;
       }

       .video__up_sound #volume_up {
           z-index: 5;
           cursor: pointer;
           width: 100%;
           height: 150px;
       }

       .video iframe {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
       }

       .video .anticlicker {
           position: absolute;
           left: 0;
           top: 0;
           right: 0;
           bottom: 0;
           z-index: 4;
       }

       .video .anticlicker2 {
           position: absolute;
           left: 0;
           top: 0;
           right: 0;
           bottom: 0;
           z-index: 4;
       }

       #apYou {
           position: absolute;
           width: 12%;
           bottom: 41%;
           right: 43%;
       }

       div.is-sticky {
           position: fixed;
           top: 15px;
           right: 15px;
           max-width: 100%;
           max-height: 100%;
           width: 320px;
           height: 180px;
           z-index: 900;
           background: #000;
           padding: 0;
           margin: 0;
       }

       .is-sticky .hero-video__settings {
           max-width: 70px;
           height: 70px;
       }

       .is-sticky .video__up_sound #volume_up {
           max-width: 100px;
           height: 100px;
           margin: 0 auto;
       }

       .is-sticky .hero-video__settings .up_sound {
           font-size: 10px;
       }

       @media all and (min-width: 450px) {
           .video {
               width: 100%;
           }
       }

       @media all and (max-width: 450px) {
           .video__up_sound {
               z-index: 0;
           }
       }

       @-moz-document url-prefix() {
           .anticlicker {
               bottom: 0% !important;
               z-index: 7 !important;
           }
       }

       .preloader {
           position: fixed;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           z-index: 9999999;
           background: rgba(0, 0, 0, 0.8);
           display: none;
           justify-content: center;
           align-items: center;
       }

       .preloader.active {
           display: flex;
       }

       video {
           display: block;
       }
   </style>

   <!--FORM VALIDATION, add before </body> -->
   <link rel="stylesheet" href="./registerForm/intlTelInput/css/intlTelInput.css">
   <link rel="stylesheet" href="./registerForm/registerForm.css">
</head>


<body data-target="#mainNavbar" cz-shortcut-listen="true">
<div id="loader-overlay">
   <div class="loader"></div>
</div>


<div id="aff_place"></div>
<div id="app">
   <div style="
					display: inline-block;
					position: absolute;
					top: 3px;
					left: 50%;
					transform: translateX(-50%);
					font-size: 10px;
					line-height: 10px;
					opacity: 0.5;
					font-family: inherit;
					color: #fff;
					z-index: 99;
				">
    <span class="topTextASet">
        -&nbsp;Advertorial&nbsp;
        <a href="#" target="_blank" style="font: inherit; color: inherit; text-decoration: inherit"
        >&&nbsp;DMCA&nbsp;Protected</a>
        &nbsp;-
    </span>
   </div>
   <div class="topBarCTA">
      <div class="container">
         <img
                 src="lander/oilprofit_1699897434/index_files/alert.png"
                 class="fa fa-exclamation-triangle"
         />
         Tenemos un un número sin precedentes de nuevos usuarios.
         <strong class="topBarCTA-date">30/03/2023</strong>
      </div>
   </div>
   <section class="heroSection" id="about">
      <nav class="navbar navbar-default" id="mainNavbar">
         <div class="container">
            <div class="navbar-header">
               <button
                       type="button"
                       class="navbar-toggle collapsed"
                       data-toggle="collapse"
                       data-target="#mainNavMenu"
                       aria-expanded="false"
               >
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <span class="navbar-brand">
                  <img data-src="index_files/op_white-gold_alt.svg" data-sizes="auto"
                       class="img-responsive lazyautosizes lazyloaded"
                       alt="Oil Profit"
                       sizes="190px"
                       src="lander/oilprofit_1699897434/index_files/op_white-gold_alt.svg"
                  />
               </span>
            </div>
            <div id="modal-winner" class="notificationWrap" style="display: none">
               <div class="flex-row">
                  <div class="text-right">
                     <img
                             data-sizes="auto"
                             class="img-responsive pull-right winnerFlag lazyautosizes lazyloaded"
                             alt="Flag"
                             src="lander/oilprofit_1699897434/index_files/de.jpg"
                             sizes="53px"
                     />
                  </div>
                  <div class="text-left winnerName">
                     <span class="name">Oscar J.</span>
                  </div>
                  <div class="text-right status">
                     <span>
                        <img src="lander/oilprofit_1699897434/index_files/check.png" class=""/>
                        Se unió a
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      <div class="container">
         <h1 class="heroHeadline">
            Los magnates ganan miles de millones con el petróleo cada año, por
            qué tú no?
         </h1>
         <h2 class="heroSubheadline">
            Únase hoy y vea lo fácil que es ganar dinero con el petróleo.
         </h2>
         <div class="row hero-block">
            <div class="col-lg-8 col-md-8 hero-video">
               <video id="example_video_5" class="video-js"
                      controls=""
                      preload="none"
                      poster="lander/oilprofit_1699897434/index_files/video/poster.png"
                      data-setup="{}"
               >
                  <source
                          src="lander/oilprofit_1699897434/index_files/video/video.mp4"
                  />
               </video>
            </div>
            <div class="col-lg-4 col-md-4 hero-form">
               <div class="registerForm registerFormHome">
                  <h3>¡CAMBIA TU VIDA HOY MISMO!</h3>

                  <form
                          style="margin-top: 40px"
                          class="form-container"
                          id="target"
                          action="sent.php"
                          method="POST"
                  >
                     <input type="hidden" id="description" name="description" value="">
                     <input type="hidden" name="click_id" value="{subid}">
                     <input type="hidden" name="fullphone" value="">
                     <input type="hidden" name="phone-code" value="">
                     <input type="hidden" name="country" value="{country}">
                     <input type="hidden" name="ip" value="{ip}">

                     <div class="form__group form__group-name">
                        <div class="control has-icons-left has-icons-right is-large">
                           <input
                                   class="input is-large"
                                   id="name"
                                   name="firstname"
                                   data-validation_type="firstname"
                                   type="text"
                                   autocomplete="on"
                                   placeholder="Tu nombre"
                                   required="required"
                           />
                        </div>
                     </div>
                     <div class="form__group form__group-name">
                        <div class="control has-icons-left has-icons-right is-large">
                           <input
                                   class="input is-large"
                                   id="lastname"
                                   name="lastname"
                                   data-validation_type="lastname"
                                   type="text"
                                   autocomplete="on"
                                   placeholder="Tu apellido"
                                   required="required"
                           />
                        </div>
                     </div>
                     <div class="form__group form__group-email">
                        <div class="control has-icons-left has-icons-right is-large">
                           <input
                                   class="input is-large"
                                   id="email"
                                   name="email"
                                   data-validation_type="email"
                                   type="email"
                                   autocomplete="on"
                                   placeholder="Correo"
                                   pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                           />
                        </div>
                        <div class="form__group form__group-input">
                           <div class="control has-icons-left has-icons-right is-large">
                              <input
                                      class="phone input is-large"
                                      name="phone"
                                      data-intl-tel-input-id="0"
                                      data-validation_type="phone"
                                      type="tel"
                                      required
                                      autocomplete="off"
                                      style="padding-left: 53px"
                              />
                           </div>
                        </div>
                        <div class="form__group form__group-button form-button">
                           <button
                                   class="send-form btn btn-primary lead-form__button button button_color_theme is-medium is-outline"
                                   type="submit"
                                   disabled
                           >
                              <span class="button--inner">Registro</span>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="heroAssets">
   <div class="assetsWrap">
      <div style="
						width: 100000px;
						transform: translateX(0px);
						animation: 43.0694s linear 0s infinite normal none running
							marqueeAnimation-88905370;
						display: flex;
					" class="js-marquee-wrapper">
         <div class="js-marquee" style="margin-right: 0px; float: left">
            <span class="assetItem asset-up">
               <span class="assetName"> Exxon Mobil Corporation (XOM) </span>
               <span class="assetValue"> 75.59 </span>
            </span>
            <span class="assetItem asset-down">
               <span class="assetName"> Chevron Corporation (CVX) </span>
               <span class="assetValue"> 119.48 </span>
            </span>
            <span class="assetItem asset-up">
               <span class="assetName"> BP p.l.c. (BP) </span>
               <span class="assetValue"> 42.82 </span>
            </span>
            <span class="assetItem asset-up">
               <span class="assetName">
                  Public Joint Stock Company Gazprom (OGZPY)
               </span>
               <span class="assetValue"> 4.95 </span>
            </span>
            <span class="assetItem asset-up">
               <span class="assetName"> Royal Dutch Shell plc (RDS-A) </span>
               <span class="assetValue"> 63.68 </span>
            </span>
            <span class="assetItem asset-up">
               <span class="assetName"> TOTAL S.A. (TOT) </span>
               <span class="assetValue"> 55.89 </span>
            </span>
            <span class="assetItem asset-down">
               <span class="assetName"> PetroChina Company Limited (PTR) </span>
               <span class="assetValue"> 64.57 </span>
            </span>
            <span class="assetItem asset-up">
               <span class="assetName">
                  Sinopec Shanghai Petrochemical Company Limited (SHI)
               </span>
               <span class="assetValue"> 49.02 </span>
            </span>
            <span class="assetItem asset-up">
                <span class="assetName">
                    Petróleo Brasileiro S.A. - Petrobras (PBR)
                </span>
                <span class="assetValue"> 16.63 </span>
            </span>
            <span class="assetItem asset-down">
							<span class="assetName"> ConocoPhillips (COP) </span>
							<span class="assetValue"> 69.26 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> Exxon Mobil Corporation (XOM) </span>
							<span class="assetValue"> 75.59 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> Chevron Corporation (CVX) </span>
							<span class="assetValue"> 119.48 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> BP p.l.c. (BP) </span>
							<span class="assetValue"> 42.82 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Public Joint Stock Company Gazprom (OGZPY)
							</span>
							<span class="assetValue"> 4.95 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> Royal Dutch Shell plc (RDS-A) </span>
							<span class="assetValue"> 63.68 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> TOTAL S.A. (TOT) </span>
							<span class="assetValue"> 55.89 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> PetroChina Company Limited (PTR) </span>
							<span class="assetValue"> 64.57 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Sinopec Shanghai Petrochemical Company Limited (SHI)
							</span>
							<span class="assetValue"> 49.02 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Petróleo Brasileiro S.A. - Petrobras (PBR)
							</span>
							<span class="assetValue"> 16.63 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> ConocoPhillips (COP) </span>
							<span class="assetValue"> 69.26 </span>
						</span>
         </div>
         <div class="js-marquee" style="margin-right: 0px; float: left">
						<span class="assetItem asset-up">
							<span class="assetName"> Exxon Mobil Corporation (XOM) </span>
							<span class="assetValue"> 75.59 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> Chevron Corporation (CVX) </span>
							<span class="assetValue"> 119.48 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> BP p.l.c. (BP) </span>
							<span class="assetValue"> 42.82 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Public Joint Stock Company Gazprom (OGZPY)
							</span>
							<span class="assetValue"> 4.95 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> Royal Dutch Shell plc (RDS-A) </span>
							<span class="assetValue"> 63.68 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> TOTAL S.A. (TOT) </span>
							<span class="assetValue"> 55.89 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> PetroChina Company Limited (PTR) </span>
							<span class="assetValue"> 64.57 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Sinopec Shanghai Petrochemical Company Limited (SHI)
							</span>
							<span class="assetValue"> 49.02 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Petróleo Brasileiro S.A. - Petrobras (PBR)
							</span>
							<span class="assetValue"> 16.63 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> ConocoPhillips (COP) </span>
							<span class="assetValue"> 69.26 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> Exxon Mobil Corporation (XOM) </span>
							<span class="assetValue"> 75.59 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> Chevron Corporation (CVX) </span>
							<span class="assetValue"> 119.48 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> BP p.l.c. (BP) </span>
							<span class="assetValue"> 42.82 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Public Joint Stock Company Gazprom (OGZPY)
							</span>
							<span class="assetValue"> 4.95 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> Royal Dutch Shell plc (RDS-A) </span>
							<span class="assetValue"> 63.68 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName"> TOTAL S.A. (TOT) </span>
							<span class="assetValue"> 55.89 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> PetroChina Company Limited (PTR) </span>
							<span class="assetValue"> 64.57 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Sinopec Shanghai Petrochemical Company Limited (SHI)
							</span>
							<span class="assetValue"> 49.02 </span>
						</span>
            <span class="assetItem asset-up">
							<span class="assetName">
								Petróleo Brasileiro S.A. - Petrobras (PBR)
							</span>
							<span class="assetValue"> 16.63 </span>
						</span>
            <span class="assetItem asset-down">
							<span class="assetName"> ConocoPhillips (COP) </span>
							<span class="assetValue"> 69.26 </span>
						</span>
         </div>
      </div>
   </div>
</div>
<div class="heroLogos">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="flex-row">
               <img
                       data-src="index_files/norton_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="64px"
                       src="lander/oilprofit_1699897434/index_files/norton_logo.png"
               />
               <img
                       data-src="index_files/mcafee_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="91px"
                       src="lander/oilprofit_1699897434/index_files/mcafee_logo.png"
               />
               <img
                       data-src="index_files/truste_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="108px"
                       src="lander/oilprofit_1699897434/index_files/truste_logo.png"
               />
               <img
                       data-src="index_files/bbb_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="78px"
                       src="lander/oilprofit_1699897434/index_files/bbb_logo.png"
               />
               <img
                       data-src="index_files/nasdaq_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="105px"
                       src="lander/oilprofit_1699897434/index_files/nasdaq_logo.png"
               />
               <img
                       data-src="index_files/euronext_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="100px"
                       src="lander/oilprofit_1699897434/index_files/euronext_logo.png"
               />
               <img
                       data-src="index_files/tmx_logo.png"
                       data-sizes="auto"
                       alt=""
                       class="img-responsive lazyautosizes lazyloaded"
                       sizes="38px"
                       src="lander/oilprofit_1699897434/index_files/tmx_logo.png"
               />
            </div>
         </div>
      </div>
   </div>
</div>
<section id="heroTrading">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4">
            <img
                    data-src="index_files/oil-barrels.jpg"
                    data-sizes="auto"
                    alt=""
                    class="img-responsive hero-invest-img lazyautosizes lazyloaded"
                    sizes="353px"
                    src="lander/oilprofit_1699897434/index_files/oil-barrels.jpg"
            />
         </div>
         <div class="col-lg-8 col-md-8">
            <h1>
               Únase ahora y empiece a ganar hoy mismo con alertas comerciales en
               tiempo real
            </h1>
            <h2>
               Gracias a los avances tecnológicos y al constante crecimiento
               demanda de petróleo, ahora se puede operar en tiempo real.
            </h2>
            <p class="lead">
               Recibirá información actualizada sobre todas sus operaciones y ver
               crecer los mercados mundiales. El El comercio de petróleo en línea
               nunca ha sido tan fácil. Conviértete en un miembro hoy mismo y
               obtenga un beneficio financiero sin precedentes la libertad de
               comerciar con la mercancía más lucrativa del mundo.
            </p>
         </div>
      </div>
   </div>
</section>
<section id="howToStart">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <h1 class="sectionHeadline">
               Invierta hoy y conozca todo sobre el el comercio del petróleo y su
               valor en el mundo.
            </h1>
         </div>
         <div class="col-md-9">
            <div class="container-fluid">
               <div class="row steps-wrap">
                  <div class="col-sm-4 col-xs-12">
                     <div class="step-head">Paso 1</div>
                     <div class="step">
                        <h2>Registro</h2>
                        <p class="lead">
                           La revolucionaria plataforma de Oil Profit pretende abrir
                           para abrir el comercio al mundo. Por eso han ha facilitado
                           más que nunca la puesta en marcha. Sólo sus datos
                           habituales y nosotros haremos el resto. descanso.
                        </p>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                     <div class="step-head">Paso 2</div>
                     <div class="step">
                        <h2>Invertir</h2>
                        <p class="lead">
                           Uno de nuestros agentes se pondrá en contacto con usted
                           para explicarle explicar lo que debe hacer para realizar
                           su primera inversión. hacer.
                           <i
                           >El importe mínimo de un depósito es de 3.500
                              <spam class="currency">$</spam>
                           </i
                           >.
                        </p>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                     <div class="step-head">Paso 3</div>
                     <div class="step">
                        <h2>Comercio</h2>
                        <p class="lead">
                           Una vez que haya activado su cuenta depositando su dinero
                           activada, puede comerciar con todos los empresas, así como
                           activos, productos básicos y incluso las monedas. Incluso
                           puedes operar en corto, lo que significa que puede ganar
                           incluso si los precios bajan. ¡los precios bajan!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <p>
               <a href="#" class="btn btn-primary btn-extra">
                  Regístrese aquí
                  <img src="lander/oilprofit_1699897434/index_files/arr.png" class="fa fa-long-arrow-right"/>
               </a>
            </p>
         </div>
      </div>
   </div>
</section>
<section id="aboutTrading">
   <div class="famousPeople">
      <div class="container">
         <h1 class="text-center">Nombres famosos en el comercio</h1>
         <h2 class="text-center col-lg-8 col-lg-offset-2">
            Hay muchos grandes nombres en el comercio. Estas son algunas de las
            cosas que dicen los comerciantes más famosos.
         </h2>
      </div>
      <div class="container famousPeopleInnerWrap">
         <div class="row">
            <div class="col-sm-6">
               <div class="famousPeopleSinglePerson">
                  <h3 class="famousPerson--name">Jim Rogers</h3>
                  <p class="famousPerson--quote">
                     El precio de una mercancía nunca llegará a cero. Cuando se
                     invierte en los futuros de materias primas, no está comprando
                     un papel, que dice que eres dueño de una pieza intangible de
                     una empresa... empresa que puede quebrar.
                  </p>
                  <img
                          data-src="index_files/jim-rogers.jpg"
                          data-sizes="auto"
                          class="img-responsive lazyautosizes lazyloaded"
                          alt="Jim Rogers"
                          sizes="160px"
                          src="lander/oilprofit_1699897434/index_files/jim-rogers.jpg"
                  />
               </div>
            </div>
            <div class="col-sm-6">
               <div class="famousPeopleSinglePerson">
                  <h3 class="famousPerson--name">Peter DeFazio</h3>
                  <p class="famousPerson--quote">
                     A diferencia de las demás materias primas, el mercado del
                     crudo es casi en Estados Unidos, prácticamente no está
                     regulada.
                  </p>
                  <img
                          data-src="index_files/peter-defazio.jpg"
                          data-sizes="auto"
                          class="img-responsive lazyautosizes lazyloaded"
                          alt="Peter DeFazio"
                          sizes="160px"
                          src="lander/oilprofit_1699897434/index_files/peter-defazio.jpg"
                  />
               </div>
            </div>
            <div class="col-sm-6">
               <div class="famousPeopleSinglePerson">
                  <h3 class="famousPerson--name">Ed Seykota</h3>
                  <p class="famousPerson--quote">
                     Ganancia o pérdida, cada uno saca lo que quiere del mercado.
                     quieren salir del mercado. Parece que a algunas personas les
                     gusta perder, así que ganan perdiendo dinero.
                  </p>
                  <img
                          data-src="index_files/ed-seykota.jpg"
                          data-sizes="auto"
                          class="img-responsive lazyautosizes lazyloaded"
                          alt="Ed Seykota"
                          sizes="160px"
                          src="lander/oilprofit_1699897434/index_files/ed-seykota.jpg"
                  />
               </div>
            </div>
            <div class="col-sm-6">
               <div class="famousPeopleSinglePerson">
                  <h3 class="famousPerson--name">Warren Buffett</h3>
                  <p class="famousPerson--quote">
                     No hace falta ser un genio. Invertir no es un juego en el que
                     donde el tipo con un coeficiente intelectual de 160 gana al
                     tipo con un coeficiente intelectual de 130. golpes.
                  </p>
                  <img
                          data-src="index_files/warren-buffett.jpg"
                          data-sizes="auto"
                          class="img-responsive lazyautosizes lazyloaded"
                          alt="Warren Buffett"
                          sizes="160px"
                          src="lander/oilprofit_1699897434/index_files/warren-buffett.jpg"
                  />
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="app-features">
      <div class="container">
         <h1 class="sectionHeadline">Ventajas del comercio en línea</h1>
         <h2 class="sectionSubheadline">
            Es la mejor manera de invertir su dinero
         </h2>
         <div class="row">
            <div class="col-sm-4">
               <div class="feature">
                  <div class="feature-icon">
                     <img
                             data-src="index_files/icon_accurate-trading.svg"
                             data-sizes="auto"
                             alt=""
                             class="img-responsive lazyautosizes lazyloaded"
                             sizes="200px"
                             src="lander/oilprofit_1699897434/index_files/icon_accurate-trading.svg"
                     />
                  </div>
                  <div class="feature-name">Acción precisa</div>
                  <div class="feature-text">
                     Utilice las actualizaciones en vivo de Oil Profit para tomar
                     la decisión correcta para tomar la decisión correcta en cada
                     operación.
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="feature">
                  <div class="feature-icon">
                     <img
                             data-src="index_files/icon_cutting-edge-technology.svg"
                             data-sizes="auto"
                             alt=""
                             class="img-responsive lazyautosizes lazyloaded"
                             sizes="200px"
                             src="lander/oilprofit_1699897434/index_files/icon_cutting-edge-technology.svg"
                     />
                  </div>
                  <div class="feature-name">Tecnología punta</div>
                  <div class="feature-text">
                     Oil Profit utiliza el motor de trading más avanzado para para
                     garantizar que todas sus operaciones se realicen sin problemas
                     y de manera eficiente y que tenga la mejor protección
                     disponible. protección disponible.
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="feature">
                  <div class="feature-icon">
                     <img
                             data-src="index_files/icon_trusted-trading.svg"
                             data-sizes="auto"
                             alt=""
                             class="img-responsive lazyautosizes lazyloaded"
                             sizes="200px"
                             src="lander/oilprofit_1699897434/index_files/icon_trusted-trading.svg"
                     />
                  </div>
                  <div class="feature-name">Empresa de confianza</div>
                  <div class="feature-text">
                     Oil Profit es un líder en el comercio global en línea y ha
                     sido mundialmente reconocido por su diseño intuitivo y
                     plataforma fácil de usar.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="faq">
   <div class="container">
      <h1>FAQ</h1>
      <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
            <div class="faqBlock">
               <div class="faqItem">
                  <a
                          class="faqToggle collapsed"
                          data-toggle="collapse"
                          data-target="#faq1"
                          aria-expanded="false"
                  >¿Cuánto dinero puedo ganar?</a>
                  <div
                          class="collapse"
                          id="faq1"
                          aria-expanded="false"
                          style="height: 90.0469px"
                  >
                     <p>
                        Su beneficio depende de sus decisiones y de su aportación.
                        que haces. Los que invierten su interés en operaciones de
                        mayor valor pueden ganar mucho más que los que realizan
                        operaciones a menor precios más bajos. Sin embargo, todo
                        depende depende de cómo quieras comerciar.
                     </p>
                  </div>
               </div>
               <div class="faqItem">
                  <a
                          class="faqToggle collapsed"
                          data-toggle="collapse"
                          data-target="#faq2"
                  >¿Necesito experiencia como agente de bolsa?
                  </a>
                  <div class="collapse" id="faq2">
                     <p>
                        Oil Profit ha sido desarrollado para todos los niveles de
                        operadores y puede darle las habilidades y la confianza
                        necesitas hacer operaciones de alto nivel. La plataforma
                        proporciona la información necesaria para para empezar,
                        tanto si es un principiante como si es un operador
                        experimentado. comerciante con experiencia.
                     </p>
                  </div>
               </div>
               <div class="faqItem">
                  <a
                          class="faqToggle collapsed"
                          data-toggle="collapse"
                          data-target="#faq3"
                  >¿Cuánto me costará?</a
                  >
                  <div class="collapse" id="faq3">
                     <p>
                        El uso de nuestra plataforma es totalmente gratuito. Usted
                        sólo necesita su 3.500
                        <spam class="currency">$</spam>
                        Capital inicial para invertir y de comercio.
                     </p>
                  </div>
               </div>
               <div class="faqItem">
                  <a
                          class="faqToggle collapsed"
                          data-toggle="collapse"
                          data-target="#faq4"
                  >¿Cuántos miembros hay?</a
                  >
                  <div class="collapse" id="faq4">
                     <p>
                        En todo el mundo, 2.500.000 afiliados utilizan nuestros
                        servicios.
                     </p>
                  </div>
               </div>
               <div class="faqItem">
                  <a
                          class="faqToggle collapsed"
                          data-toggle="collapse"
                          data-target="#faq5"
                  >¿Qué empresas puedo utilizar?</a
                  >
                  <div class="collapse" id="faq5">
                     <p>
                        Puede negociar con todas las empresas cotizadas de todos los
                        bolsas de valores del mundo. Si ha oído hablar de ellos,
                        puedes comerciar con ellos.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-12">
            <img
                    data-src="index_files/op_white-gold_alt.svg"
                    data-sizes="auto"
                    class="img-responsive lazyautosizes ls-is-cached lazyloaded"
                    alt="Oil Profit"
                    sizes="142px"
                    src="lander/oilprofit_1699897434/index_files/op_white-gold_alt.svg"
            />
         </div>
         <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="footerLinks">
							<span class="copyright">
								© <span class="currYear">2023</span>
								<script>
									document.querySelector('.currYear').innerHTML =
                                       new Date().getFullYear()
								</script>
							</span>
            </div>
         </div>
      </div>
      <ul class="flex-link">
         <a href="#">AGB</a>
         <a href="#">Datenschutzerklärung</a>
         <a href="#">Bericht Ad / Spam</a>
      </ul>
      <div class="row">
         <div class="col-lg-12">
            <div class="disclaimerFooter" id="disclaimertext">
               IMPORTANTE: Ganancias y renuncias legales Las declaraciones de
               ganancias e ingresos realizadas por
               <span class="disclaimer-brand_name__new">servepoll.shop</span
               >,(colectivamente "Este sitio web") sólo se utilizan como ejemplos
               de aspiración de su potencial de ganancias. El éxito de los que
               aparecen en los testimonios y otros ejemplos son resultados
               excepcionales y, por lo tanto, no pretenden ser una garantía de
               que usted u otras personas lograrán los mismos resultados. Los
               resultados individuales variarán y dependerán totalmente de su uso
               de <span class="disclaimer-brand_name__new">servepoll.shop</span>.
               Este sitio web no es responsable de sus acciones. Usted es el
               único responsable de sus acciones y decisiones al utilizar los
               productos y servicios y, por lo tanto, debe actuar siempre con
               precaución y la debida diligencia. Usted acepta que este sitio web
               no es responsable en modo alguno de los resultados de la
               utilización de nuestros servicios. Consulte las condiciones de uso
               de nuestro sitio web para conocer nuestra exención de
               responsabilidad completa y otras restricciones. El trading puede
               generar notables beneficios, sin embargo, también implica el
               riesgo de pérdida parcial/completa del capital invertido, por lo
               que debe considerar si puede permitirse invertir. ©<span
                       id="yearDisclaimerNew"
               >2023</span
               ><br/>
               AVISO DE REGULACIÓN DE LOS ESTADOS UNIDOS: El comercio de divisas,
               CFDs y criptodivisas no está regulado en los Estados Unidos.
               Invest in Crypto no está supervisado ni regulado por ninguna
               agencia financiera ni por agencias estadounidenses. Cualquier
               actividad comercial no regulada por parte de los residentes de los
               Estados Unidos se considera ilegal. Este sitio web no acepta
               clientes ubicados en los Estados Unidos o que posean una
               ciudadanía estadounidense. Este sitio web no es responsable de las
               acciones de los clientes ubicados en los Estados Unidos o con
               ciudadanía estadounidense. Los clientes ubicados en los Estados
               Unidos o con ciudadanía estadounidense son los únicos responsables
               de sus acciones y decisiones al utilizar los productos y servicios
               de este sitio web. En todas y cada una de las circunstancias, la
               elección de utilizar el Sitio Web, el Servicio y/o el Software es
               de plena responsabilidad del Usuario, que debe cumplir con la
               legislación vigente.
               <script type="text/javascript">
                  var yearDisclaimerNew = new Date()
                  document.getElementById('yearDisclaimerNew').innerHTML =
                     yearDisclaimerNew.getFullYear()
                  document
                     .querySelectorAll('.disclaimer-brand_name__new')
                     .forEach(function (brandName) {
                        brandName.innerHTML = location.hostname
                     })
               </script>
            </div>
         </div>
      </div>
   </div>
</footer>

<script src="lander/oilprofit_1699897434/index_files/bundle.min.js"></script>
<link
        href="lander/oilprofit_1699897434/index_files/style.min.css"
        rel="stylesheet"
        type="text/css"
/>

<script src="lander/oilprofit_1699897434/video.min.js"></script>

<style>
    .reg-form__preloader.hidden1 {
        display: none;
    }
</style>

<script src="./registerForm/intlTelInput/js/intlTelInput.js" type="module"></script>
<script src="./registerForm/registerForm.js" type="module"></script>


</body>
</html>

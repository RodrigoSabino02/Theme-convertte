<?php
    $url = "http://www.omdbapi.com/?s=fast&apikey=166c0fc3";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $Result = json_decode(curl_exec($ch));

    foreach($Result->Search as $ID) {
      $id = $ID->imdbID;
  };

  $url2 = "http://www.omdbapi.com/?i=".$id."&apikey=166c0fc3";
  $bio = curl_init($url2);
  curl_setopt($bio, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($bio, CURLOPT_SSL_VERIFYPEER, false);
  $Consult = json_decode(curl_exec($bio));

  $Bio = $Consult->Plot;


    ?>

  <?php get_header(); ?>
  
  <div class="section top-section">
    <div class="wrapper">
      <div data-animation="slide" data-duration="600" data-infinite="1" id="Hero" class="slider-v2 w-slider">
        <div class="w-slider-mask">
          <div class="slide w-slide">
            <div class="slide-v2">
              <div class="wrapper">
                <div class="slide-v2-content">
                  <a href="#" class="badge">NOME DA CATEGORIA</a>
                  <a href="#" class="slide-heading-link w-inline-block">
                    <h2 class="slide-v2-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h2>
                  </a>
                  <div class="post-info text-white">
                    <a href="#" class="post-info-author text-white w-inline-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07fbe2288da7_user-white.svg" alt="" class="mini-icon">
                      <div>Aldo Luiz</div>
                      <div class="divider-small transparent"></div>
                    </a>
                    <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07d071288d94_calendar-white.svg" alt="" class="mini-icon">
                      <div>Federal</div>
                    </div>
                    <div class="post-info-block">
                      <div class="divider-small transparent"></div><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073d8e288d91_clock-white.svg" alt="" class="mini-icon">
                      <div>03</div>
                      <div> min leitura</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-v2-image"></div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="slide-v2">
              <div class="wrapper">
                <div class="slide-v2-content">
                  <a href="#" class="badge">NOME DA CATEGORIA</a>
                  <a href="#" class="slide-heading-link w-inline-block">
                    <h2 class="slide-v2-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h2>
                  </a>
                  <div class="post-info text-white">
                    <a href="#" class="post-info-author text-white w-inline-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07fbe2288da7_user-white.svg" alt="" class="mini-icon">
                      <div>Aldo Luiz</div>
                      <div class="divider-small transparent"></div>
                    </a>
                    <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07d071288d94_calendar-white.svg" alt="" class="mini-icon">
                      <div>Federal</div>
                    </div>
                    <div class="post-info-block">
                      <div class="divider-small transparent"></div><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073d8e288d91_clock-white.svg" alt="" class="mini-icon">
                      <div>03</div>
                      <div> min leitura</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-v2-image"></div>
            </div>
          </div>
          <div class="slide w-slide">
            <div class="slide-v2">
              <div class="wrapper">
                <div class="slide-v2-content">
                  <a href="#" class="badge">NOME DA CATEGORIA</a>
                  <a href="#" class="slide-heading-link w-inline-block">
                    <h2 class="slide-v2-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h2>
                  </a>
                  <div class="post-info text-white">
                    <a href="#" class="post-info-author text-white w-inline-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07fbe2288da7_user-white.svg" alt="" class="mini-icon">
                      <div>Aldo Luiz</div>
                      <div class="divider-small transparent"></div>
                    </a>
                    <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07d071288d94_calendar-white.svg" alt="" class="mini-icon">
                      <div>Federal</div>
                    </div>
                    <div class="post-info-block">
                      <div class="divider-small transparent"></div><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073d8e288d91_clock-white.svg" alt="" class="mini-icon">
                      <div>03</div>
                      <div> min leitura</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-v2-image"></div>
            </div>
          </div>
        </div>
        <div class="slider-arrow w-slider-arrow-left">
          <div class="slider-arrow-button"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-arrow-icon"></div>
        </div>
        <div class="slider-arrow w-slider-arrow-right">
          <div class="slider-arrow-button"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae076636288d80_right.svg" alt="" class="slider-arrow-icon"></div>
        </div>
        <div class="slider-v2-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block">
        <h3 class="header">Notícias</h3>
        <a href="#" class="more-link w-inline-block">
          <div>VER TODAS</div>
          <div class="more-link-icon"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae076636288d80_right.svg" alt="" class="more-link-arrow"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae072c3b288d9d_right-white.svg" alt="" class="more-link-arrow-hover"></div>
        </a>
        <div class="header-line"></div>
      </div>
      <div class="w-layout-grid grid-v1">
        <div class="post-card">
          <a href="#" class="thumbnail-medium w-inline-block">
            <div class="badge">TAG</div>
            <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3"></div>
          </a>
          <a href="#" class="post-heading-link w-inline-block">
            <h4 class="post-heading-medium">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h4>
          </a>
          <div class="post-info">
            <div class="post-info-block"><img src="images/clock.svg" alt="" class="mini-icon-grey">
              <div>Aldo Luiz</div>
            </div>
            <div class="post-info-block">
              <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
              <div>03</div>
              <div> min leitura</div>
            </div>
          </div>
        </div>
        <div>
          <div class="post-mini">
            <a href="#" class="post-mini-thumbnail w-inline-block">
              <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            </a>
            <div class="post-mini-content">
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-mini-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h5>
              </a>
              <div class="post-info">
                <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae071d79288d77_calendar.svg" alt="" class="mini-icon-grey">
                  <div>Federal</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>Aldo Luiz</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>03</div>
                  <div> min leitura</div>
                </div>
              </div>
            </div>
          </div>
          <div class="post-mini">
            <a href="#" class="post-mini-thumbnail w-inline-block">
              <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            </a>
            <div class="post-mini-content">
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-mini-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h5>
              </a>
              <div class="post-info">
                <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae071d79288d77_calendar.svg" alt="" class="mini-icon-grey">
                  <div>Federal</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>Aldo Luiz</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>03</div>
                  <div> min leitura</div>
                </div>
              </div>
            </div>
          </div>
          <div class="post-mini">
            <a href="#" class="post-mini-thumbnail w-inline-block">
              <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            </a>
            <div class="post-mini-content">
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-mini-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h5>
              </a>
              <div class="post-info">
                <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae071d79288d77_calendar.svg" alt="" class="mini-icon-grey">
                  <div>Federal</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>Aldo Luiz</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>03</div>
                  <div> min leitura</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Filmes</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 slider-v4 w-slider">
      
      <div class="w-slider-mask">  
      <?php foreach($Result->Search as $Filme):?>
          
          <div class="slide-v3 slide-v5 w-slide">
            
            
            <div class="post-card podcast-card">
                <div class="div-block div-podcast">
                    <a href="#" class="thumbnail-small w-inline-block">
                        <div class="thumbnail"><img src="<?= $Filme->Poster ?>" loading="lazy" alt="" class="image image-podcast"></div>
                    </a>
                </div>
                <div>
                      <a href="#" class="post-heading-link w-inline-block">
                          <h5 class="post-heading-small"><?= $Filme->Title ?></h5>
                      </a>

                      <p class="paragraph"><?=$Bio?></p>
                      
                  </div>
              </div>
          </div>
          
      <?php endforeach; ?>
          </div>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Mimos</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 w-slider">
        <div class="w-slider-mask">
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/background-image.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/background-image.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/background-image.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="#" class="thumbnail-small w-inline-block">
                <div class="thumbnail"><img src="images/background-image.svg" loading="lazy" alt="" class="image-2"></div>
              </a>
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
              </a>
              <p class="paragraph">Questões Enem 2013 atualizadas.</p>
              <a href="#" class="button w-button">Baixar agora</a>
            </div>
          </div>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Podcasts</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 slider-v4 w-slider">
        <div class="w-slider-mask">
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small">CADERNO DE QUESTÕES</h5>
                </a>
                <p class="paragraph">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section-2 bg-gray-4 dn">
    <div class="main-container">
      <div class="container-large align-center justify-content-center">
        <h4 class="large-heading section-title">Quer o MEM na palma da mão?</h4>
      </div>
      <div class="container-large align-center">
        <div class="hero-subscribe-form w-form">
          <form id="wf-form-Wide-Subscribe-Form" name="wf-form-Wide-Subscribe-Form" data-name="Wide Subscribe Form">
            <div class="form-horizontal"><input type="email" class="form-input form-input-large w-input" maxlength="256" name="Email-Address-2" data-name="Email Address 2" placeholder="Informe seu melhor email" id="Email-Address-2" required=""><input type="submit" value="Enviar" data-wait="Please wait..." class="button-2 form-horizontal-button button-large w-button"></div>
          </form>
          <div class="form-success-2 w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="form-error-2 w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fa45342033e749f917aad36" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/mem-c1ad69.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->


</body>
</html>
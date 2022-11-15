<section class="section-grid section-grid--full">
  <div class="wrapper">
    <div class="section-grid__content">

      <ul class="list-reset content-grid">
        <!--  анонс карточки c акцией -->
        <?php
          include './components/item/sale_promo.php';
          include './components/item/sale_promo.php';
          include './components/item/sale_promo.php';
          include './components/item/sale_promo.php';
          include './components/item/sale_promo.php';
          include './components/item/sale_promo.php';
          ?>
      </ul>

      <div class="pagination">
        <div class="pagination__wrapper">

          <a class="navigation-button navigation-button-prev">
            <svg class="arrow-icon" width="34" height="18" viewBox="0 0 34 18" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M10 1L2 9M2 9L10 17M2 9L18 9" stroke="white" stroke-width="2"></path>
              <path class="line" d="M18 9H34" stroke="white" stroke-width="2"></path>
            </svg>
          </a>

          <ul class="pagination__list">

            <li class="pagination__item">
              <a class="pagination__link" href="">1</a>
            </li>
            <!-- активный пункт не должен иметь атрибут href!!!  -->
            <li class="pagination__item">
              <a class="pagination__link pagination__link--is-active">2</a>
            </li>
            <li class="pagination__item">
              <a class="pagination__link" href="#">3</a>
            </li>
            <li class="pagination__item">
              <a class="pagination__link pagination__link--is-dots">...</a>
            </li>
            <li>
              <a class="pagination__link" href="#">5</a>
            </li>
          </ul>

          <a class="navigation-button navigation-button-next navigation-button-disabled">
            <svg class="arrow-icon" width="34" height="18" viewBox="0 0 34 18" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M24 17L32 9M32 9L24 1M32 9L16 9" stroke="white" stroke-width="2"></path>
              <path class="line" d="M0 9H16" stroke="white" stroke-width="2"></path>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

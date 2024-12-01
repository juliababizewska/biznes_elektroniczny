{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file='page.tpl'}

{block name='page_content_container'}
  <section id="content" class="page-home">
    {block name='page_content_top'}{/block}

    {block name='page_content'}
      {block name='hook_home'}
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 categories-sidebar-vertical">
              {hook h='displayLeftColumn'}
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 slider-section">
              {$HOOK_HOME nofilter}
            </div>
          </div>
        </div>


      {/block}

      <!-- Dodajemy sekcję kategorii tutaj -->
      <section class="category-row">
        <h2>Odkryj nasze kategorie</h2>
        <div class="row-container">
          <a href="https://localhost:8080/pl/10-wloczki" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/wloczka.jpg" alt="Włóczki">
            <p>Włóczki</p>
          </a>
          <a href="https://localhost:8080/pl/31-sznurki" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/sznurki.jpg" alt="Sznurki">
            <p>Sznurki</p>
          </a>
          <a href="https://localhost:8080/pl/61-kordonki-mulina" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/kordonkimuliny.jpeg" alt="Kordonki Mulina">
            <p>Kordonki Mulina</p>
          </a>
          <a href="https://localhost:8080/pl/69-akcesoria-do-robotek" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/akcesoriadorobotek.jpg" alt="Akcesoria do robótek">
            <p>Akcesoria do robótek</p>
          </a>
          <a href="https://localhost:8080/pl/107-akcesoria-do-maskotek" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/akcesoriadomaskotek.png" alt="Akcesoria do maskotek">
            <p>Akcesoria do maskotek</p>
          </a>
          <a href="https://localhost:8080/pl/125-akcesoria-i-dodatki-krawieckie" class="row-item">
            <img src="{$urls.base_url}themes/classic/assets/img/akcesoriaidodatkikrawieckie.jpg" alt="Akcesoria i dodatki krawieckie">
            <p>Akcesoria i dodatki krawieckie</p>
          </a>
        </div>
      </section>


      <!-- Sekcja logo producentów -->
  <section class="producers-row">
    <h2>Szukaj doskonałych włóczek wśród swoich ulubionych marek.</h2>
    <div class="producers-container">
      <a href="https://localhost:8080/pl/szukaj?s=katia" class="producer-item">
        <img src="{$urls.base_url}themes/classic/assets/img/katia.png" alt="Katia">
      </a>
      <a href="https://localhost:8080/pl/szukaj?s=lammy" class="producer-item">
        <img src="{$urls.base_url}themes/classic/assets/img/lammy.jpg" alt="Lammy">
      </a>
      <a href="link-do-producenta-3" class="producer-item">
        <img src="{$urls.base_url}themes/classic/assets/img/lopi.jpg" alt="Lopi">
      </a>
      <a href="https://localhost:8080/pl/szukaj?s=lopi" class="producer-item">
        <img src="{$urls.base_url}themes/classic/assets/img/valeria.png" alt="Valeria Lanas">
      </a>
      <a href="https://localhost:8080/pl/szukaj?s=sesia" class="producer-item">
        <img src="{$urls.base_url}themes/classic/assets/img/sesia.jpg" alt="Sesia">
      </a>
    </div>
  </section>

<div class="colorful-text-wrapper">
  <h2 class="colorful-text">
    <span class="letter" style="color: #e63946;">w</span>
    <span class="letter" style="color: #f1a208;">ł</span>
    <span class="letter" style="color: #2a9d8f;">ó</span>
    <span class="letter" style="color: #457b9d;">c</span>
    <span class="letter" style="color: #9d4edd;">z</span>
    <span class="letter" style="color: #e63946;">k</span>
    <span class="letter" style="color: #f4a261;">i</span>
    <span class="letter">&nbsp;</span>
    <span class="letter" style="color: #e76f51;">w</span>
    <span class="letter">&nbsp;</span>
    <span class="letter" style="color: #e63946;">t</span>
    <span class="letter" style="color: #2a9d8f;">w</span>
    <span class="letter" style="color: #457b9d;">o</span>
    <span class="letter" style="color: #9d4edd;">i</span>
    <span class="letter" style="color: #e63946;">c</span>
    <span class="letter" style="color: #f1a208;">h</span>
    <span class="letter">&nbsp;</span>
    <span class="letter" style="color: #457b9d;">u</span>
    <span class="letter" style="color: #2a9d8f;">k</span>
    <span class="letter" style="color: #e63946;">o</span>
    <span class="letter" style="color: #f4a261;">c</span>
    <span class="letter" style="color: #9d4edd;">h</span>
    <span class="letter" style="color: #e76f51;">a</span>
    <span class="letter" style="color: #2a9d8f;">n</span>
    <span class="letter" style="color: #f1a208;">y</span>
    <span class="letter" style="color: #e63946;">c</span>
    <span class="letter" style="color: #9d4edd;">h</span>
    <span class="letter">&nbsp;</span>
    <span class="letter" style="color: #e76f51;">k</span>
    <span class="letter" style="color: #f4a261;">o</span>
    <span class="letter" style="color: #457b9d;">l</span>
    <span class="letter" style="color: #2a9d8f;">o</span>
    <span class="letter" style="color: #e63946;">r</span>
    <span class="letter" style="color: #f1a208;">a</span>
    <span class="letter" style="color: #9d4edd;">c</span>
    <span class="letter" style="color: #e63946;">h</span>
  </h2>
</div>

<div class="text-below-brands">
  <p>
    Sklep z włóczkami Fastryga jest miejscem, gdzie zaopatrzysz się we wszystko, co niezbędne, by robótki ręczne i DIY były naprawdę wyjątkowe. Nasza pasmanteria online powstała z pasji i zamiłowania do najwyższej jakości materiałów, także trudno dostępnych w innych miejscach, dzięki czemu oferujemy kompleksowe wyposażenie i duży wybór. To idealne miejsce dla każdego, kto dopiero zaczyna swoją przygodę z takim produktem jak kordonek, mulina czy włóczka, ale też osób, które mogą pochwalić się już osiągnięciami na poziomie zaawansowanym.
  </p>
  <h2>Najwyższej jakości włóczka – sklep z ogromnym wyborem w najlepszej cenie</h2>
  <p>
    Naszą domeną jest najwyższa jakość, dobra cena i bogaty wybór. Dlatego Fastryga oferuje ogromny wybór włóczek, które doskonale sprawdzają się we wszelkiego rodzaju robótkach ręcznych, ale też stanowić będą idealny surowiec do większej produkcji. W sprzedaży dostępne są m.in. włóczki w 100% wełniane oraz z domieszką innych surowców, alpaka, moher, jedwab, kaszmir, akryl, len, bawełna czy bambus. W ofercie znaleźć można również włóczki z merynosów, sizalu, juty, propozycje organiczne, idealne do przędzenia i na skarpetki.
  </p>
  <h2>Dlaczego pasmanteria online Fastryga to miejsce idealne?</h2>
  <p>
    Koniec długich poszukiwań potrzebnych akcesoriów! Nasz sklep z włóczkami to ogromny wybór nie tylko włóczek. Oferujemy również muliny, kordonki, sznury do makram, produkty do farbowania oraz malowania na tkaninach i gotowe naszywki. Teraz wszystkie niezbędne materiały znajdują się w jednym miejscu. Zakupy pozwolą więc zaoszczędzić czas i znaleźć wszystko, co niezbędne, by stworzyć wymarzone rękodzieło. To jednak nie wszystko.
  </p>
  <p>
    Nasza pasmanteria online to ogromny wybór wszelkiego rodzaju akcesoriów niezbędnych w pracy z takim materiałem jak włóczka, kordonek, mulina czy sznury do makram. Znajdziesz tu profesjonalne miary krawieckie, szpilki, nożyczki, przywieszki, zamki, ściągacze, gumy, nici, dodatki bieliźniarskie, a także części do maszyn.
  </p>
  <p>
    Produkty wykonane z takich surowców jak włóczka są dla nas bardzo ważne i wyjątkowe, dlatego w naszej ofercie pasmanterii online znaleźć można także profesjonalne, skuteczne i bezpieczne środki do prania i konserwacji wełny oraz różnego rodzaju odplamiacze, wybielacze i odbarwiacze do tkanin. Dzięki temu nie tylko uratujesz zaplamioną odzież w sposób, który jej nie zniszczy, ale też zmienisz wygląd i odświeżysz produkty nieużywane od dawna, nadając im nowe życie.
  </p>
  <h2>Stwórz odzież i galanterię z pasmanterią Fastryga</h2>
  <p>
    W naszej ofercie znaleźć można również czasopisma branżowe, które pozwolą nabyć nowe umiejętności i stworzyć wyjątkowe i niepowtarzalne rzeczy. Pasmanteria online Fastryga to również rączki do toreb i ogromny wybór akcesoriów do robótek, takich jak druty, szydełka, ale też pompony, elementy do maskotek, takie jak wypełniacze grzechotki czy piszczałki, zapięcia i spody do toreb, elementy do spinania swetrów, obręcze do dekorowania,  tamborki i wiele innych.
  </p>
  <p>
    W naszej ofercie znaleźć można również czasopisma branżowe, które pozwolą nabyć nowe umiejętności i stworzyć wyjątkowe i niepowtarzalne rzeczy. Pasmanteria online Fastryga to również rączki do toreb i ogromny wybór akcesoriów do robótek, takich jak druty, szydełka, ale też pompony, elementy do maskotek, takie jak wypełniacze grzechotki czy piszczałki, zapięcia i spody do toreb, elementy do spinania swetrów, obręcze do dekorowania,  tamborki i wiele innych.
  </p>

</div>

<div class="info-box-wrapper">
  <div class="info-box">
    <img src="{$urls.base_url}themes/classic/assets/img/Info.png" alt="Informacje">
    <p>informacje jak pracujemy,<br> nasze telefony, adresy, numery kont,<br> program rabatowy</p>
  </div>
  <div class="info-box">
    <img src="{$urls.base_url}themes/classic/assets/img/amazonboy.png" alt="Koszty dostawy">
    <p>Koszty dostawy<br> zamówionych produktów</p>
  </div>
  <div class="info-box">
    <img src="{$urls.base_url}themes/classic/assets/img/fb.jpg" alt="Facebook">
    <p>Tutaj znajdziesz najświeższe nowości i ciekawe informacje.</p>
  </div>
<div class="info-box warehouse-box">
  <img src="{$urls.base_url}themes/classic/assets/img/W.jpg" alt="Hurtownia">
  <p><strong>Hurtownia</strong></p>
</div>
</div>

<div class="button-wrapper">
  <button class="custom-button">Regulamin</button>
  <button class="custom-button">Polityka prywatności</button>
  <button class="custom-button">Koszty dostawy</button>
  <button class="custom-button">Formularz zwrotu produktów</button>
  <button class="custom-button">Zwroty reklamacje</button>
</div>




    {/block}
  </section>
{/block}

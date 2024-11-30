<?php
/* Smarty version 3.1.48, created on 2024-11-30 02:31:24
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674a6aec33de85_60409615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1732930278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674a6aec33de85_60409615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64620898674a6aec3398d2_91709212', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_617344568674a6aec339d31_82705746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_921529498674a6aec33a3d8_91063870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="container">
          <div class="row">
            <!-- Pionowy pasek kategorii -->
            <div class="col-lg-3 col-md-4 col-sm-12 categories-sidebar-vertical">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

            </div>

            <!-- Slider -->
            <div class="col-lg-9 col-md-8 col-sm-12 slider-section">
              <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            </div>
          </div>
        </div>
      <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1820491039674a6aec33a1b9_63904789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_921529498674a6aec33a3d8_91063870', 'hook_home', $this->tplIndex);
?>


      <!-- Dodajemy sekcję kategorii tutaj -->
      <section class="category-row">
        <h2>Odkryj nasze kategorie</h2>
        <div class="row-container">
          <a href="link-do-kategorii-1" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/wloczka.jpg" alt="Włóczki">
            <p>Włóczki</p>
          </a>
          <a href="link-do-kategorii-2" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/sznurki.jpg" alt="Sznurki">
            <p>Sznurki</p>
          </a>
          <a href="link-do-kategorii-3" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/kordonkimuliny.jpeg" alt="Kordonki Mulina">
            <p>Kordonki Mulina</p>
          </a>
          <a href="link-do-kategorii-4" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/akcesoriadorobotek.jpg" alt="Akcesoria do robótek">
            <p>Akcesoria do robótek</p>
          </a>
          <a href="link-do-kategorii-5" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/akcesoriadomaskotek.png" alt="Akcesoria do maskotek">
            <p>Akcesoria do maskotek</p>
          </a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/akcesoriaidodatkikrawieckie.jpg" class="row-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/akcesoriaidodatkikrawieckie.jpg" alt="Akcesoria i dodatki krawieckie">
            <p>Akcesoria i dodatki krawieckie</p>
          </a>
        </div>
      </section>


      <!-- Sekcja logo producentów -->
  <section class="producers-row">
    <h2>Szukaj doskonałych włóczek wśród swoich ulubionych marek.</h2>
    <div class="producers-container">
      <a href="link-do-producenta-1" class="producer-item">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/katia.png" alt="Katia">
      </a>
      <a href="link-do-producenta-2" class="producer-item">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/lammy.jpg" alt="Lammy">
      </a>
      <a href="link-do-producenta-3" class="producer-item">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/lopi.jpg" alt="Lopi">
      </a>
      <a href="link-do-producenta-4" class="producer-item">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/valeria.png" alt="Valeria Lanas">
      </a>
      <a href="link-do-producenta-5" class="producer-item">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/sesia.jpg" alt="Sesia">
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
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/Info.png" alt="Informacje">
    <p>informacje jak pracujemy,<br> nasze telefony, adresy, numery kont,<br> program rabatowy</p>
  </div>
  <div class="info-box">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/amazonboy.png" alt="Koszty dostawy">
    <p>Koszty dostawy<br> zamówionych produktów</p>
  </div>
  <div class="info-box">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/fb.jpg" alt="Facebook">
    <p>Tutaj znajdziesz najświeższe nowości i ciekawe informacje.</p>
  </div>
<div class="info-box warehouse-box">
  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/img/W.jpg" alt="Hurtownia">
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




    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_64620898674a6aec3398d2_91709212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_64620898674a6aec3398d2_91709212',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_617344568674a6aec339d31_82705746',
  ),
  'page_content' => 
  array (
    0 => 'Block_1820491039674a6aec33a1b9_63904789',
  ),
  'hook_home' => 
  array (
    0 => 'Block_921529498674a6aec33a3d8_91063870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-home">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_617344568674a6aec339d31_82705746', 'page_content_top', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820491039674a6aec33a1b9_63904789', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}

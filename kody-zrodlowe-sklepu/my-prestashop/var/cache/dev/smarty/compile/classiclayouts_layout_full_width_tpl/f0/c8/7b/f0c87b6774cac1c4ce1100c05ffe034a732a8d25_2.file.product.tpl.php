<?php
/* Smarty version 3.1.48, created on 2024-12-01 01:02:52
  from '/var/www/html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674ba7ac07f6c4_82207412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c87b6774cac1c4ce1100c05ffe034a732a8d25' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/product.tpl',
      1 => 1733007526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_674ba7ac07f6c4_82207412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1438114509674ba7ac06c285_46249288', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106385856674ba7ac06fdd1_57732415', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1920412337674ba7ac070c60_72780335', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_1438114509674ba7ac06c285_46249288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1438114509674ba7ac06c285_46249288',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
    <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_1106385856674ba7ac06fdd1_57732415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_1106385856674ba7ac06fdd1_57732415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_662324541674ba7ac072163_08514999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_2086176727674ba7ac071d53_55458589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_662324541674ba7ac072163_08514999', 'product_cover_thumbnails', $this->tplIndex);
?>

        <div class="scroll-box-arrows">
          <i class="material-icons left">&#xE314;</i>
          <i class="material-icons right">&#xE315;</i>
        </div>
      <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1962764664674ba7ac071b46_45722238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="page-content" id="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2086176727674ba7ac071d53_55458589', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_tabs'} */
class Block_924646637674ba7ac072b81_75128419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="product-description-section">
    <h1 class="product-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <div class="product-details">
      <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

    </div>
  </div>
<?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_prices'} */
class Block_425740808674ba7ac076198_94457363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="custom-price-wrapper">
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
<?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_variants'} */
class Block_796659550674ba7ac077926_53253889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_buy'} */
class Block_1094296248674ba7ac076b70_58432552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796659550674ba7ac077926_53253889', 'product_variants', $this->tplIndex);
?>


      <!-- Kontener na manipulację ilością i przycisk -->
      <div class="quantity-add-to-cart-container">
        <div class="quantity-wrapper">
          
          <input id="quantity_wanted" class="js-quantity-product" type="number" value="1" min="1" name="qty">
          
        </div>

        <button type="submit" class="btn btn-primary btn-add-to-cart">
          <i class="material-icons">shopping_cart</i>
          Dodaj do koszyka
        </button>
      </div>
    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_miniature'} */
class Block_732704271674ba7ac07d1a1_59859861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_1569418768674ba7ac078308_85226545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <div class="products row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_732704271674ba7ac07d1a1_59859861', 'product_miniature', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_1144517752674ba7ac07e051_16477914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_354168831674ba7ac07e708_67635776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_834372670674ba7ac07edb4_17320031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Zawartość stopki -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_771907389674ba7ac07ebf1_06197590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_834372670674ba7ac07edb4_17320031', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1920412337674ba7ac070c60_72780335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1920412337674ba7ac070c60_72780335',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1962764664674ba7ac071b46_45722238',
  ),
  'page_content' => 
  array (
    0 => 'Block_2086176727674ba7ac071d53_55458589',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_662324541674ba7ac072163_08514999',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_924646637674ba7ac072b81_75128419',
  ),
  'product_prices' => 
  array (
    0 => 'Block_425740808674ba7ac076198_94457363',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1094296248674ba7ac076b70_58432552',
  ),
  'product_variants' => 
  array (
    0 => 'Block_796659550674ba7ac077926_53253889',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_1569418768674ba7ac078308_85226545',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_732704271674ba7ac07d1a1_59859861',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1144517752674ba7ac07e051_16477914',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_354168831674ba7ac07e708_67635776',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_771907389674ba7ac07ebf1_06197590',
  ),
  'page_footer' => 
  array (
    0 => 'Block_834372670674ba7ac07edb4_17320031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="mainproduct" class="product-page">

    <meta content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row product-container js-product-container">
      
      <!-- Sekcja Kategorii (Sidebar) -->
      <div class="col-lg-3 col-md-4 col-sm-12 categories-sidebar-vertical">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

      </div>


<!-- Sekcja Zdjęć Produktu -->
<div class="col-lg-6 col-md-4 col-sm-12">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1962764664674ba7ac071b46_45722238', 'page_content_container', $this->tplIndex);
?>




              
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_924646637674ba7ac072b81_75128419', 'product_tabs', $this->tplIndex);
?>




  <!-- Nowa sekcja: Komentarze i Recenzje -->
<section id="product-comments-reviews">
  <div class="reviews-section">
    <h2>Recenzje</h2>
    <p>Produkt nie posiada recenzji. <a href="#" class="add-review-link">Dodaj recenzję</a></p>
  </div>
  <div class="questions-section">
    <h2>Pytania do produktu</h2>
    <p>Zadaj pytanie dotyczące produktu. Nasz zespół z przyjemnością udzieli szczegółowej odpowiedzi na zapytanie.</p>
    <button type="button" class="ask-question-btn">Zadaj pytanie</button>
  </div>
</section>

</div>

<div class="product-information">
  <!-- Nagłówek i cena -->
  <h1 class="product-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
  <div class="price-summary">
  </div>

  <div class="additional-info">
    <p><strong>Obserwuj produkt:</strong> 
      <a href="#" class="watch-product">
        <i class="material-icons">favorite</i>
      </a>
    </p>
    <p><strong>Dodaj recenzję:</strong> 
      <span class="star-rating">
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
        <i class="material-icons star">star</i>
      </span>
    </p>
    <p><strong>Kod produktu:</strong> <?php if (is_string($_smarty_tpl->tpl_vars['product']->value['reference'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');
} else { ?>N/A<?php }?></p>
    <p><strong>Producent:</strong>
      <?php if (is_string($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'])) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>

      <?php } else { ?>
        N/A
      <?php }?>
    </p>
    <p><strong>Dostępność:</strong> 
      <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 szt.)
      <?php } else { ?>
        <span class="text-danger">Brak</span>
      <?php }?>
    </p>
  </div>

  
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_425740808674ba7ac076198_94457363', 'product_prices', $this->tplIndex);
?>




  <!-- Przycisk "Dodaj do koszyka" -->
<div class="product-actions js-product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1094296248674ba7ac076b70_58432552', 'product_buy', $this->tplIndex);
?>

</div>

</div>

    <!-- Sekcja Akcesoriów, Stopki itd. -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569418768674ba7ac078308_85226545', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1144517752674ba7ac07e051_16477914', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_354168831674ba7ac07e708_67635776', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_771907389674ba7ac07ebf1_06197590', 'page_footer_container', $this->tplIndex);
?>

  </section>



<?php
}
}
/* {/block 'content'} */
}

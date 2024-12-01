<?php
/* Smarty version 3.1.48, created on 2024-12-01 17:10:41
  from '/var/www/html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674c8a81e364a2_68693198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c87b6774cac1c4ce1100c05ffe034a732a8d25' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/product.tpl',
      1 => 1733064853,
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
function content_674c8a81e364a2_68693198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681386687674c8a81e23478_01765289', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_664718873674c8a81e29570_51582337', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1586370084674c8a81e2a6e7_63604725', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_1681386687674c8a81e23478_01765289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1681386687674c8a81e23478_01765289',
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
class Block_664718873674c8a81e29570_51582337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_664718873674c8a81e29570_51582337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_1122624479674c8a81e2bd58_86487053 extends Smarty_Internal_Block
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
class Block_1595434370674c8a81e2b869_67878474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1122624479674c8a81e2bd58_86487053', 'product_cover_thumbnails', $this->tplIndex);
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
class Block_1204467749674c8a81e2b5d0_30371030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="page-content" id="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1595434370674c8a81e2b869_67878474', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_tabs'} */
class Block_1545472174674c8a81e2c734_14417570 extends Smarty_Internal_Block
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
class Block_1582993972674c8a81e2f3f1_25007481 extends Smarty_Internal_Block
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
class Block_1019605580674c8a81e309c2_76929030 extends Smarty_Internal_Block
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
class Block_1593291202674c8a81e2faa7_69618505 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1019605580674c8a81e309c2_76929030', 'product_variants', $this->tplIndex);
?>


      <!-- Kontener na manipulację ilością i przycisk -->
      <div class="quantity-add-to-cart-container">
        <div class="quantity-wrapper">
          
          <input id="quantity_wanted" class="js-quantity-product" type="number" value="1" min="1" name="qty">
          
        </div>

        <button type="submit" data-button-action = "add-to-cart" class="btn btn-primary btn-add-to-cart">
          
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
class Block_1115913060674c8a81e33836_07192525 extends Smarty_Internal_Block
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
class Block_731220454674c8a81e313f4_47355410 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115913060674c8a81e33836_07192525', 'product_miniature', $this->tplIndex);
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
class Block_1960756006674c8a81e34943_22195048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1147690425674c8a81e35195_10316359 extends Smarty_Internal_Block
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
class Block_277447998674c8a81e359f6_15518845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Zawartość stopki -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2146240768674c8a81e357c6_03073427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_277447998674c8a81e359f6_15518845', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1586370084674c8a81e2a6e7_63604725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1586370084674c8a81e2a6e7_63604725',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1204467749674c8a81e2b5d0_30371030',
  ),
  'page_content' => 
  array (
    0 => 'Block_1595434370674c8a81e2b869_67878474',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1122624479674c8a81e2bd58_86487053',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_1545472174674c8a81e2c734_14417570',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1582993972674c8a81e2f3f1_25007481',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1593291202674c8a81e2faa7_69618505',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1019605580674c8a81e309c2_76929030',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_731220454674c8a81e313f4_47355410',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1115913060674c8a81e33836_07192525',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1960756006674c8a81e34943_22195048',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1147690425674c8a81e35195_10316359',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2146240768674c8a81e357c6_03073427',
  ),
  'page_footer' => 
  array (
    0 => 'Block_277447998674c8a81e359f6_15518845',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1204467749674c8a81e2b5d0_30371030', 'page_content_container', $this->tplIndex);
?>




              
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545472174674c8a81e2c734_14417570', 'product_tabs', $this->tplIndex);
?>




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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1582993972674c8a81e2f3f1_25007481', 'product_prices', $this->tplIndex);
?>




  <!-- Przycisk "Dodaj do koszyka" -->
<div class="product-actions js-product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1593291202674c8a81e2faa7_69618505', 'product_buy', $this->tplIndex);
?>

</div>

</div>

    <!-- Sekcja Akcesoriów, Stopki itd. -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_731220454674c8a81e313f4_47355410', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960756006674c8a81e34943_22195048', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1147690425674c8a81e35195_10316359', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2146240768674c8a81e357c6_03073427', 'page_footer_container', $this->tplIndex);
?>

  </section>



<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 3.1.48, created on 2024-11-29 21:56:34
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674a2a8214cfa9_27711424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1732913731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl' => 1,
  ),
),false)) {
function content_674a2a8214cfa9_27711424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1617038651674a2a8214a7e2_40937790', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_482001569674a2a8214ac46_43144892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2046811503674a2a8214b645_87465650 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="container">
          <div class="row">
            <!-- Nowy pionowy pasek kategorii -->
            <div class="col-lg-3 col-md-4 col-sm-12 categories-sidebar-vertical">
              <?php $_smarty_tpl->_subTemplateRender('file:modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['categories']->value['children'],'depth'=>0), 0, false);
?>
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
class Block_325876323674a2a8214b300_00716759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2046811503674a2a8214b645_87465650', 'hook_home', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1617038651674a2a8214a7e2_40937790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1617038651674a2a8214a7e2_40937790',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_482001569674a2a8214ac46_43144892',
  ),
  'page_content' => 
  array (
    0 => 'Block_325876323674a2a8214b300_00716759',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2046811503674a2a8214b645_87465650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-home">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482001569674a2a8214ac46_43144892', 'page_content_top', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_325876323674a2a8214b300_00716759', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}

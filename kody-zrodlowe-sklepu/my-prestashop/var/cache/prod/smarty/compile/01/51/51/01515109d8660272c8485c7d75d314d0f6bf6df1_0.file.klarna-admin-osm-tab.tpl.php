<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/klarna-admin-osm-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315c29832_61812455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01515109d8660272c8485c7d75d314d0f6bf6df1' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/klarna-admin-osm-tab.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315c29832_61812455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="osm-img-wrapper col-lg-3 col-md-6<?php if (!$_smarty_tpl->tpl_vars['footerPreviewUrl']->value) {?> hidden<?php }?>">
    <div class="image-preview-label klarna-font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer preview','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</div>
    <div>
        <img class="osm-img osm-img-footer" data-key="<?php echo $_smarty_tpl->tpl_vars['footerPlacementKey']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['footerPreviewUrl']->value;?>
">
    </div>
</div>
<div class="osm-img-wrapper col-lg-3 col-md-6<?php if (!$_smarty_tpl->tpl_vars['topPreviewUrl']->value) {?> hidden<?php }?>">
    <div class="image-preview-label klarna-font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top of page preview','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</div>
    <div>
        <img class="osm-img osm-img-topstrip" data-key="<?php echo $_smarty_tpl->tpl_vars['topPlacementKey']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['topPreviewUrl']->value;?>
">
    </div>
</div>
<div class="osm-img-wrapper col-lg-3 col-md-6<?php if (!$_smarty_tpl->tpl_vars['productPreviewUrl']->value) {?> hidden<?php }?>">
    <div class="image-preview-label klarna-font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product page preview','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</div>
    <div>
        <img class="osm-img osm-img-product" data-key="<?php echo $_smarty_tpl->tpl_vars['productPlacementKey']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['productPreviewUrl']->value;?>
">
    </div>
</div>
<div class="osm-img-wrapper col-lg-3 col-md-6<?php if (!$_smarty_tpl->tpl_vars['cartPreviewUrl']->value) {?> hidden<?php }?>">
    <div class="image-preview-label klarna-font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart page preview','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</div>
    <div>
        <img class="osm-img osm-img-cart" data-key="<?php echo $_smarty_tpl->tpl_vars['cartPlacementKey']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['cartPreviewUrl']->value;?>
">
    </div>
</div>
<?php }
}

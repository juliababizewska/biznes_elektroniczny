<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/sign-in-with-klarna-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315c4f8e1_32609113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28970903e0d175b727d8cb1da28e649e124a9dc2' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/sign-in-with-klarna-tab.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315c4f8e1_32609113 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="image-wrapper siwk-image-wrapper<?php if (!$_smarty_tpl->tpl_vars['siwkPreviewUrl']->value) {?> hidden<?php }?>">
    <div class="image-preview-label klarna-font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</div>
    <div>
        <img class="siwk-preview" src="<?php echo $_smarty_tpl->tpl_vars['siwkPreviewUrl']->value;?>
">
    </div>
</div><?php }
}

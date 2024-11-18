<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/info-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315b0bde9_50269170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce22157c97cc5a5a9bc45df31ba84900fe90d183' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/info-box.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315b0bde9_50269170 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info" role="alert">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['infoBox']->value['message'],'htmlall','UTF-8' ));?>
<br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['infoBox']->value['link'];?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['infoBox']->value['linkText'],'htmlall','UTF-8' ));?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['infoBox']->value['link2'])) && (isset($_smarty_tpl->tpl_vars['infoBox']->value['linkText2']))) {?> | <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['infoBox']->value['link2'],'htmlall','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['infoBox']->value['linkText2'],'htmlall','UTF-8' ));?>
</a><?php }?>
</div>
<?php }
}

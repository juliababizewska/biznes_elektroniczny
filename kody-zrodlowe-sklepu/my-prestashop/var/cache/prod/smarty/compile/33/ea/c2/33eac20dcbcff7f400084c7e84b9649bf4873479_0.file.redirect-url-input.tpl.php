<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/redirect-url-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315c590c4_71061809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33eac20dcbcff7f400084c7e84b9649bf4873479' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/redirect-url-input.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315c590c4_71061809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="klarna-input-wrapper">
    <div class="form-group">
        <label class="control-label col-lg-4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redirect URL','mod'=>'klarnapayment'),$_smarty_tpl ) );?>

        </label>
        <div class="col-lg-8 parent-container">
            <span class="copy-icon-button">
                <i class="material-icons">content_copy</i>
            </span>
            <input readonly type="text" name="KLARNA_SIGN_IN_WITH_KLARNA_REDIRECT_URL" id="KLARNA_SIGN_IN_WITH_KLARNA_REDIRECT_URL" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['signInWithKlarna']['redirectUrl'],'html','UTF-8' ));?>
" class="klarna-redirect-url-text-input">
            <p class="help-block">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please add this URL to your list of allowed redirect URLs in the "Sign in with Klarna" settings on the ','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
<a target="_blank" href="https://portal.klarna.com/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Klarna merchant portal','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</a>.
            </p>
        </div>
    </div>
</div><?php }
}

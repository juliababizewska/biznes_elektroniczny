<?php
/* Smarty version 3.1.48, created on 2024-11-15 13:48:21
  from '/var/www/html/modules/klarnapayment/views/templates/admin/settings/credential-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67374315b02e35_84126261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd13ac5b3edc07444fab2a928ad7c9500f0472138' => 
    array (
      0 => '/var/www/html/modules/klarnapayment/views/templates/admin/settings/credential-settings.tpl',
      1 => 1731674815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67374315b02e35_84126261 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="credentials-container col-lg-8">
    <div class="environment-selector">
        <label class="radio-inline environment-text">
            <input type="radio" class="environment-switch production" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['production_current_page_url'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production','mod'=>'klarnapayment'),$_smarty_tpl ) );?>

        </label>
        <label class="radio-inline environment-text">
            <input type="radio" class="environment-switch sandbox" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['klarnapayment']->value['sandbox_current_page_url'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Playground','mod'=>'klarnapayment'),$_smarty_tpl ) );?>

        </label>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klarnapayment']->value['regions'], 'regionData', false, 'regionKey');
$_smarty_tpl->tpl_vars['regionData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['regionKey']->value => $_smarty_tpl->tpl_vars['regionData']->value) {
$_smarty_tpl->tpl_vars['regionData']->do_else = false;
?>
        <div class="region-container">
            <p class="locale-title">
                <span class="klarna-credential-trigger">
                    <b>
                        <?php echo $_smarty_tpl->tpl_vars['regionData']->value['regionTitle'];?>

                    </b>
                    <?php if ($_smarty_tpl->tpl_vars['regionData']->value['isConnected']) {?>
                        <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connected','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                    <i class="icon-chevron-down"></i>
                </span>
            </p>
            <div id="credentials-<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
" class="credentials-container">
                <div class="row mb-0">
                    <div class="form-group mb-0" style="margin-bottom: 10px">
                        <label class="col-sm-2 control-label credentials-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test:','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['sandboxUsername'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Username (Test)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="sandboxUsername[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="off">
                        </div>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['sandboxPassword'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password (Test)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="sandboxPassword[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="new-password">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['sandboxClientId'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client ID (Test)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="sandboxClientId[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2 control-label credentials-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production:','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['prodUsername'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Username (Production)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="prodUsername[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="off">
                        </div>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['prodPassword'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password (Production)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="prodPassword[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="new-password">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['regionData']->value['prodClientId'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Client ID (Production)','mod'=>'klarnapayment'),$_smarty_tpl ) );?>
" name="prodClientId[<?php echo $_smarty_tpl->tpl_vars['regionKey']->value;?>
]" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}

<?php
/* Smarty version 3.1.48, created on 2024-11-18 15:05:34
  from '/var/www/html/admin123/themes/default/template/controllers/carriers/helpers/list/list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673b49ae09f6f3_63666630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1ea8e007a2d94006114c1c7094ce5f71137ef9' => 
    array (
      0 => '/var/www/html/admin123/themes/default/template/controllers/carriers/helpers/list/list_footer.tpl',
      1 => 1730986580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673b49ae09f6f3_63666630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1991397988673b49ae09dd38_32723379', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_1991397988673b49ae09dd38_32723379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1991397988673b49ae09dd38_32723379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (is_null($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
			<div class="panel">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Use one of our recommended carrier modules",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</h3>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"It seems there are no recommended carriers for your country.",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</p>
				<p><a href="https://www.prestashop.com/en/contact-us"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Do you think there should be one? Let us know!",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</a></p>
			</div>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
	<?php
}
}
/* {/block "after"} */
}

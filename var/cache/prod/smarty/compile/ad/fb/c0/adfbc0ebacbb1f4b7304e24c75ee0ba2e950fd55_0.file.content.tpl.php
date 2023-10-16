<?php
/* Smarty version 4.3.1, created on 2023-10-16 10:38:06
  from '/Users/lucas/Sites/localhost/presta-test/admin512dnkfh7a48aztkpcn/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652cf66e716537_45929479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfbc0ebacbb1f4b7304e24c75ee0ba2e950fd55' => 
    array (
      0 => '/Users/lucas/Sites/localhost/presta-test/admin512dnkfh7a48aztkpcn/themes/default/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cf66e716537_45929479 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

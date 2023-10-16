<?php
/* Smarty version 4.3.1, created on 2023-10-16 10:39:27
  from '/Users/lucas/Sites/localhost/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652cf6bfed7425_76809820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b0c95cf5092cef4b0b158c4cd517a2e23645dd' => 
    array (
      0 => '/Users/lucas/Sites/localhost/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cf6bfed7425_76809820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

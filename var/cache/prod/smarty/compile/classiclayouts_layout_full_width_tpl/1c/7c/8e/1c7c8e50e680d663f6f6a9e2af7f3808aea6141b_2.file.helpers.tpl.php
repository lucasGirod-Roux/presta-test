<?php
/* Smarty version 4.3.1, created on 2023-10-16 10:34:57
  from '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652cf5b18cae51_80088033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7c8e50e680d663f6f6a9e2af7f3808aea6141b' => 
    array (
      0 => '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cf5b18cae51_80088033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/lucas/Sites/localhost/presta-test/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/1c/7c/8e/1c7c8e50e680d663f6f6a9e2af7f3808aea6141b_2.file.helpers.tpl.php',
    'uid' => '1c7c8e50e680d663f6f6a9e2af7f3808aea6141b',
    'call_name' => 'smarty_template_function_renderLogo_364866521652cf5b18bc4c1_99546885',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_364866521652cf5b18bc4c1_99546885 */
if (!function_exists('smarty_template_function_renderLogo_364866521652cf5b18bc4c1_99546885')) {
function smarty_template_function_renderLogo_364866521652cf5b18bc4c1_99546885(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_364866521652cf5b18bc4c1_99546885 */
}

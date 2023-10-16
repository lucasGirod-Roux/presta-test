<?php
/* Smarty version 4.3.1, created on 2023-10-16 10:34:57
  from '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652cf5b17a0298_82140335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196626236d33be97541938a6247ce7cd9c38ab36' => 
    array (
      0 => '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/index.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cf5b17a0298_82140335 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1546801442652cf5b17998d3_24694892', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1465083074652cf5b179a671_44259280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1151284984652cf5b179ced2_39299014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_350495479652cf5b179c066_58686613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151284984652cf5b179ced2_39299014', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1546801442652cf5b17998d3_24694892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1546801442652cf5b17998d3_24694892',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1465083074652cf5b179a671_44259280',
  ),
  'page_content' => 
  array (
    0 => 'Block_350495479652cf5b179c066_58686613',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1151284984652cf5b179ced2_39299014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1465083074652cf5b179a671_44259280', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_350495479652cf5b179c066_58686613', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

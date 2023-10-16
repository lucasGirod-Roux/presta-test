<?php
/* Smarty version 4.3.1, created on 2023-10-16 10:34:57
  from '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652cf5b17b54d9_63743368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb22441e0258b32bc67dbcb324601820a9c8b9b' => 
    array (
      0 => '/Users/lucas/Sites/localhost/presta-test/themes/classic/templates/page.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cf5b17b54d9_63743368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117582156652cf5b17a86a0_64669783', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1399045302652cf5b17aa034_39728142 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_543582722652cf5b17a9207_91885101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399045302652cf5b17aa034_39728142', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_150894553652cf5b17ae706_55080234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1729998753652cf5b17af787_49921223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_271225736652cf5b17ada84_25430716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150894553652cf5b17ae706_55080234', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1729998753652cf5b17af787_49921223', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_49115701652cf5b17b28c2_92718920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_810135772652cf5b17b1184_11290858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49115701652cf5b17b28c2_92718920', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_117582156652cf5b17a86a0_64669783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117582156652cf5b17a86a0_64669783',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_543582722652cf5b17a9207_91885101',
  ),
  'page_title' => 
  array (
    0 => 'Block_1399045302652cf5b17aa034_39728142',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_271225736652cf5b17ada84_25430716',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_150894553652cf5b17ae706_55080234',
  ),
  'page_content' => 
  array (
    0 => 'Block_1729998753652cf5b17af787_49921223',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_810135772652cf5b17b1184_11290858',
  ),
  'page_footer' => 
  array (
    0 => 'Block_49115701652cf5b17b28c2_92718920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543582722652cf5b17a9207_91885101', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271225736652cf5b17ada84_25430716', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_810135772652cf5b17b1184_11290858', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

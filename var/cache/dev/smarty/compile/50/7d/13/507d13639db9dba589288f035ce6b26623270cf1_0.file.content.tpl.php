<?php
/* Smarty version 3.1.33, created on 2020-06-09 10:05:20
  from 'C:\xampp\htdocs\mitienda\admin535cxo39n\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edf42c0374311_80489843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507d13639db9dba589288f035ce6b26623270cf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin535cxo39n\\themes\\default\\template\\content.tpl',
      1 => 1591259564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edf42c0374311_80489843 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

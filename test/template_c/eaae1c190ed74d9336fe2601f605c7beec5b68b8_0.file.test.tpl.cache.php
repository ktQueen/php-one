<?php
/* Smarty version 3.1.33, created on 2019-08-29 03:16:51
  from '/Users/kangting/daojia/project/gbgl/php-one/test/tpl/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6743a3b1be06_00780539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaae1c190ed74d9336fe2601f605c7beec5b68b8' => 
    array (
      0 => '/Users/kangting/daojia/project/gbgl/php-one/test/tpl/test.tpl',
      1 => 1567048607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5d6743a3b1be06_00780539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kangting/daojia/project/gbgl/php-one/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Users/kangting/daojia/project/gbgl/php-one/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '6559364865d6743a3a411e6_73469841';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"网站标题",'table_bgcolor'=>"c0c0c0"), 0, false);
?><br>
<?php echo $_smarty_tpl->tpl_vars['atitle']->value;?>

<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];
echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo $_smarty_tpl->tpl_vars['arr1']->value['con']['title'];
echo $_smarty_tpl->tpl_vars['arr1']->value['con']['author'];?>


<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle1']->value);?>

<?php echo ($_smarty_tpl->tpl_vars['articleTitle2']->value).("yesterday.");?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articletitle3']->value);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articletitle4']->value)===null||$tmp==='' ? '111' : $tmp);?>

<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle1']->value, 'UTF-8');?>

<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle1']->value, 'UTF-8');?>

<?php echo nl2br($_smarty_tpl->tpl_vars['articleTitle5']->value);?>

<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>


<?php if ($_smarty_tpl->tpl_vars['name']->value > 90) {?>
优秀
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value > 60) {?>
及格
<?php } else { ?>
不及格
<?php }?>

<?php
$__section_vo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr3']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_vo_0_total = min(($__section_vo_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_vo'] = new Smarty_Variable(array());
if ($__section_vo_0_total !== 0) {
for ($__section_vo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index'] = 0; $__section_vo_0_iteration <= $__section_vo_0_total; $__section_vo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index']++){
?>
	<h4><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index'] : null)]['title'];?>
</h4>
    <h4><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index'] : null)]['count'];?>
</h4>
    <h4><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_vo']->value['index'] : null)]['img'];?>
</h4>
<?php
}
}
?>
<hr />


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr3']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
<br>
	<hr>
<?php
}
} else {
?>
变量值为空
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr4']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
<br>
	<hr>
<?php
}
} else {
?>
变量值为空
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php echo $_smarty_tpl->tpl_vars['myobj']->value->meth1(array('苹果','熟了'));
}
}

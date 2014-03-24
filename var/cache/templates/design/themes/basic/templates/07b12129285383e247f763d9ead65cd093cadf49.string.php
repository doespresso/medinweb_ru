<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 21:42:41
         compiled from "07b12129285383e247f763d9ead65cd093cadf49" */ ?>
<?php /*%%SmartyHeaderCode:203613888532f1d11ceb208-18305383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b12129285383e247f763d9ead65cd093cadf49' => 
    array (
      0 => '07b12129285383e247f763d9ead65cd093cadf49',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '203613888532f1d11ceb208-18305383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f1d11d00dd5_05804187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f1d11d00dd5_05804187')) {function content_532f1d11d00dd5_05804187($_smarty_tpl) {?><p><span>Обслуживание клиентов</span></p>
<ul>
<li><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">Ваши заказы</a></li>
<li><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Отложенные</a></li>
<li><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Список сравнения</a></li>
</ul><?php }} ?>

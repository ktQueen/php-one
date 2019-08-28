<?php
require_once('../vendor/smarty/smarty/libs/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->setLeftDelimiter('{');
	$smarty->setRightDelimiter('}');
	$smarty->setTemplateDir('tpl');
	$smarty->setCompileDir('template_c');
	// $smarty->setCacheDir('cache');
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->assign('atitle','这是一个标题');
	$smarty->assign('info','Hello World<br>我的第一个Smarty程序');
	$smarty->display('tpl/test.tpl');
    //smarty的配置方法
    // $smarty->left_delimiter="{";//左定界符
    // $smarty->right_delimiter="}";//右定界符
    // $smarty->template_dir="tpl";//html模板的位置
    // $smarty->compile_dir="template_c";//模板编译生成的文件目录
    // $smarty->cache_dir="cache";//缓存目录
    // $smarty->assign('aricletitle','文章标题');
    // $smarty->display('tpl/test.tpl');
?>
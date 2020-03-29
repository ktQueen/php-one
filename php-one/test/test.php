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

	$arr=array('title'=>'smarty学习','author'=>'小明');
	$smarty->assign('arr',$arr);//数组
	$smarty->assign('arr1',array('con'=>$arr));//数组a

	$smarty->assign('articleTitle1','hello world1');
	$smarty->assign('articleTitle2','hello world2');
	$smarty->assign('articleTitle3',time());
	$smarty->assign('articleTitle4','');
	$smarty->assign('articleTitle5','12
	34
	56');
	$smarty->assign('url','https://www.imooc.com/video/1059/0');

	$smarty->assign('name','12');

	$smarty->assign('arr3',array(array('title'=>'标题1','count'=>'内容1','img'=>'img1'),array('title'=>'标题2','count'=>'内容2','img'=>'img2')));

	class my_object{
		function meth1($param){
			return $param[0].'已经'.$param[1];
		}
	}
	$myobj=new my_object();
	$smarty->assign('myobj',$myobj);

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
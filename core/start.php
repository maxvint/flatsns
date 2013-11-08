<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// ThinkPHP 入口文件
// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);
// 记录内存初始使用
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();

global $global;

if(!isset($_REQUEST['app']) && !isset($_REQUEST['mod']) && !isset($_REQUEST['act'])){
	$global['_app'] = 'public';
	$global['_mod'] = 'Index';
	$global['_act'] = 'index';
}else{
	$global['_app'] = isset($_REQUEST['app']) && !empty($_REQUEST['app'])?$_REQUEST['app']:ftconfig('DEFAULT_APP');
	$global['_mod'] = isset($_REQUEST['mod']) && !empty($_REQUEST['mod'])?$_REQUEST['mod']:ftconfig('DEFAULT_MODULE');
	$global['_act'] = isset($_REQUEST['act']) && !empty($_REQUEST['act'])?$_REQUEST['act']:ftconfig('DEFAULT_ACTION');
}

// 系统目录定义
defined('THINK_PATH') 	or define('THINK_PATH', dirname(__FILE__).'/');
defined('APPS_PATH') 	or define('APPS_PATH', './apps/');
defined('APP_NAME') 	or define('APP_NAME', $global['_app']);
defined('APP_PATH') 	or define('APP_PATH', APPS_PATH.APP_NAME.'/');
defined('APP_DEBUG') 	or define('APP_DEBUG', false); // 是否调试模式

if(defined('ENGINE_NAME')) {
    defined('ENGINE_PATH') or define('ENGINE_PATH',THINK_PATH.'Extend/Engine/');
	require ENGINE_PATH.strtolower(ENGINE_NAME).'.php';
}else{
    defined('RUNTIME_PATH') or define('RUNTIME_PATH',APP_PATH.'Runtime/');
	$runtime = defined('MODE_NAME')?'~'.strtolower(MODE_NAME).'_runtime.php':'~runtime.php';
	defined('RUNTIME_FILE') or define('RUNTIME_FILE',RUNTIME_PATH.$runtime);
	if(!APP_DEBUG && is_file(RUNTIME_FILE)) {
	    // 部署模式直接载入运行缓存
	    require RUNTIME_FILE;
	}else{
	    // 加载运行时文件
	    require THINK_PATH.'Common/runtime.php';
	}	
}

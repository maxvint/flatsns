<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 扩展库
 *
 */
class Myclass {

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	/**
	 * 获取ip地址
	 * @return string
	 * @author 
	 **/
	public function get_ip()
	{
		$url = 'http://iframe.ip138.com/ic.asp';
		if(function_exists('curl_init'))
		{
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$data = curl_exec($ch);
		}
		else
		{
			$data = @file_get_contents($url);
		}
		preg_match('/\[(.*)\]/', $data, $ip);
		return @$ip[1];
	}

	/**
	 * 根据url获取当前域名
	 * @param $url URL地址
	 * @return string
	 * @author 
	 **/
	public function get_domain($url)
	{
		$host = $url ? $url : @$_SERVER['HTTP_HOST'];
		$host = strtolower($host);
		if(strpos($host, '/') !== false)
		{
			$parse = @parse_url($host);
			$host = $parse['host'];
		}
		$topleveldomaindb=array('com', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'idv', 'mobi', 'cc', 'me', 'cn', 'tv', 'in', 'hk', 'de', 'us', 'tw');
		$str = ''; 
		foreach($topleveldomaindb as $v)
		{
			$str.=($str ? '|' : '').$v;
		} 
		$matchstr = "[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
		if(preg_match("/".$matchstr."/ies", $host, $matchs))
		{
			$domain = $matchs['0'];
		}
		else
		{
			$domain = $host; 
		}
		return $domain;
	}


}
<?php
/**
 * PHP Application Skeleton
 * on Slim Framework & Pug(Jade) Template engine
 *
 * @author Denis Kuschenko <ziffyweb@gmail.com>
 * @link http://z1web.ru
 * @copyright 2016 z1WEBCORE
 */

class View {
	public
		$pug,
		$data,
		$domain,
		$subFolder;
	function __construct()
	{
		$this->pug = new Pug\Pug();
		$this->domain = getConfig('domain');
		$this->subFolder = getConfig('subFolder');
	}
	function render($view,$data=null)
	{
		$this->data['sitePath'] = 'http://' . $this->domain . '/' . $this->subFolder;
		$this->data['resPath'] = $this->data['sitePath'] . '/app/static';
		if ($data!=null)
			foreach ($data as $key => $item)
				$this->data[$key] = $item;

		$output = $this->pug->render(
			'app/templates/' . $view . '.pug',
			$this->data);
		return $output;
	}
}
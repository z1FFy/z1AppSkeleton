<?php
/**
 * PHP Application Skeleton
 * on Slim Framework & Pug(Jade) Template engine
 *
 * @author Denis Kuschenko <ziffyweb@gmail.com>
 * @link http://z1web.ru
 * @copyright 2016 z1WEBCORE
 */
namespace z1\App;

use Pug\Pug;


class View {
    public
        $pug,
        $data,
        $path,
        $query,
        $host,
        $basePath;
    function __construct()
    {
        $this->pug = new Pug([
            'prettyprint' => true
        ]);
    }

    function render($view,$data=null)
    {
        $this->data['host'] = $this->host;
        $this->data['basePath'] = $this->basePath;
        $this->data['sitePath'] = 'http://' . $this->host . $this->basePath;
        $this->data['resPath'] = $this->data['sitePath'] . '/app/static';
        $this->data['path'] = $this->path;
        $this->data['query'] = $this->query;
        if ($data!=null)
            foreach ($data as $key => $item)
                $this->data[$key] = $item;

        $output = $this->pug->render(
            'app/templates/' . $view . '.pug',
            $this->data);
        return $output;
    }
}
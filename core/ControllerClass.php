<?php
namespace core;

use core\View;
use Pug\Pug;
/**
 * Class Controller
 */
class Controller {
    /**
     * @var $view View
     */
    public
        $view,
        $pug,
        $data,
        $path,
        $query,
        $host,
        $basePath;

    function __construct()
    {
    }

    function render($view, $data = null)
    {
        $this->pug = new Pug([
            'prettyprint' => true
        ]);

        $this->data['host'] = $this->host;
        $this->data['basePath'] = $this->basePath;
        $this->data['sitePath'] = 'http://' . $this->host . $this->basePath;
        $this->data['resPath'] = $this->data['sitePath'] . '/app/static';
        $this->data['path'] = $this->path;
        $this->data['query'] = $this->query;
        if ($data != null) {
            foreach ($data as $key => $item) {
                $this->data[$key] = $item;
            }
        }

        $output = $this->pug->render(
            'app/templates/' . $view . '.pug',
            $this->data);
        return $output;
    }
}
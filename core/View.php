<?php
namespace core;

use Pug\Pug;
/**
 * Class Controller
 */
class View {

    function __construct()
    {
    }

    static function render($view, $data = null)
    {
        $pug = new Pug([
            'prettyprint' => true
        ]);

        if ($data != null) {
            foreach ($data as $key => $item) {
                $data[$key] = $item;
            }
        }

        $output = $pug->render(
            'app/templates/' . $view . '.pug',
            $data);
        return $output;
    }
}
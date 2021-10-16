<?php

namespace App\Controllers;

class Templatecontroller extends BaseController
{
    public function load_template($section, $title, $defaultnav = true)
    {
        if ($defaultnav) {
            $stylebody = 'container-fluid';
            $nav = view('pages/template/nav');
        } else {
            $stylebody = 'container-background';
            $nav = view('pages/backoffice/modules/nav');
        }

        $structure = array(
            'head' => view('pages/template/head', $title),
            'stylebody' => $stylebody,
            'nav' => $nav,
            'container' => $section,
            'footer' => view('pages/template/footer'),
        );
        return view('template', $structure);
    }
}

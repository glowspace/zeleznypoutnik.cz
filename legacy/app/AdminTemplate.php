<?php

namespace Poutnik;

/**
 * Třída pro práci s grafickými šablonami admina
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 */

class AdminTemplate extends Template
{

    public function renderAdmin($template_name)
    {
        $content = $this->getFromDir(ROOT . "admin/layout/template",$template_name);
        return $content;
    }

    public function getTitleAdmin()
    {
        // Zobrazení titulku
        if (isset($this->title))
        {
            $title = $this->title . ' - Administrace';

            return $title;
        }
        else
        {
            $title = 'Administrace Železného poutníka';

            return $title;
        }
    }

}
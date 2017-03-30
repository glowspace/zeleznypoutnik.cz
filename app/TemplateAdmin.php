<?php

namespace Poutnik;

/**
 * Třída pro práci s grafickými šablonami admina
 *
 * @author Michael Dojčár <michael.dojcar@gmail.com>
 */

class TemplateAdmin extends Template
{

    /**
     * @param string $template_name
     * @return mixed
     */
    public function render($template_name)
    {
        $content = $this->renderFromDir(ROOT . "/admin/layout/template/",$template_name);
        return $content;
    }

    /**
     * @return string
     */
    public function getTitle()
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
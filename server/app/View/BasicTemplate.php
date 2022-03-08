<?php

namespace App\View;

class BasicTemplate
{

        /**
         * @return void
         */
        public static function view(string $template, array $vars = []):void
        {
            ob_start();          
            extract($vars);
            $viewName = self::getTemplateFullPath($template);
            include self::getTemplateFullPath('templates/template.phtml');
            echo ob_get_clean();

        }

        /**
         * @param string $filename
         * 
         * @return string
         */
        private static function getTemplateFullPath(string $filename): string
        {
                return getcwd().'/app/View/'.$filename;
                
        }
}

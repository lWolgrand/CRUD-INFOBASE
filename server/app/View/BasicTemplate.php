<?php

namespace Server\View;

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
            include self::getTemplateFullPath('templates/template.php');
            echo ob_get_clean();

        }

        /**
         * @param string $filename
         * 
         * @return string
         */
        private static function getTemplateFullPath(string $filename): string
        {
                return getcwd().'/resources/view/'.$filename;
                
        }
}

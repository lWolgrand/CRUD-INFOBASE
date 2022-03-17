<?php




/**
 * @function error -
 * @var $email string
 */

function error($message)
{

    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
            $erro = 'Insira um email válido.';
        }
        print_r($erro); 

}
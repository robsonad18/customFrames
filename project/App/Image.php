<?php

namespace App;

/**
 * RESPONSAVEL POR ACOES REFERENTES A IMAGENS DO SITE
 * @author Robson Lucas
 */
final class Image
{
    /**
     * RETORNO ARRAY DE IMAGENS DO SLICK NA HOME
     * @return array
     */
    final public static function get() : array
    {
        try {
            $jsonImagem = file_get_contents(ORIGEM . '/Json/imagens.json');

            if (empty($jsonImagem)) throw new \Exception('Erro ao acessar arquivo JSON das imagens.');

            $imagens = json_decode($jsonImagem, true);

            if (!is_array($imagens) or is_null($imagens)) throw new \Exception('Imagens não foram encontradas.');
            
            return $imagens;
        } catch (\Error $e) {
            echo $e->getMessage();
        }
    }
}

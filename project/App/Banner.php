<?php 
namespace App;

use ErrorException;

/**
 * RESPONSAVEL POR ACOES RELACIONADAS AO BANNER
 * @author Robson Lucas
 */
abstract class Banner
{
    /**
     * RETORNA DADOS BANNER
     * @return array
     */
    public static function get () : array
    {
        try 
        {
            $jsonBanner = file_get_contents(ORIGEM.'/Json/banner.json');
            
            if (empty($jsonBanner)) throw new \Exception("Erro ao acessar arquivo JSON do banner.");

            $banner = json_decode($jsonBanner, true);

            if (!is_array($banner) or is_null($banner)) throw new \ErrorException('Banner não encontrado.');

            return $banner['banner'];
        } catch (\PDOException $errorBanner)
        {
            echo $errorBanner->getMessage($errorBanner.__CLASS__);
        }
    }
}

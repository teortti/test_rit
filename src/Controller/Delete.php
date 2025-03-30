<?php 

declare(strict_types=1);
namespace App\Controller;

class Delete
{
    public function __invoke(array $params):array
	{
        $assetType = $params[0];
        $key = $params[1];
        $_SESSION[$assetType][$key]['deleted'] = 1;
        header("Location: /");
        return $_SESSION[$assetType][$key];
    }
}


?>
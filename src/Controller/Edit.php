<?php 

declare(strict_types=1);
namespace App\Controller;
use App\Model\Assets;

class Edit
{
    public function __invoke(array $params):array
	{
        $assetType = $params[0];
        $key = $params[1];
        $data = new Assets();
        $data = $data()[$assetType][$key];
        require( __DIR__ ."/../Form/Edit.php");
        if ($_POST['submit']) {
            unset($_POST['submit']);
            foreach ($_POST as $field => $value) {
                $_SESSION[$assetType][$key][$field] = $value;
            }
        }
        return $data;
    }
}


?>
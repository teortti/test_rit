<?php 

declare(strict_types=1);

namespace App\Controller;
use App\Model\Assets;

class Add
{
    public function __invoke():array
	{
        $data = new Assets();
        $data = $data();
        $assetType = ($_POST['monetary_type'] == 1)?'monetary_assets':'non_monetary_assets';
        $key = array_key_last($data[$assetType])+1;
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
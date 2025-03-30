<?php 

declare(strict_types=1);
namespace App\Controller;
use App\Model\Assets;
class Main extends Assets
{
    public function __invoke():array {
        $data = new Assets();
        return $data();
    }
}
?>
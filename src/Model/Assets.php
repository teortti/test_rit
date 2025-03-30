<?php 

declare(strict_types=1);
namespace App\Model;

class Assets{
    public function __invoke(): array
    {
        $data = ["monetary_assets"=>[[
                "name" =>"Счет №5",
                "bank_name"=>"ЕвроВорБанк",
                "summ"=>"1000",
                "currency"=>"rub",
                "monetary" => 1,
                "deleted" =>0
            ],
            [
                "name" =>"Счет №3",
                "bank_name"=>"Внешторгабк",
                "summ"=>"5",
                "currency"=>"usd",
                "monetary" => 1,
                "deleted" =>0
            ],
            [
                "name" =>"Касса",
                "bank_name"=>"",
                "summ"=>"100",
                "currency"=>"rub",
                "monetary" => 1,
                "deleted" =>0
            ],
            [
                "name" =>"Талоны",
                "bank_name"=>"",
                "summ"=>"3000",
                "currency"=>"rub",
                "monetary" => 1,
                "deleted" =>0
            ]
        ],
        "non_monetary_assets"=>[
            [
                "name"=>"Торговое здание по адресу Бассейная-6",
                "start_price"=>"30000",
                "residual_price"=>"5000",
                "estimated_value"=>"1000000",
                "currency"=>"rub",
                "monetary"=>0,
                "info"=>[
                    "year_of_construction"=>"1970",
                    "inventory_number"=>"7"
                ],
                "deleted" =>0
            ],
            [
                "name"=>"100 килограммов гвоздей 2000 года изготовления",
                "start_price"=>"1000",
                "residual_price"=>"100",
                "estimated_value"=>"2000",
                "currency"=>"rub",
                "monetary"=>0,
                "info"=>[
                    "qty"=>"100",
                    "unit_of_measurement"=>"kg",
                    "issued_at"=>"18.02.2000"
                ],
                "deleted" =>0
            ]
        ]];
        if ($_SESSION['monetary_assets']) {
            foreach ($_SESSION['monetary_assets'] as $key => $value) {
                $data['monetary_assets'][$key] = $value;
            }
        }
        elseif ($_SESSION['non_monetary_assets']) {
            foreach ($_SESSION['non_monetary_assets'] as $key => $value) {
                $data['non_monetary_assets'][$key] = $value;
            }
        }
        return $data;
    }
}
?>
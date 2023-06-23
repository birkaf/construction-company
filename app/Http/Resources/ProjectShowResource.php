<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->prices) {
            $fullConstructionPrices = [];
            $withoutFinishingPrices = [];

            foreach ($this->prices as $price) {
                $size_id = $price->size_id;
                $price_value = $price->price;

                if ($price->size->is_full_price) {
                    $fullConstructionPrices[] = [
                        'sizeId' => $size_id,
                        'price' => $price_value,
                    ];
                } else {
                    $withoutFinishingPrices[] = [
                        'sizeId' => $size_id,
                        'price' => $price_value,
                    ];
                }
            }
        }
        return [
            'id' => $this->id,
            'idCategory' => $this->category_id,
            'projectName' => $this->title,
            'images' => $this->images,
            's' => $this->s,
            'size'=> [
                'width' =>  $this->width,
                'height' => $this->height
            ],
            'bedroom' => $this->bedroom,
            'bathroom' => $this->bathroom,
            'minprice' => $this->minprice,
            'promoID' => $this->deal_id,
            'mansarda' => $this->mansarda,
            'floor' => $this->floor,
            'constructionPeriod'=>$this->construction_period,
            'sizeOnPlan' => $this->size_on_plan,
            'complects' => [
                'fullConstruction' => [$this->full_construction],
                'withoutFinishing' => [$this->without_finishing]
            ],
            'prices' => [
                'fullConstruction' => $fullConstructionPrices,
                'withoutFinishing' => $withoutFinishingPrices,
            ],
        ];
    }
}

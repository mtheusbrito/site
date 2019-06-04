<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Slide;

/**
 * Class SlideTransformer.
 *
 * @package namespace App\Transformers;
 */
class SlideTransformer extends TransformerAbstract
{
    /**
     * Transform the Slide entity.
     *
     * @param \App\Entities\Slide $model
     *
     * @return array
     */
    public function transform(Slide $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}

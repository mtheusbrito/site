<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Membro;

/**
 * Class MembroTransformer.
 *
 * @package namespace App\Transformers;
 */
class MembroTransformer extends TransformerAbstract
{
    /**
     * Transform the Membro entity.
     *
     * @param \App\Entities\Membro $model
     *
     * @return array
     */
    public function transform(Membro $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}

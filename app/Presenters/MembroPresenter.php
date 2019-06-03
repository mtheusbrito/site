<?php

namespace App\Presenters;

use App\Transformers\MembroTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MembroPresenter.
 *
 * @package namespace App\Presenters;
 */
class MembroPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MembroTransformer();
    }
}

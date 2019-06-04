<?php

namespace App\Presenters;

use App\Transformers\SlideTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SlidePresenter.
 *
 * @package namespace App\Presenters;
 */
class SlidePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SlideTransformer();
    }
}

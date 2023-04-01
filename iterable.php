<?php
require_once './iterator.php';

/**
 * 集合体(iterableなもの)を表すインターフェース
 */
interface IterableSample
{

    /**
     * 処理を繰り返す反復子を返却します
     *
     * @return IteratorSample
     */
    public function iterator(): IteratorSample;
}

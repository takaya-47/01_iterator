<?php

/**
 * iterableなものに対し、処理を繰り返す反復子を表すインターフェース
 */
interface IteratorSample
{

    /**
     * 集合体の次の要素が存在するか否かを判定します
     *
     * @return bool
     */
    public function hasNext(): bool;

    /**
     * 集合体の次の要素を返却します
     * FIXME: 戻り値的には本棚の本だが、Bookクラスは他クラスと関連がないので戻り値に書けない。
     *
     * @return mixed
     */
    public function next();
}

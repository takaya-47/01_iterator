<?php
require_once './iterable.php';
require_once './book.php';
require_once './bookshelfiterator.php';

/**
 * 本棚を表すクラス
 */
class BookShelf implements IterableSample
{
    private array $books; // 本棚にある本
    private int $last = 0; // 本棚の最後尾の位置を表す数値

    public function __construct()
    {
        $this->books = [];
    }

    /**
     * 指定した位置のBookを返却します
     *
     * @param  int $index
     * @return Book
     */
    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    /**
     * 本棚の最後尾に本を追加し、最後尾の数字を一つ追加します
     *
     * @param  mixed $book
     * @return array
     */
    public function appendBook(Book $book): void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * 本棚にある本の冊数を返却します
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->last;
    }

    /**
     * 本棚の本をスキャンするための反復子役クラスのインスタンスを返却します
     *
     * @return BookShelfIteratorSample
     */
    public function iterator(): BookShelfIteratorSample
    {
        return new BookShelfIteratorSample($this);
    }
}
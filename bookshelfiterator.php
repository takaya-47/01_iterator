<?php
require_once './iterator.php';
require_once './bookshelf.php';
require_once './book.php';

/**
 * 本棚における繰り返し処理を表すクラス
 */
class BookShelfIteratorSample implements IteratorSample
{
    private BookShelf $book_shelf; // 本棚のインスタンス
    private int $index; // 繰り返しの回数を表す数値

    public function __construct(BookShelf $book_shelf)
    {
        $this->book_shelf = $book_shelf;
        $this->index = 0;
    }

    /**
     * 本棚に次の本があるか否かを判定します
     *
     * @return bool
     */
    public function hasNext(): bool
    {
        if ($this->index < $this->book_shelf->getLength()) return true;

        return false;
    }

    /**
     * 本棚に次の本があれば返却します
     *
     * @return Book
     */
    public function next(): Book
    {
        if ( ! $this->hasNext()) throw new Exception('本棚にはもう本がありません！');

        $book = $this->book_shelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
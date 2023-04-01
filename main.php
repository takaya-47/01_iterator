<?php
require_once './bookshelf.php';
require_once './book.php';

/**
 * 動作確認用のクラス
 */
Class Main
{
    public function execute()
    {
        $book_shelf = new BookShelf();
        // 本棚に本を追加
        $book_shelf->appendBook(new Book('ワンピース'));
        $book_shelf->appendBook(new Book('ドラゴンボール'));
        $book_shelf->appendBook(new Book('銀魂'));
        $book_shelf->appendBook(new Book('名探偵コナン'));
        $book_shelf->appendBook(new Book('初めの一歩'));

        // iteratorを使って本棚にある本の名前を順番に表示する
        $book_shelf_iterator = $book_shelf->iterator();
        while ($book_shelf_iterator->hasNext()) {
            $book = $book_shelf_iterator->next();
            echo $book->getName() . "\n";
        }
    }
}

$main = new Main();
$main->execute();

// 呼び出し方は、ターミナルでphp main.phpと打つだけ。
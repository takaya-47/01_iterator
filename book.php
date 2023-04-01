<?php

/**
 * 本を表すクラス
 */
class Book
{
    private string $name; // 本の名前


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 本の名前を返却します
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

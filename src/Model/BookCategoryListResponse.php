<?php

declare(strict_types=1);

namespace App\Model;

final class BookCategoryListResponse
{
    /**
     * @param BookCategoryListItem[] $items
     */
    private array $items;

    /**
     * @param BookCategoryListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return BookCategoryListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}

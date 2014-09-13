<?php

namespace Lw\Application\Service\Wish;

use Lw\Domain\Model\Wish\WishEmail;
use Lw\Domain\Model\Wish\WishId;
use Lw\Domain\Model\Wish\WishRepository;

class AddWishService
{
    /**
     * @var WishRepository
     */
    private $wishRepository;

    public function __construct(WishRepository $wishRepository)
    {
        $this->wishRepository = $wishRepository;
    }

    /**
     * @param string $userId
     * @param string $email
     * @param string $content
     */
    public function execute($userId, $email, $content)
    {
        $this->wishRepository->persist(
            new WishEmail(new WishId(), $userId, $email, $email, $content)
        );
    }
}

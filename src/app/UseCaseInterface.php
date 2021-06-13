<?

namespace Church\app;

use Church\adapter\RepositoryInterface;

interface UseCaseInterface{

    public function __construct(RepositoryInterface $repository);
    public function created();
    public function updated();
    public function findAll(int $id);
    public function deleted(int $id);

}
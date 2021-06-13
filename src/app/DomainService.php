<?

namespace Church\app;

use Church\adapter\RepositoryInterface;

class DomainService implements UseCaseInterface{

    private $repository;

    public function __construct(RepositoryInterface $repositoryInterface)
    {
        $this->repository = $repositoryInterface;
    }

    public function created()
    {
        $this->repository->created();
    }

    public function updated()
    {
        $this->repository->updated();
    }

    public function findAll(int $id)
    {
        $this->repository->findAll($id);
    }

    public function deleted(int $id)
    {
        $this->repository->deleted($id);
    }


}
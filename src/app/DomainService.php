<?

namespace Church\app;

#use Church\repository\RepositoryInterface;

class DomainService implements UseCaseInterface{

    private $repository;

    public function __construct($repositoryInterface)
    {
        $this->repository = $repositoryInterface;
    }

    public function index()
    {
        return $this->repository->index();
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
<?

namespace Church\app;

use Church\repository\RepositoryInterface;

interface UseCaseInterface{

    public function __construct(RepositoryInterface $repository);
    public function index();
    public function created();
    public function updated();
    public function findAll(int $id);
    public function deleted(int $id);

}
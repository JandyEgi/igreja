<?

namespace Church\repository;

interface RepositoryInterface{
    public function index();
    public function created();
    public function updated();
    public function findAll(int $id);
    public function deleted(int $id);
}
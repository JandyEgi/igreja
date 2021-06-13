<?

namespace Church\adapter;

interface RepositoryInterface{
    public function created();
    public function updated();
    public function findAll(int $id);
    public function deleted(int $id);
}
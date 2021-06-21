<?

namespace Church\repository;

use Church\app\upload;
use Church\conexao\db;
use Church\entity\Models;

class DatabaseRespositoryEvents extends Models implements RepositoryInterface{

    private upload $upload_image;
    private db $db_query;

    public function __construct()
    {
        $this->upload_image = new upload();
        $this->db_query = new db();
    }

    public function index()
    {
        return $this->db_query->select("SELECT * FROM tb_events");
      /*$create =*/ #return 
      #$this->setData($create[0]);

    }

    public function created()
    {

        $create = $this->db_query->select("INSERT INTO tb_events(name,description,image) VALUES(:name,:description,:image)",
        array(
            ":name"=>$this->getname(),
            ":description"=>$this->getdescription(),
            ":image"=>$this->upload_image->add_image($this->getimage(),"events"),
        ));

        $this->setData($create[0]);

    }

    public function updated()
    {
        
    }

    public function findAll(int $id)
    {
        
    }

    public function deleted(int $id)
    {
        
    }

}
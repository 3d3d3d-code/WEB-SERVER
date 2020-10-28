





    <?php

    class Users_exo{
    
    
        private PDO #$pdo;


        public function __construct()
        {
            $this->pdo = DbConnection::getDb();
        }
        
        public function findAll(){
        
        
            $statement =$this->pdo->query("SELECT * FROM users ");
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        }
        $users = new Users();
        $users->findAll();
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }


    ?>




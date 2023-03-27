<?php
class Model {
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/costa_information.db';

        try
        {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => pDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false));
        }
        catch(PDOException $e)
        {
            echo "Does not work!";
            print new Exception($e->getMessage());
        }
        
    }

    # Database functions
    function dbCreateTable()
    {
        try
        {
            # 3D model table
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, title TEXT, slogan TEXT, title_name TEXT, drink_description TEXT)");
            
            # Main Page Table
            $this->dbhandle->exec("CREATE TABLE Main_page (Id INTEGER PRIMARY KEY, title TEXT, general_drink_description TEXT)");
            
            # Footer table
            $this->dbhandle->exec("CREATE TABLE Footer (Id INTEGER PRIMARY KEY, title TEXT, items TEXT)");

            # Modal Table
            $this->dbhandle->exec("CREATE TABLE Modal (Id INTEGER PRIMARY KEY, title TEXT, Modal_description TEXT)");

            return "Model_3D table has been created succesfully!";
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbInsertData()
    {
        $JsonFileContent = file_get_contents(__DIR__."/data.json");
        $array = json_decode($JsonFileContent, true);
        foreach ($array as $value) {
            foreach ($value as $value1)
            {
                foreach ($value1 as $value2)
                {
                }
            }
          }
        try
        {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (title)
                    VALUES (".'$value2'.")"
            );
            return "X3D model data inserted succesfully inside test1.db";
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbGetJsonMuseumData()
    {
        $list_tables = array("Model_3D","Main_page","footer","Modal");
        $result = array();
        try
        {
            foreach ($list_tables as $value) 
            {
                $sql = 'SELECT * FROM '.$value;

                $stmt = $this->dbhandle->query($sql);


                $i=0;

                while($data = $stmt->fetch())
                {
                    foreach ($data[$i] as $final_value)
                    {
                        array_push($result,$final_value);
                    }
                    $i++;
                }
                 $this->dbhandle = NULL;
              }
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
    }

    public function dbGetBrand()
    {
        return array("-","Coke","Pepsi","Light","Dark");
    }

    public function model3D_info()
    {
        return array
        (
            'model_1' => 'Coke Can 3D Image 1',
        );
    }
}
?>
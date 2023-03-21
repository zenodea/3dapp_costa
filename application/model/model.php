<?php
class Model {
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/test1.db';

        try
        {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => pDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ));
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
            # Create table for 3d models
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");

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
        try
        {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelSubtitle)
                    VALUES (1,'strin_1', 'string_2', 'string_3', 'string_4', 'string_5')"
            );
            return "X3D model data inserted succesfully inside test1.db";
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbGetData()
    {
        try
        {
            $sql = 'SELECT * FROM Model_3D';

            $stmt = $this->dbhandle->query($sql);

            $result = null;

            $i=0;

            while($data = $stmt->fetch())
            {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];

                $i++;
            }
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
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
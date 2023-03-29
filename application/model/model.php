<?php
class Model 
{
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

            # Requests Table
            $this->dbhandle->exec("CREATE TABLE Request (Id INTEGER PRIMARY KEY, email TEXT, category TEXT, request_description TEXT)");

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

        // Get data from data.json
        $array = json_decode($JsonFileContent, true);

        // Separating the different sections of the json, also, array_pop() is used, as it is O(1)
        // Note, array_pop gives the items in the reversed order, thus we start with the last element of the JSON
        $modal = array_pop($array);
        $drinks = array_pop($array);
        $footer = array_pop($array);
        $main_page = array_pop($array);
        try
        {
            // Add main page items to database
            foreach($main_page as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Main_page (title,general_drink_description)
                            VALUES (:title, :drink_description)");
                    $stmt->bindValue(':drink_description', array_pop($item));
                    $stmt->bindValue(':title', array_pop($item));
                    $result = $stmt->execute();
            }

            // Add drink items to database
            foreach($drinks as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Model_3D (title,slogan,title_name,drink_description)
                            VALUES (:title, :slogan, :title_name, :drink_description)");
                    $stmt->bindValue(':drink_description', array_pop($item));
                    $stmt->bindValue(':title_name', array_pop($item));
                    $stmt->bindValue(':slogan', array_pop($item));
                    $stmt->bindValue(':title', array_pop($item));
                    $result = $stmt->execute();
            }

            // Add modal items to database
            foreach($modal as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Modal (title,Modal_description)
                            VALUES (:title, :modal_description)");
                    $stmt->bindValue(':modal_description', array_pop($item));
                    $stmt->bindValue(':title', array_pop($item));
                    $result = $stmt->execute();
            }

            // Add footer items to database
            foreach($footer as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Footer (title, items)
                            VALUES (:section, :array)");
                    $stmt->bindValue(':array', implode(', ',array_pop($item)));
                    $stmt->bindValue(':section', array_pop($item));
                    $result = $stmt->execute();
            }
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        return "X3D model data inserted succesfully inside test1.db";
        $this->dbhandle = NULL;
    }

    function dbGetJsonMuseumData()
    {
        $result = array();
        try
        {
                $sql = 'SELECT title,slogan,title_name,drink_description FROM Model_3d';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                $sql = 'SELECT title, general_drink_description FROM Main_page';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll();
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                $sql = 'SELECT title, items FROM footer';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                $sql = 'SELECT title, Modal_description FROM Modal';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                $this->dbhandle = NULL;
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        return $result;
    }

    function dbAddRequest($email, $request, $description)
    {
        try
        {
        $stmt=$this->dbhandle->prepare("INSERT INTO Request (email,category,request_description)
                VALUES (:email, :category, :request_description)");

        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':category', $request);
        $stmt->bindValue(':request_description', $description);
        $result = $stmt->execute();
        
        $this->dbhandle = NULL;
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        return "Request Added!";
    }

    function dbGetRequestData()
    {
        $result = array();
        try
        {
                $sql = 'SELECT Id, email,category,request_description FROM Request';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }
        }
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        $finalString = "";
        foreach($result as $value)
        {
            $value = array_values($value);
            $finalString .= '<tr class="table-primary">';
            $finalString .= '<th scope="row">'. $value[0] . '</th>';
            $finalString .= '<th scope="row">'. $value[1] . '</th>';
            $finalString .= '<th scope="row">'. $value[2] . '</th>';
            $finalString .= '<th scope="row">'. $value[3] . '</th>';
            $finalString .= '<td>
                <button onclick="remove_from_request('.$value[0].')" id="remove_button_'.$value[0].'">Remove</button>
            </td> 
            </tr>';
        } 
        return $finalString;
    }

    function dbRemoveRequest($id)
    {
        try
        {
            $stmt=$this->dbhandle->prepare('DELETE FROM Request WHERE Id=:Id');
            $stmt->bindValue(':Id', $id);
            $result = $stmt->execute();
        }

        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
        return $result;
    }
}
?>
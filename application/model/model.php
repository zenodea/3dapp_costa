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

            # Header table
            $this->dbhandle->exec("CREATE TABLE Header (Id INTEGER PRIMARY KEY, title TEXT, items TEXT)");

            # Modal Table
            $this->dbhandle->exec("CREATE TABLE Modal (Id INTEGER PRIMARY KEY, title TEXT, Modal_description TEXT)");

            # Requests Table
            $this->dbhandle->exec("CREATE TABLE Request (Id INTEGER PRIMARY KEY, email TEXT, category TEXT, request_description TEXT,comment TEXT)");

            # Gallery Table
            $this->dbhandle->exec("CREATE TABLE Carousel (Id INTEGER PRIMARY KEY, title TEXT, explanation TEXT, photo_url TEXT)");

            # Accordion Table
            $this->dbhandle->exec("CREATE TABLE Accordion (Id INTEGER PRIMARY KEY, title TEXT, explanation TEXT)");

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
        $accordion = array_pop($array);
        $carousel = array_pop($array);
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

            // Add carousel items to database
            foreach($carousel as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Carousel (title, explanation, photo_url)
                            VALUES (:title, :explanation, :photo_url)");
                    $stmt->bindValue(':photo_url', array_pop($item));
                    $stmt->bindValue(':explanation', array_pop($item));
                    $stmt->bindValue(':title', array_pop($item));
                    $result = $stmt->execute();
            }

            // Add accordion items to database
            foreach($accordion as $item)
            {
                    $stmt=$this->dbhandle->prepare("INSERT INTO Accordion (title, explanation)
                            VALUES (:title, :explanation)");
                    $stmt->bindValue(':explanation', array_pop($item));
                    $stmt->bindValue(':title', array_pop($item));
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

    function dbAddGallery()
    {
        try
        {
            $dataToSave = base64_encode(file_get_contents('assets/images/teaser-latte-macro-389x280.jpg.webp'));
            $title = "try";
            $description = "try";
            $stmt=$this->dbhandle->prepare("INSERT INTO Gallery (title,explanation,photo)
                    VALUES (:title, :explanation, :photo)");
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':explanation', $description);
            $stmt->bindValue(':photo', $dataToSave);
            $result = $stmt->execute();
            return $dataToSave;
        } 
        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
    }

    function dbGetGallery()
    {
        $result = array();
        try
        {
            $sql = 'SELECT * FROM Gallery';
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
            $finalString .= '<h2>'. $value[1] . '</h2>';
            $finalString .= '<h2>'. $value[2] . '</h2>';
            $finalString .= '<a href="data:image/jpeg;base64,'.$value[3].'">
            <img class="img-fluid" src="data:image/jpeg;base64,'. $value[3] . '" alt="Angular"/></a>';
        } 
        return $finalString;
    }

    function dbGetJsonMuseumData()
    {
        $result = array();
        try
        {
                // Get data for the main page of the SPA
                $sql = 'SELECT title, general_drink_description FROM Main_page';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll();
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                // Get data for the footer of the SPA
                $sql = 'SELECT title, items FROM footer';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                // Get data for the models of the SPA
                $sql = 'SELECT title,slogan,title_name,drink_description FROM Model_3d';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                // Get data for the Modal of the SPA
                $sql = 'SELECT title, Modal_description FROM Modal';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                // Get data for the Modal of the SPA
                $sql = 'SELECT title, explanation FROM Accordion';
                $stmt = $this->dbhandle->query($sql);
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $value)
                {
                    array_push($result,$value);
                }

                // Get data for the Modal of the SPA
                $sql = 'SELECT title, explanation, photo_url FROM Carousel';
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

    # Function used to retrieve request data from the SQLite Database
    function dbGetRequestData()
    {
        $result = array();
        try
        {
                $sql = 'SELECT Id, email,category,request_description,comment FROM Request';
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
                <textarea  id="comment_'.$value[0].'" name="w3review" rows="2" cols="30">'.$value[4].'</textarea><button onclick="add_comment_request('.$value[0].')">Save</button>
            </td>';
            $finalString .= '<td>
                <button onclick="remove_from_request('.$value[0].')" id="remove_button_'.$value[0].'">Remove</button>
            </td> 
            </tr>';
        } 
        return $finalString;
    }

    # Function Used to update SQLite request table
    function dbAddCommentRequest($id,$comment)
    {
        try
        {
            $stmt=$this->dbhandle->prepare('UPDATE Request SET comment=:comment  WHERE Id=:Id');
            $stmt->bindValue(':comment', $comment);
            $stmt->bindValue(':Id', $id);
            $result = $stmt->execute();
        }

        catch (PDOException $e)
        {
            print new Exception($e->getMessage());
        }
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
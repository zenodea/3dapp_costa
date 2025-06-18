<?php
class Controller {
    public $load;
    public $model;

    function __construct($pageURI = null)
    {
        $this->load = new Load();
        $this->model = new Model();
        $this->$pageURI();
    }
    
    function home()
	{
		// At the moment data is input from a JSON file directly from the getJsonData.js file using the JQuery AJAX method .getJson()
		// $.getJSON('../application/model/data.json', function(jsonObj) {handler goes here} — The URL here should really be a path to this home() method.
		// Then you would:
		
		// Insert code to access a method in the Model class that returns a PHP array with the data you need, e.g.
		$data = $this->model->dbGetJsonMuseumData();
		$this->load->view('viewCosta', $data);
		// Echo the data out to the browser and trap it in the $.getJSON() handler and inject it into the view as before
        // echo '<div id="json_data">'.json_encode($data).'</div>';
	}

    // api's to create insert data into the tables
    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    // Controller method used to insert data into the SQLite DB
    // From data.json
    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    // Controller method used to get back the majority of information from the database
    function apiGetJsonMuseumData()
    {
        $data = $this->model->dbGetJsonMuseumData();
        echo json_encode($data);
    }

    // Controller method to send view data to model
    function apiAddRequest()
    {
        $this->model->dbAddRequest($_POST['email'],$_POST['category'],$_POST['description']);
    }

    // Controller method used to get all the data in the 
    // Request db table
    function apiGetRequestData()
    {
        $data = $this->model->dbGetRequestData();
        echo json_encode($data);
    }

    // Controller method used to update data into the
    // Request db table
    function apiAddCommentRequest()
    {
        $this->model->dbAddCommentRequest($_POST['request_id'],$_POST['request_comment']);
    }

    // Get information of a specific drink
    // Function used to obtain information of one of the drinks
    // Based on the ID, the following id's are the same for the entire project
    // ID = 1 = Iced Latte
    // ID = 2 = Cold Brew
    // ID = 3 = Iced Chai Tea Latte
    // ID = 4 = Latte
    // ID = 5 = Hot Chocolate
    // ID = 6 = Mocha
    // ID = 7 = Canned Latte
    // ID = 8 = Canned Caramel latte
    // ID = 9 = Canned Americano
    function apiGetDrinkInformation()
    {
        $data = $this->model->dbGetDrinkInformation($_POST['id']);
        echo json_encode($data);
    }


    function apiGetDrinkImages()
    {
        $data = $this->model->dbGetDrinkImages($_POST['id']);
        echo json_encode($data);
    }

    function apiRemoveRequest()
    {
        $this->model->dbRemoveRequest($_POST['request_id']);
    }

    function apiGetFlickrService()
    {
        $this->load->view('viewFlickrService');
    }
}
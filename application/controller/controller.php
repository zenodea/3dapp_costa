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


    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    function apiGetJsonMuseumData()
    {
        $data = $this->model->dbInsertData();
        echo json_encode($data);
    }

    // Controller method to send view data to model
    function apiAddRequest()
    {
        $this->model->dbAddRequest($_POST['email'],$_POST['category'],$_POST['description']);
    }

    function apiGetRequestData()
    {
        $data = $this->model->dbGetRequestData();
        echo $data;
    }

    function apiAddCommentRequest()
    {
        $this->model->dbAddCommentRequest($_POST['request_id'],$_POST['request_comment']);
    }

    function apiRemoveRequest()
    {
        $this->model->dbRemoveRequest($_POST['request_id']);
    }

    function apiGetFlickrService()
    {
        $this->load->view('viewFlickrService');
    }

    function apiGetJson()
    {
        $this->load->view('viewJson');
    }
}
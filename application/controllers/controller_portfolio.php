<?php
    class Controller_portfolio extends Controller {
        function __construct() {
            $this->model = new Model_portfolio();
            $this->view = new View();
        }

        function action_index() {
            $data = $this->model->get_data();
            $this->view->generate('portfolio_view.php', 'template_view.php', $data);
        }
    }
?>
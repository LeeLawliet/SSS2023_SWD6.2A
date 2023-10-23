<?php
    class Car
    {
        public $model;
        public $color;

        function _construct($pModel, $pColor)
        {
            $this->model = $pModel;
            $this->color = $pColor;
        }

        function set_model($pModel)
        {
            $this->model = $pModel;
        }

        function set_color($pColor)
        {
            $this->color = $pColor;
        }

        function get_model()
        {
            return $this->model;
        }

        function get_color()
        {
            return $this->color;
        }
    }

    function main()
    {
        // Q2
        $ferrari = new Car("ferrari", "red");
        $lambo = new Car("lamborghini", "yellow");

        // Q1
        // $ferrari->set_model("ferrari");
        // $ferrari->set_color("red");

        // $lambo = new Car();
        // $lambo->set_model("lamborghini");
        // $lambo->set_color("yellow");

        echo $ferrari->get_model();
        echo $ferrari->get_color();
        echo $lambo->get_model();
        echo $lambo->get_color();
    }

    main();
?>
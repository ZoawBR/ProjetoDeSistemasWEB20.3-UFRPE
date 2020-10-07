<?php

namespace gerenciadorMvc\app\controller;


interface iController{

    function index();
    function view($id);
    function create();
    function edit($id);
    function store();
    function update();
    function delete($id);

}
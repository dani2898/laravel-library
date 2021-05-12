/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
const $ = require("jquery");
const dt = require("datatables.net");
const buttons = require("datatables.net-buttons");
require("selectize");
import "selectize/dist/css/selectize.css";

$(document).ready(function () {
    $("table").DataTable({
        bPaginate: true,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
        drawCallback: function () {
            $(".dataTables_paginate ").addClass(
                " d-flex justify-content-center"
            );
            $(".paginate_button").addClass("btn btn-light");
        },
    });
    $("input[type='search']").addClass("form-control");

    $("select").selectize();
});

window.send_id_to_modal = function ($id) {
    document.getElementById("book_id").value = $id;
    document.getElementById("book_id_return").value = $id;
};

window.send_id_to_modal_category = function ($id) {
    document.getElementById("category_id").value = $id;
};

window.send_id_to_modal_delete_book = function ($id) {
    document.getElementById("book_id_delete").value = $id;
};

window.send_id_to_modal_user = function ($id) {
    document.getElementById("user_id").value = $id;
};

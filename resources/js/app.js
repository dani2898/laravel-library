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
    $("#books_table").DataTable({
        bPaginate: true,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
    });
    $("input[type='search']").addClass("form-control");
    $("select").selectize();
});

window.send_id_to_modal = function ($book_id) {
    document.getElementById("book_id").value = $book_id;
    document.getElementById("book_id_return").value = $book_id;
};

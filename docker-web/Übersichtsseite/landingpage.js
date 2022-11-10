(function () {
    var showResults;
    $("#search").keyup(function () {
        var searchText;
        searchText = $("#search").val();
        return showResults(searchText);
    });
    showResults = function (searchText) {
        $("tbody tr").hide();
        return $("tbody tr:Contains(" + searchText + ")").show();
    };
    jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function (arg) {
        return function (elem) {
            return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
        };
    });
}.call(this));

document.getElementById("selectDisAgree").addEventListener("click", function (e) {
    document.getElementById("sub1").disabled = !e.target.checked;
});
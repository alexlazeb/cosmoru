/*jslint  browser: true, white: true, plusplus: true */
/*global $: true */

$(document).ready(function(){
    // Load countries then initialize plugin:
            // Initialize ajax autocomplete:
            $('#wt_personal-country').autocomplete({
                lookup:['Удмундия','Украина','Россия']
            });

            // Initialize autocomplete with local lookup:
            var t = $('#wt_personal-city').autocomplete({
                lookup: ['Ростов','Москва','Питер','Лондон','Нью-Йорк','Вашингтон']
            });

            $('#wt_country-field').autocomplete({
                lookup:['Удмундия','Украина','Россия']
            });

            // Initialize autocomplete with local lookup:
            $('#wt_city-field').autocomplete({
                lookup: ['Ростов','Москва','Питер','Лондон','Нью-Йорк','Вашингтон']
            });
});
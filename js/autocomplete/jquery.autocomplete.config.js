/*jslint  browser: true, white: true, plusplus: true */
/*global $: true */

$(document).ready(function(){
    // Load countries then initialize plugin:
            // Initialize ajax autocomplete:
            $('#checkout-city').autocomplete({
                lookup:['Руза','Рязань','Москва','Питер','Лондон','Нью-Йорк','Вашингтон']
            });

            // Initialize autocomplete with local lookup:
           /* var t = $('#wt_personal-city').autocomplete({
                lookup: ['Руза','Рязань','Москва','Питер','Лондон','Нью-Йорк','Вашингтон']
            });*/
           
});
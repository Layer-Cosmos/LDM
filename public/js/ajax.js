/**
 * Created by Layer on 16/12/2016.
 */
$(function(){

    $('.linkm').on('click', function(e){
        e.preventDefault();
        var $a = $(this);
        var $modal = $('.modal-content');
        var url = '../../app/' + $a.attr('href');
        //$a.text('Chargement');
        console.log(url);
        $.ajax(url, {
            success: function(data, status, jqxhr){
                //$a.parents('tr').fadeOut();

                var result = JSON.parse(jqxhr.responseText);
                console.log(result[1]);
                //$a.parents('tr').after('<p>' + result[2] + '<img src="images/' + result[3] + '" width="200px"/></p>');
                var title = result[1];
                title = title.charAt(0).toUpperCase() + title.substring(1, title.length);
                console.log(title);
                $modal.find('#next').attr('href', function(){return "delete.php?id=" + (parseInt(result[0]) + 1)});
                $modal.find('h4').text(title);
                $modal.find('img').attr("src", function(){return "images/" + result[3]});
            }

            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */

        });
    });
    $('#next').on('click', function(e){
        e.preventDefault();
        var $a = $(this);
        var $modal = $('.modal-content');
        var url = '../../app/' + $a.attr('href');
        //$a.text('Chargement');
        console.log(url);
        $.ajax(url, {
            success: function(data, status, jqxhr){
                //$a.parents('tr').fadeOut();

                var result = JSON.parse(jqxhr.responseText);
                console.log(result[1]);
                //$a.parents('tr').after('<p>' + result[2] + '<img src="images/' + result[3] + '" width="200px"/></p>');
                var title = result[1];
                title = title.charAt(0).toUpperCase() + title.substring(1, title.length);
                console.log(title);
                $modal.find('#next').attr('href', function(){return "delete.php?id=" + (parseInt(result[0]) + 1)});
                $modal.find('h4').text(title);
                $modal.find('img').attr("src", function(){return "images/" + result[3]});
            }

            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */

        });
    });
});
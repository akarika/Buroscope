/**
 * Created by tiw on 07/11/2016.
 */
$(document).ready(function () {
    $.get(
        "http://api.wunderground.com/api/5164c04c467585bf/forecast/geolookup/conditions/q/GF/Cayenne.json",
        function (data) {
            {
                console.log(data);
                var meteo = formatMeteo(data);
                $('#meteo').append(meteo);
            }
        }
    );
    function formatMeteo(condition) {
        var output = '';
        output += "<h2>" + condition.current_observation.display_location.city + "</h2>" +
            "<div>" + " T :" + condition.current_observation.dewpoint_c + "</div>"+
            "<div><img src=\""+condition.current_observation.icon_url+"\"></div>";


        return output;
    }
});
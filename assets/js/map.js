/**
 * Created by UIT on 01.08.2015.
 */

function showLocationList( res, wrapper ){
    var items= [];
    res.geoObjects.each(function (item) {
        items.push(item);
    });
    wrapper.innerHTML = "";
    for (var i = 0; i < items.length; i++) {
        wrapper.innerHTML  =  wrapper.innerHTML+ '<li>'+items[i].properties.get('text')+'</li>';
    }
}

function createPlacemark(coords,draggable) {
    return new ymaps.Placemark(coords, {
        iconContent: ''
    }, {
        preset: 'islands#violetStretchyIcon',
        draggable: draggable
    });
}

function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}
window.onload = function(){
    testimonialsSlider();
    sortOnClick();
    scrollOnAlert();
};

function testimonialsSlider(){
    if($('.testimonials').is(':visible')){
        new Swiper('.swiper-container', {
            spaceBetween: 30,
            slidesPerView: 3,
            paginationClickable: true,
            pagination: '.swiper-pagination',
            breakpoints: {
                768: {
                    slidesPerView: 1
                }
            }
        });
    }
}
function scrollOnAlert(){
    var alert = $(".order-form .alert");
    if(alert.is(":visible")){
        var position = alert.position();
        document.body.scrollTop = position.top;
    }
}
function sortOnClick(){
    $(".order-list table thead th").click(function(){
        var position = $(this).attr("data-id");
        if(position){
            sortTable(position);
        }
    })
}


function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("order-table");
    switching = true;
    dir = "asc";
    while (switching) {
        switching = false;
        rows = table.getElementsByTagName("TR");
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch= true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch= true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;
        } else {
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
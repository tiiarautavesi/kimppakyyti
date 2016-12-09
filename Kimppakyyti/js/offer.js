/*jshint browser: true */
var xhr = new XMLHttpRequest();




var showOffers = function(){
    if(xhr.readyState === 4 && xhr.status === 200){
            /*var json = JSON.parse(xhr.responseText);
            var output = '';
                for(var i in json){
                    output += '<div id="offer">' +
                                   xhr.responseText +
                           '</div>';
            }*/
        document.querySelector('ul').innerHTML = xhr.responseText;
    }
};




xhr.open('GET', 'offer.php');
xhr.onreadystatechange = showOffers;
xhr.send();


/*function showOffers(str) {
    var xhhtp;
    if(str == "") {
        document.querySelector("ul").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhhtp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector("ul").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "offer.php"+str, true);
    xhttp.send();
}*/
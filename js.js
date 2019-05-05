var length = 20;
    var output = "";
    var source = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < length; i++){
        output += source.charAt(Math.floor(Math.random() * source.length));
    }


document.getElementById("salt").addEventListener('click', function () {
    var salt_box = document.getElementById('salt_box');
    salt_box.value += output;
});
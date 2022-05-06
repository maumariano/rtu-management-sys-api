$(document).ready(function(){
    $('#birthdate').change(function () {
        var birthdate = document.getElementById("birthdate").value;
        var d = new Date();
        var dateToday = Date.now();
        var birthdate = new Date(birthdate);
        var dateToday = new Date(dateToday);
        // var age = Date.now() - birthdate.getTime();
        var age = Math.floor((dateToday.getTime() - birthdate.getTime())/(1000*60*60*24*365));
        console.log(age);
        document.getElementById("age").value = age;
        console.log(document.getElementById("street").value);
        console.log(document.getElementById("age").value);
    });
    
});
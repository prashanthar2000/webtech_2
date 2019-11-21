// var car_brand = "dc"

function display_new(obj) {
    //    var car_name = document.getElementById(this);
    //    console.log(obj.value);
    let car_name = obj.childNodes[0].innerHTML;
    document.getElementById("car_name").innerHTML = car_name +" Key Specifications"
    document.getElementById("car_name").style = "text-transform: capitalize";
    
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //    document.getElementById("demo").innerHTML = this.responseText;
            let myObj = JSON.parse(this.responseText);
            // console.log(myObj);

            var details = myObj["gen"];
            console.log(details);
            for (var i in details) {
                console.log(i);
                var id = document.getElementById(i);
                if(id==null){
                id.innerHTML = "-----NaN-----";
                }
                else{
                    id.innerHTML =details[i] ;
                }
            }
        }
    };
    xmlhttp.open("GET", "../php/json.php?x=" + window.car_brand+"& y="+ car_name, true);
    xmlhttp.send();
       
    document.getElementById(car_name).innerHTML = car_name +" Key Specifications"
    
    
}
var car_brand;
function get_varient(obj)
{
    window.car_brand = obj.childNodes[0].innerHTML;
    // alert(obj.childNodes[0].value););
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //    document.getElementById("demo").innerHTML = this.responseText;
            // let myObj = JSON.parse(this.responseText);
            // console.log(myObj);
            console.log(this.responseText);
            let list = document.getElementById("brand-type-container");
            console.log(list.innerHTML);
            list.innerHTML = this.responseText;
            

        }
    };
    xmlhttp.open("GET", "../php/get_varient.php?x=" + car_brand, true);
    xmlhttp.send();
    let varient = document.getElementById("varients");
    varient.innerHTML= car_brand + " Varients";
    
    
}

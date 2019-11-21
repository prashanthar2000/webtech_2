function drop_down(obj) {
    let myVal = document.getElementById(obj.id);
    let nextDropDown = myVal.parentNode.nextElementSibling.childNodes[1];
    let car_brand = myVal.value;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            nextDropDown.innerHTML = this.responseText;
              
        
        }
    };
    xmlhttp.open("GET", "../php/compare.php?x=" + car_brand, true);
    xmlhttp.send();
    
    // console.log(this.id);
    // console.log(this);
}
function car_details(obj)
{
    let car_name = obj.value;
    console.log(car_name);
    console.log(obj.attributes.id);
    let id_w = obj.attributes.id.nodeValue;
    let index = 0;
    console.log(id_w);
    if(id_w === "mn1")
    {
        index =1 ;
        console.log("in m1");
    }
    else if(id_w === "mn2")
    {
        console.log("in m2");
        index =2 ;
    }    
    else{
        console.log("in m3");
        index=3;
    }
        console.log(index);
    let car_brand = document.getElementById("dd"+index).value;
    console.log(car_brand);


    //let want = document.getElementById("enginesubct");
    //let tbody = want.firstElementChild.lastElementChild;
    
    // import {get_varient } from "./car_display";
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
                // id.innerHTML = "-----NaN-----";
                }
                else{
                    id.parentElement.cells[index].innerHTML = details[i] ;
                }
            }
        }
    };
    xmlhttp.open("GET", "../php/json.php?x=" + car_brand+"& y="+ car_name, true);
    xmlhttp.send();


    // if(obj.id == mn1)
    // {
    //     console.log(obj);

    // }
    // else if(obj.id== dd2)
    // {
    //     console.log(obj.id );

    // }
    // else
    // {
    //     console.log(obj.i);
    // }
}
const fs = require('fs');
fs.readFile('../json/car_brand0.json', 'utf-8', (err, data) => { 
    if (err) throw err; 
  
    // Converting Raw Buffer to text 
    // data using tostring function. 
    console.log(data); 
})
console.log("i am loaded ");
//var obj = JSON.parse(json)
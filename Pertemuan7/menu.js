let harga1 = 35000;
let harga2 = 40000;
let harga3 = 50000;
let harga4 = 45000;
let harga5 = 8000;
let harga6 = 18000;

const menu1 = document.getElementById("menu1");
const menu2 = document.getElementById("menu2");
const menu3 = document.getElementById("menu3");
const menu4 = document.getElementById("menu4");
const menu5 = document.getElementById("menu5");
const menu6 = document.getElementById("menu6");

menu1.addEventListener('click', function() { menu1.style.backgroundColor= "Green"; menu1.value = harga1 })
menu2.addEventListener('click', function() { menu2.style.backgroundColor= "Green"; menu2.value = harga2 })
menu3.addEventListener('click', function() { menu3.style.backgroundColor= "Green"; menu3.value = harga3 })
menu4.addEventListener('click', function() { menu4.style.backgroundColor= "Green"; menu4.value = harga4 })
menu5.addEventListener('click', function() { menu5.style.backgroundColor= "Green"; menu5.value = harga5 })
menu6.addEventListener('click', function() { menu6.style.backgroundColor= "Green"; menu6.value = harga6 })
    

const htg = document.getElementById("hitung");
const total = document.getElementById("total");

htg.addEventListener('click', function(){
   
    total.innerText = Number(menu1.value) + Number(menu2.value) + Number(menu3.value) + Number(menu4.value) + Number(menu5.value) + Number(menu6.value);
       
})
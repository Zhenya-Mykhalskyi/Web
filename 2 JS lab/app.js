let pasport = document.getElementById("pasport");
let adress = document.getElementById("who");
let popap = document.getElementById("popap");
let btnOk = document.getElementById("btn-ok");
const {form} = document.forms;


function retrieveFormValue(event){
    event.preventDefault();
    const {one, two,three} = form;

    const values = {
        num: one.value,
        date: two.value,
        who: three.value,
    };
    console.log(values);

    popap.style.display = "block";
    document.body.style.color = "orange";

    pasport.textContent = values.num + " " + values.date;
    who.textContent = values.who;
}

form.addEventListener('submit', retrieveFormValue);

btnOk.onclick = () =>{
    popap.style.display = "none";
    document.body.style.color = "black";
}
let expr1 = document.getElementById("expr1");
let expr2 = document.getElementById("expr2");
let expr3 = document.getElementById("expr3");

let calcButton = document.getElementById("calcButton");
let result1 = document.getElementById("result1");
let result2 = document.getElementById("result2");

calcButton.onclick = () => {
    
    let k = Number(expr1.value);
    let h = Number(expr2.value);
    let f = Number(expr3.value);


    console.log(k);
    console.log(h);
    console.log(f);

    let wResult = (h + f)*((Math.sin (h + f * k))/(2 + f * f));
    console.log(wResult);

    let zResult = (k * k + h * h * f)-3 * Math.log10(h, k);
    console.log(zResult);

    result1.value = wResult.toFixed(6);
    result2.value = zResult.toFixed(6);
}
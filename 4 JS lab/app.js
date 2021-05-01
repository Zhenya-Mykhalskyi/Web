$(document).ready(function(){

    function calcSpecialPrice(price){
        let value = price[0] + price[1] + price[2];
        value = Number(value) * 0.75;
        value = value.toFixed(2);
        price = value + " " + "$";
        return price;
    }
    
    const usualPrices = [];
    $('li .tag-pill').each(function(){
        usualPrices.push($(this).text());
    });
    console.log(usualPrices);

    const specialPrices = [];
    $('li .tag-pill').each(function(){
        let textContent = $(this).text();
        specialPrices.push(calcSpecialPrice(textContent));
    });
    console.log(specialPrices);

    $(".btn-without").hide();

    $(".btn-with").click(function(){
        $('li .tag-pill').each(function(){
            let a = $('li .tag-pill').index(this);
            $(this).text(specialPrices[a]);
        });
        $(this).hide();
        $(".btn-without").show();

    });

    $(".btn-without").click(function(){
        $('li .tag-pill').each(function(){
            let a = $('li .tag-pill').index(this);
            $(this).text(usualPrices[a]);
        });
        $(this).hide();
        $(".btn-with").show();
    });
});


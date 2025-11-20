let num1 = "";
let num2 = "";
let operaçao = "";

function apagar(){
    document.getElementById("visor").innerText = " ";
}

function digitar (tecla){
    if (tecla==='+'){
        num1 = document.getElementById("visor").innerText;
        operaçao = "+";
        apagar();
    }else if (tecla === "-"){
        num1 = document.getElementById("visor").innerText;
        operaçao = "-";
        apagar();
    }
    else if (tecla === "*"){
        num1 = document.getElementById("visor").innerText;
        operaçao = "*";
        apagar();
    }





    else if (tecla==='='){
        num2 = document.getElementById("visor").innerText;
        calcular();

    }else {
        document.getElementById("visor").innerText +=tecla;
    }

}

function calcular (){
    let resultado = 0.0;
    // alert (num1 + " " + num2 + " " + operaçao)

    if (operaçao ==='+'){
    resultado =  parseFloat(num1)+parseFloat(num2);
}else if (operaçao === '-'){
    resultado = parseFloat(num1)-parseFloat(num2);
}
else if (operaçao === '*'){
    resultado = parseFloat(num1)*parseFloat(num2);
}



document.getElementById("visor").innerText = resultado;
}

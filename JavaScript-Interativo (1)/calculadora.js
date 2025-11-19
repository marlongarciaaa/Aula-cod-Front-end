document.getElementById("btnSomar").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);

    let soma = v1 + v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + soma;
});

document.getElementById("btnSub").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);

    let subtracao = v1 - v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + subtracao;
});

document.getElementById("btnMut").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);

    let Mutplicacao = v1 * v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + Mutplicacao;
});

document.getElementById("btnDiv").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);
    if(v2 === 0){
    document.getElementById("resultado").innerText ="Não pode ser dividido por 0"
    }
    else{
    let Divisao = v1 / v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + Divisao;}
});

document.getElementById("btnResto").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);
    if(v2 === 0){
        document.getElementById("resultado").innerText ="Não pode ser dividido por 0"}
        else{
    let Resto = v1 % v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + Resto;}
});

document.getElementById("btnExp").addEventListener("click", () => {
    let v1 = Number(document.getElementById("valor1").value);
    let v2 = Number(document.getElementById("valor2").value);

    let Exp = v1 ** v2;

    document.getElementById("resultado").innerText =
        "Resultado: " + Exp;
});
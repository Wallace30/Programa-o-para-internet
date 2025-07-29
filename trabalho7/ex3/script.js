const botao = document.querySelector("#btncalcular")
botao.onclick = function(){
    let campoAltura = document.querySelector("#altura");
    let altura = parseInt(campoAltura.value);
    const sexo = document.querySelector('input[name="sexo"]:checked');

    let pesoideal;
    if(sexo.value === "masculino")
    {
        pesoideal = 52 + (0.75*(altura-152.4))
    }
    else {
        pesoideal = 52 + (0.67*(altura-152.4))
    }
    document.querySelector("#resultado").textContent = `O seu peso ideal e de ${pesoideal}kg`;
}
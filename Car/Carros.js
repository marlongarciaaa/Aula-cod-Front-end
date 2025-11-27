fetch('carros.json')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        document.getElementById('Carro').innerHTML = data.Carros[0].Carro
        document.getElementById('motor').innerHTML = data.Carros[0].Motor
        document.getElementById('class').innerHTML = data.Carros[0].classificação
        document.getElementById('pais').innerHTML = data.Carros[0].Paísorigem
        document.getElementById('ano').innerHTML = data.Carros[0].Anocriacao

   
    
    
    })


  


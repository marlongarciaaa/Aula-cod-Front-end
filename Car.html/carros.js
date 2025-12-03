// Carregar JSON
fetch("carros.json")
    .then(r => r.json())
    .then(data => {
        carros = data;
        renderList(carros);
    });

// Renderizar lista
function renderList(lista) {
    const container = document.getElementById("carlist");
    container.innerHTML = "";

    lista.forEach((f, index) => {
        const card = document.createElement("div");
        card.className = "car-card";

        console.log(f.Motor);
        card.innerHTML = `
            <img src="${f.Imagem}" alt="Carro">
            <h3>${f.Carro} (${f.Motor})</h3>
            <p><b>classicacao:</b> ${f.classicacao}</p>
            <p><b>paisorigem:</b> ${f.paisorigem}</p>
            <p><b>anocriacao:</b> ${f.anocriacao}</p>


            <button onclick="openModal(${index})">Editar</button>
            <button onclick="removeMovie(${index})">Excluir</button>
        `;

        container.appendChild(card);
    });
}

/* Pesquisa */
document.getElementById("btnSearch").onclick = () => {
    const q = document.getElementById("searchInput").value.toLowerCase();
    const filtrado = carros.filter(f => f.Carro.toLowerCase().includes(q));
    renderList(filtrado);
};

document.getElementById("btnListAll").onclick = () => renderList(carros);

/* Botão Adicionar */
document.getElementById("btnAdd").onclick = () => {
    editIndex = null;
    clearForm();
    openPopup("Adicionar Novo Carro");
};

/* Abrir modal */
function openPopup(Carro) {
    document.getElementById("modalTitle").textContent = Carro;
    document.getElementById("modal").style.display = "flex";
}

/* Abrir modal para edição */
function openModal(index) {
    editIndex = index;
    const f = carros[index];

    document.getElementById("Carro").value = f.Carro;
    document.getElementById("Motor").value = f.Motor;
    document.getElementById("duracao").value = f.classificacao;
    document.getElementById("paisorigem").value = f.paisorigem;
    document.getElementById("anocriacao").value = f.anocriacao;
    document.getElementById("capa").value = f.capa;


    openPopup("Editar Filme");
}

/* Fechar */
document.getElementById("btnClose").onclick = () => {
    document.getElementById("modal").style.display = "none";
};

/* Salvar */
document.getElementById("carroForm").onsubmit = (e) => {
    e.preventDefault();

    
    const novo = {
        Carro: document.getElementById("nome").value,
        Motor: document.getElementById("Motor").value,
        classicacao: document.getElementById("classificacao").value,
        paisorigem: document.getElementById("paisorigem").value,
        anocriacao: document.getElementById("anocriacao").value,
        Imagem: document.getElementById("capa").value,
    };

    if (editIndex !== null) {
        carros[editIndex] = novo;
    } else {
        carros.push(novo);
    }

    document.getElementById("modal").style.display = "none";
    renderList(carros);
};

/* Remover */
function removeMovie(i) {
    if (confirm("Tem certeza que deseja excluir?")) {
        carros.splice(i, 1);
        renderList(carros);
    }
}

function clearForm() {
    document.getElementById("carroForm").reset();
}

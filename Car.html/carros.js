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

        card.innerHTML = `
            <img src="${f.Imagem}" alt="fotocarro">
            <h3>${f.Carro} (${f.Motor})</h3>
            <p><b>Duração:</b> ${f.classificacao}</p>
            <p><b>Classificação:</b> ${f.paisorigem}</p>
            <p><b>Diretor:</b> ${f.anocricao}</p>


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
    openPopup("Adicionar Filme");
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
        nome: document.getElementById("Carro").value,
        ano: parseInt(document.getElementById("Motor").value),
        duracao: document.getElementById("classificacao").value,
        classificacao: document.getElementById("paisorigem").value,
        diretor: document.getElementById("anocriacao").value,
        capa: document.getElementById("capa").value,
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
    document.getElementById("carForm").reset();
}

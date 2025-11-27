let filmes = [];
let editIndex = null;

// Carregar JSON
fetch("filmes.json")
    .then(r => r.json())
    .then(data => {
        filmes = data;
        renderList(filmes);
    });

// Renderizar lista
function renderList(lista) {
    const container = document.getElementById("movieList");
    container.innerHTML = "";

    lista.forEach((f, index) => {
        const card = document.createElement("div");
        card.className = "film-card";

        card.innerHTML = `
            <img src="${f.capa}" alt="Capa">
            <h3>${f.nome} (${f.ano})</h3>
            <p><b>Duração:</b> ${f.duracao}</p>
            <p><b>Classificação:</b> ${f.classificacao}</p>
            <p><b>Diretor:</b> ${f.diretor}</p>

            <p><b>Elenco:</b></p>
            <ul>${f.elenco.map(a => `<li>${a}</li>`).join("")}</ul>

            <p><b>Sinopse:</b> ${f.sinopse}</p>

            <button onclick="openModal(${index})">Editar</button>
            <button onclick="removeMovie(${index})">Excluir</button>
        `;

        container.appendChild(card);
    });
}

/* Pesquisa */
document.getElementById("btnSearch").onclick = () => {
    const q = document.getElementById("searchInput").value.toLowerCase();
    const filtrado = filmes.filter(f => f.nome.toLowerCase().includes(q));
    renderList(filtrado);
};

document.getElementById("btnListAll").onclick = () => renderList(filmes);

/* Botão Adicionar */
document.getElementById("btnAdd").onclick = () => {
    editIndex = null;
    clearForm();
    openPopup("Adicionar Filme");
};

/* Abrir modal */
function openPopup(nome) {
    document.getElementById("modalTitle").textContent = nome;
    document.getElementById("modal").style.display = "flex";
}

/* Abrir modal para edição */
function openModal(index) {
    editIndex = index;
    const f = filmes[index];

    document.getElementById("nome").value = f.nome;
    document.getElementById("ano").value = f.ano;
    document.getElementById("duracao").value = f.duracao;
    document.getElementById("classificacao").value = f.classificacao;
    document.getElementById("diretor").value = f.diretor;
    document.getElementById("capa").value = f.capa;
    document.getElementById("sinopse").value = f.sinopse;
    document.getElementById("elenco").value = f.elenco.join("\n");

    openPopup("Editar Filme");
}

/* Fechar */
document.getElementById("btnClose").onclick = () => {
    document.getElementById("modal").style.display = "none";
};

/* Salvar */
document.getElementById("movieForm").onsubmit = (e) => {
    e.preventDefault();

    const novo = {
        nome: document.getElementById("nome").value,
        ano: parseInt(document.getElementById("ano").value),
        duracao: document.getElementById("duracao").value,
        classificacao: document.getElementById("classificacao").value,
        diretor: document.getElementById("diretor").value,
        capa: document.getElementById("capa").value,
        sinopse: document.getElementById("sinopse").value,
        elenco: document.getElementById("elenco").value.split("\n")
    };

    if (editIndex !== null) {
        filmes[editIndex] = novo;
    } else {
        filmes.push(novo);
    }

    document.getElementById("modal").style.display = "none";
    renderList(filmes);
};

/* Remover */
function removeMovie(i) {
    if (confirm("Tem certeza que deseja excluir?")) {
        filmes.splice(i, 1);
        renderList(filmes);
    }
}

function clearForm() {
    document.getElementById("movieForm").reset();
}

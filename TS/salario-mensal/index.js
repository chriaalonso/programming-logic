// 1. Seleciona o elemento div usando a propriedade id
const app = document.getElementById("app");

// 2. Cria um novo elemento <p></p> programáticamente
const p = document.createElement("p");

// 3. Adiciona conteúdo de texto
p.textContent = "Olá, Mundo!";

// 4. Acrescenta o elemento p no elemento div
app?.appendChild(p);

const div = document.getElementsByTagName("div")[0];
div.children;
HTMLCollection(2) [p, p]
div.childNodes;
NodeList(2) [p, p]
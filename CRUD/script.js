// Obter a referência aos elementos do formulário e da lista de usuários
const userForm = document.getElementById('user-form');
const userList = document.getElementById('user-list');

// Função para renderizar a lista de usuários
function renderUserList() {
    // Limpar a lista de usuários existente
    userList.innerHTML = '';

    // Obter os dados do localStorage
    const users = JSON.parse(localStorage.getItem('users')) || [];

    // Renderizar cada usuário na lista
    users.forEach((user, index) => {
        const listItem = document.createElement('div');
        listItem.innerHTML = `<strong>${user.username}</strong> - ${user.email} <button onclick="deleteUser(${index})">Excluir</button>`;
        userList.appendChild(listItem);
    });
}

// Função para adicionar um novo usuário
function addUser(username, email) {
    // Obter os dados do localStorage
    const users = JSON.parse(localStorage.getItem('users')) || [];

    // Adicionar o novo usuário aos dados existentes
    users.push({ username, email });

    // Atualizar os dados no localStorage
    localStorage.setItem('users', JSON.stringify(users));

    // Limpar o formulário e renderizar a lista de usuários atualizada
    userForm.reset();
    renderUserList();
}

// Função para excluir um usuário
function deleteUser(index) {
    // Obter os dados do localStorage
    const users = JSON.parse(localStorage.getItem('users')) || [];

    // Remover o usuário com base no índice
    users.splice(index, 1);

    // Atualizar os dados no localStorage
    localStorage.setItem('users', JSON.stringify(users));

    // Renderizar a lista de usu
    renderUserList();
}

// Manipulador de evento para o envio do formulário
userForm.addEventListener('submit', function(event) {
    event.preventDefault();

    // Obter os valores do formulário
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;

    // Adicionar o novo usuário
    addUser(username, email);
});

// Função para inicializar o portal web
function initializePortal() {
    renderUserList();
}

// Inicializar o portal web
initializePortal();

// Função para editar um usuário
function editUser(index) {
    // Obter os dados do localStorage
    const users = JSON.parse(localStorage.getItem('users')) || [];

    // Obter o usuário que será editado
    const user = users[index];

    // Obter os novos valores do formulário
    const newUsername = document.getElementById('new-username').value;
    const newEmail = document.getElementById('new-email').value;

    // Atualizar os dados do usuário
    user.username = newUsername;
    user.email = newEmail;

    // Atualizar os dados no localStorage
    localStorage.setItem('users', JSON.stringify(users));

    // Renderizar a lista de usuários
    renderUserList();
}
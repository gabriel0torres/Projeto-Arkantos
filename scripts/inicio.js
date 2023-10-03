const botao_adicionar_usuario = document.getElementById('adicionar_usuario');
const container = document.getElementById('conteudo');

botao_adicionar_usuario.addEventListener('click', function() {

    container.innerHTML = '';
    const iframe = document.createElement('iframe');
    iframe.src = 'inclui_registro.php'; 
    iframe.width = '100%'; 
    iframe.height = '100%'; 

    // Adicione o iframe ao container
    container.appendChild(iframe);
});

const botao_listar_usuario = document.getElementById('listar_usuario');

botao_listar_usuario.addEventListener('click', function() {

    container.innerHTML = '';
    const iframe = document.createElement('iframe');
    iframe.src = 'lista_usuarios.php'; 
    iframe.width = '100%'; 
    iframe.height = '100%'; 

    // Adicione o iframe ao container
    container.appendChild(iframe);
});
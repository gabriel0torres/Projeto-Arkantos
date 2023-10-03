function verifica_campos(){

    const login = document.getElementById("login").value
    const senha = document.getElementById("password").value
    
    if(login == '' || senha == ''){
    
        alert('Preencha Todos os campos!')
        return false
    
    }else{
    
        return true
    }
    
    }
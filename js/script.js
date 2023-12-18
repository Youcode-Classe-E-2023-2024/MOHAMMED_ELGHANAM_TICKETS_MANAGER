const login = document.getElementById('login');
const register = document.getElementById('register');

function login() {
     console.log("HELLO");
    register.style.display='none';
    login.style.display='block';  
    // const chek = true;
    // return chek; 
}
function register() {
     console.log("HELLO");
    login.style.display='none';
    register.style.display='block';
       
}

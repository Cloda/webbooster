let button = document.getElementsByClassName('buy');
let model = document.getElementById('model');
let body = document.body;


for (let i = 0; i < 4; i++){
    button[i].onclick = function(){
        body.classList.add('overflow');
        model.classList.add('show');
    }
}

// btnup
window.addEventListener('scroll',function(){
    var btnUp = this.document.getElementById('btnUp');
    if(window.scrollY > 800){
        btnUp.style.display = 'block';
    } else {
        btnUp.style.display = 'none';
    }

});

// contacto
const send = async () => {
    const form = document.querySelector('form');
    const fData = new FormData(form);
    
    const resp = await fetch('mail.php',{method:'POST',body: fData});
    const data = await resp.json();
    // console.log("data: ", data);

    document.getElementById('msgSend').innerHTML = data.msg;

}
document.addEventListener("DOMContentLoaded", function () {
    let email=document.querySelector("#email");
    let btnLogin=document.querySelector("#btnLogin");
    let loginForm=document.querySelector("#loginForm");
    btnLogin.addEventListener("click", function (e) {
        if(!validateEmail(email.value)){
            Swal.fire({
                title:"Uyarı",
                text:"Lütfen geçerli bir e-posta adresi giriniz.",
                icon:"warning",
            });

        }else if(password.value.length<8){
            Swal.fire({
                title:"Uyarı",
                text:"Lütfen şifrenizi 8 karakterden uzun giriniz.",
                icon:"warning",
            })
        }else{
            loginForm.submit();
        }
    });


    function validateEmail(email) {
        let regex = /^([a-zA-Z0-9_.+-]+)@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,4})$/;
        return regex.test(email);
    }
});

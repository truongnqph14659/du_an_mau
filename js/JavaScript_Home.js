function $_(selector) {
    const selectors = document.querySelectorAll(selector);
    return selectors.length === 1 ? selectors[0] : selectors;
}
// quantity_order
try{
    function quantity_order(){
        if($_('.quantity_order').value =="" || $_('.quantity_order').value<=0){
            $_('.quantity_order').value=1;  
        }
        }
    $_('.quantity_order').addEventListener('input',quantity_order);
    quantity_order();
}
catch(err){
console.log(err.message)
}


// 
try{
    function sign_in(){
        $_('.login_form').classList.remove('show_logn_in')
        $_('.register_form').classList.toggle("show_sign_in")
    }
    function  logn_in(){
        $_('.register_form').classList.remove('show_sign_in')
        $_('.login_form').classList.toggle("show_logn_in")
    }
    $_('.close-circle').forEach(element => {
        element.addEventListener('click',()=>{
            $_('.login_form').classList.remove('show_logn_in')
            $_('.register_form').classList.remove('show_sign_in')
        })
    });
    $_('.sign_in').addEventListener('click',sign_in)
    $_('.logn_in').addEventListener('click',logn_in)
    $_('.logn_in_form').addEventListener('click',()=>{
        $_('.register_form').classList.remove('show_sign_in')
        $_('.login_form').classList.toggle("show_logn_in")
    })
    
    $_('.binh_luan').addEventListener('click',()=>{
        $_('.accordion-item').style.display="block"
    })
}
catch(err){
    console.log(err.message)
}



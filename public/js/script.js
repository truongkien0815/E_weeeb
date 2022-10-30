const add_to_cart = document.querySelectorAll('#add_to_cart_button');
add_to_cart.forEach(element => {
    element.onclick = () => {
        alert("cần đăng nhập để thực hiện");
    }
});
const chualogin = document.querySelector('.fa-shopping-cart');
chualogin.onclick =() => {
    alert("cần đăng nhập để thực hiện");

}





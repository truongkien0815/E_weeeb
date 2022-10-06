const type = document.querySelectorAll('#type');
// chon theo loai
type.forEach(element => {
    element.addEventListener('click', (e) => {
        addComment(element.dataset.type)
    });
});


async function addComment(type) {
    
    const url = './api/product/story';
  
    const data = { type: type };
    const token = document.querySelector('meta[name=csrf-token]').getAttribute('content');
    const response = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(data)
    });
    // Xu ly ket qua va hien thi giao dien
    const result = await response.json();
    const commentsList = document.querySelector('.product-grid');
    const list = document.querySelector('#list');
list.innerHTML ='';
    commentsList.innerHTML = '';
   
    result.forEach(element => {
        list.innerHTML += `
      
  
        <div class="product-item men">
        <div class="product discount product_filter">
            <div class="product_image">
          
                <img src="images/${element.image}" alt="">
            </div>
            
            <div class="favorite favorite_left"></div>
            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
            <div class="product_info">
                <h6 class="product_name"><a href="product/${element.id}"> ${element.name} </a></h6>
                <div class="product_price">${element.price}<span>$590.00</span></div>
            </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
    </div>
       
   

           
      
        `;
    });
  
}

const searchs = document.querySelector('#search');
// chon theo loai
searchs.addEventListener('click', (e)=>{
    console.log("3");
    search();
})
async function search() {
    const url = './api/product/search';
  const productname = document.querySelector('#productname');
    const data = { productname: productname.value };
    const token = document.querySelector('meta[name=csrf-token]').getAttribute('content');
    const response = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(data)
    });
    // Xu ly ket qua va hien thi giao dien
    const result = await response.json();
   
    const list = document.querySelector('#list');
list.innerHTML ='';
 
   
    result.forEach(element => {
        list.innerHTML += `
      
  
        <div class="product-item men">
        <div class="product discount product_filter">
            <div class="product_image">
                <img src="images/${element.image}" alt="">
            </div>
            <div class="favorite favorite_left"></div>
            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
            <div class="product_info">
                <h6 class="product_name"><a href="product/${element.id}">{{ ${element.name}}</a></h6>
                <div class="product_price">$520.00<span>$590.00</span></div>
            </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
    </div>

           
      
        `;
    });
  
}



const btnComment = document.querySelector('#btn-comment');
const commentContent = document.querySelector('#comment_content').value;
const review_name = document.querySelector('#review_name').value;
const review_email = document.querySelector('#review_email').value;
const rating = document.querySelector('#rating').value;


    btnComment.addEventListener('click', function () {
     
      addCommen(this.dataset.productId, this.dataset.url);
  
    });



async function addCommen(productId, url) {
 
    const commentContent = document.querySelector('#comment_content');
    const review_name = document.querySelector('#review_name');
    const review_email = document.querySelector('#review_email');

    const rating = document.querySelector('#rating');
    const data = {
        comment_content: commentContent.value,
        product_id: productId,
        rating: rating.value,
        review_name:review_name.value,
        review_email:review_email.value
    };
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

    // Xử lý kết quả trả về
    const result = await response.json();
    const divComments = document.querySelector('.reviews_col');
    divComments.innerHTML = '';
    result.forEach(element => {
        divComments.innerHTML += `
       

        <div class="user_review_container d-flex flex-column flex-sm-row">
        <div class="user">
            <div class="user_pic"></div>
            <div class="user_rating">
                <ul class="star_rating">
                ` + 
                
                
                `


    ${element.rating}  <li><i class="fa fa-star" aria-hidden="true"></i></li>               
                </ul>
            </div>
</div>


        <div class="review">
            
            <div class="review_date"> ${element.created_at}</div>
            <div class="user_name">${element.review_name}</div>
            <p>${element.rating}</p>
        </div>
    
    </div>

        `;

      
    });
    commentContent.value = '';
    rating.value = '';
}
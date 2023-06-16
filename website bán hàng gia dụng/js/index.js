 
//  <!-- hieu ung bay vao gio hang -->

   $(document).on('click','.dark-grey-text',function(e){
     e.preventDefault();
     if( $(this).hasClass('disable') ){
       return false;
     }
 
     $(document).find('.dark-grey-text').addClass('disable');
     var self = $(this);
     var parent = $(this).parents('.card');
     var carts = $(document).find('#cart');
     var src = parent.find('img').attr('src');
 
     var   parTop = parent.offset().top;
     var   parLeft = parent.offset().left;
 
     $('<img />', {
       class :'img-product-fly',
       src: src
     }).appendTo('body').css({
          'top'   :parseInt(parTop) + parseInt(parent.height()) -210,
          'left'  :parseInt(parLeft) + parseInt(parent.width())-50
     }); 
     setTimeout(function(){
       $(document).find('.img-product-fly').css({
          'top'   :carts.offset().top,
          'left'  :carts.offset().left
       });
       setTimeout(function(){
         $(document).find('.img-product-fly').remove();
         var citem = parseInt(carts.find('#count-item').data('count'))+1;
         carts.find('#count-item').text(citem+' Item').data('count',citem);
         $(document).find('.dark-grey-text').removeClass('disable');
       },1000);
     },500);
   });


   ///
 
   var tabLinks = document.querySelectorAll(".tablinks");
var tabContent =document.querySelectorAll(".tabcontent");

tabLinks.forEach(function(el) {
el.addEventListener("click", openTabs);
});


function openTabs(el) {
var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

tabContent.forEach(function(el) {
   el.classList.remove("active");
}); //lặp qua các tab content để remove class active

tabLinks.forEach(function(el) {
   el.classList.remove("active");
}); //lặp qua các tab links để remove class active

document.querySelector("#" + electronic).classList.add("active");
// trả về phần tử đầu tiên có id="" được add class active

btn.classList.add("active");
// các button mà chúng ta click vào sẽ được add class active
}






    // Modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("cart");
var close = document.getElementsByClassName("close")[0];
// tại sao lại có [0] như  thế này bởi vì mỗi close là một html colection nên khi mình muốn lấy giá trị html thì phải thêm [0]. 
// Nếu mình có 2 cái component cùng class thì khi [0] nó sẽ hiển thị component 1 còn [1] thì nó sẽ hiển thị component 2.
var close_footer = document.getElementsByClassName("close-footer")[0];
var order = document.getElementsByClassName("order")[0];
btn.onclick = function () {
modal.style.display = "block";
}
close.onclick = function () {
modal.style.display = "none";
}
close_footer.onclick = function () {
modal.style.display = "none";
}
order.onclick = function () {
alert("Cảm ơn bạn đã thanh toán đơn hàng")
}
window.onclick = function (event) {
if (event.target == modal) {
 modal.style.display = "none";
}
}




///
// xóa cart
var remove_cart = document.getElementsByClassName("btn-danger");
for (var i = 0; i < remove_cart.length; i++) {
var button = remove_cart[i]
button.addEventListener("click", function () {
 var button_remove = event.target
 button_remove.parentElement.parentElement.remove()
 updatecart();
})
}


//// update cart 
function updatecart() {
var cart_item = document.getElementsByClassName("cart-items")[0];
var cart_rows = cart_item.getElementsByClassName("cart-row");
var total = 0;
for (var i = 0; i < cart_rows.length; i++) {
 var cart_row = cart_rows[i]
 var price_item = cart_row.getElementsByClassName("cart-price ")[0]
 var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
 var price = parseFloat(price_item.innerText)// chuyển một chuổi string sang number để tính tổng tiền.
 var quantity = quantity_item.value // lấy giá trị trong thẻ input
 total = total + (price * quantity)
}
document.getElementsByClassName("cart-total-price")[0].innerText = total + 'VNĐ'
// Thay đổi text = total trong .cart-total-price. Chỉ có một .cart-total-price nên mình sử dụng [0].
}


// thay đổi số lượng sản phẩm
var quantity_input = document.getElementsByClassName("cart-quantity-input");
for (var i = 0; i < quantity_input.length; i++) {
var input = quantity_input[i];
input.addEventListener("change", function (event) {
 var input = event.target
 if (isNaN(input.value) || input.value <= 0) {
   
 }
 updatecart();
})
}





// Thêm vào giỏ
var add_cart = document.getElementsByClassName("dark-grey-text");
for (var i = 0; i < add_cart.length; i++) {
var add = add_cart[i];
add.addEventListener("click", function (event) {

 var button = event.target;
 var product = button.parentElement.parentElement;
 var img = product.parentElement.getElementsByClassName("card-img-top")[0].src
 var title = product.getElementsByClassName("title")[0].innerText
 var price = product.getElementsByClassName("price")[0].innerText
 addItemToCart(title, price, img)
 // Khi thêm sản phẩm vào giỏ hàng thì sẽ hiển thị modal
 modal.style.display = "none";
 
 updatecart()
})
}

function addItemToCart(title, price, img) {
var cartRow = document.createElement('div')
cartRow.classList.add('cart-row')
var cartItems = document.getElementsByClassName('cart-items')[0]
var cart_title = cartItems.getElementsByClassName('cart-item-title')
// Nếu title của sản phẩm bằng với title mà bạn thêm vao giỏ hàng thì sẽ thông cho user.
for (var i = 0; i < cart_title.length; i++) {
 if (cart_title[i].innerText == title) {
   alert('Sản Phẩm Đã Có Trong Giỏ Hàng')
   return 
  
   
  }
   
  
   
 }



var cartRowContents = `
<div class="cart-item cart-column">
   <img class="cart-item-image" src="${img}" width="100" height="100">
   <span class="cart-item-title">${title}</span>
</div>
<span class="cart-price cart-column">${price}</span>
<div class="cart-quantity cart-column">
   <input class="cart-quantity-input" type="number" value="1">
   <button class="btn btn-danger" type="button">Xóa</button>
</div>`
cartRow.innerHTML = cartRowContents
cartItems.append(cartRow)
cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function () {
 var button_remove = event.target
 button_remove.parentElement.parentElement.remove()
 updatecart()
})
cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
 var input = event.target
 if (isNaN(input.value) || input.value <= 0) {
   input.value = 1;
 }
 updatecart();
})

}




      ///////thông báo 
     

$(document).ready(function(){
  $(".gui").click(function(){
     alert("Cảm ơn bạn đã liên hệ với chúng tôi");
 });
 $(".baotry").click(function(){
   alert("xin lỗi! thanh mục đang bảo trỳ")
 });
});

//////////////////////////////
$(document).ready(function(){
$("#myInput").on("keyup", function() {
 var value = $(this).val().toLowerCase();
 $(".card ").filter(function() {
   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 });
});
});




 
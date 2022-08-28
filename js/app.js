$(document).ready(function(){
    var items = (localStorage.getItem('carts'))?localStorage.getItem('carts'):0
    $("#shop").text(items)
    $(document).on("click","#cart",function(e){
        e.preventDefault();
        var count = 10
        localStorage.setItem("carts",count)
       $("#shop").text(localStorage.getItem('carts'))
    })
})
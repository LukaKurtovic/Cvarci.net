displayCartItems()

function displayCartItems(){
    let productContainer = document.querySelector(".products-table")

    var item_deserialized = JSON.parse(localStorage.getItem("itemsInCart"))
    for(i=0;i<item_deserialized.length;i++){
    productContainer.innerHTML +=`
        <tr class="column-row">
            <td><img class="product-img" loading="lazy" src="${item_deserialized[i].slika}"></td>
            <td class="row-style">${item_deserialized[i].ime}</td>
            <td class="row-style">${item_deserialized[i].cijena}</td>
            <td class="row-style">${item_deserialized[i].kolicina}</td>   
        </tr>
    `
    }
    calculateTotal()
}

function calculateTotal(){
    var item_deserialized = JSON.parse(localStorage.getItem("itemsInCart"))
    var total = 0
    let displayTotal = document.querySelector(".total")
    for(i=0;i<item_deserialized.length;i++){
        var kolicina_int = parseInt(item_deserialized[i].kolicina)
        total += kolicina_int*item_deserialized[i].cijena
    }
    displayTotal.innerHTML =`
     Ukupna cijena narudžbe: ${total} kn
    `
}

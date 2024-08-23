document.addEventListener('DOMContentLoaded', () => {
    const cart = []

    document.querySelectorAll('.card').forEach(card => {
        const decreaseButton = card.querySelector('.decrease')
        const increaseButton = card.querySelector('.increase')
        const quantitySpan = card.querySelector('.quantity')
        const basketButton = card.querySelector('.basket')

        let quantity = 1

        if (decreaseButton && increaseButton && basketButton) {
            decreaseButton.addEventListener('click', () => {
                if (quantity > 1) {
                    quantity--
                    quantitySpan.textContent = quantity
                }
            })

            increaseButton.addEventListener('click', () => {
                if (quantity < 10) {
                    quantity++
                    quantitySpan.textContent = quantity
                }
            })

            basketButton.addEventListener('click', () => {
                const card = basketButton.closest('.card')  
                const id = card.dataset.id
                const name = card.querySelector('.product-name').textContent
                const price = parseInt(card.querySelector('.price').textContent, 10)

                addToCart({ id, name, price, quantity })
                quantity = 1
                quantitySpan.textContent = quantity
            })
        }
    })

    function addToCart(product) {
        const existingProduct = cart.find(item => item.id === product.id)
        if (existingProduct) {
            existingProduct.quantity += product.quantity
        } else {
            cart.push(product)
        }
        renderCart()
    }

    function renderCart() {
        const cartItems = document.querySelector('.cart-items')
        const total = document.querySelector('.total span')
        const cartInput = document.querySelector('.cart-input')
        cartItems.innerHTML = ''

        let totalPrice = 0
        cart.forEach(item => {
            const itemDiv = document.createElement('div')
            itemDiv.style.display = 'flex'
            itemDiv.style.justifyContent = 'space-between'
            itemDiv.style.alignItems = 'center'
            itemDiv.style.marginBottom = '10px'
            itemDiv.style.padding = '10px'
            itemDiv.style.border = '1px solid #ddd'
            itemDiv.style.borderRadius = '5px'
            itemDiv.style.backgroundColor = '#f9f9f9'
            itemDiv.style.height = '29px'

            const itemName = document.createElement('p')
            itemName.textContent = `${item.name} x ${item.quantity}`
            itemName.style.flex = '1'
            itemName.style.margin = '0'
            itemName.style.color = '#333'
            itemName.style.fontWeight = 'bold'

            const itemPrice = document.createElement('p')
            itemPrice.textContent = `${item.price * item.quantity}тг`

            itemDiv.appendChild(itemName)
            itemDiv.appendChild(itemPrice)
            cartItems.appendChild(itemDiv)
            totalPrice += item.price * item.quantity
        })

        total.textContent = `${totalPrice}тг`
        cartInput.value = JSON.stringify(cart)

        if (cart.length === 0) {
            cartItems.innerHTML = '<p>Корзина пуста</p>'
        }
    }
})

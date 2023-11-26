<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    <div class="flex flex-row">
        <div x-data="products" class="basis-2/3 flex flex-row flex-wrap justify-between">
            <template x-for="product in products">
                <div class="w-1/4 h-auto flex flex-col justify-center items-center border m-2 p-2 ">
                    <img src="https://www.theindiantoys.com/wp-content/uploads/woocommerce-placeholder.png" alt="">
                    <span x-text="product.product_name"></span>
                    <span x-text="`$${product.price}`"></span>
                    <button class="bg-green-300 px-2 mt-2 rounded shadow-md flex justify-between items-center text-sm " @click="addToCart(product.id)" type="button">Add to cart</button>
                </div>
            </template>
        </div>
        <div x-data='cart' class="basis-1/2">
            <h3>cartsssssss</h3>

        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
             Alpine.store('cartItems', Alpine.$persist(0));
            Alpine.data('products', () => ({
                products: [{
                    "id": "1",
                    "product_name": "Laptop",
                    "price": 899.99,
                    "category": "Electronics",
                    "available_quantity": 50
                }, {
                    "id": "2",
                    "product_name": "Running Shoes",
                    "price": 69.99,
                    "category": "Footwear",
                    "available_quantity": 100
                }, {
                    "id": "3",
                    "product_name": "Smartphone",
                    "price": 549.99,
                    "category": "Electronics",
                    "available_quantity": 30
                }, {
                    "id": "4",
                    "product_name": "Winter Jacket",
                    "price": 129.99,
                    "category": "Clothing",
                    "available_quantity": 75
                }, {
                    "id": "5",
                    "product_name": "Coffee Maker",
                    "price": 49.99,
                    "category": "Appliances",
                    "available_quantity": 20
                }, {
                    "id": "6",
                    "product_name": "Gaming Console",
                    "price": 299.99,
                    "category": "Electronics",
                    "available_quantity": 10
                }, {
                    "id": "7",
                    "product_name": "Backpack",
                    "price": 39.99,
                    "category": "Accessories",
                    "available_quantity": 50
                }, {
                    "id": "8",
                    "product_name": "Fitness Tracker",
                    "price": 79.99,
                    "category": "Electronics",
                    "available_quantity": 25
                }, {
                    "id": "9",
                    "product_name": "HD Television",
                    "price": 499.99,
                    "category": "Electronics",
                    "available_quantity": 15
                }, {
                    "id": "10",
                    "product_name": "Denim Jeans",
                    "price": 59.99,
                    "category": "Clothing",
                    "available_quantity": 50
                }],
                cart: Alpine.$persist([]),
                _getItem(id) {
                    return this.products.find(product => product.id === id);
                },
                _checkIfItemIsInCart(id) {
                    return this.cart.findIndex(product => product.id === id);
                },
                addToCart(id) {
                    const item = this._getItem(id);
                    if (this._checkIfItemIsInCart(id) !== -1) {
                        this._updateCartItem(item)
                    } else {
                        this._addCartItem(item)
                    }
                    console.log(this.cart);
                },
                _updateCartItem(item) {
                    const index = this._checkIfItemIsInCart(item.id);
                    if (index !== -1) {
                        // Assuming your product object has a 'quantity' property
                        this.cart[index].quantity += 1;
                    }
                },
                _addCartItem(item) {
                    // Assuming your product object has a 'quantity' property
                    item.quantity = 1;
                    this.cart.push(item);
                }

            }))
        });
        document.addEventListener('alpine:init', () => {
            Alpine.data('cart', () => ({
                // cart: this.$persist(false)

            }))
        })
    </script>

    <!-- notification -->
    <!-- <div x-data class="grid">
        <button @click="$dispatch('notify', { message: 'error!',format:'danger' })">
            error
        </button>
        <button @click="$dispatch('notify', { message: ' Warning! Warning! Warning! Warning !Warning !Warning !Warning! Warning!',format:'warning' })">
            warning
        </button>
        <button @click="$dispatch('notify', { message: 'Success!',format:'success' })">
            success
        </button>
        <button @click="$dispatch('notify', { message: 'genral!' })">
            genral
        </button>
    </div> -->
    <div class="fixed bottom-0 right-0 space-y-1" x-ref="notificationDiv" x-data="notification" @notify.window="notification($event)">
        <template x-for="(notificationItem,index) in notificationItems" :key="notificationItem.id">
            <div class="flex justify-between items-center   p-2  " :class='notificationItem.format'>
                <div class="px-2 max-w-xs" x-text="notificationItem.message"></div>
                <div class="w-4 flex justify-center items-center " @click='close(index)'>
                    <img width="32" height="32" src="https://img.icons8.com/external-inkubators-basic-outline-inkubators/32/external-close-button-it-and-computer-inkubators-basic-outline-inkubators.png" alt="external-close-button-it-and-computer-inkubators-basic-outline-inkubators" />
                </div>
            </div>

        </template>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('notification', () => ({
                formats: {
                    danger: 'bg-red-400',
                    warning: 'bg-yellow-300',
                    success: 'bg-green-300'
                },
                notificationTimeout: 5000,
                notificationItems: [],
                counter: 1,
                close(index) {
                    this.notificationItems.splice(index, 1);
                },
                notification(e) {
                    const format = (e.detail?.format in this.formats) ? this.formats[e.detail.format] : 'bg-green-300'
                    const counter = this.counter++;
                    this.notificationItems.push({
                        id: counter,
                        message: e.detail.message,
                        format
                    })
                    const timeout = setTimeout(() => {
                        const index = this.notificationItems.findIndex(item => item.id === counter)
                        this.notificationItems.splice(index, 1);
                        clearTimeout(timeout);
                    }, this.notificationTimeout);
                }
            }))
        })
    </script>
    <!-- end notification -->
</body>

</html>
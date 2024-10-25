fetch('data.php')
.then(response => response.json())
.then(data => {
    const customerList = document.getElementById('customerList');
    data.forEach(customer => {
        const li = document.createElement('li');
        li.textContent = `${customer.customer_name} - ${customer.email}`;
        customerList.appendChild(li);
    });
})
.catch(error => console.error('Error:', error));
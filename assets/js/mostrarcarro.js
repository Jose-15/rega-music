mostrarCarrito();

function mostrarCarrito() {
    if (localStorage.getItem("productos") != null) {
        let array = JSON.parse(localStorage.getItem('productos'));
        if (array.length > 0) {
            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                async: true,
                data: {
                    action: 'buscar',
                    data: array
                },
                success: function(response) {
                    console.log(response);
                    const res = JSON.parse(response);
                    let html = '';
                    res.datos.forEach(element => {
                        html += `
                    <tr>
                        <td>${element.id}</td>
                        <td>${element.nombre}</td>
                        <td>${element.precio}</td>
                        <td>1</td>
                        <td>${element.precio}</td>
                    </tr>
                    `;
                    });
                    $('#tblCarrito').html(html);
                    $('#total_pagar').text(res.total);
                    paypal.Buttons({
                        style: {
                            color: 'blue',
                            shape: 'pill',
                            label: 'pay'
                        },
                        createOrder: function(data, actions) {
                            // This function sets up the details of the transaction, including the amount and line item details.
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: res.total
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            // This function captures the funds from the transaction.
                            return actions.order.capture().then(function(details) {
                                // This function shows a transaction success message to your buyer.
                                alert('Transaction completed by ' + details.payer.name.given_name);
                            });
                        }
                    }).render('#paypal-button-container');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    }
}


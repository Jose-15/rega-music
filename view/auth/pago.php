<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>PayPal Standard Payments Integration | Client Demo</title>
      </head>

      <body>
        <div id="paypal-button-container"></div>
        <!-- Sample PayPal credentials (client-id) are included -->
        <script src="https://www.paypal.com/sdk/js?client-id=AderMWdqmIGO0zQCwjDKOhyOR9tAacSE0rgav2eC21widSOWYHXQprxTU-n5DFMeRdCub4i5mJmWzGLC&currency=MXN&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
        <script>
          const paypalButtonsComponent = paypal.Buttons({
              // optional styling for buttons
              // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
              style: {
                layout: 'vertical',
                    color:  'blue',
                    shape:  'rect',
                    label:  'paypal'
                }
                }).render('#paypal-button-container');

              createOrder: (data, actions) => {
                  const createOrderPayload = {
                      purchase_units: [
                          {
                              amount: {
                                  value: "88.44"
                              }
                          }
                      ]
                  };

                  return actions.order.create(createOrderPayload);
              },

              // finalize the transaction
              onApprove: (data, actions) => {
                  const captureOrderHandler = (details) => {
                      const payerName = details.payer.name.given_name;
                      console.log('Transaction completed');
                  };

                  return actions.order.capture().then(captureOrderHandler);
              },

              // handle unrecoverable errors
              onError: (err) => {
                  console.error('An error prevented the buyer from checking out with PayPal');
              }
          });

          paypalButtonsComponent
              .render("#paypal-button-container")
              .catch((err) => {
                  console.error('PayPal Buttons failed to render');
              });
        </script>
      </body>
    </html>
//This is just a demo code for Razorpay integration

// function openRazorpay() {
//   const amount = 500; // Amount in INR (demo)

//   var options = {
//     key: "rzp_test_1DP5mmOlF5G5ag", // Razorpay TEST key
//     amount: amount * 100, // Razorpay works in paise
//     currency: "INR",
//     name: "HAnds iN neeD",
//     description: "Disaster Relief Donation",
//     image: "Logo.png",
//     handler: function (response) {
//       alert("Payment successful!\nPayment ID: " + response.razorpay_payment_id);
//     },
//     prefill: {
//       name: "Donor Name",
//       email: "donor@example.com",
//       contact: "9999999999"
//     },
//     theme: {
//       color: "#2f6f8f"
//     }
//   };

//   var rzp = new Razorpay(options);
//   rzp.open();
// }

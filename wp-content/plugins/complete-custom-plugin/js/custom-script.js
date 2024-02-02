// jQuery(document).ready(function($) {
//     $('#Geocode').on('click', function(e) {
//         var complete_address = $('#owner_address_1').val() + $('#owner_address_2').val() + $('#owner_city').val() + $('#owner_zipcode').val();
//         // Your Ajax parameters
//         var ajaxParams = {
//             url: ajax_object.ajax_url, // WordPress Ajax URL
//             type: 'POST',
//             data: {
//                 action: 'geocode', // Custom Ajax action
//                 address: complete_address
//             },
//             success: function(response) {
//                 // Handle the Ajax response
//                 console.log(response);
//             }
//         };

//         // Make the Ajax request
//         $.ajax(ajaxParams);
//     });
// });
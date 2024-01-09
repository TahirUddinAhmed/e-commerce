$(document).ready(function() {
   // banner - owl-coursel
   $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1
   });

   // top sale - owl-carousel
   $("#top-sale .owl-carousel").owlCarousel({
      loop:true,
      margin:20,
      nav:true,
      dots: false,
      responsive:{
         0:{
               items:1.7
         },
         600:{
               items:3
         },
         1000:{
               items:5
         }
      }
   });

   // new-product - owl-carousel
   $("#new-product .owl-carousel").owlCarousel({
      loop:true,
      margin:10,
      nav: false,
      dots: true,
      responsive:{
         0:{
               items:1.7
         },
         600:{
               items:3
         },
         1000:{
               items:5
         }
      }
   });


   // isotop 
   const grid = $(".grid").isotope({
      itemSelector: '.grid-item',
      layoutMode: 'fitRows'
   });

   $(".button-group").on("click", "button", function() {
      const filterValue = $(this).data("filter");
      grid.isotope({filter: filterValue});
   });

   // latest blogs - owl carousel
   $("#blog .owl-carousel").owlCarousel({
      nav: false,
      dots: true,
      margin: 40,
      loop: true,
      responsive:{
         0:{
               items:1.7
         },
         600:{
               items:3
         }
      }
   });

   // // product quantity section
   // let qtyUp = $(".qty .qty-up");
   // let qtyDown = $(".qty .qty-down");
   // let input = $(".qty .qty_input")

   // // click event on qty up button 
   // qtyUp.click(function(e) {
      // if(input.val() >= 1 && input.val() <= 10) {
      //    input.val(function(i, oldval) {
      //       return ++oldval;
      //    })
      // }
   // })

   // product quantity section
   let qtyUp = $(".qty .qty-up");
   let qtyDown = $(".qty .qty-down");
   // let input = $(".qty .qty_input");


   let initialQty = 1;
   input.val(initialQty);

   // click event on qty up button 
   qtyUp.click(function(e) {
      let input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      if(input.val() >= 1 && input.val() <= 9) {
         input.val(function(i, oldval) {
            return ++oldval;
         })
      }
   });

   // click event on qty down button 
   qtyDown.click(function(e) {
      let input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      if(input.val() >= 2) {
         input.val(function(i, oldval) {
            return --oldval;
         })
      }
   });
});
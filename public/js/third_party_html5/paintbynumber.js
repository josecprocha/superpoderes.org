//This adds the class of .blue-background when the user passes their mouse over any div with a class of .blue

$( ".blue" ).mouseover(function() {
  $( this ).addClass("blue-background").empty();
});

//This adds the class of .yellow-background when the user passes their mouse over any div with a class of .yellow

$( ".yellow" ).mouseover(function() {
  $( this ).addClass("yellow-background").empty();
});

//This adds the class of .green-background when the user passes their mouse over any div with a class of .green

$( ".green" ).mouseover(function() {
  $( this ).addClass("green-background").empty();
});
